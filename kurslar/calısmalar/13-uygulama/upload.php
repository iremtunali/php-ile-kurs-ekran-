<?php
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        
        $dest_path="./uploadFiles/";
        $filename=$_FILES["fileToUpload"]["name"];
        $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];//tmp name olduğu konumu söyler
        $fileDestPath=$dest_path.$filename;
        if(move_uploaded_file($fileSourcePath,$fileDestPath)){
            echo "dosya yüklendi";
        }else{
            echo "hata";
        }

    }
?>