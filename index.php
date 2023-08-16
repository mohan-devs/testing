<?php
// $googleDriveLink = 'https://drive.google.com/file/d/1XtC3RDoD24QNgYjmEW0WT-sRPhXIaXYy/view';
// $googleDriveLink="https://drive.google.com/file/d/1GOf79Vwmj-tgZ1LyLod5-YuYPN5r7fVF/view";
// $googleDriveLink="https://drive.google.com/drive/folders/1yRJ8Jja7r88_QAVL7tPSHt9aNxNdhE-N";
// $googleDriveLink="https://drive.google.com/drive/folders/12NRl8-Dqn2EwNeqrRFVc4DDhcQsXpQtn";
$googleDriveLink="https://drive.google.com/file/d/1tmZJ4SeX5W0wlJ1_2yF476eEopmJlpsb/view?usp=drivesdk";

// Extract file ID using string manipulation
// $startPosition = strpos($googleDriveLink, '/d/') + 3;
// $endPosition = strpos($googleDriveLink, '/', $startPosition);
// $fileId = substr($googleDriveLink, $startPosition, $endPosition - $startPosition);
// $link="dev-branch";
//new different url of google drive link
$patterns = [
    '/\/file\/d\/([a-zA-Z0-9_-]+)/',
    '/id=([a-zA-Z0-9_-]+)/',
    '/folders\/([a-zA-Z0-9_-]+)/',
];

foreach ($patterns as $pattern) {
    if (preg_match($pattern, $googleDriveLink, $matches)) {
        $fileId= $matches[1];
    }
}
// echo "File ID: $fileId";
$fileId="64d10aa2f9ebaa54b6d8f45e";
$fileUrl = 'https://drive.google.com/uc?id='.$fileId;

// Download the file
$fileContent = file_get_contents($fileUrl);
$localFilePath = 'image/original5.3dm';
// Create the directory if it doesn't exist
if (!is_dir(dirname($localFilePath))) {
    mkdir(dirname($localFilePath), 0777, true);
}

// Save the downloaded file content to a local location
$data=file_put_contents($localFilePath, $fileContent);


// Download the file using cURL
// $ch = curl_init($fileUrl);
// $fp = fopen($localFilePath, 'wb');
// curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// curl_exec($ch);
// curl_close($ch);
// fclose($fp);

// if($data){
    // echo "File downloaded and saved successfully!";
// }
?>
<!-- https://drive.google.com/uc?id=1XtC3RDoD24QNgYjmEW0WT-sRPhXIaXYy&export=download -->