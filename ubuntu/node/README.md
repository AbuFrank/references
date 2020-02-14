## Install nvm
nvm is a node version manager. It allows you to use different versions of 

node at will when juggling multiple projects with diferrent versions.

[nvm git repo](https://github.com/nvm-sh/nvm)

List all node versions
```
nvm ls-remote
```

Install lastest major version
```
nvm install <number>
```

Change which node the terminal is using
```
nvm use <number>
```

Execute without installing, must have executable
```
npx <package> <arguments>
```

Display currently activated version of node
```
nvm current
```

Clean and install *warning*
```
npm cache clea
npm install
```
