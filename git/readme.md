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
	git remote add <nickname> <url>
	```
* Change repository url for nickname
	```
	git remote set-url <nickname> <other url>
	```
* Push and set upstream to nickname's branch
	```
	git push -u <nickname> <branch>
	```
* Set local head to point to track remote
	```
	git branch --set-upstream-to=origin/<branch> master
	```
* Remove upstream
	```
	git remote rm <nickname>
	```
## Hard pull from repository
	git fetch --all
	git reset --hard origin/master
