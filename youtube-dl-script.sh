#!/bin/bash

if [ "$#" -eq 0 ]; then
	echo "Usage: `basename $0` <video id>"
	exit
fi

youtube-dl --recode-video flv -o "$1" "https://www.youtube.com/watch?v=$1" 
