<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #e53e3e;
            font-size: 3rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        .icon {
            font-size: 3rem;
            color: #e53e3e;
        }
    </style>
</head>
<body>
    <i class="fas fa-exclamation-triangle icon"></i>
    <h1>Error de página</h1>
    <p>Lo sentimos, pero la página que estás buscando no existe.</p>
    <a href="{{ url('/') }}">Volver</a>
</body>
</html>
