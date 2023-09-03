<?php
$uploadsDirectory = __DIR__ . '/uploads';
if (!is_dir($uploadsDirectory)) {
    mkdir($uploadsDirectory);
    echo 'Directory "uploads" created successfully.';
} else {
    echo 'Directory "uploads" already exists.';
}

$XDirectory = $uploadsDirectory . '/X';
if (!is_dir($XDirectory)) {
    mkdir($XDirectory);
    echo 'Directory "X" created successfully.';
} else {
    echo 'Directory "X" already exists.';
}
?>