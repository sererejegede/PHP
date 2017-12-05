<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style>
        body{margin: 20px;}
        .div {border: 2px solid #9987ff;padding: 10px;border-radius: 4px;}
        .h1{background-color: #251923;margin: 10px 10px 50px 10px;padding: 15px;font-family: "Comic Sans MS";color: white}
        h2{margin-bottom: 20px; text-decoration: underline;}
        .col-6{border: 1px solid gray;}
    </style>
</head>
<body>
<header>
    <h1 class="h1">Simple File Manager</h1>
</header>
<div class="row">
<div class="col-6">
    <h2>List of Files</h2>
    <div>
    <?php
    spl_autoload_register(function ($class_name) {
        include_once "{$class_name}.php";
    });
    $fileName = $_POST["fileName"];
    $openFile = new FileOpener($fileName);
    $openFile->fileOpeners();

    foreach ($files = FileOpener::fileList('file:///C:/xampp/htdocs/Codes/PHP') as $file){

       echo "<a href='anotherView.php?filelist=$file'>$file</a><br>";
     } ?>
</div>

</div>
    <div class="col-6"></div>

</div>
</body>
</html>

