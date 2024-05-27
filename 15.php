<!-- // php script to demonstrate associate array -->
<?php
     $person = array(
        "name"=> "Subhash Kumar",
        "age" => 20,
        "roll"=> 1303 ,
        "gender"=>"male",
);
    echo "<hr> the name of the person is ".$person["name"];
    echo " <hr> The age of The peroson is ".$person["age"];
    echo " <hr> The roll of the perosn is ".$person["roll"];
    echo "<hr> The gender of the person is ".$person["gender"];
?>