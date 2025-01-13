<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <style>
        /* Reset dasar */
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
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .table-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-in-out;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        table thead {
            background: #ff618b;
            color: white;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table tbody tr {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInRow 0.5s ease-in-out forwards;
        }

        table tbody tr:nth-child(even) {
            background: #f9f9f9;
        }

        table tbody tr:hover {
            background: #ffe6f7;
            transition: background 0.3s ease;
        }

        a {
            text-decoration: none;
            color: #ff618b;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ff2e63;
        }

        .btn-add {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #ff618b;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
            animation: bounce 2s infinite ease-in-out;
        }

        .btn-add:hover {
            background: #ff2e63;
        }

        .total-data {
            font-weight: bold;
            color: #ff618b;
            text-align: right;
            animation: fadeIn 1s ease-in-out;
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

        @keyframes fadeInRow {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h2>Data Makanan</h2>
        <a href="?page=makananAdd" class="btn-add">[+] Tambah Data Baru</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Daerah Makanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "includes/config.php";
                $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                $sql = mysqli_query($conn, $query);
                $nomor = 1;
                while ($data = mysqli_fetch_array($sql)) { ?>
                    <tr style="animation-delay: <?= $nomor * 0.1 ?>s;">
                        <td><?= $nomor++; ?></td>
                        <td><?= $data["nama_makanan"] ?></td>
                        <td><?= $data["daerah_makanan"] ?></td>
                        <td>
                            <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a> |
                            <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>"
                                onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p class="total-data">Total: <?= mysqli_num_rows($sql) ?></p>
    </div>
</body>

</html>