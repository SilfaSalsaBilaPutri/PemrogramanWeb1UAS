<?php
// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['submit'])) {
    // ambil data dari formulir
    $nama_minuman = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];
    // buat query
    $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUE ('$nama_minuman', '$daerah_minuman')";
    $sql = mysqli_query($conn, $query);
    // apakah proses simpan berhasil?
    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!');
    window.location='?page=minuman';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!');
    window.location='?page=minuman';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Minuman</title>
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
    <h2>Tambah Data Minuman</h2>
    <table>
        <thead>
            <tr>
                <th colspan="3"><u>Tambah Data Daftar Minuman</u></th>
            </tr>
        </thead>
        <form method="post" action="">
            <tr>
                <td style="width: 150px;">Nama Minuman</td>
                <td>:</td>
                <td><input type="text" name="nama_minuman" placeholder="Masukkan nama minuman" required></td>
            </tr>
            <tr>
                <td style="width: 150px;">Daerah Minuman</td>
                <td>:</td>
                <td><input type="text" name="daerah_minuman" placeholder="Masukkan daerah minuman" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="button-container">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>