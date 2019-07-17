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

