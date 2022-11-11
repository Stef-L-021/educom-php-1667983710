<?php

// fread

$myfile = fopen("webdictionary.txt", "r") or die("unable to open file!");           // read only
echo fread($myfile, filesize("webdictionary.txt"));;                                 // reads the actual file and echos it. The filesize is the maximum number of bytes to read. IF not specified it will read everything
fclose($myfile);                                                                    // sluit de file weer op de server. good programming practice. Gebruikt de filename, of een variable die die heeft

// fgets

$myfile = fopen("webdictionary.txt", "r") or die("unable to open file!");           // Als we de file eerder niet hadden gesloten was deze line niet nodig geweest.
echo fgets($myfile);                                                                // leest 1 line
fclose($myfile);                                

// feof

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {                                                             // checks if the "end-of-file" (EOF) has been reached.
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

// fgetc

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgetc($myfile);                                                            // read a single character from a file.
} fclose($myfile);

?>