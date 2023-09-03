<?php
    // Handle file upload

    $targetDirectory = "uploads/X/";
    $targetFile = $targetDirectory . basename($_FILES["fileUpload"]["name"]);
    $uploadSuccess = true;
    $uploadFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "File already exists.";
        $uploadSuccess = false;
    }

    // Allow only certain file types (modify this as needed)
    if ($uploadFileType != "pdf" && $uploadFileType != "doc" && $uploadFileType != "docx") {
        echo "Only PDF, DOC, and DOCX files are allowed.";
        $uploadSuccess = false;
    }

    // Check if upload was successful
    if ($uploadSuccess) {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }
?>
