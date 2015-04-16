<?php
/*
Samuel Bui
Assignment 2

Instruction:

Get the text file called input.txt from github.com/savtwo/

1. Read the file and store the contents into an array called $array_all and print out the contents as they appear in the file.

2. Split $array_all into two new arrays called $array_string and $array_int. Sort the arrays by descending order and print out the array. Each value should be on a new line.

*/



//Reviewing from teacher


/*

-Open file
-fill array_all with content
-iterate thru

    foreach ($array_all as $item){
    //check data type
    if (is_numeric($item)) { //check if #
        array_push($array_int, $item);
        //sort array
        }
        elseif //check string
        is_string
        pringt
        
        
    }
*/

//Part 1
//reading the file and store in an array

$myfile = fopen("input.txt", "r") or die("Unable to open file!");

$myStr = fread($myfile,filesize("input.txt"));  //storing data into $myStr
$array_all = explode("\n", $myStr);            

//print every element of the array


foreach ($array_all as $y){
    echo nl2br($y);   
}
echo "<br/>";
echo "<br/>";


//Part 2
//2. Split $array_all into two new arrays called $array_string //and $array_int. Sort the arrays by descending order and print //out the array. Each value should be on a new line.


$array_int = array();
$array_string = array();

$length = count($array_all);
for ($i=0; $i< $length; $i++){
    if (preg_match('#[0-9]#',$array_all[$i]))
    {
        $array_int[$i] = $array_all[$i];
        $array_int[$i] = (int)$array_int[$i];
        rsort($array_int);
    }
    else
    {
        $array_string[$i] = $array_all[$i];
        rsort($array_string);
    }
}
 


foreach ($array_int as $y){
    echo "<br/>".($y);   
}


echo "<br/>";
echo "<br/>";

foreach ($array_string as $y){
    echo nl2br($y), "\n";   
}



fclose($myfile);
?>