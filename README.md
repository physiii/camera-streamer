

# video-streamer
video streamer with token system for authentication

#installation
1. sudo apt-get install nodejs apache2 mysql-server php5 php5-mysql php5-gd motion libmysqlclient-dev libcurl4-openssl-dev pkg-config
2. mysql -u root -p
3. create database device;
4. sudo a2enmod rewrite cgi
5. sudo nano /etc/default/motion
6. -- change to start_motion_daemon=yes
7. sudo nano /etc/motion/motion.conf
8. -- change to stream_localhost off
9. sudo chown -R pi /var/lib/motion; sudo chmod -R u+rX /var/lib/motion
10. [still editing]
