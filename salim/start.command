#!/bin/bash
open -a MAMP # Lance MAMP
sleep 5 # Attendre le démarrage
open "http://localhost:8888/salim"
osascript _e 'tell application
"System Events" to set visible of process "MAMP" to false'