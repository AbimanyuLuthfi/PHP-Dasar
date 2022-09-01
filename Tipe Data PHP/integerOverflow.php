<?php
    /* Integer Overflow merupakan sebuah batas tipe data integer
        pada sistem operasi 32 bit dan 64 bit karena keduanya memiliki
        kapasitas integer yang berbeda
    */
    echo "Integer Overflow 32 Bit: ";
    var_dump(2147483648); //akan diubah menjadi floating point.

    echo "Integer Overflow 64 Bit: ";
    var_dump(9223372036854775808); //akan diubah menjadi floating point.
?>