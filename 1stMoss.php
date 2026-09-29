<!DOCTYPE html>
<html>
    <head>
        <title>1st Floor Moss</title>
</head>
<body>
   <?php
   // Define the folder where files will be saved
   $targetDir = "1stMoss/";

   // Create the folder of it doesn't exist
   if (!is_dir($targetDir)){
    mkdir($targetDir, 0755, true);
   }

   $targetFile = $targetDir . basename($_FILES["uploadedFile"]["name"]);

   // Move the uploaded file from temporary memory to your "uploads" folder
   if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) {
    echo "The file" . htmlspecialchars(basename($_FILES["uploadedFiles"]["name"])) . "has been uploaded.";
    echo '<br><a href="1stMoss.html"></a>';
   }else{
    echo "Sorry, there was an error uploading your file.";
   }
   ?>
    </body>
    </html