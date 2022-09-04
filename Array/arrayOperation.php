<?php
    // Membuat Array dengan cara-1
    $values = array(1, 2, 3, 4, 7.5);
    var_dump($values);

    // Membuat Array dengan cara-2
    $name = ["Abimanyu", "Luthfi", "Rizq", "Ramadhan", 19];
    var_dump($name);

    // Melakukan check pada array pertama/index pertama.
    var_dump($name[0]);
    
    // Mengubah nilai array 
    $name[0] = "Burhan";
    echo $name[0]; // Menampilkan nilai baru pada index ke-0 setelah nilainya diubah.
    var_dump($name[0]);

    // Menghapus data pada index array.
    unset($name[0]); // Menghapus Array pada index-0
    var_dump($name); // Melakukan check kembali 

    // Menambahkan array
    // Array tersebut akan ditambahkan pada index terakhir
    $name[] = "Reree";
    var_dump($name); // Melakukan check kembali pada array tersebut.

    var_dump(count($name));
?>
