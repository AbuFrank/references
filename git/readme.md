## Push an existing repository (when remote is empty)
	git remote add origin https://github.com/AbuFrank/merng-client.git
	git branch -M main
	git push -u origin main

## Install the most recent version of git using launchpad

	sudo add-apt-repository ppa:git-core/ppa
	sudo apt update
	sudo apt install git
	git --version (to verify)

## Initial setup

	git config --global user.name "John Doe"
	git config --global user.email johndoe@example.com
	sudo git config --global core.editor "subl -w" // to change text editor to subl and have it wait ( -w ) for user to close file before sending off

## Upstreams
```
# Add upstream repository called nickname 
git remote add <nickname> <url>

# Change repository url for nickname
git remote set-url <nickname> <other url>

# Push and set upstream to nickname's branch
git push -u <nickname> <branch>

# Set local head to point to track remote
git branch --set-upstream-to=origin/<branch> master

# Remove upstream
git remote rm <nickname>

#list upstreams
git remote -v
```

## Hard pull from repository
	git fetch --all
	git reset --hard origin/master

## Blacklisting/Whitelisting files and folders
```
# First, ignore everything
*
# Now, whitelist anything that's a directory
!*/
# And all the file types you're interested in.
!*.one
!*.two
!*.etc
```

## Undo add and commit
```
# Undo add <file>
git reset <file>

# Undo add .
git reset

# Undo cache
git rm --cached FILENAME
```
## sample .gitignore
```
# Ignore everything in top-most directory
/*

# whitelist certain files
!.gitignore
!header.php

#whitelist certain nested folders and their contents
!sass/
sass/*
!sass/theme

!fonts/
fonts/*
!fonts/gotham
```
