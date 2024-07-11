<?php

$cookie_name = "user";
$cookie_value = "Rami";

// Set the cookie
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

// Display all cookies
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' is not set!";
}

// Delete the cookie
setcookie($cookie_name, "", time() - 3600, "/");

echo "<br>Cookie '$cookie_name' has been deleted.";