<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Kuliner Nusantara</title>
    <style>
        /* Reset dasar */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f4e1d2, #ffcbf2);
            color: #333;
            margin: 0;
            padding: 20px;
            overflow-x: hidden;
        }

        h1 {
            text-align: center;
            color: #ff618b;
            margin-bottom: 20px;
            font-size: 36px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-in-out;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .about-text {
            flex: 1;
            min-width: 280px;
        }

        .about-image {
            flex: 1;
            min-width: 280px;
            max-width: 100%;
            border-radius: 10px;
        }

        .about-text h2 {
            color: #ff618b;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }

        .about-text ul {
            list-style: none;
            padding: 0;
        }

        .about-text ul li {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }

        .btn-learn-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #ff618b;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-learn-more:hover {
            background: #ff2e63;
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
    <div class="about-container">
        <h1>About Kuliner Nusantara</h1>
        <div class="about-content">
            <div class="about-text">
                <h2>Keanekaragaman Kuliner Nusantara</h2>
                <p>Kuliner Nusantara adalah kekayaan warisan budaya yang dimiliki Indonesia, yang terdiri dari beragam
                    makanan khas dari setiap daerah di seluruh Indonesia. Setiap daerah memiliki ciri khas rasa dan
                    bahan baku yang berbeda, mencerminkan kekayaan alam dan budaya Indonesia yang luar biasa.</p>
                <p>Berikut beberapa ciri khas kuliner Nusantara:</p>
                <ul>
                    <li>Beragam bumbu rempah yang kaya rasa.</li>
                    <li>Penggunaan bahan lokal yang khas dari setiap daerah.</li>
                    <li>Proses memasak yang turun temurun dan penuh makna.</li>
                    <li>Makanan yang disajikan tidak hanya enak, tetapi juga menggambarkan adat dan tradisi.</li>
                </ul>
                <p>Kuliner Nusantara memiliki daya tarik yang tak hanya memanjakan lidah, tetapi juga memperkenalkan
                    nilai sejarah dan budaya kepada dunia.</p>
                <a href="#learn-more" class="btn-learn-more">Pelajari Lebih Lanjut</a>
            </div>
            <div class="about-image">
                <img src="data:image/jpeg;base64,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"
                    alt="Kuliner Nusantara" />
            </div>
        </div>
    </div>
</body>

</html>