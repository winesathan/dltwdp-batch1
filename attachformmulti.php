<!DOCTYPE html>
<html>
<head><title>attachformmulti</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="attach[]" id="attach" class="" multiple><br/><br/>
    <input type="submit" name="upload" id="upload" class="" value="Upload">
    </form>
</body>
</html>

<?php
echo "<hr/>";
if(isset($_POST['upload'])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $files=$_FILES["attach"];
        var_dump($files);
        $filename=$files["name"];
        $filetmpname=$files["tmp_name"];
        $filetype=$files["type"];
        $filesize=$files["size"];
        // var_dump($filetmpname);
        foreach($filetmpname as $key=>$value){  
            move_uploaded_file($filetmpname[$key], "fileserver/.$filename[$key]");
            echo "Upload successful";
        }
            
        
       
    }
}


?>