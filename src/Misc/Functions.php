<?php
namespace Misc;

class Functions{
    static function recursive_keys($input){ 
        $temp = array();

        foreach ($input as $k => $v ) {  
            if (is_string($k)) {
                $temp[] = $k;

                if (is_array($v)){
                    $temp = array_merge($temp, self::recursive_keys($v));
                }
            }
        }

        return $temp;
    }  
}