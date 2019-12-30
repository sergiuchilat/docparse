<?php
require_once '../src/init.php';
//var_dump($_POST);
//die();
$fileParser = new \merax\docparser\DocParse($_POST['file_name']);
$fileParser->setTagOptions($tags, $_POST['tag']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>
    <a href="<?=$fileParser->setKeywordsValue($_POST['keywords']);?>" >Download Result</a>
</body>
</html>
