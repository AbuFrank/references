# Useful Commands
Commonly used terminal commands for general file/directory interactions that are infrequent enough to forget

## Contents
1 Moving multiple files at once
2 For checking existing installation packages
3 Show dependencies for a program
4 Search keyword in repositories
5 Search for installed libraries
6 Create symbolic link, a shortcut


## Moving multiple files at once
	mv -t <destination> <src1> <src2> … <srcN>
or
	mv <file1> <file2> <file3> -t <destination>

## For checking existing installation packages
	dpkg -s vim
	
I always prefer this one as it shows other packages that has the pattern `vim` in their names, very useful in some cases
	dpkg --get-selections | grep 'vim'

	dpkg -l vim
	apt-cache policy vim

## Verify file integrity
	echo "8dd10000eb1b768800000e1d2fe1c3100005d2dc *filename" | sha1sum -c -

## Show dependencies for a program
	objdump -p /path/to/program | grep NEEDED

## Search keyword in repositories
	apt-cache search keyword
	apt-cache policy keyword (for more info, e.g. version)

## Search for installed libraries
	ldconfig -p | grep ‘keyword’

## Create symbolic link, a shortcut
	ln -s source_file myfile