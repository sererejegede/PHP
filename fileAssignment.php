<?php
spl_autoload_register(function ($class_name) {
    include_once "{$class_name}.php";
});
//$fileName = $_POST['fileName'];
$openFile = new FileOpener("2bugfile.txt");
$writing = "some random stuff";
//
//if($openFile->fileOpeners());
//echo "file created";
$openFile->fileOpeners();
//$openFile->writeToFile($writing);
//$openFile->writeToFile("My name is Jegede Oluwasererefunmi Faith\n");
//$openFile->writeToFile("I'm a programmer");
//$openFile->fileReader();
//$openFile->deleteFile();
//$openFile->fileList('file:///C:/xampp/htdocs/Codes/PHP/');
/*
1.  Write a php class that can create, read, update and delete any text file,
2.  Design a simple application which utilizes this class to create,read, update and delete the
 *  content of text file
 * is_file, fopen,is_writeable,mkdir,readfile,rename,unlink
 */

//file:///C:/Users/oluwatosin/Music/'
//file:///C:/xampp/htdocs/Codes/PHP/'
?>

