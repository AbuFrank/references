# Install

# Configure XAMPP

## 1. Set up wordpress group and add daemon and user

	sudo apt install members //for easier member lists, optional
	sudo groupadd wordpress //creates a group called wordpress
	sudo usermod -a -G wordpress abufrank // append user abufrank to group wordpress
	sudo usermod -a -G wordpress daemon  // append user daemon to group wordpress
	members wordpress // check that users were added (lists members of group wordpress), optional
	subl /etc/group // to check group file directly

## 2. set up server

Search for "list 80" change it to "listen 200":

	sudo subl /opt/lampp/etc/httpd.conf

Search for "listen 443" change it to "listen 500":

	sudo subl /opt/lampp/etc/extra/httpd-ssl.conf

Search for testport 80 and 443 change them to 200 and 500 respectively:
	
	sudo subl /opt/lampp/lampp

Restart xampp:
	
	sudo /opt/lampp/lampp restart

# MySql

## 1. How to change the root user name

Log into mySQL 

	/opt/lampp/bin/mysql -uroot -p

* The ```-uroot``` is logging into "user" named "root".
* The ```-p``` is anticipating password. Drop it if root has no password.

## 2. 