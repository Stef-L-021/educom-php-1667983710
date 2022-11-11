<?php

$myfile1= fopen("testfile.txt", "w");                 // Creates file

// Write to file fwrite()

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");         // maakt nieuwe file genaamd newfile.txt
$txt = "John Doe\n";                                                        // wat doet die n?
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 1ste keer
$txt = "Jane Doe\n";
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 2de keer
fclose($myfile);

// overwriting

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");         // Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 1ste keer
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 2de keer
fclose($myfile);

// append text

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");         // Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
$txt = "Donald Duck\n";
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 1ste keer
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);                                                      // write txt --> myfile(newfile) 2de keer
fclose($myfile);
// omdat de file steeds weer opnieuw wordt gewist ziet het steeds weer hetzelfde uit zelf na hetladen van de pagina
?>