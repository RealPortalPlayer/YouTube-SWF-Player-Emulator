#!/bin/bash

if [ "$#" -eq 0 ]; then
	echo "Usage: `basename $0` <video id>"
	exit
fi

youtubedl=youtube-dl

if ! command -v $youtubedl; then
	youtubedl=yt-dlp
fi

if ! command -v $youtubedl; then
	echo "Cannot find youtube-dl, or yt-dlp"
	exit 1
fi

$youtubedl --recode-video flv -o "$1" "https://www.youtube.com/watch?v=$1" 
