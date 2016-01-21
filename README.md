

# camera-streamer
HTTP video streamer with token system for authentication

#installation
1. sudo apt-get install nodejs apache2 mysql-server php5 php5-mysql php5-gd motion libmysqlclient-dev libcurl4-openssl-dev pkg-config tmux
3. mysql -u root -p
5. create database device;
6. sudo a2enmod rewrite cgi
10. sudo nano /etc/default/motion
11. -- change to start_motion_daemon=yes
12. sudo nano /etc/motion/motion.conf
13. -- change to stream_localhost off
14. sudo chmod -R 777 /var/lib/motion
15. clone repository into web directory
16. -- sudo git clone https://github.com/physiii/security-camera.git /var/www/html
17. -- sudo cp nph-mjprox /usr/lib/cgi-bin
20. [still editing]
