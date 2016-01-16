

# video-streamer
HTTP video streamer with token system for authentication

#installation
1. sudo apt-get install nodejs apache2 mysql-server php5 php5-mysql php5-gd motion libmysqlclient-dev libcurl4-openssl-dev pkg-config tmux
3. mysql -u root -p
4. create database userfrosting;
5. create database device;
6. sudo a2enmod rewrite cgi
7. sudo nano /etc/apache2/apache2.conf
8. -- change AllowOverride All for /var/www/
9. -- Require all granted
10. sudo nano /etc/default/motion
11. -- change to start_motion_daemon=yes
12. sudo nano /etc/motion/motion.conf
13. -- change to stream_localhost off
14. sudo chown -R pi /var/lib/motion; sudo chmod -R u+rX /var/lib/motion
15. clone repository into web directory
16. -- sudo git clone https://github.com/physiii/media-server.git /var/www/html
17. go to http://127.0.0.1 and create master account (token for userfrosting database in the uf_configuration table)
18. sudo nano /etc/rc.local
19. -- su pi -c 'node /var/www/html/node/media-server >> /var/log/media-server.log 2>&1 &'
20. [still editing]
