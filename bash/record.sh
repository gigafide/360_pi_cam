#!/bin/bash

raspivid -w 1920 -h 1080 -fps 24 -t 5000 -o /var/www/html/vid_files/video.h264
