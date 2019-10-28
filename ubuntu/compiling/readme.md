# .SO Shared Object Files in Linux, (library modules)
see video tutorial: https://www.youtube.com/watch?v=CqUuNCZMGJU
LD_LIBRARY_PATH
	/etc/ld.so.conf => ldconfig
	ldd /bin/ls (lists dependecies and their locations)
	vi /etc/ld.so.conf (shows )


	mkdir /libtest
	ldd /bin/ls (list current dependencies)
	cp /lib/librt.so.1 /libtest/
	export LD_LIBRARY_PATH=/libtest
	!ldd (list dependecies (should see libtest included))
	unset LD_LIBRARY_PATH
	#!ldd (libtest should not be showing)
	ldconfig -v (verbose, i.e. echo processes)
	ldconfig -p (

## Linux Understanding Shared Libraries
https://www.youtube.com/watch?v=RmdvkUWQ78g

## Example Compiling: ffmpeg

Installing ffmpeg to /home/<user>/bin to prevent interference with regular programs

1. make sure $PATH includes /home/<user>/bin [reference](github.com/abufrank/references){:target="_blank"}
2. download tar from [ffmpeg downloads](https://www.ffmpeg.org/download.html){:target="_blank"}
3. move downloaded file to /home/<user>/bin
4. since it is a tar.bz2 file we extract it like so:
	
	`tar xvjf ffmpeg-4.2.1.tar.bz2`
5. inside the unzipped folder, there should be a .txt or .md file for installation instructions
6. ffmpeg is rather straight forward:

	```
	./configure --prefix=/home/<user>/bin
	make
	checkinstall -D make install
	```
7. Errors may arise (e.g. yasm doesn't exist or is outdated)
	
	`sudo apt install yasm`
8. This should be the output:

```
**********************************************************************

 Done. The new package has been installed and saved to

 ~/Documents/ffmpeg/ffmpeg-4.2.1/ffmpeg_4.2.1-1_amd64.deb

 You can remove it from your system anytime using: 

      dpkg -r ffmpeg

**********************************************************************
```
