helpful resources:

[How to set PATH](https://opensource.com/article/17/6/set-path-linux)

[What is PATH](http://www.linfo.org/path_env_var.html)

##1. Check $PATH
	```
	echo $path
	```
	or
	```
	env | grep PATH
	```

##2. Add path to PATH
  ```
  export PATH=$PATH:/place/with/the/file
  ```
