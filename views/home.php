<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <style>
        /* Reset dasar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffe6f7, #ffd1e6);
            /* Latar belakang gradasi pink lembut */
            color: #444;
            overflow-x: hidden;
        }

        header {
            background-image: url('https://source.unsplash.com/1600x500/?indonesian-food');
            /* Gambar hero */
            background-size: cover;
            background-position: center;
            height: 500px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-in-out;
        }

        header h1 {
            font-size: 3rem;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            animation: slideDown 1.5s ease-in-out;
        }

        header p {
            font-size: 1.2rem;
            margin: 10px 0 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in-out 0.5s;
        }

        header .cta {
            margin-top: 20px;
        }

        header .cta a {
            text-decoration: none;
            color: #ff618b;
            background: white;
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            animation: bounce 2s infinite ease-in-out;
        }

        header .cta a:hover {
            background: #ff618b;
            color: white;
        }

        section {
            padding: 50px 20px;
            text-align: center;
            animation: fadeInUp 1.5s ease-in-out;
        }

        section h2 {
            font-size: 2rem;
            color: #ff618b;
        }

        section p {
            font-size: 1rem;
            line-height: 1.6;
            margin: 20px 0;
        }

        .kuliner-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .kuliner-gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: zoomIn 1.5s ease-in-out;
        }

        .kuliner-gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        footer {
            background: #ff9abb;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 2s ease-in-out;
        }

        footer p {
            margin: 0;
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
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
    <!-- Hero Section -->
    <header>
        <h1>Selamat Datang di Kuliner Nusantara</h1>
        <p>Menyajikan Kelezatan Tradisional dari Sabang hingga Merauke</p>
        <div class="cta">
            <a href="#explore">Jelajahi Sekarang</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="explore">
        <h2>Keindahan Kuliner Nusantara</h2>
        <p>
            Indonesia memiliki ribuan makanan tradisional yang mencerminkan keberagaman budaya.
            Dari rendang, sate, hingga gudeg, setiap daerah memiliki cita rasa unik yang kaya akan rempah-rempah.
            Mari temukan kelezatan kuliner Indonesia bersama kami!
        </p>
        <div class="kuliner-gallery">
            <img src="https://beritajatim.com/wp-content/uploads/2023/01/IMG_20230119_173726.jpg" alt="Rendang">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQcS-sIE1WKefObkqQsxKWGCnsXdH99LjICA&s"
                alt="Sate">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCpI96JW6DZxOPWina7foQk-r7e8bdGUqF2PjdCm0DCANPkzQEJZike9y253jlYOYLKsk&usqp=CAU"
                alt="Gudeg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFYuFNn8KkG5Iwvlp5Tkg3rqi1YVH8yQ726w&s"
                alt="Dessert Nusantara">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date("Y") ?> Kuliner Nusantara. All Rights Reserved.</p>
    </footer>
</body>

</html>