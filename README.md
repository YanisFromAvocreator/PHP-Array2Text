# PHP-Array2Text
PHP function to get the plain text of a multidimensional array

# Usage


<pre>

$cars = array
  (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$text = Array2Text($cars, []);

echo $text;
</pre>


will output : 

<pre>
Volvo, 22, 18, BMW, 15, 13, Saab, 5, 2, Land Rover, 17, 15
</pre>

# Options

optionality, you can remove the commas in the outputted plain text by passing an option when you call the function
<pre>
$options = [
  "comma" => true
];

$cars = array
  (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$text = Array2Text($cars, $options);
</pre>

OR
<pre>
$text = Array2Text($cars, ["comma" => true]);
</pre>

