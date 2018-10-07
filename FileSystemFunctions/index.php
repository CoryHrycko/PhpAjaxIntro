<?php
$path = '/dirl/myfile.php';
$file='file1.txt';

//return filename

//echo basename($path);


//return filename without ext.

//echo basename($path,'.php');


//return the dir name from path

//echo dirname($path);

//check if the file exists allows folders
//echo file_exists('file1.txt');

//real path ges abosoulte path
//echo realpath($file);

//checks to see if file no folders

//echo if_file('test');

//check if he file writable
//echo is_writable($file);

//get file size
//echo filesize($file);

//CRUD functionality

//create a directory

//mkdir('testing');

//deletes directory
//rmdir('teasting');


//ccopy file
//echo copy('file1.txt','file2.txt');

//rename file

//rename('file2.txt', 'myfile.txt');

//delete file
//unlink('myfile.txt');

//write from file to str

//echo file_get_contents($file);

//update + replace write a string to file

//echo file_put_contents($file, 'goodbye world');


//update+appened
/*
$current = file_get_contents($file);

$current .=' Goodbye World';

file_put_contents($file, $current);


//open a file for reading

$handle = fopen($file, 'r');
$data=fread($handle, filesize($file));
fclose($handle);

echo $data;
*/
// open file for writting
//$handle = fopen($file, 'w');
//or
$handle = fopen('file2.txt', 'w');
$txt = "john doe\n";
fwrite($handle, $txt);
$txt= "Steve Smith\n"
fclose($handle);
// \n is a new line 















?>