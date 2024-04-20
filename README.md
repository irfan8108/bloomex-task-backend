# Bloomex Task

## Overview

Bloomex-Task is an basic Task Management Web Application built with two technology framework seperated for Backend(Laravel) and Frontend(VueJs).

I believe development must be an enjoyable and creative experience to be truly fulfilling.

## Quick Links

- [API Documentation](https://documenter.getpostman.com/view/2611803/2sA3BoZrF3)
- [Frontend/Git](https://github.com/irfan8108/bloomex-task-frontend.git)
- [App](http://amiss.in/bloomex)
- [Backend](http://54.253.70.47:8000/public)

### Working from Scratch

Using Docker

  #### Create Docker and Docker Compose File
  #### Create Docker Image
		- docker-compose build --no-cache
  #### Initialize and Execute Docker Container
		- docker-compose up
		- docker exec -it [ContainerName OR Id] bash
  #### Create Laravel Project using Composer
		- composer create-project --prefer-dist laravel/laravel .
  #### Create Laravel Model, API Route & Resource Controller
		- php artisan make:model Task -m
		- php artisan make:controller TaskController --model=Task --api
		- php artisan migrate

  #### Working on API, controller and business logic

  #### Configure Cors
    - Used custom middleware
    - We also can configure it using package

  #### Create or Push to Github
		- echo "# bloomex-task-backend" >> README.md
		- git init
		- git add .
		- git commit -m "initial commit"
		- git branch -M main
		- git remote add origin https://github.com/irfan8108/bloomex-task-backend.git
		- git push -u origin main

## Deployment / Launch

Using Docker, Git and AWS

	# Create and Launch AWS EC2 Instance
	# Connect instance to local machine via ssh
	# Update server(instanced) => sudo yum update
	# Install Docker on server => sudo yum install -y docker
	# Start Docker services => sudo service docker start
	# (Optional) Confirm that docker is active an running => sudo service docker start
	# Enable docker to boot your application automatically => sudo chkconfig docker on
	# (Optional) Add the ec2-user(your user) to the Docker Group, it allow Docker command without using sudo => sudo usermod -a -G docker ec2-user
	# Install docker compose => sudo curl -L https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose 
	# Required permission for docker-compose => sudo chmod +x /usr/local/bin/docker-compose
	# (Optional) check Docker Compose version => docker-compose --version
	# Install Git => sudo yum install -y git
	# Change directory and permission
		- cd /var
		- sudo chown -R $USER /var
	# Clone Git Repository => git clone https://github.com/irfan8108/bloomex-task-backend.git
	# Switch to your repo directory => cd bloomex-task-backend/
	# Build docker image => sudo docker-compose build
	# Initialize Docker Container => sudo docker-compose up -d
	# (Optional) Show details of Docker and services => sudo docker ps
	# Install Laravel package and dependencies
		- Method 1: Direct
			- Eg: sudo docker exec -it [ContainerId OR ContainerName] [Service CMD(s)]
				- sudo docker exec -it laravel_docker composer update
		- Method 2: Switch between Docker Container and Server
			- Eg: sudo docker exec -it [ContainerId OR ContainerName]
				- sudo docker exec -it laravel_docker bash
				- composer update
				- exit
	# Channge permission of storage or logs
		- sudo chmod o+w ./storage/ -R
	# .env config and migration
		- execute cmds (will make it more smoother soon, few more and same step itself will be ignored)
	# Clear cache => php artisan cache:clear
	# Now you can access your app on AWS server (find the Public Ip or host name)

##### That's it you are done. Thanks...!
