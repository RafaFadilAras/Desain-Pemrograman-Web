<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <!-- <h2>Array Terindeks</h2> -->
             <h2>Array Terindeks dengan Perulangan</h2>
            <?php
                $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

                // echo $Listdosen[2] . "<br>";
                // echo $Listdosen[0] . "<br>";
                // echo $Listdosen[1] . "<br>";

                foreach ($Listdosen as $dosen) {
                    echo $dosen . "<br>";
                }
            ?>
        </body>
</html>