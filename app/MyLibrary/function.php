<?php
function jamReadNumForVietnamese($num = false)
{
    $str = '';
    $num = trim($num);
    $arr = str_split($num);
    $count = count($arr);
    $f = number_format($num);
    if ($count < 4) {
        $str = $num;
    } else {
        $r = explode(',', $f);
        switch (count($r)) {
            case 4:
                $str = $r[0] . ' tỉ';
                if ((int) $r[1]) {
                    $str .= ' ' . $r[1] . ' triệu';
                }
                break;
            case 3:
                $str = $r[0] . ' triệu';
                if ((int) $r[1]) {
                    $str .= ' ' . $r[1] . ' ngàn';
                }
                break;
            case 2:
                $str = $r[0] . ' ngàn';
                if ((int) $r[1]) {
                    $str .= ' ' . $r[1] . ' đồng';
                }
                break;
        }
    }
    return ($str);
}