# Installs

## Install the newest version of sublime directly from source

	wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add -
	echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
	sudo apt update
	sudo apt install sublime-text
	subl -

## Install XAMPP

1. Set up wordpress group and add daemon and user

	sudo apt install members //for easier member lists, optional
	sudo groupadd wordpress //creates a group called wordpress
	sudo usermod -a -G wordpress abufrank // append user abufrank to group wordpress
	sudo usermod -a -G wordpress daemon  // append user daemon to group wordpress
	members wordpress // check that users were added (lists members of group wordpress), optional
	subl /etc/group // to check group file directly

2. set up server

Search for "list 80" change it to "listen 200":
	sudo subl /opt/lampp/etc/httpd.conf

Search for "listen 443" change it to "listen 500":
	sudo subl /opt/lampp/etc/extra/httpd-ssl.conf

Search for testport 80 and 443 change them to 200 and 500 respectively:
	sudo subl /opt/lampp/lampp

Restart xampp:
	sudo /opt/lampp/lampp restart