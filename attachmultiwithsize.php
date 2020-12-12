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
        // var_dump($files);
        $filename=$files["name"];
        $filetmpname=$files["tmp_name"];
        $filetype=$files["type"];
        $filesize=$files["size"];
        // var_dump($filetmpname);
        $limtsize=1;
        $totalfilesize=array_sum($filesize);
        $listen=count($filename);

        echo $totalfilesize. "byte";
        echo "<br/>";

     
        $filesizeinmb=$totalfilesize/1000000;

        foreach($filetmpname as $key=>$value){  
            if($filesizeinmb < $limtsize){
                move_uploaded_file($filetmpname[$key], "fileserver/.$filename[$key]");
            }else{
                echo "Over size";
            }
        }
            echo "<br/>". ($listen > 1 ? $listen."Files are successful uploaded" : $listen."files are successful uploaded");
           
            
      
        
       
    }
}


?>