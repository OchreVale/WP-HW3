<?php
echo "<strong>Question 1</strong><br>";
function isBitten(){
    $var = rand(0,1);
    if ($var == 1){
       echo "<a href='true.php' target = '_blank'>Charlie ate my lunch.</a>";
    }
    else{
        echo "<a href='false.php' target = '_blank'>Charlie did not eat my lunch.</a>";
    }
}
isBitten();
echo "<br>";
echo "<strong>Question 2</strong><br>";
function checkerboard(){
    $black="
<div 
style = 'background-color: black; width:35px; height:35px; padding:1px; spacing:1px; border:1px'>
</div>";
$red ="
<div 
style = 'background-color: red; width:35px; height:35px; padding:1px; spacing:1px; border:1px'>
</div>";
$row= "<div style='display:flex'>$red $black $red $black $red $black $red $black $red $black</div>";
$alter = "<div style='display:flex'>$black $red $black $red $black $red $black $red $black $red</div>";
for ($i = 0; $i<10; $i +=1){
    for($j = 0; $j<1; $j +=1){
        if ($i%2 == 0){
            echo $row;
        }
        else{
            echo $alter;
        }
    }
}
}
checkerboard();
echo "<strong>Question 3:</strong><br>";
function print_array(){
    $month = array ('January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December'); 
    echo "Printing the array: ";
    print_r($month);
    echo "with a forEach loop.<br>";
    foreach ($month as $key) {
        echo "$key <br>";
    }
    sort($month);
    echo "<strong>Printing the previous array after it's been sorted:</strong><br>";
    foreach($month as $key){
        echo "<i>$key<br></i>";
    }
}
print_array();
echo"<strong>Question 4:</strong><br>";
$top_restaurants["Fogo de Chão"] = 40.50;
$top_restaurants["Aviva by Kameel"] = 15.00;
$top_restaurants["Bone’s Restaurant"] = 65.00;
$top_restaurants["Umi Sushi Buckhead"] = 40.50;
$top_restaurants["Fandangles"] = 30.00;
$top_restaurants["Capital Grille"] = 60.50;
$top_restaurants["Canoe"] = 35.50;
$top_restaurants["One Flew South"] = 21.00;
$top_restaurants["Fox Bros. BBQ"] = 15.00;
$top_restaurants["South City Kitchen Midtown"] = 29.00;
function print_table($arr){
    echo "<strong> Printing the values before they're sorted.";
    echo "<table style = 'border:1px'>";
    foreach($arr as $key => $price){
    echo "<tr>
    <td>$key</td>
    <td>\$$price</td>
    </tr>";
    }
    echo "</table>";
}
print_table($top_restaurants);
function sort_byname($arr){
    ksort($arr);
    echo "<strong> Printing the values after they've been sorted by keys:</strong>";
    echo "<table style = 'border:1px'>";
    foreach($arr as $key => $price){
    echo "<tr>
    <td>$key</td>
    <td>\$$price</td>
    </tr>";
    }
    echo "</table>";
}
sort_byname($top_restaurants);
function sort_byvalue($arr){
    asort($arr);
    echo "<strong> Printing the values after they've been sorted by values:";
    echo "<table style = 'border:1px'>";
    foreach($arr as $key => $price){
    echo "<tr>
    <td>$key</td>
    <td>\$$price</td>
    </tr>";
    }
    echo "</table>";
}
sort_byvalue($top_restaurants);
?>