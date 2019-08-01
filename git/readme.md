# Install the most recent version of git using launchpad

	sudo add-apt-repository ppa:git-core/ppa
	sudo apt update
	sudo apt install git
	git --version (to verify)

# Initial setup

	git config --global user.name "John Doe"
	git config --global user.email johndoe@example.com
	sudo git config --global core.editor "subl -w" // to change text editor to subl and have it wait ( -w ) for user to close file before sending off

# Set upstreams
	
* Add upstream repository called nickname 
	```
	git remote add nickname https://github.com/AbuFrank/Your-Repository.git
	```
* Change repository url for nickname
	```
	git remote set-url nickname https://github.com/username/repository.git
	```
* Push and set upstream to nickname master branch
	```
	git push -u nickname master
	```
* Set local head to point to track remote
	```
	git branch --set-upstream-to=origin/<branch> master
	```
## Hard pull from repository
	git fetch --all
	git reset --hard origin/master
