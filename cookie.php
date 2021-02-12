<!DOCTYPE html>
<?php
//A cookie is created with the setcookie() function.
//La sinstassi è setcookie(name, value, expire, path, domain, secure, httponly); di cui solo name è richiesto.
//The setcookie() function must appear BEFORE the <html> tag.
//to prevent URLencoding, use setrawcookie() instead
//To delete a cookie, use the setcookie() function with an expiration date in the past: ad esempio -1 giorno= - 86400
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>






<!DOCTYPE html>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
//verificare se i cookie sono abilitati o meno
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>

</body>
</html>





