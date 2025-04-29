# 📝 Simple Notes App (Terminal + Docker + PHP)

This is a terminal-based notes app built with PHP, running inside Docker.  
**Made for teaching purposes.** 🎯

---

## 🚀 How to run the app

### 1. Clone the project

``` bash
git clone origin https://github.com/usmonov-r/php-terminal-notes.git
cd php-terminal-notes
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

### 4.   Use the app
Choose an option (1-3) inside the terminal:

* 1: Write a new note

* 2: Read all notes

* 3: Exit

### 5. Stopping the app
Press **CTRL+C** to stop.


### 6. Notes are saved
Your notes are saved locally inside the ```data/notes.txt``` file.
