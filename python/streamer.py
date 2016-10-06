from SimpleCV import *
import time
c =  Camera()
js = JpegStreamer("0.0.0.0:8090")

while True:
	c.getImage().save(js)
	time.sleep(0.1)
