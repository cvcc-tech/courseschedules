<?php
// get_schedules.php
// This script should be placed in the same directory as your .json schedule files.

// Set content type header to JSON
header('Content-Type: application/json');

// Scan the current directory for files ending with .json
$json_files = glob("*.json");

// You might want to filter out this script itself if it somehow ended up with a .json extension
// Or other non-schedule .json files. For now, we assume all .json files are schedules.

// Output the list of filenames as a JSON array
echo json_encode(array_values($json_files)); // array_values ensures it's a simple, non-associative array
?>