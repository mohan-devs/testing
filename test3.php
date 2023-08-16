<?php

// Google Drive URL
$googleDriveUrl = 'https://drive.google.com/file/d/16xpD_BnI-y3gBpuu3TQoBgeLZfdvkeTE/view?usp=sharing';

// Extract file ID from the URL
$matches = [];
preg_match('/\/d\/([^\/]+)/', $googleDriveUrl, $matches);
if (isset($matches[1])) {
    $fileId = $matches[1];

    // Fetch file name and extension
    $fileInfo = pathinfo($googleDriveUrl);
    $fileName = $fileInfo['filename'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    echo "File Name: $fileName<br>";
    echo "File Extension: $fileExtension<br>";
} else {
    echo "Invalid Google Drive URL";
}

?>
