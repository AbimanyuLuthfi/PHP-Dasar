<?php
    // di dalam PHP kita bisa menghapu suatu variable
    // menggunakan unset.

    $name = "Abimanyu";
    unset($name);

    // Melakukan check apakah variable name ada.
    echo $name;
    var_dump(isset($name));

?>