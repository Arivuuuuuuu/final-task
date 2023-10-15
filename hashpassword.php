

<?php

//if($_SERVER["REQUEST_METHOD"] =="POST"){
   // echo "heyys ";
//}

$password="arivu@12";

$hash=password_hash($password,PASSWORD_DEFAULT);

echo "$hash.<br>";
echo "$password";

?>
