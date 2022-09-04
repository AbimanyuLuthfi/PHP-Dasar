<?php
    /* 
        Di dalam PHP array bisa digunakan sebagai Map.
        Kita hanya perlu mengubah key dan menetapkan nilai value.
        Jika key tidak ditentukan, maka keynya akan ditentukan secara otomatis,
        menggunakan auto increment.
    */

    // CARA-1 Membuat MAP
    $biodata = array(
        "namaDepan" => "Abimanyu Luthfi",
        "namaBelakang" => "Rizq Ramadhan",
        "umur" => 19
    );

    var_dump($biodata); // Melakukan check detail.
    echo $biodata["namaDepan"]; // Mencetak nilai yang berada pada index "namaDepan".

    // CARA-2 Membuat MAP
    $biodata2 = [
        "namaDepan" => "Abimanyu Luthfi",
        "namaBelakang" => "Rizq Ramadhan",
        "umur" => 19
    ];

    var_dump($biodata2); // Melakukan check detail.
    echo $biodata2["namaDepan"]; // Mencetak nilai yang berada pada index "namaDepan".

?>
