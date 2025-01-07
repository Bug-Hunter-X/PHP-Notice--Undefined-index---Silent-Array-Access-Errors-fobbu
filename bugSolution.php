The solution involves checking if the array index exists before accessing it.  This prevents the 'Undefined index' notice.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

if (isset($myArray['c'])) {
  echo $myArray['c'];
} else {
  echo "Index 'c' does not exist.";
}

//Alternative using array_key_exists
if (array_key_exists('c', $myArray)){
  echo $myArray['c'];
} else {
  echo "Index 'c' does not exist.";
}
?>
```