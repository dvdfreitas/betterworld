# GIT BASIC COMMANDS

Start Git In a Folder

```
git init
```


Add Remote

```
git remote add (remote name) (link)

EX: git remote add world https://github.com/dvdfreitas/betterworld.git
```

## PULL PROJECT FROM GITHUB


```
git pull (link or remote) (branch to pull  from)

EX: git pull world main
EX: git pull https://github.com/dvdfreitas/betterworld.git main
```

## PUSH CHANGES INTO GITHUB

Add files

```
git add (files or .) 

EX: git add README.MD (ADD A SPECIFIC FILE)  
EX: git add . (ADD ALL THE CHANGES) 
```

Commit Message

```
git commit -m (message)

EX: git commit -m (message)
EX: git commit -m "I HAVE CHANGED MY LOGO"
```

Set de Corret Branch

```
git branch -M main

EX: git branch -M main
```

Push Changes to Github

```
git push -u (remote or link) (branch)

EX: git push -u world main
EX: git push -u https://github.com/dvdfreitas/betterworld.git main
```

# HOW TO RUN THE PROJECT AFTER DOWNLOAD

Install node.js
Install composer
Install xampp
- Create a database called betterworld in Xampp

Open the CMD and change the directory for the project

EX: C:\Users\Bandeira\Desktop\BetterWorld

In 1 cmd run this command

```
npm run dev
```

And this one other

```
composer update
```

After the composer update, rename the .env.example file to .env and start the server

```
php artisan migrate:fresh --seed
```

Este comando irá migrar toda a base de dados e semear os respetivos países