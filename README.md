

# video-streamer
video streamer with token system for authentication

#installation
sudo apt-get install nodejs apache2 mysql-server php5 php5-mysql php5-gd motion libmysqlclient-dev libcurl4-openssl-dev pkg-config
mysql -u root -p
create database userfrosting;
create database device;
sudo a2enmod rewrite cgi
sudo nano /etc/apache2/apache2.conf
-- change AllowOverride All for /var/www/
-- Require all granted
sudo nano /etc/default/motion
-- change to start_motion_daemon=yes
sudo nano /etc/motion/motion.conf
-- change to stream_localhost off
sudo chown -R pi /var/lib/motion; sudo chmod -R u+rX /var/lib/motion
