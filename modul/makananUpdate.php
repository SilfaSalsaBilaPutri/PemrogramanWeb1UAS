<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffe6f7, #ffd1e6);
            color: #333;
            margin: 0;
            padding: 20px;
            overflow-x: hidden;
        }

        h2 {
            text-align: center;
            color: #ff618b;
            margin-bottom: 30px;
            font-size: 36px;
            animation: fadeIn 1s ease-in-out;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-in-out;
            border-collapse: collapse;
        }

        table th {
            text-align: center;
            padding: 10px;
            font-size: 20px;
            background: #ff618b;
            color: white;
            border-radius: 10px;
            font-weight: bold;
        }

        table td {
            padding: 12px;
            font-size: 16px;
            text-align: left;
        }

        table input[type="text"],
        table input[type="submit"],
        table input[type="reset"],
        table input[type="button"] {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            margin: 10px 0;
        }

        table input[type="submit"],
        table input[type="reset"],
        table input[type="button"] {
            background: #ff618b;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        table input[type="submit"]:hover,
        table input[type="reset"]:hover,
        table input[type="button"]:hover {
            background: #ff2e63;
        }

        table td input[type="text"] {
            width: 100%;
            margin: 0;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .button-container input {
            width: 48%;
        }

        /* Animasi */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <h2>Update Data Makanan</h2>
    <table>
        <thead>
            <tr>
                <th colspan="3"><u>Update Data Daftar Makanan</u></th>
            </tr>
        </thead>
        <form method="post" action="?page=makananUpdateProses">
            <!-- menampung nilai id yang akan di edit -->
            <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
            <tr>
                <td style="width: 150px;">Nama Makanan</td>
                <td>:</td>
                <td><input type="text" name="nama_makanan" value="<?= $data['nama_makanan'] ?>" required
                        placeholder="Masukkan nama makanan"></td>
            </tr>
            <tr>
                <td style="width: 150px;">Daerah Makanan</td>
                <td>:</td>
                <td><input type="text" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>" required
                        placeholder="Masukkan daerah makanan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="button-container">
                    <input type="submit" name="update" value="Update">
                    <input type="button" value="Cancel" onClick="document.location='?page=makanan'">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>