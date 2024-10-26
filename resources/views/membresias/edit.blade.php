<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Membresía</title>
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
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
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

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            outline: none;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .cancel-btn {
            background-color: #192025;
            color: rgb(241, 241, 241)
        }

        .cancel-btn:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <form action="{{ route('membresias.update', $membresia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar Membresía</h1>

        <label for="fechaexpedicion">Fecha de Expedición:</label>
        <input type="date" name="fechaexpedicion" value="{{ $membresia->fechaexpedicion }}" required>

        <label for="fechaexpiracion">Fecha de Expiración:</label>
        <input type="date" name="fechaexpiracion" value="{{ $membresia->fechaexpiracion }}" required>

        <button type="submit">Actualizar</button>
        <a href="{{ url()->previous() }}" class="cancel-btn" style="display: inline-block; padding: 9px 20px; border-radius: 5px; text-decoration: none;">Cancelar</a>
    </form>
</body>
</html>


