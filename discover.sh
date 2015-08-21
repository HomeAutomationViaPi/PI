#!/bin/bash

source config.sh

ip=`ip -o -f inet addr show|awk '/brd/ {print $2, $4}'|cut -d"/" -f1|cut -d" " -f2`
echo "IP= " $ip
cidr=`ip -o -f inet addr show|awk '/brd/ {print $2, $4}'|cut -d"/" -f2`
echo "CIDR= "$cidr
brdc=`ip -o -f inet addr show|awk '/brd/ {print $6}'`
echo "Brdc= "$brdc
inter=`ip -o -f inet addr show|awk '/brd/ {print $2}'`
curl --data "source=network&ID=$PiID&ip=$ip&inter=$inter&cidr=$cidr&brdc=$brdc" http://$backendserver/internal/store.php

echo "FING"
fingdata==`sudo fing $brdc/$cidr -r1`
curl --data "source=fing&data=$fingdata&ID=$PiID&ip=$ip" http://$backendserver/internal/store.php

echo "NMAP"
nmapdata=`nmap $brdc/$cidr|grep 'report\|open'`
curl --data "source=nmap&data=$nmapdata&ID=$PiID&ip=$ip" http://$backendserver/internal/store.php


echo "NBTSCAN"
nbtdata=`sudo nbtscan -q -s, -r $brdc/$cidr|grep -v '<unknown>'`
curl --data "source=nbt&data=$nbtdata&ID=$PiID&ip=$ip" http://$backendserver/internal/store.php

echo "ARP SCAN"
arpdata=`sudo arp-scan --interface=$inter $brdc/$cidr|grep -E '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}'`
curl --data "source=arp&data=$arpdata&ID=$PiID&ip=$ip" http://$backendserver/internal/store.php

echo "SONOS"
sonosdata=`socos list`
curl --data "source=sonos&data=$sonosdata&ID=$PiID&ip=$ip" http://$backendserver/internal/store.php

