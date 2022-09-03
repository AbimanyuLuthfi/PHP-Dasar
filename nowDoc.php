<?php
    // Dalam nowDoc kita harus membuat tag menggunakan single quote.
    // Sama halnya dengan HereDoc dalam menutup tag tersebut harus menggunakan tag yang sama.
    echo <<<'ABI'
    Dalam mempelajari PHP,
    kita perlu terus berlatih agar menjadi programmer handal,
    ini merupakan cara ke-2 dalam membuat string, selain
    menggunakan Heredoc.
    ABI;
?>