```php
function processArray(array $arr): array {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2;
  }
  return $newArray;
}

$numbers = [1, 2, 3, 4, 5];
$result = processArray($numbers);
print_r($result);
```