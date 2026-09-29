<!DOCTYPE html>
<html>
    <head>
        <title>1st Floor Moss</title>
</head>
<body>

<?php
$targetDir = "1stMoss/":
if(is_dir($targetDir)) {
    $files = scandir($targetDir);
    echo "<ul>";
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $filePath = $targetDir . $file;
            echo "<li><a href='$filePath' target='_blank'>$file</a></li>";
        }
    }
    echo "</ul>";
}
?>
</body>
</html>