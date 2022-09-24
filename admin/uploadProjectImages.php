<?php
// Count total files
error_reporting(0);
include "connect.php";
$type =$_POST["type"];
$projectId = $_POST["project"];
$buildingId = $_POST["buliding"];
$insertImagesFlag = false;
$sql = "select id from project_building
where project_number = '".$projectId."' AND building_number= "."'$buildingId'";
http://localhost../Upload/
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $project_building_id =  $row["id"];
}
$countfiles = count($_FILES['files']['name']);
// Upload Location
$upload_location = "../Upload/";
// To store uploaded files path
$files_arr = array();
$bytes = random_bytes(20);
$randomToken = bin2hex($bytes);
// Loop all files
$insertImages = "insert into imgs(`project_building_id`,`imgetype`,`img`,`image_url_token` ,`upload_date`) values ";
$uploadDate = date("Y-m-d H:i:s");
for($index = 0;$index < $countfiles;$index++){

    if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
        // File name
        $filename = $_FILES['files']['name'][$index];

        // Get extension
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // Valid image extension
        $valid_ext = array("png","jpeg","jpg");

        // Check extension
        if(in_array($ext, $valid_ext)){
            $insertImagesFlag = true;
            $insertImages .=
                "(".$project_building_id." ,". $type[$index] ." ,'".$_FILES['files']['name'][$index]."' ,'".
                $randomToken."' ,'".
                $uploadDate."'),";

            // File path
            $path = $upload_location.$filename;

            // Upload file
            if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
                $files_arr[] = $path;
            }
        }else{
            return "The ". $valid_ext ." Not Supported";
        }
    }
}

if($insertImagesFlag){
    $conn->query(substr($insertImages , 0 , -1));
    $result = str_replace(".." , "" , $upload_location);
    echo "https://".$_SERVER[HTTP_HOST].$result.$randomToken;
}

