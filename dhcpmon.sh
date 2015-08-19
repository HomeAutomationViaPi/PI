#!/bin/bash

sudo dhcpdump -i wlan0 >dhcpmsg.log &

while true; do
	
	IPS=`grep "Request IP address" dhcpmsg.log|awk '{ print $8 }'`
	
	#if found and set for each ip found in the log 
	if [ ! -z "$IPS" ];then
		for ip in $IPS; do
			echo "IP: $ip"
			nmap $ip/24		
		done
		sudo killall dhcpdump &	
		sudo dhcpdump -i wlan0 >dhcpmsg.log &
	fi
	sleep 10
done
