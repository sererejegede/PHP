
<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style>
        /*body{text-align-all: center;}*/
        body{margin: 20px;}
        form{text-align: center; padding: 1px;}
        textarea{margin: 3px;}
        input{margin: 20px;}
        body{margin: 20px;}
        .h1{background-color: #251923;margin: 10px 10px 50px 10px;padding: 15px;font-family: "Comic Sans MS";color: white}
    </style>
</head>
<body>
<header>
    <h1 class="h1">Simple File Manager</h1>
</header>
    <form method="post" action="control.php">
        <input class="" name="fileName" type="text" placeholder="Name of File"><br>
        <textarea rows="15" cols="50" class="bg-transparent" name="fileContent" type="text"></textarea><br>
        <input type="submit" value="Go">
    </form>
</body>
</html>
