#include <HTTPClient.h>
#include <WiFi.h>          // Replace with WiFi.h for ESP32
#include <WebServer.h>     // Replace with WebServer.h for ESP32
#include <AutoConnect.h>
WebServer Server;          // Replace with WebServer for ESP32
AutoConnect      Portal(Server);

//const char* ssid     = "YUDHA";
//const char* password = "12345678";

//const char* ssid     = "RYAN2";
//const char* password = "kelinciputih";
#include <WiFiManager.h>
char data;
unsigned long int timer;
WiFiManager wifiManager;
#define IP_HOST "http://sistemkendali.devliffe.com" //alamat IP server (sementara pakai alamat IP wifi
//#define IP_HOST "192.168.1.3"
WiFiServer server(80);
String header;
#include <EEPROM.h>
#include "GravityTDS.h"
#include "DFRobot_ESP_PH.h"
#include <DallasTemperature.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include <OneWire.h>
LiquidCrystal_I2C lcd(0x27,16 ,2);
//--------------- END INCLUDE --------------//

//--------------- SENSOR SUHU --------------//
#define ONE_WIRE_BUS 23
OneWire oneWire(ONE_WIRE_BUS); 
DallasTemperature sensorSuhu(&oneWire); 
float suhuSekarang;
//--------------- END SENSOR SUHU --------------//

//--------------- PH SENSOR --------------------//
DFRobot_ESP_PH ph;
#define ESPADC 4096.0   //the esp Analog Digital Convertion value
#define ESPVOLTAGE 3300 //the esp voltage supply value
#define PH_PIN 35//the esp gpio data pin number
float voltage, phValue, temperature = 25;
//--------------- END PH SENSOR --------------------//
#define TdsSensorPin 34
GravityTDS gravityTds;

float tdsValue = 0;

void rootPage() {
  char content[] = "Hello, world";
  Server.send(200, "text/plain", content);
}
void setup()
{
    Serial.begin(115200);
    lcd.begin();    
    lcd.setCursor(0,0);
    lcd.print("No Connection");  
//    initWiFi();
    Server.on("/", rootPage);
    if (Portal.begin()) {
      Serial.println("WiFi connected: " + WiFi.localIP().toString());
    }
    lcd.clear();
    lcd.setCursor(0,0);
    lcd.print("WiFi Connected"); 
    lcd.clear();
    Wire.begin();
    sensorSuhu.begin(); 
    ph.begin();
       
    pinMode(TdsSensorPin,INPUT);
    EEPROM.begin(35);
    gravityTds.setPin(TdsSensorPin);
    gravityTds.setAref(3.3);  //reference voltage on ADC, default 5.0V on Arduino UNO
    gravityTds.setAdcRange(4096);  //1024 for 10bit ADC;4096 for 12bit ADC
    gravityTds.begin();  //initialization
    
    lcd.print("SPK Ikan Koi");//tampilan baris 1
    lcd.setCursor(0,1); //set ke baris 2 
    lcd.print("By Ryan Hartadi");//tampilan baris 2  
    delay(2000);
    lcd.clear();
    lcd.print("pH=");
    lcd.setCursor(0,1);
    lcd.print("Suhu=");
      
   
}

//void initWiFi() {
//  WiFi.mode(WIFI_STA);
//  WiFi.begin(ssid, password);
//  Serial.print("Connecting to WiFi ..");
//  while (WiFi.status() != WL_CONNECTED) {
//    Serial.print('.');
////    lcd.print(".");
//    delay(1000);
//  }
//  Serial.println(WiFi.localIP());
//  Serial.println("Connect To Wifi");
//  
//}
void loop()
{
    Portal.handleClient();
   suhuSekarang = ambilSuhu(); 
   lcd.setCursor(5,1);
   lcd.print(suhuSekarang);  
   lcd.print(" C ");//Celcius
    static unsigned long timepoint = millis();
    if (millis() - timepoint > 1000U) //time interval: 1s
    {
      timepoint = millis();
      //voltage = rawPinValue / esp32ADC * esp32Vin
      voltage = analogRead(PH_PIN) / ESPADC * ESPVOLTAGE; // read the voltage
      phValue = ph.readPH(voltage, temperature); // convert voltage to pH with temperature compensation
      lcd.setCursor(3,0);
      lcd.print(phValue,4); 
    }
//    ph.calibration(voltage, temperature); // calibration process by Serail CMD
   
    //temperature = readTemperature();  //add your temperature sensor and read it
    gravityTds.setTemperature(temperature);  // set the temperature and execute temperature compensation
    gravityTds.update();  //sample and calculate
    tdsValue = gravityTds.getTdsValue();  // then get the value
    Serial.print("TDS :");
    Serial.print(tdsValue,0);
    Serial.println("ppm");
    Serial.print("Suhu: ");
    Serial.println(suhuSekarang);
    Serial.print("Ph: ");
    Serial.print(phValue,2);
    lcd.setCursor(6,0);
    lcd.print("   T=");  
    lcd.print(tdsValue); 
    WiFiClient client;
//    if(!client.connect(IP_HOST, 80)) { // lihat port di xampp
//      Serial.println("Connection Failed");
//      
//      return;
//    }
    String Link;
    HTTPClient http;
    if(phValue <= 0.00){
      Serial.println("PH Kurang dari 0");
    }else if(tdsValue <= 0.00){
      Serial.println("TDS Value Belum Di Kalibrasi");
    }else if(suhuSekarang == -127.00){
      Serial.println("Suhu Sekarang -127.00");
    }else {
      Link = "http://sistemkendali.devliffe.com/User/Proses/addData?suhu="+String(suhuSekarang)+"&tds="+String(tdsValue)+"&ph="+String(phValue)+""; //  file kirimdata.php yg akan di eksekusi oleh ESP8266
//      Link = "http://192.168.1.3/SkripsiRyan/User/Proses/addData?suhu="+String(suhuSekarang)+"&tds="+String(tdsValue)+"&ph="+String(phValue)+""; //  file kirimdata.php yg akan di eksekusi oleh ESP8266
      http.begin(Link);
      http.GET();
      http.end();
      delay(4000);        
    }
}
float ambilSuhu()
{
   sensorSuhu.requestTemperatures();
   float suhu = sensorSuhu.getTempCByIndex(0);
   return suhu;   
}
void configModeCallback (WiFiManager *myWiFiManager)
{
  Serial.println("Entered config mode");
  Serial.println(WiFi.softAPIP());
  Serial.println(myWiFiManager->getConfigPortalSSID());
}
