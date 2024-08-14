<?php
// Disable error reporting (optional, but recommended for production)
error_reporting(0);

// The new URL to redirect to
$new_url = 'https://www.amazon.com/stores/luxury/page/EB939B9B-AF9F-49CB-9C14-20B848A813BF';

// Send the 301 Moved Permanently header
header("Location: $new_url", true, 301);

// Stop further execution of the script
exit();
