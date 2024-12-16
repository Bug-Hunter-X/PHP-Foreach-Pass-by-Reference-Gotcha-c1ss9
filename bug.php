```php
function processArray(array $arr): array {
  foreach ($arr as &$value) {
    $value = $value * 2;
  }
  return $arr;
}

$numbers = [1, 2, 3, 4, 5];
$result = processArray($numbers);
print_r($result);
```