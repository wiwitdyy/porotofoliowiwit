<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>SEND MESSAGE</title>
</head>
    <script>
        alert('Anda masuk ke Data Message');
    </script>
<?php
    include "config.php";
    $tampil = "SELECT * FROM send ORDER BY Email";
    $hasil = mysqli_query($conn, $tampil);

echo " <table>
    <tr>
        <th>Email</th>
        <th>Nama</th>
        <th>Message</th>
        <th>Aksi</th>
    </tr>";
    $no=1;

while ($row=mysqli_fetch_array($hasil)){
    echo "<tr>
        <td>$row[Name]</td>
        <td>$row[Email]</td>
        <td>$row[Message]</td>

    <td><a href =\"edit.php?id=$row[Email]\"><button> Edit </button></a> |
    <a href=\"hapus.php?id=$row[Email]\"> <button> Hapus </button>
    </a>
    </td>
    </tr>";
    $no++;
}
    echo "</table>";
?>
</body>
</html>