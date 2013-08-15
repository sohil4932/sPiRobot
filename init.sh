/home/pi/MJPG-streamer/mjpg-streamer/mjpg_streamer -b -i "/home/pi/MJPG-streamer/mjpg-streamer/input_uvc.so -d /dev/video0 -y -r 320x240 -f 30" -o "/home/pi/MJPG-streamer/mjpg-streamer/output_http.so -p 8081 -w /tmp"
echo "4" > /sys/class/gpio/export
echo "18" > /sys/class/gpio/export
echo "24" > /sys/class/gpio/export
echo "23" > /sys/class/gpio/export 
echo "out" > /sys/class/gpio/gpio4/direction
echo "out" > /sys/class/gpio/gpio18/direction
echo "out" > /sys/class/gpio/gpio23/direction
echo "out" > /sys/class/gpio/gpio24/direction