# NTS Programs

## Requirements
- Apache
- PHP
- Mysql Server

## Set up application

Open a new terminal window and navigate to the server root and clone the programs run the follwing command:

`git clone --recurse-submodules https://github.com/nts-dev/nts-programs.git`

## Updating the application

Open a new terminal window and navigate to the server root and run the follwing commands:

`git pull --recurse-submodules`

`git submodule foreach git merge origin main`

### Set up the application database

Go to your terminal window and login to mysql

`mysql –u 'yourusername' –p 'yourpassword'`

Create the database

`CREATE DATABASE 'databasename';`

Create user if does not exist

`CREATE USER 'databaseuser'@'localhost' IDENTIFED BY 'yourpassword';`

Grant access to user

`GRANT ALL ON 'databasename'.* TO 'databaseuser'@localhost;`

### Run the application

Open browser and type http://`yourhostname`/nts-programs eg `http://localhost/nts-programs`

Provide the necessary settings and click install
