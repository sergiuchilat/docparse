<?php
require_once '../src/init.php';
use \merax\DocParse\Parser;
$fileParser = new Parser();
$filename = 'data/keywords.docx';
$keywords = $fileParser->extractKeywords($filename);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>
    <form method="post" action="replace.php">
        <? foreach ($keywords as $keyword) {?>
            <?=$keyword?><input type="text" name=keywords["<?=$keyword?>"]> <br>
        <?}?>
        <strong>Filename</strong><input type="text" name="file_name" value="<?=$filename;?>"> <br>
        <input type="submit" value="Parse">
    </form>
</body>
</html>


