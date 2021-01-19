## Elastic Beanstalk

set up a web app without worrying about infrastructure  
no cost except for usage  
supports most popular languages  

### CLI commands

eb init - configure your project directory and the EB CLI  
eb create - create you first env  
eb status - see the current status of you env  
eb health - view health info about the instances and the state of you overall env (use --refresh to update every 10s)  
eb events - see a list of events output by EB  
eb logs - pull logs from an instance in your env  
eb open - open your env's website in a browser  
eb deploy - once the env is running, deploy an update  
eb config - take a look at the configuration options available for your running env
eb terminate - delete the environment

### Custom Image setup

AWS Docs - supported platforms, standard platform AMIs, get info  
CLI - describe-platform-version  
ImageId: "ami-020ae06fdda60f66"  
EC2 Marketplace, community section - paste in ami and launch new EC2 server  
Sessions Manager - log in with ssl or sessions manager. install packages, bake it  
New AMI  
Update  

### Configuring RDS (database)

Database can be inside or outside EB Environment  
When creating EB env you have the choice of creating a database as well, when you do, it will be **inside**  
Usually only inside for development environment  
Create the database with RDS first, then create the EB env. Then it will be **outside**


----
