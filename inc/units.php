
<?php

// number in pounds we want to convert to kilograms
$pounds = 140;
// floating point value for the pound to kilogram conversion
$lbtokg = 0.453;
// use the variables above to calculate pounds multiplied by the kilogram conversion
$totkg = $pounds * $lbtokg;
// display the pounds to kilograms
echo "<p>Weight ";
echo $pounds;
echo " lb = ";
echo $totkg;
echo "kg</p>";



// number in miles we want to convert to kilometers
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$m_to_k = 1.60934;
// use the variable above to calculate miles multiplied by the kilometer conversion
$k = $miles * $m_to_k;

echo ' <p>Distance: ';
echo $miles;
echo 'm = ';
echo $k;
echo 'k </p>';

?>
