<?php
require('assoc.php');

$arr1 = array();
$arr1['contact']['login'] = 'Krishna Kumar';
$arr1['contact']['user']['firstName'] = 'Krishna';
$arr1['contact']['user']['LastName'] = 'Kumar';
$arr1['contact']['addr']['location'] = 'Kerala';

$arr2 = array();
$arr2['contact']['login'] = 'Krishna Kumar SS';
$arr2['contact']['user']['firstName'] = 'Krishna';
$arr2['contact']['user']['middleName'] = 'Kumar';
$arr2['contact']['user']['LastName'] = 'SS';
$arr2['contact']['addr']['location'] = 'Trivandrum';

$tmp = array();

assoc_diff_recursive($arr1, $arr2, $tmp);

print_r($tmp);

