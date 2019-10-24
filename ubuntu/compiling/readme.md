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

1. download tar from [ffmpeg downloads](https://www.ffmpeg.org/download.html)
2. since it is a tar.bz2 file we extract it like so:
	
	`tar xvjf ffmpeg-4.2.1.tar.bz2`
3. inside the unzipped folder, there should be a .txt or .md file for installation instructions
4. ffmpeg is rather straight forward:

	```
	./configure
	make
	checkinstall -D make install
	```
5. Errors may arise (e.g. yasm doesn't exist or is outdated)
	
	`sudo apt install yasm`
6. This should be the output:

```
**********************************************************************

 Done. The new package has been installed and saved to

 ~/Documents/ffmpeg/ffmpeg-4.2.1/ffmpeg_4.2.1-1_amd64.deb

 You can remove it from your system anytime using: 

      dpkg -r ffmpeg

**********************************************************************
```
