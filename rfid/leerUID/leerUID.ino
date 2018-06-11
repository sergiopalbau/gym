
// librerias necesarias
#include <SPI.h>
#include <MFRC522.h>



//pines adicionales a del puerto SPI
#define SS_PIN 15
#define RST_PIN 0
 
MFRC522 rfid(SS_PIN, RST_PIN); // Instance of the class

MFRC522::MIFARE_Key key; 

// array almacenamiento numero de serie tarjeta
byte nuidPICC[4];

void setup() { //-------------------------------------------------------------------------
  
  Serial.begin(115200);
  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Inicializar rfid

 /* // inicializar formato rfid
  for (byte i = 0; i < 6; i++) {
    key.keyByte[i] = 0xFF;
  }

  printHex(key.keyByte, MFRC522::MF_KEY_SIZE);*/
 
}
 
void loop() {//------------------------------------------------------------------------------
  
  char buffer2[50];     //  Lugar donde se guardara la uid
  
  // mirar si nueva lectura tarjeta
  if ( ! rfid.PICC_IsNewCardPresent())
    return;

  // verificar si ha sido leido el uid
  if ( ! rfid.PICC_ReadCardSerial())
    return;

    
    // simplificacion proceso lectura.
    sprintf(buffer2,"%02x%02x%02x%02x",(rfid.uid.uidByte[0]),(rfid.uid.uidByte[1]),(rfid.uid.uidByte[2]),(rfid.uid.uidByte[3]));
    Serial.printf ("tarjeta leida:\t %s \n",buffer2);
   
  // Halt PICC
  rfid.PICC_HaltA();

  // Stop encryption on PCD
  rfid.PCD_StopCrypto1();
}






