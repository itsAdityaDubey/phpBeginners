<?php
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_dir."<br>";
if(isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
}



// Other Functions
// $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //To obtain file type
// file_exists($target_file) //Check if file exist
// $_FILES["fileToUpload"]["size"] // To obtain file size

?>