
// librerias necesarias
#include <SPI.h>
#include <MFRC522.h>



//pines adicionales a del puerto SPI
#define SS_PIN 15
#define RST_PIN 0
#define RELE_PIN D2 //ardu 4

#define J1 1
#define J2 3



byte funcion;       // si vale uno situacion normal, consulta a la base de datos, si vale 0 cualquier tarjeta mifare abrira la puerta.

MFRC522 rfid(SS_PIN, RST_PIN); // Instance of the class

MFRC522::MIFARE_Key key; 

// array almacenamiento numero de serie tarjeta
byte nuidPICC[4];

void setup() { //-------------------------------------------------------------------------
  delay(500);
  // CONFIGURACION DE PUERTOS
  
  pinMode (RELE_PIN, OUTPUT);
  digitalWrite (RELE_PIN, HIGH);
  
  pinMode (J1, OUTPUT);
  pinMode (J2, INPUT);

  digitalWrite (J1,LOW);
  delay(500);
  funcion= digitalRead(J2);  
  delay(5000);
  
  
  
  
  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Inicializar rfid
  
  Serial.begin(115200);
  Serial.println ("");

  if (funcion)  Serial.println("modo Funcionamiento normal");
  else  Serial.println ("modo Funcionamiento EMERGENCIA");
  
 
}
 
void loop() {//------------------------------------------------------------------------------

  
  char buffer2[50];     //  Lugar donde se guardara la uid
  
  // mirar si nueva lectura tarjeta
  if ( ! rfid.PICC_IsNewCardPresent())
    return;

  // verificar si ha sido leido el uid
  if ( ! rfid.PICC_ReadCardSerial())
    return;

   
    // Halt PICC
    rfid.PICC_HaltA();
   // Stop encryption on PCD
    rfid.PCD_StopCrypto1();

    
    // simplificacion proceso conversion lectura rfid.
    sprintf(buffer2,"%02x%02x%02x%02x",(rfid.uid.uidByte[0]),(rfid.uid.uidByte[1]),(rfid.uid.uidByte[2]),(rfid.uid.uidByte[3]));
    Serial.printf ("tarjeta leida:\t %s \n",buffer2);

   if (!funcion){
    abrepuertas();
    Serial.println ("modo Funcionamiento EMERGENCIA");
    return;
   }

   Serial.println ("modo Funcionamiento normal");
  
}

//-------------------------------------------------------------------------------------------------------------------------------
void abrepuertas ()
{
  int t=1000;
  digitalWrite (RELE_PIN,LOW);
  delay (t);
  digitalWrite (RELE_PIN,HIGH);
  return;
}



