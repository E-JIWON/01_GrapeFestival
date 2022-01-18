<?php
echo "uploading...";
$uploadFile = "./img/sub_gallery_img/" . basename($_FILES['getFile']['name']);
if(move_uploaded_file($_FILES['getFile']['tmp_name'], $uploadFile)){
    // echo"<img style='width: 500px' src='./img/sub_gallery_img/{$_FILES['getFile']['name']}'/><br>";
    // echo "url: ./img/sub_gallery_img<br>";
    // echo "upload done!<br>";
    $fileName = "{$_FILES['getFile']['name']}";
    $fileInfo = "{$_POST['get_info']}";
    list($width, $height, $type, $attr) = getimagesize($uploadFile);
    // echo "<hr>" . $fileName;
    // echo "<br>" . $fileInfo;

    $f = fopen("imgList.txt", "a+");
    fwrite($f, "\r\n" . "'" . $fileInfo . "'/ '" . $fileName . "'/ " . $width . "/ " . $height);
    fclose($f);
    echo '<script>alert(" 업로드 되었습니다\n");';
    echo ' location.href="./sub_gallery.php";</script>';
}
else{
    echo "<script>error</script>";
}


?>