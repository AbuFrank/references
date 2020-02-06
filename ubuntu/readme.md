# Useful Commands
Commonly used terminal commands for general file/directory interactions that are infrequent enough to forget

## Contents
1. Moving multiple files at once
2. For checking existing installation packages
3. Verify file integrity
4. Show dependencies for a program
5. Search keyword in repositories
6. Search for installed libraries
7. Create symbolic link, a shortcut
8. Calculate disk usage for particular directories
9. zip, gz, tar
10. Clean up unused files and apt cache


## 1. Moving multiple files at once
	mv -t <destination> <src1> <src2> … <srcN>
-- or -- 

	mv <file1> <file2> <file3> -t <destination>

## 2. For checking existing installation packages
	dpkg -s vim
	
I always prefer this one as it shows other packages that has the pattern `vim` in their names, very useful in some cases
	
	dpkg --get-selections | grep 'vim'

	dpkg -l vim
	apt-cache policy vim

## 3. Verify file integrity
	echo "8dd10000eb1b768800000e1d2fe1c3100005d2dc *filename" | sha1sum -c -

## 4. Show dependencies for a program
	objdump -p /path/to/program | grep NEEDED

## 5. Search keyword in repositories
	apt-cache search keyword
	apt-cache policy keyword (for more info, e.g. version)

## 6. Search for installed libraries
	ldconfig -p | grep ‘keyword’

## 7. Create symbolic link, a shortcut
	ln -s source_file myfile
Find the source of a symbolic link:
	
	ls -la myfile

## 8. Calculate disk usage for particular directories. See a [nixCraft](https://www.cyberciti.biz/faq/linux-check-disk-space-command/) post about it.
	du -sh /etc/

```-s``` summarize  disk usage for top-most directory  
```-h``` human readable format  
example output: ```6.3M /etc/```

### List the top 10 directories eating disk space in /etc/
	du -a /etc/ | sort -n -r | head -n 10

example output: 

	8128	/etc/
	928	/etc/ssl
	904	/etc/ssl/certs
	656	/etc/apache2
	544	/etc/apache2/mods-available
	484	/etc/init.d
	396	/etc/php5
	336	/etc/sane.d
	308	/etc/X11
	268	/etc/ssl/certs/ca-certificates.crt
	
### list the immediate folders of working directory and their cummulative disk usage 

	du -h --max-depth=1
	
### Show the programs that are dependent on a specific package (reverse dependencies)

	apt-cache rdepends packagename

## 9. zip, gzip, tar

### zip
type zip or unzip alone to see a list of commands and general usage

`unzip file.zip`

### gzip
unzip the .gz file and <ins>k</ins>eep it (don't delete original .gz)

`gunzip -k file.zip`

## 10. Clean up unused files and apt cache
1. Clean up partial package

	`sudo apt autoclean`
2. Clean apt cache

	`sudo apt-get clean`
3. Remove unused dependencies

	`sudo apt autoremove`
4. Prevent uninstalled programs from leaving behind files

	`sudo apt autoremove <application>`
