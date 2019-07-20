# Wordpress setup localhost

## 1. Download latest version of [wordpress](https://wordpress.org/latest.zip)

1. unzip and move wordpress folder to development folder

	```
	mv ~/Downloads/wordpress ~/websites/newname //change directory name to newname
	```
2. create a symlink from working directory to xampp directory

	```
	sudo ln -s ~/Documents/websites/newname /opt/lampp/htdocs/newname
	```
3. create [database](localhost:200/phpmyadmin)
* set utf8_general_ci
* add user with full permissions and password
* update wp-config.php file
* bypass ftp
	
	```
	define('FS_METHOD','direct');
	```

* navigate to wordpress install, create blog

4. set permissions
* change wp-config.php
	
	```
	sudo chown abufrank:wordpress wp-config.php
	sudo chmod 640 wp-config.php
	```
* add wordpress group and include write access for groups

	```
	sudo chown -R abufrank:wordpress wp-content
	find wp-content -type d -exec chmod 775 {} \;
	find wp-content -type f -exec chmod 664 {} \;

	```
