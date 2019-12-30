<?php
require_once '../src/init.php';

use merax\docparser\DocParse;
$filename = $_POST['file_name'];
$fileParser = new DocParse($filename);

$fileParser->setTagOptions($tags, $_POST['tag']);
$keywords = $fileParser->extractKeywords();
print_r($keywords);

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
            <?=$keyword?><input type="text" name="keywords[<?=$keyword?>]"> <br>
        <?}?>
        <strong>Filename</strong><input type="text" name="file_name" value="<?=$filename;?>"> <br>
        <strong>Tag</strong><input type="text" name="tag" value="<?=$_POST['tag'];?>"> <br>
        <input type="submit" value="Parse">
    </form>
</body>
</html>


