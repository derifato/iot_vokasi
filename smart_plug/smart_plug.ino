#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

const char* wifiName = "WIFI UB";
const char* wifiPass = "seklaliaku";
String datalampu,datalampu2;

//Web Server address to read/write from 
const char *host = "http://192.168.43.56/iot_vokasi/panel_project/black-dashboard-master/examples/api.php";

byte relay=D1;
byte LED=2;

void setup() {
  pinMode(relay, OUTPUT);
    pinMode(LED, OUTPUT);
  Serial.begin(115200);
  delay(10);
  Serial.println();
  
  Serial.print("Connecting to ");
  Serial.println(wifiName);

  WiFi.begin(wifiName, wifiPass);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());   //You can get IP address assigned to ESP
}

void loop() {
  HTTPClient http;    //Declare object of class HTTPClient
  HTTPClient http2;
  Serial.print("Request Link:");
  Serial.println(host);
  
  http.begin(host);     //Specify request destination
  
  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload from server

  Serial.print("Response Code:"); //200 is OK
  Serial.println(httpCode);   //Print HTTP return code

  Serial.print("Returned data from Server:");
  Serial.println(payload);    //Print request response payload
  
  if(httpCode == 200)
  {
    // Allocate JsonBuffer
    // Use arduinojson.org/assistant to compute the capacity.
    const size_t capacity = JSON_OBJECT_SIZE(3) + JSON_ARRAY_SIZE(2) + 60;
    DynamicJsonBuffer jsonBuffer(capacity);
  
   // Parse JSON object
    JsonObject& root = jsonBuffer.parseObject(payload);
    if (!root.success()) {
      Serial.println(F("Parsing failed!"));
      return;
    }

  
    JsonObject& result_0 = root["result"][0];
    JsonObject& result_1 = root["result"][1];

    // Decode JSON/Extract values
    Serial.println(F("Response:"));
    Serial.println(result_0["id_lampu"].as<char*>());
    Serial.println(result_0["nama_lampu"].as<char*>());
    Serial.println(result_0["status"].as<char*>());
    Serial.println(F("Response:"));
    Serial.println(result_1["id_lampu"].as<char*>());
    Serial.println(result_1["nama_lampu"].as<char*>());
    Serial.println(result_1["status"].as<char*>());
//    Serial.println(root["data"][1].as<char*>());


   if (result_0["status"]== "on"){
        Serial.println(F("NYALAKAN stopkontak 1"));
        digitalWrite(relay,HIGH);
        digitalWrite(LED,LOW);
        http.begin("http://192.168.43.56/iot_vokasi/panel_project/black-dashboard-master/examples/api_aktual.php?status=nyala");
        int httpCode = http.GET();  
      }else{
        Serial.println(F("MATIKAN stopkontak 2"));
        digitalWrite(relay,LOW);
        digitalWrite(LED,HIGH);
        http.begin("http://192.168.43.56/iot_vokasi/panel_project/black-dashboard-master/examples/api_aktual.php?status=mati");
        int httpCode = http.GET(); 
      }

    
//      if (result_1["status"]== "on"){
//        Serial.println(F("NYALAKAN Stopkontak 2"));
//        digitalWrite(LED2,LOW);
//        digitalWrite(relay2,HIGH);
//        http.begin("http://192.168.43.56/panel/black-dashboard-master/examples/api_aktual2.php?status=nyala");
//        int httpCode = http.GET();  
//      }else{
//        Serial.println(F("MATIKAN Stopkontak 2"));
//        digitalWrite(LED2,HIGH);
//        digitalWrite(relay2,LOW);
//        http.begin("http://192.168.43.56/panel/black-dashboard-master/examples/api_aktual2.php?status=mati");
//        int httpCode = http.GET(); 
//      }
//  
  }
 
  else
  {
    Serial.println("Error in response");
  }

  http.end();  //Close connection
  
  delay(1000);  //GET Data at every 5 seconds

 
}
