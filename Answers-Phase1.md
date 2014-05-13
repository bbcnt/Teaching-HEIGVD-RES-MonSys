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
- IP address: 192.168.33.20 (VMware use 192.168.56.1 as given by ipconfig)
- PAT: packets arriving on 10.192.87.174:9090 are forwarded to 192.168.33.20:8080

Docker Bridge
- IP address: 172.17.42.1
- PAT: packets arriving on 172.17.42.1:9090 are forwarded to 172.17.0.2:80
- PAT: packets arriving on 172.17.42.1:8081 are forwarded to 172.17.0.3:80
- PAT: packets arriving on 172.17.42.1:8082 are forwarded to 172.17.0.4:80
- PAT: packets arriving on 172.17.42.1:7070 are forwarded to 172.17.0.5:PC4

Docker Container 1
- IP address: 172.17.0.2

Docker Container 2
- IP address: 172.17.0.3

Docker Container 3
- IP address: 172.17.0.4

Docker Container 4
- IP address: 172.17.0.5

# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 7 --

Which command did you type on the terminal to establish the connection?

What HTTP request did you type and send?

What HTTP response did you get?
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 8 --

Which command did you type on the terminal to establish the connection?

What HTTP request did you type and send?

What HTTP response did you get?
# -------------------------------
```




