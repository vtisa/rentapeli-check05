<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentar una Película</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #343a40;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            outline: none;
            font-size: 14px;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .cancel-btn {
            background-color: #6c757d;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .cancel-btn:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <form action="{{ route('rentas.store') }}" method="POST">
        @csrf
        <h1>Renta Película</h1>

        <label for="fecharegistro">Fecha de Registro:</label>
        <input type="date" name="fecharegistro" required>

        <label for="fechaentrega">Fecha de Entrega:</label>
        <input type="date" name="fechaentrega" required>
        
        <label for="fechadevolucion">Fecha de Devolución:</label>
        <input type="date" name="fechadevolucion" required>

        <input type="hidden" name="idcliente" value="{{ $clienteActual->id }}">
        {{ $clienteActual->nombre }} {{ $clienteActual->apellidoPaterno }} {{ $clienteActual->apellidoMaterno }}

        <label for="idpelicula">Película:</label>
        <select id="peliculaSelect" name="idpelicula" required>
            @foreach ($peliculas as $pelicula)
                <option value="{{ $pelicula->id }}">{{ $pelicula->nombre }}</option>
            @endforeach
        </select>

        <div>
            <button type="submit">Rentar</button>
            <button type="button" class="cancel-btn" onclick="history.back(); return false;">Cancelar</button>
        </div>
    </form>
</body>
</html>
