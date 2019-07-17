# Install the most recent version of git using launchpad
	sudo add-apt-repository ppa:git-core/ppa
	sudo apt update
	sudo apt install git
	git --version (to verify)

# Initial setup
	git config --global user.name "John Doe"
	git config --global user.email johndoe@example.com
	sudo git config --global core.editor "subl -w" // to change text editor to subl and have it wait ( -w ) for user to close file before sending off
	
# Set upstream
	sudo git remote add origin https://github.com/AbuFrank/Your-Repository.git
	sudo git push -u origin master

