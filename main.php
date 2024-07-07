<?php

$message = "First line of text\nSecond line of text";


$message = wordwrap($message, 70);

mail("lynsnowie@outlook.com", "My subject", $message);
?>
