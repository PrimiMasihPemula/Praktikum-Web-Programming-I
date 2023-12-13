<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guestbook</title>
  <link rel="stylesheet" href="styleGB.css" />
</head>
<body>
  <div class="container">
    <h2>Guestbook</h2>
    <table>
      <tr>
        <th style="width: 10%;">Nomor</th>
        <th style="width: 40%;">Nama</th>
        <th style="width: 50%;">Tanggal Lahir</th>
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
        <td><?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?></td>
        <td><?php echo isset($_POST['birthdate']) ? date('d F Y', strtotime($_POST['birthdate'])) : ''; ?></td>
      </tr>
    </table>
    
    <button onclick="window.location.href='index.html'">Kembali</button>
    <p>Terimakasih telah berkunjung dan mengisi guest book kami!</p>
  </div>
</body>
</html>
