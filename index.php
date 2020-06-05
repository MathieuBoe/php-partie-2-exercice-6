<?php
$title = 'Exercice6';
$age = 18;
?>
<? include 'header.php';?>
<?php 
if ($age >= 18)
{
    echo 'Tu es majeur';
}
else
{
    echo 'Tu n\'es pas majeur';
}
?>
<?include 'footer.php';?>