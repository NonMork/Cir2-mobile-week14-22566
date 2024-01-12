<?php 
    function dayName()  {
        $day1 = "Monday";
        $day2 = "Tuesday";
        $day3 = "Wedensday";
        $day4 = "Thursday";
        return array ($day1 , $day2 , $day3 , $day4);
    }
    $days = dayName();
    print "Day1:". $days [0] . "<br/>";
    print "Day2:". $days [1] . "<br/>";
    print "Day3:". $days [2] . "<br/>";
    print "Day4:". $days [3] . "<br/>";
?>