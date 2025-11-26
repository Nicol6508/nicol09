<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>

    <form action="/tareas" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Nueva tarea" required>
        <button type="submit">Agregar</button>
    </form>

    <ul>
    @foreach($tareas as $tarea)
        <li>
            {{ $tarea->titulo }} - 
            @if($tarea->completada)
                <span style="color: green;">✓ Completada</span>
            @else
                <span style="color: red;">✗ Pendiente</span>
            @endif
            - 
            <a href="/tareas/{{ $tarea->id }}/edit">Editar</a>
            <form action="/tareas/{{ $tarea->id }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
    </ul>
</body>
</html>