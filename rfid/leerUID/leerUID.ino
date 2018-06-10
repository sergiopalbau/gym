
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

  // inicializar formato rfid
  for (byte i = 0; i < 6; i++) {
    key.keyByte[i] = 0xFF;
  }

  printHex(key.keyByte, MFRC522::MF_KEY_SIZE);
  Serial.println ("");
}
 
void loop() {//------------------------------------------------------------------------------

  // mirar si nueva lectura tarjeta
  if ( ! rfid.PICC_IsNewCardPresent())
    return;

  // verificar si ha sido leido el uid
  if ( ! rfid.PICC_ReadCardSerial())
    return;

 //Serial.println(MFRC522::MF_KEY_SIZE);

    Serial.println ("\n\n vamos a leer que ha leido\n\n");
    for (byte i = 0; i < 4; i++) {
      Serial.print( rfid.uid.uidByte[i],HEX);
      Serial.print(".");
    }

  
  // Halt PICC
  rfid.PICC_HaltA();

  // Stop encryption on PCD
  rfid.PCD_StopCrypto1();
}


/**----------------------------------------------------------------------------------------------------
 * Helper routine to dump a byte array as hex values to Serial. 
 */
void printHex(byte *buffer, byte bufferSize) {
  for (byte i = 0; i < bufferSize; i++) {
    Serial.print(buffer[i] < 0x10 ? " 0" : " ");
    Serial.print(buffer[i], HEX);
  }
}


