# Answers, Phase 1

```
# -- INSERT YOUR NAMES HERE -----
Brito Carvalho Bruno & Bignens Julien

We certify that we have done all the lab tasks and we have a running environment on our 
machine to prove it. We are ready to demonstrate it at any time and to explain the process
we have followed.
# -------------------------------
```


```
# -- YOUR ANSWER TO QUESTION 1 --

# -------------------------------

C:\Users\brito_000\Documents\GitHub\Teaching-HEIGVD-RES-MonSys\monsys-web-infra [master]> vagrant up --provision
Bringing machine 'default' up with 'virtualbox' provider...
==> default: Clearing any previously set forwarded ports...
==> default: Clearing any previously set network interfaces...
==> default: Preparing network interfaces based on configuration...
    default: Adapter 1: nat
    default: Adapter 2: hostonly
==> default: Forwarding ports...
    default: 9090 => 8080 (adapter 1)
    default: 22 => 2222 (adapter 1)
==> default: Booting VM...
==> default: Waiting for machine to boot. This may take a few minutes...
    default: SSH address: 127.0.0.1:2222
    default: SSH username: vagrant
    default: SSH auth method: private key
    default: Warning: Connection timeout. Retrying...
==> default: Machine booted and ready!
==> default: Checking for guest additions in VM...
==> default: Configuring and enabling network interfaces...
==> default: Mounting shared folders...
    default: /vagrant => C:/Users/brito_000/Documents/GitHub/Teaching-HEIGVD-RES-MonSys/monsys-web-infra
==> default: Running provisioner: shell...
    default: Running: inline script
==> default: stdin: is not a tty
==> default: Cleaning up Docker containers...
==> default: rp-node
==> default: web-node-1
==> default: web-node-2
==> default: app-node
==> default: rp-node
==> default: web-node-1
==> default: web-node-2
==> default: app-node
==> default: Running provisioner: docker...
    default: Configuring Docker to autostart containers...
==> default: Building Docker images...
==> default: -- Path: /vagrant/docker/rp-nginx
==> default: -- Path: /vagrant/docker/web-apache
==> default: -- Path: /vagrant/docker/app-nodejs
==> default: Starting Docker containers...
==> default: -- Container: rp-node
==> default: -- Container: web-node-1
==> default: -- Container: web-node-2
==> default: -- Container: app-node

```
# -- YOUR ANSWER TO QUESTION 2 --

# -------------------------------
```
vagrant@ubuntu-14:~$ uname -a
Linux ubuntu-14 3.13.0-24-generic #46-Ubuntu SMP Thu Apr 10 19:11:08 UTC 2014 x86_64 x86_64 x86_64 GNU/Linux
vagrant@ubuntu-14:~$
```
# -- YOUR ANSWER TO QUESTION 3 --

# -------------------------------
```
vagrant@ubuntu-14:~$ docker images
REPOSITORY          TAG                 IMAGE ID            CREATED             VIRTUAL SIZE
heig/rp-nginx       latest              d22fd8451d7c        24 hours ago        725.3 MB
heig/app-nodejs     latest              35d24e13e7b0        2 days ago          486.3 MB
heig/web-apache     latest              2015d5b8c489        2 days ago          499.2 MB
<none>              <none>              240b3514f31f        2 days ago          725.3 MB
dockerfile/ubuntu   latest              9a6f05000058        2 days ago          465.8 MB
```
# -- YOUR ANSWER TO QUESTION 4 --

# -------------------------------
```
vagrant@ubuntu-14:~$ docker ps
CONTAINER ID        IMAGE                    COMMAND                CREATED              STATUS              PORTS
            NAMES
4d8039a51e1b        heig/app-nodejs:latest   node /opt/server.js    About a minute ago   Up About a minute   0.0.0.0:707
0->80/tcp   app-node
7acf41339cf8        heig/web-apache:latest   /usr/sbin/apache2ctl   About a minute ago   Up About a minute   0.0.0.0:808
2->80/tcp   web-node-2
32c9cbf1200a        heig/web-apache:latest   /usr/sbin/apache2ctl   About a minute ago   Up About a minute   0.0.0.0:808
1->80/tcp   web-node-1
4e307cded954        heig/rp-nginx:latest     /opt/init.sh           About a minute ago   Up About a minute   0.0.0.0:909
0->80/tcp   rp-node
```
# -- YOUR ANSWER TO QUESTION 5 --

# -------------------------------
```
GATEWAY    : 172.17.42.1
RP-NODE    : 172.17.0.2
WEB-NODE-1 : 172.17.0.3
WEB-NODE-2 : 172.17.0.4
APP-NODE   : 172.17.0.5

```
# -- YOUR ANSWER TO QUESTION 6 --
```
Host (your laptop):
- IP address: 10.192.87.174

Virtual Machine run by Virtual Box
- IP address: 192.168.33.20 
- PAT: packets arriving on 10.192.87.174:9090 are forwarded to 192.168.33.20:8080

Docker Bridge
- IP address: 172.17.42.1
- PAT: packets arriving on 192.168.33.20:9090 are forwarded to 172.17.0.2:80
- PAT: packets arriving on 192.168.33.20:8081 are forwarded to 172.17.0.3:80
- PAT: packets arriving on 192.168.33.20:8082 are forwarded to 172.17.0.4:80
- PAT: packets arriving on 192.168.33.20:7070 are forwarded to 172.17.0.5:80

Docker Container 1
- IP address: 172.17.0.2

Docker Container 2
- IP address: 172.17.0.3

Docker Container 3
- IP address: 172.17.0.4

Docker Container 4
- IP address: 172.17.0.5


BTW: This part is not exactly clear, we always use telnet with the address 192.168.33.20, which is supposed to be the VM address and not the Docker Bridge's and it works.
# -------------------------------

```
# -- YOUR ANSWER TO QUESTION 7 --
```
This is the line in the host file : 

127.0.0.1       localhost
192.168.33.20   www.monsys.com

Which command did you type on the terminal to establish the connection?

-> telnet 192.168.33.20

What HTTP request did you type and send?

-> GET / HTTP/1.1
   Host: www.monsys.com

What HTTP response did you get?

-> 
HTTP/1.1 200 OK
Server: nginx/1.6.0
Date: Tue, 13 May 2014 16:43:04 GMT
Content-Type: text/html
Content-Length: 1584
Connection: keep-alive
X-Powered-By: PHP/5.5.9-1ubuntu4
Vary: Accept-Encoding

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-
8">
                <link href='http://fonts.googleapis.com/css?family=Terminal+Dosi
s' rel='stylesheet' type='text/css'>
                <link href='css/main.css' rel='stylesheet' type='text/css'>
                <script type="text/javascript" src="script/jquery-1.6.4.js"></sc
ript>
                <title>Welcome To MonSys Front-End</title>

                <script language="JavaScript">

                        $(document).ready(function () {
                                refreshNodes();
                        });

                        function refreshNodes() {
                            $.getJSON('/ajax/resources/nodes',
                            function(data) {
                                var items = [];

                                $.each(data,
                                function(key, val) {
                                    items.push('<li>' + val.name + ", " + val.de
scription + ", load: " + val.currentLoadLevel + ' %</li>');
                                });

                                $('#monitor').html("<ul>" + items.join('') + "</
ul>");
                            });
                                var t=setTimeout("refreshNodes()", 1000);
                        }
        </script>
        </head>
        <body>
                <h1>Welcome to MonSys</h1>
                <h2>You are connected to the front-end system, implemented in PH
P</h2>
                <b>Note</b>: this page is sending HTTP GET requests to <verbatim
>/ajax/resources/nodes</verbatim> in order to retrieve JSON representations of t
he resources managed by the back-end.
                <p/>

                <div id="monitor">
                        You should monitoring data coming from the back-end here
.
                </div>

                <br/>
                Brought to you by the University of Applied Sciences of Western
Switzerland
        </body>
</html>
# -------------------------------
```

# -- YOUR ANSWER TO QUESTION 8 --

```
Which command did you type on the terminal to establish the connection?

-> telnet 192.168.33.20

What HTTP request did you type and send?

-> GET /ajax/resources/nodes HTTP/1.1
   Host: www.monsys.com

What HTTP response did you get?

-> HTTP/1.1 200 OK
Server: nginx/1.6.0
Date: Tue, 13 May 2014 16:50:52 GMT
Content-Type: application/json
Transfer-Encoding: chunked
Connection: keep-alive

fb
[{"name":"P-001","description":"Epson Printer","currentLoadLevel":72.59253393858
671},{"name":"P-002","description":"Canon Printer","currentLoadLevel":28.9165843
27816963},{"name":"P-003","description":"HP Printer","currentLoadLevel":38.56128
102634102}]
0

# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 9 --

RESULTS --------------------------

We tried a few GET requests on the different servers, for both the virtual hosts.

Using telnet with 192.168.33.20:PORT
For PORTS, we have 8083, 8084, 8085

----------------------------------

Provide details and evidence (command results, etc.) that your 
setup is correct.

RESULTS --------------------------

These are some of the results we obtained : 
This one with the following request : 

GET / HTTP/1.1
Host: www.live.clashofclasses.ch

HTTP/1.1 200 OK
Date: Thu, 15 May 2014 14:04:01 GMT
Server: Apache/2.4.7 (Ubuntu)
Vary: Accept-Encoding
Content-Length: 1359
Content-Type: text/html;charset=UTF-8

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
                                                       <html>
                                                              <head>
                                                                      <title>Ind
ex of /</title>
                </head>
                        <body>
                              <h1>Index of /</h1>
                                                   <table>
                                                             <tr><th valign="top
"><img src="/icons/blank.gif" alt="[ICO]"></th><th><a href="?C=N;O=D">Name</a></
th><th><a href="?C=M;O=A">Last modified</a></th><th><a href="?C=S;O=A">Size</a><
/th><th><a href="?C=D;O=A">Description</a></th></tr>
                                                       <tr><th colspan="5"><hr><
/th></tr>
         <tr><td valign="top"><img src="/icons/folder.gif" alt="[DIR]"></td><td>
<a href="css/">css/</a></td><td align="right">2014-05-15 12:41  </td><td align="
right">  - </td><td>&nbsp;</td></tr>
                                    <tr><td valign="top"><img src="/icons/text.g
if" alt="[TXT]"></td><td><a href="live-index.html">live-index.html</a></td><td a
lign="right">2014-05-15 06:40  </td><td align="right">2.0K</td><td>&nbsp;</td></
tr>
   <tr><td valign="top"><img src="/icons/folder.gif" alt="[DIR]"></td><td><a hre
f="script/">script/</a></td><td align="right">2014-05-15 12:25  </td><td align="
right">  - </td><td>&nbsp;</td></tr>
                                    <tr><td valign="top"><img src="/icons/image2
.gif" alt="[IMG]"></td><td><a href="success.jpg">success.jpg</a></td><td align="
right">2014-05-15 06:40  </td><td align="right"> 70K</td><td>&nbsp;</td></tr>

<tr><th colspan="5"><hr></th></tr>
                                  </table>
                                          <address>Apache/2.4.7 (Ubuntu) Server
at www.live.clashofclasses.ch Port 80</address>
                                               </body></html>

---------------------------------

This result was then obtained with the following request:

GET / HTTP/1.1
Host: www.leaderboard.clashofclasses.ch

HTTP/1.1 200 OK
Date: Thu, 15 May 2014 14:11:00 GMT
Server: Apache/2.4.7 (Ubuntu)
Vary: Accept-Encoding
Content-Length: 1368
Content-Type: text/html;charset=UTF-8

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
                                                       <html>
                                                              <head>
                                                                      <title>Ind
ex of /</title>
                </head>
                        <body>
                              <h1>Index of /</h1>
                                                   <table>
                                                             <tr><th valign="top
"><img src="/icons/blank.gif" alt="[ICO]"></th><th><a href="?C=N;O=D">Name</a></
th><th><a href="?C=M;O=A">Last modified</a></th><th><a href="?C=S;O=A">Size</a><
/th><th><a href="?C=D;O=A">Description</a></th></tr>
                                                       <tr><th colspan="5"><hr><
/th></tr>
         <tr><td valign="top"><img src="/icons/folder.gif" alt="[DIR]"></td><td>
<a href="css/">css/</a></td><td align="right">2014-05-15 12:43  </td><td align="
right">  - </td><td>&nbsp;</td></tr>
                                    <tr><td valign="top"><img src="/icons/text.g
if" alt="[TXT]"></td><td><a href="dashboard-index.html">dashboard-index.html</a>
</td><td align="right">2014-05-15 06:40  </td><td align="right">2.0K</td><td>&nb
sp;</td></tr>
             <tr><td valign="top"><img src="/icons/image2.gif" alt="[IMG]"></td>
<td><a href="kid.jpg">kid.jpg</a></td><td align="right">2014-05-15 06:40  </td><
td align="right">145K</td><td>&nbsp;</td></tr>
                                              <tr><td valign="top"><img src="/ic
ons/folder.gif" alt="[DIR]"></td><td><a href="script/">script/</a></td><td align
="right">2014-05-15 12:42  </td><td align="right">  - </td><td>&nbsp;</td></tr>

  <tr><th colspan="5"><hr></th></tr>
                                    </table>
                                            <address>Apache/2.4.7 (Ubuntu) Serve
r at www.leaderboard.clashofclasses.ch Port 80</address>
                                                        </body></html>

---------------------------------

As we can see, we obtained the good result with both virtual hosts, once the dashboard index and once the live index.

# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 10 --
````
###
We added the links 
www.live.clashofclasses.ch and 
www.leaderboard.clashofclasses.ch
in the hosts file.

These are the results:

[![](./images/live.PNG)](#)

and also 

[![](./images/leaderboard.PNG)](#)
###
```
# -------------------------------
```


