This code tries to connect a PHP localhost server to an esp32 microcontroller. <br>
I recommend download and install XAMP package. <br>
Use the Android phone Access point or Hotspot functionality. Make sure ESP32 and Windows PC are connected to the Android Access point. <br>
Replace "enter_url" with ESP32 IP address (this address will be printed on the Arduino IDE serial monitor when restarting ESP32 with the esp32Server_test code). <br>
Open cmd, navigate to folder that contain this script, start PHP server : php -S localhost:8000 . <br>
In browser navigate to localhost:8000 . <br>
