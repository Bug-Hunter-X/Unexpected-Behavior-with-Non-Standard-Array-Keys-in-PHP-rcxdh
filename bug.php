In PHP, a common yet subtle error arises when dealing with array keys that are not strictly integers or strings.  PHP's loose typing allows for keys to be other data types like objects or resources, which can lead to unexpected behavior or errors.  Consider this scenario:
```php
$obj = new stdClass();
$arr[$obj] = 'value';
```
Attempting to access `$arr[$obj]` later might fail silently or lead to unpredictable results depending on the object's internal structure and how PHP handles its conversion to a string for the key.  This is because PHP will implicitly convert the object to a string for use as a key, and this string representation may change over time or be non-deterministic.

Another example involves using arrays with non-integer keys as if they were associative arrays. While possible, this can result in confusing output or unexpected behavior if not handled correctly.
```php
$arr = [1.2 => 'a', 'b' => 2];
var_dump($arr);
// The keys are converted to strings, which might be different from what you expect
```