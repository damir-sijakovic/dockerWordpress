#!/bin/bash

echo "Run this script with sudo. This will make ports 7070 and 8080 accessable from localhost only!"

iptables-legacy -A INPUT -p tcp -s localhost --dport 7070 -j ACCEPT &&
iptables-legacy -A INPUT -p tcp --dport 7070 -j DROP &&
iptables-legacy -A INPUT -p tcp -s localhost --dport 8080 -j ACCEPT &&
iptables-legacy -A INPUT -p tcp --dport 8080 -j DROP
