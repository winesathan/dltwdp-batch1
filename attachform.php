<?php

if(isset($_POST['upload'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $attach=$_FILES["attach"];
       // var_dump($attach);
        $filename=$attach["name"];
        //$filetype=$attach["type"];
        $filetmpname=$attach["tmp_name"];
        $filesize=$attach["size"];

        /*echo "file name is =". $filename ."<br/>";
        echo "file type is =". $filetype ."<br/>";
        echo "file tem name is =". $filetmpname ."<br/>";
        echo "file size is =". $filesize ."<br/>";*/
        
        //move to fileserver ( temp name, destination filename)
       $limit=1;
       $filesizeinmb=$filesize/1000000;

        if($filesizeinmb > $limit){
            echo "Woo Your file is too bit. it's have {$filesizeinmb}.Can't upload,we allow  only {$limit}mb only";
        }else{
            move_uploaded_file($filetmpname,'fileserver/'.$filename);

            echo "success uploaded";
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Attach Form</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<label for="attach">Attach</label>
<input type="file" name="attach" id="attach" class=""> <br/><br/>
<input type="submit" name="upload" id="upload" class="" value="Upload">

</form>
</body>
</html>