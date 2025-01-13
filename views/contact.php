<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Kuliner Nusantara</title>
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

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-in-out;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            font-size: 16px;
            margin-bottom: 8px;
            color: #ff618b;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #ff618b;
            outline: none;
        }

        .contact-form button {
            padding: 12px 20px;
            background: #ff618b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #ff2e63;
        }

        .contact-details {
            margin-top: 30px;
            text-align: center;
            font-size: 16px;
        }

        .contact-details p {
            margin: 10px 0;
            color: #555;
        }

        .social-links {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-links a {
            font-size: 20px;
            color: #ff618b;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #ff2e63;
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
    <div class="contact-container">
        <h1>Contact Kuliner Nusantara</h1>
        <form class="contact-form">
            <label for="name">Nama Anda:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email Anda:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="message">Pesan Anda:</label>
            <textarea id="message" name="message" rows="6" placeholder="Masukkan pesan Anda" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>

        <div class="contact-details">
            <p><strong>Alamat:</strong> Jl. Kuliner Nusantara No. 123, Jakarta, Indonesia</p>
            <p><strong>Telepon:</strong> +62 123 456 789</p>
            <p><strong>Email:</strong> info@kuliner-nusantara.com</p>
        </div>

        <div class="social-links">
            <a href="https://www.instagram.com" target="_blank">Instagram</a>
            <a href="https://www.facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>
    </div>
</body>

</html>