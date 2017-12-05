<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style>
        body{margin: 20px;}
        .div {border: 2px solid #9987ff;padding: 10px;border-radius: 4px; display: inline-block;}
        .h1{background-color: #251923;margin: 10px 10px 50px 10px;padding: 15px;font-family: "Comic Sans MS";color: white}
    </style>
</head>
<body>
<header>
    <h1 class="h1">Simple File Manager</h1>
</header>
<?php
spl_autoload_register(function ($class_name) {
    include_once "{$class_name}.php";
});
?>
<div>
    <?php
        $filename = $_GET["filelist"];
        $openFile = new FileOpener($filename);

    ?>
    <div class="div">
        <h3><?echo $filename ?></h3>
       <p> <?php
            echo '<pre>'.$openFile->fileReader().'</pre>';
         ?>
       </p>
    </div>
    <br>
    <hr>
    <br>
    <br>
    <br>
    <a style="margin-left: 20px " href="create.php">Create New</a>
</div>
</body>
</html>

<?php
