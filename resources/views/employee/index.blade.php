<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <h1>Empleados</h1>
    <a href={{ route('employee.create') }}>Nuevo empleado</a>
    <table>
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Correo</th>
            <th>Cargo</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee) 
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->age}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->position}}</td>
                    <td>
                        <form action="{{ route('employee.show', $employee) }}" method="get">
                            @csrf
                            <button type="submit">Ver</button>
                        </form>
                        <form action="{{ route('employee.edit', $employee) }}" method="get">
                            @csrf
                            <button type="submit">Editar</button>
                        </form>
                        <form action="{{ route('employee.destroy', $employee) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>