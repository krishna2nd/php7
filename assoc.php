function assoc_diff_recursive($array1, $array2, &$diffArray=array()) {
    foreach ($array2 as $key => $val) {
        if (isset($val) &&
            gettype($val) != 'array') {
            $newVal = !isset($array1[$key]);
            if ($newVal ||
                !$newVal && $val != $array1[$key]) {
                if (!isset($diffArray[$key]))
                    $diffArray[$key] = array();
                $diffArray[$key] = $val;
            }
        } else
            assoc_diff_recursive($array1[$key], $val, $diffArray[$key]);
    }
}
