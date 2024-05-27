<?php
$day = date("l");

switch($day) {
    case "Monday":
        echo "Today is $day";
        break;
    case "Tuesday":
        echo "Today is $day";
        break;
    case "Wednesday":
        echo "Today is $day";
        break;
    case "Thursday": 
        echo "Today is $day";
        break;
    case "Friday":
        echo "Today is $day";
        break;
    case "Saturday":
        echo "Today is $day";
        break;
    case "Sunday":
        echo "Today is $day";
        break;
    default:
        echo "Something went wrong!";
        break;
}
?>