#include <SPI.h>
#include <SD.h> 
#include <LiquidCrystal_I2C.h>

LiquidCrystal_I2C lcd(0x27, 16, 2);

const int chipSelect = 4;

String data;

void setup() {

  
  lcd.begin(16, 2);                 
  lcd.backlight();                
  lcd.home();
  lcd.clear();
  lcd.print("Tempel Kartu!");
  

Serial.begin(115200);
while (!Serial) {
    ; // wait for serial port to connect. Needed for native USB port only
  }
  Serial.print("memeriksa SD card...");
  if (!SD.begin(chipSelect)) {
    Serial.println("Card failed, or not present");
    while (1);
  }
Serial.println("card initialized.");
}

void loop() { // run over and over
if (Serial.available()) {
  data = " ";
  data = Serial.readString();

Serial.print(data);
lcd.clear();
lcd.print("Kartu yang dipindai:");
lcd.setCursor(0,1);
lcd.print(data);
delay(2000);
lcd.clear();
lcd.setCursor(0,0);
lcd.print("Pindai Kartu");
   

    File dataFile = SD.open("test.txt", FILE_WRITE);

  // if the file is available, write to it:
  if (dataFile) {
//     Serial.println("File opened ok");
    dataFile.print(data);
    //dataFile.print(", ");
    dataFile.close();
    // print to the serial port too:
    
  }
  // if the file isn't open, pop up an error:
  else {
    Serial.println("error opening datalog.txt");
  }
}
else {
  return;
}
}
