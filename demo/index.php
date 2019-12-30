<?php
require "../src/init.php";
use merax\docparser\DocParse;

$files = [
    'keywordss_${}.docx',
    'keywordss_$[].docx',
];

$tags = include '../src/tags.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>
<form method="post" action="find.php">
  File
  <select name="file_name">
        <? foreach ($files as $file) {?>
            <option value="<?=$file;?>"><?=$file;?></option>
        <?}?>
    </select>
  <br>
    Tag <select name="tag">
        <? foreach ($tags as $tagKey => $tagValue) {?>
          <option value="<?=$tagKey;?>"><?=$tagKey;?></option>
        <?}?>
    </select>
    <br>
    <input type="submit" value="Load File">
</form>
</body>
</html>
