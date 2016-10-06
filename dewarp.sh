#!/bin/bash

echo "Dewarping Video from /var/www/html/vid_files"
python /var/www/html/python/new_dewarp.py

echo "Done!"
echo "Converting video to MP4"
avconv -r 24 -i /var/www/html/vid_files/FRAME%05d.png -vf 'scale=trunc(iw/2)*2:trunc(ih/2)*2' -s 1920x960 -c:v libx264 /home/pi/Desktop/360_video.mp4
echo "All done! Video is located at /home/pi/Desktop/360_video.mp4"

