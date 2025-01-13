<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendataan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        h2 {
            color: #B30000;
            margin-top: 50px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #B30000;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #880404;
        }
    </style>
</head>
<body>

    <h2>Ini Merupakan Halaman Pendataan</h2>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>

</body>
</html>
