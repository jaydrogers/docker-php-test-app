<?php

// Simple routing mechanism
$requestUri = $_SERVER['REQUEST_URI'];
$routes = [
    '/' => function() {
        echo "Hello World!<br/>";
        showUserInfo();
        phpinfo();
    }
    // '/up' => function() {
    //     echo "good";
    // },
    // Add more routes here
];

// Function to show user info
function showUserInfo() {
    $userInfo = [];
    exec('whoami', $userInfo);
    echo "User Name: " . $userInfo[0] . "<br/>";

    $userId = [];
    exec('id -u', $userId); // 'id -u' gets the user ID
    echo "User ID: " . $userId[0] . "<br/>";

    $groupId = [];
    exec('id -g', $groupId); // 'id -g' gets the group ID
    echo "Group ID: " . $groupId[0] . "<br/>";
}

// Route matching
if (array_key_exists($requestUri, $routes)) {
    $routes[$requestUri]();
} else {
    // Route not found, return 404
    header("HTTP/1.1 404 Not Found");
    echo "404 Not Found";
}

?>
