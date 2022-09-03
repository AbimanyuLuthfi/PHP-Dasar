<?php
    echo "floating point : ";
    var_dump(1.234); // "." berfugsi mengubah bilangan menjadi floating point.
    
    echo "floating point dengan E notation Plus (1.7 x 1000): ";
    var_dump(1.7e3); // "e" berfungsi sebagai pangkat
    
    echo "floating point dengan E notation Plus (1.7 x 0.001): ";
    var_dump(1.7); // "." berfugsi mengubah bilangan menjadi floating point.
    
    echo "Underscore di floating point: ";
    var_dump(1_123_123.123); // "." berfugsi mengubah bilangan menjadi floating point. dan "_" akan dihiraukan
?>
