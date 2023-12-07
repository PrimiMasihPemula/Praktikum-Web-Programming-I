<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
</head>
<body>
    <form method="POST">
        <h1>GUEST BOOK</h1>
        <hr size=6 align="left" color="black">
        <div class="tabel">
            <table style="border: none;">
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>TANGGAL LAHIR</td>
                    <td>:</td>
                    <td><input type="text" name="tanggal_lahir"></td>
                </tr>
            </table>
            <hr size=6 align="left" color="black">
            <div class="btn">
                <input type="submit" name="spn" value="PROSES">
                <button class="batal">
                    <a href="index.php">BATAL</a>
                </button>
            </div>
        </div>
    </form>

    <?php
    if(isset($_POST['spn'])){
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

    
        $file = 'guestbook.txt';
        $data = "Nama: $nama, Tanggal Lahir: $tanggal_lahir\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    
        echo "<br>";
        echo "<table border='1' cellpadding='2'>";
        echo "<thead><th colspan='2' align='center'>GUEST BOOK</th></thead>";
        echo "<tbody>";

        
        $entries = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($entries as $entry) {
            echo "<tr><td colspan='2'>$entry</td></tr>";
        }

        echo "</tbody></table>";
    }
    ?>
</body>
</html>