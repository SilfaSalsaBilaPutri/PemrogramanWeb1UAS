<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Pink Navbar</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background: linear-gradient(90deg, #ff9a9e, #fecfef);
            /* Gradasi pink */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
            /* Warna teks */
            font-weight: bold;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 20px;
            /* Membuat sudut melengkung */
            transition: all 0.3s ease-in-out;
        }

        nav a:hover {
            background: #ff729f;
            /* Warna hover pink lebih gelap */
            box-shadow: 0 4px 8px rgba(255, 114, 159, 0.4);
            color: #fff;
        }

        nav a.active {
            background: #ff618b;
            /* Warna berbeda untuk aktif */
            color: #fff;
            box-shadow: 0 4px 8px rgba(255, 97, 139, 0.5);
        }

        .container {
            text-align: center;
            /* Membuat navbar rata tengah */
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <a href="?page=home" class="active">Home</a>
            <a href="?page=makanan">Makanan</a>
            <a href="?page=minuman">Minuman</a>
            <a href="?page=about">About</a>
            <a href="?page=contact">Contact</a>
        </div>
    </nav>
</body>

</html>