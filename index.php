<?php

$notesFile = '/data/notes.txt';


if (!file_exists($notesFile)) {
    @mkdir(dirname($notesFile), 0007, true);
    touch($notesFile);
}

while (true) {
    echo "\n ====== Simple Note App ====== \n";
    echo "1. Write a new note\n  ";
    echo "2. Read all notes\n";
    echo  "3. Exit\n";
    echo "==================\n";
    echo "Choose an option (1-3)";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Enter you note:";
            $note = trim(fgets(STDIN));
            $timestamp = date('Y-m-d H:i:s');
            file_put_contents($notesFile, "$timestamp - $note\n", FILE_APPEND);
            echo "Note saved\n";
            break;
        case 2:
            echo "Your notes:\n";
            echo "------------------------------------\n";
            $notes = file_get_contents($notesFile);
            echo $notes ? $notes : "No notes yet\n";
            echo "------------------------------------\n";
            break;
        case 3:
            echo "Bye bye 👋";
            exit(0);
        default:
            echo " Invalid option, please choose 1,2 or 3\n";
            break;
    }

}
