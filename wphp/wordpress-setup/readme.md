Wordpress
download latest version from download page
unzip and move wordpress folder to /opt/lampp/htdocs
$ sudo mv wordpress newname //change directory name to newname
Setting permissions
$ sudo apt-get install members //for easier member lists
$ sudo groupadd wordpress //creates a group called wordpress
$ sudo usermod -a -G wordpress abufrank // append user abufrank to group wordpress
$ sudo usermod -a -G wordpress daemon  // append user daemon to group wordpress
$ members wordpress // check that users were added (lists members of group wordpress)
-------
$ sudo chown -R daemon:wordpress newname //allows for direct site editing and allows current user to still view files and folders in linux command terminal without sudo
$ sudo find wp-content -type d -exec chmod 755 {} \;
$ sudo find wp-content -type f -exec chmod 644 {} \;	

**to reader: “newname” will be the example site for the runthrough
Create database
navigate to localhost/phpmyadmin, login
create a new database with collation: utf8_general_ci
Install Wordpress
navigate to localhost/newname follow prompts
Theme screenshot should be 1200x900
Add Understrap
//copy understrap theme and child theme files from repository to local
//navigate to local wordpress themes folder
$ sudo git clone https://github.com/understrap/understrap.git
$ sudo git clone https://github.com/understrap/understrap-child.git
//Change where local git points to
sudo git remote set-url origin https://github.com/username/repository.git
//verify
$ git remote -v
//push local contents to personal repository
$ sudo git push -u origin master
Bootstrap Navbar
navigate to theme folder (.../wp-content/themes/newname)
$ sudo wget “url” //to download the wp-navwalker. Download links: v.3 and v.master
add this to the functions.php:
	// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
Animate CSS

Widgets

