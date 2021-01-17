# Install

[XAMPP faq](https://www.apachefriends.org/faq_linux.html)

# Configure XAMPP

## 1. Set up wordpress group and add daemon and user

	sudo apt install members //for easier member lists, optional
	sudo groupadd wordpress //creates a group called wordpress
	sudo usermod -a -G wordpress abufrank // append user abufrank to group wordpress
	sudo usermod -a -G wordpress daemon  // append user daemon to group wordpress
	members wordpress // check that users were added (lists members of group wordpress), optional
	subl /etc/group // to check group file directly

## 2. kill default apache2 in lieu of XAMPP

Look for network calls using port 80:

`sudo netstat -nap | grep :80`

returns something like this:
```
tcp6       0      0 :::80                   :::*
LISTEN      980/apache2
```
Kill the server that is running apache2:

`sudo kill 980`

Make sure xampp runs:

`sudo /opt/lampp/lampp start`

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

## 1. Log into mySQL 

	/opt/lampp/bin/mysql -uroot -p

* The ```-uroot``` is logging into "user" named "root".
* The ```-p``` is anticipating password. Drop it if root has no password.

## 2. 
