<?php
// Package images are uploaded into MySQL database table ('packages_db/images') using this form
// Source: https://www.codexworld.com/store-retrieve-image-from-database-mysql-php/
$db = mysqli_connect('localhost','root','','packages_db');
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
            $query="INSERT into `images` (image) VALUES ('$imgContent')";
            // Insert image content into database 
            $insert = mysqli_query($db,$query); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<!DOCTYPE html>
<html lang="en">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
</html>
