<?php 
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
    $result = '';
    $count = count($arrs);
    
    for ($i = 0; $i < $count; $i++) {
        $color = '';
        if (in_array($arrs[$i], ['đỏ', 'xanh', 'trắng', 'cam'])) {
            $color = 'color: red;';
        }
        
        $result .= "Màu <span style=\"$color\">{$arrs[$i]}</span> là màu yêu thích của {$names[$i]}";
        
        if ($i < $count - 1) {
            $result .= ', ';
        } else {
            $result .= '.';
        }
    }
    
    echo $result;
?>