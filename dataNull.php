<?php
    // Null bisa  digunakan jika terdapat suatu variable yang belum berisi suatu nilai.

    $name = "Abimanyu";
    $name = NULl; // Untuk mengosongkan nilai pada variable name.
    $age = NULL;

    $name = "Luthfi"; // Mengisi kembali nilai pada variable name.
    echo "Name : ";
    echo $name;
    echo "\n";

    echo "age : ";
    echo $age;
    echo "\n";
    
    // Kita juga bisa mengecek suatu variable apakah variable tersebut kosong atau tidak.
    echo "Apakah name NULL ? : ";
    echo is_null($name);
    var_dump(is_null($name));
    echo "\n";
?>