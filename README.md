# 📝 Simple Notes App (Terminal + Docker + PHP)

This is a terminal-based notes app built with PHP, running inside Docker.  
**Made for teaching purposes.** 🎯

---

## 🚀 How to run the app

### 1. Clone the project

``` bash
git clone origin https://github.com/usmonov-r/php-terminal-notes.git
cd note-taking
```

### 2. Create ```data/notes.txt``` file *(if not exist)*

```
mkdir data
touch data/notes.txt
```

### 3. Build and start the app

```angular2html
docker-compose up --build
```

###  4. Open the container terminal
In a new terminal, run:

```bash
docker exec -it <container_name> bash
```
(Replace <container_name> with your actual running container name.)

### 5. Run the app inside the container

```angular2html
php index.php
```
###  Use the app
Choose an option (1-3) inside the terminal:

* 1: Write a new note

* 2: Read all notes

* 3: Exit

###  Stopping the app
Press **CTRL+C** to stop.


###  Notes are saved
Your notes are saved locally inside the ```data/notes.txt``` file.