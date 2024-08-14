<?php
// Disable error reporting (optional, but recommended for production)
error_reporting(0);

// The new URL to redirect to
$new_url = 'https://www.amazon.com/Simple-Joys-Carters-Short-Sleeve-Bodysuit/dp/B07GY1RRZF';

// Send the 301 Moved Permanently header
header("Location: $new_url", true, 301);

// Stop further execution of the script
exit();
