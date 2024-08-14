<?php
// Disable error reporting (optional, but recommended for production)
error_reporting(0);

// The new URL to redirect to
$new_url = 'https://www.amazon.com/stores/Stanley/page/47A7E765-00AF-4F34-AC01-240A7EDD822A';

// Send the 301 Moved Permanently header
header("Location: $new_url", true, 301);

// Stop further execution of the script
exit();
