<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>

    <form action="/tareas/{{ $tarea->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ $tarea->titulo }}" required>
        <br><br>
        <label>
            <input type="checkbox" name="completada" value="1" {{ $tarea->completada ? 'checked' : '' }}>
            Completada
        </label>
        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/">Cancelar</a>
    </form>
</body>
</html>