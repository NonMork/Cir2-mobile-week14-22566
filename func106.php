<?php 
function greeting($fname ="Elon",$lnsme = "Musk")  {
    
    return $fname . "" .$lnsme ."<br/>";
}
$message1 = greeting();
$message2 = greeting("Mark", "Zuckerberg");
print "This is  a deault argument values =".$message1;
print "This is  a deault argument values =".$message2;
