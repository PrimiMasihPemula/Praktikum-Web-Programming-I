<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <table border="1" cellspacing='0' cellpadding='10px'>
        <tr>
            <td>Nomor</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Sanu Octovianto</td>
            <td>27 Oct 2003</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Filbert Maheswara</td>
            <td>8 April 2004</td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $_POST['name']; ?></td>
            <td><?php echo date('d F Y', strtotime($_POST['birthdate'])); ?></td>
        </tr>
    </table>
    <button onclick="window.location.href='index.html'" style="background-color: #FCF0C8; color: #A1583E;">Kembali</button>x`
</body>
</html>