# PHP-Array2Text
PHP function to get the plain text of a multidimensional array

# Usage


<?php

$cars = array
  (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
);


$text = Array2Text($cars);

echo $text";
<?php


will output : 

<pre>
Volvo, 22, 18, BMW, 15, 13, Saab, 5, 2, Land Rover, 17, 15
</pre>
