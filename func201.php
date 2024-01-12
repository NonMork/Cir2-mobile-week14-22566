<?php 
function sayHi()  {
    return"Hello,World!";
    
}
echo $message("Hello,World!");
?>
<?php 
echo("<br/>=============<br/>");
?>



<?php 
$message = function ($hi) {
    return $hi;
};
echo $message("Hello,World!2");
?>

<?php 
echo("<br/>=============<br/>");
$message = fn ($name,$age)=> "Name is: " .$name.", Age is".$age; 
echo $message("Mark Zuckerberg",25);
?>