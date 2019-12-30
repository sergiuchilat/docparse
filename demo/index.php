<?php
$files = [
    'data/keywords.doc',
    'data/keywords2.docx',
    'data/keywords3.doc'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOCx Keywords finder</title>
</head>
<body>
<form method="post" action="find.php">
    <select name="file_name">
        <? foreach ($files as $file) {?>
            <option value="<?=$file;?>"><?=$file;?></option>
        <?}?>
    </select>
    <input type="submit" value="Load File">
</form>
</body>
</html>
