<?php
$name = $_POST['name'];
$email = $_POST['email'];
mail('theodorebaca@gmail.com',$name,'Hello!',$email);
?>
