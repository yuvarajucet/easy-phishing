#!/usr/bin/bash
cat .banner.txt
white='\e[1;37m'
green='\e[0;32m'
blue='\e[1;34m'
red='\e[1;31m'
yellow='\e[1;33m' 

checkinternet()
{
    ping -q -w 1 -c 1 `ip r | grep default | cut -d ' ' -f 3` > /dev/null && echo -e "${green}[+]${white} Checking for Internet:${green} CONNECTED" || echo -e "${red}[-]${white}Cheking for internet: ${red}FAILED\n[-]${white}This script Needs an active Internet Connection\n${red}[-]${white}Script Exiting.."
    sleep 2 
}
Requirements()
{
    echo -e "${yellow}[!]${white} Checking Requirements..."
    sleep 1

    #Checking curl and install
    echo -e "${yellow}[*]${white} Checking curl.."
    which curl > /dev/null 2>&1
    if [ "$?" -eq "0" ];then
        sleep 1 
        echo -e "${green}[+]${white} Curl Found."
    else
        echo -e "${red}[-]${white} Curl Not found."
        sleep 1
        echo -e "${yellow}[+]${white} Installing Curl" 
        apt-get install curl -y  
    fi
    #Checking unzip and install
    echo -e "${yellow}[*]${white} Checking unzip.."
    which unzip > /dev/null 2>&1
    if [ "$?" -eq "0" ];then
        sleep 1 
        echo -e "${green}[+]${white} unzip Found."
    else
        echo -e "${red}[-]${white} unzip Not found."
        sleep 1
        echo -e "${yellow}[+]${white} Installing unzip" 
        apt-get install unzip -y
    fi
    #Checking php and install..
    sleep 1 
    echo -e "${yellow}[*]${white} Checking PHP.."
    which php > /dev/null 2>&1
    if [ "$?" -eq "0" ];then
        sleep 1 
        echo -e "${green}[+]${white} PHP Found."
    else
        echo -e "${red}[-]${white} PHP Not found."
        sleep 1
        echo -e "${yellow}[?]${white} Installing PHP" 
        apt-get install php -y
    fi

    #Cheking WGET 
    sleep 1 
    echo -e "${yellow}[*]${white} Checking wget.."
    which wget > /dev/null 2>&1 
    if [ "$?" == "0" ];then
        sleep 1 
        echo -e "${green}[+]${white} wget Found.."
    else
        echo -e "${red}[-]${white} wget Not Found.."
        sleep 1 
        echo -e "${yellow}[?]${white} Installing wget"
        apt-get install wget -y
    fi

    #Cheking NGROK and install
    sleep 1
    echo -e "${yellow}[*]${white} Cheking Ngrok.."
    if [[ -e ngrok ]];then
        sleep 1 
        echo -e "${green}[+]${white} Ngrok Found.."
    else
        echo -e "${yellow}[+]${white} Installing Ngrok..."
        if [[ $op == "y" ]];then
            arch=$(uname -a | grep -o 'arm' | head -n1 )
            arch2=$(uname -a | grep -o 'Android' | head -n1)
            if [[ $arch == *'arm'* ]] || [[ $arch2 == *'Android'* ]];then
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip > /dev/null 2>&1

                if [[ -e ngrok-stable-linux-arm.zip ]];then
                    unzip ngrok-stable-linux-arm.zip > /dev/null 2>&1
                    chmod +x ngrok
                    rm -rf ngrok-stable-linux-arm.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
            else
            echo -e "${yellow}[+]${white} Installing Ngrok..."
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip > /dev/null 2>&1 
                if [[ -e ngrok-stable-linux-386.zip ]];then
                    unzip ngrok-stable-linux-386.zip > /dev/null 2>&1
                    chmod +x ngrok
                    rm -rf ngrok-stable-linux-386.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
            fi
        elif [[ $op == "Y" ]];then
            echo -e "${yellow}[+]${white} Installing Ngrok...."
            arch=$(uname -a | grep -o 'arm' | head -n1 )
            arch2=$(uname -a | grep -o 'Android' | head -n1)
            if [[ $arch == *'arm'* ]] || [[ $arch2 == *'Android'* ]];then
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip > /dev/null 2>&1

                if [[ -e ngrok-stable-linux-arm.zip ]];then
                     unzip ngrok-stable-linux-arm.zip > /dev/null 2>&1
                     chmod +x ngrok
                     rm -rf ngrok-stable-linux-arm.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
            else
                echo -e "${yellow}[+]${white} Installing Ngrok..."
                wget --no-check-certificate https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip > /dev/null 2>&1 
                if [[ -e ngrok-stable-linux-386.zip ]];then
                     unzip ngrok-stable-linux-386.zip > /dev/null 2>&1
                     chmod +x ngrok
                     rm -rf ngrok-stable-linux-386.zip
                else
                    echo -e "${red}[-] Download error.. exiting...."
                    sleep 2
                    exit 1
                fi
            fi
        fi
    fi
}
permission()
{
    echo -e "${yellow}[/]${white} Changing file permission Please wait a while..!"
    sleep 2
    chmod +x Easy-phish.sh &
    cd sites/Facebook/ && chmod +x * &
    cd sites/Instagram/ && chmod +x * &
    cd sites/Twitter/ && chmod +x * &
    cd sites/google/ && chmod +x * &
}
sucess()
{
    sleep 1 
    echo -e "${blue}[+]${green} Requirements are installed !"
    sleep 1
    echo -e "${blue}[!]${green} Now you need to config NGROK authtoken ! Refer ${yellow}README.md file to Config ngrok !"
    sleep 1
    echo -e "${blue}[+]${green} After config Run ${red}Easy-phish.sh ${white}"
    sleep 1 

}

checkinternet
Requirements
permission
sucess
