#!/bin/bash

source config.sh

curl --data "PiID=$PiID" http://$backendserver/internal/firstcheckin.php


