<?php
    
    session_start();
    if ($_POST["hasil"] == $_SESSION["hasil"]) {
        //  Benar
        $_SESSION["score"] += 10 ;
        echo 'hello,'.$_SESSION["nama"]; 
        echo ", Selamat jawaban Anda benar.";
        echo '<br/> Lives:'.$_SESSION["lives"]; 
        echo '| Score:'.$_SESSION["score"]; 
        echo '<a href="mulai.php">[Soal selanjutnya]</a>';

    } else {
        //  Salah
        $_SESSION["score"] -= 2 ;
        $_SESSION["lives"] -= 1 ;
        echo 'hello,'.$_SESSION["nama"]; 
        echo ', Sayang jawaban Anda salah... tetap semangat ya.<br/>';
        echo 'Lives:'.$_SESSION["lives"];  
        echo '| Score:'.$_SESSION["score"]; 
        echo '<a href="mulai.php">[Soal selanjutnya]</a>';
    }
?>