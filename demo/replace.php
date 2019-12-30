<?php
require_once '../src/lib/DocParse.php';
use \merax\DocParse\Parser;
$fileParser = new Parser();
$keywords = $fileParser->setKeywordsValue($_POST['file_name'], $_POST['keywords']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>
<pre>
<?
print_r($_POST);
?>
    </pre>
</body>
</html>
