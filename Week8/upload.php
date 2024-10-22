<!-- <?php
if(isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targerfile = $targetdir . basename($_FILES["myfile"]["name"]);

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targerfile)) {
        echo "File berhasil diunggah";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?> -->

<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah";
            //echo "<img src='$targetfile' width='200' style='height: auto;' alt='Thumbnail'>";
        }
        else {
            echo "Gagal menggunggah file.";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>