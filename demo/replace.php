<?php
require_once '../src/init.php';
//var_dump($_POST);
//die();
$fileParser = new \merax\docparser\DocParse();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>

    <a href="<?=$fileParser->setKeywordsValue($_POST['file_name'], $_POST['keywords']);?>" >Downlad Result</a>

</body>
</html>
