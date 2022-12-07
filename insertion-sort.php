<?php
function insertion($arr)
{


    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $b = $i - 1;
        while ($b >= 0 && $arr[$b] > $key) {
            $arr[$b + 1] = $arr[$b];
            $b = $b - 1;
            $arr[$b + 1] = $key;
        }
    }
}
echo insertion($arr);
