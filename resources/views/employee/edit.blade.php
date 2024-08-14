<h3>Nuevo empleado</h3>
<form action="{{ route('employee.update', $employee) }}" method="post">
@csrf
@method('PUT')
<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" id="name" name="name" required value="{{$employee->name}}"  >
</div>
<div class="form-group">
    <label for="age">Edad:</label>
    <input type="number" class="form-control" id="age" name="age" required value="{{$employee->age}}">
</div>
<div class="form-group">
    <label for="gender">Genero:</label>
    <select id="gender" name="gender" class="form-control" required>
        <option value="">-- seleccionar --</option>
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
    </select>
</div>
<div class="form-group">
    <label for="email">Correo:</label>
    <input type="email" class="form-control" id="email" name="email" required value="{{$employee->email}}">
</div>
<div class="form-group">
    <label for="position">Cargo:</label>
    <select id="position" name="position" class="form-control" required>
        <option value="">-- seleccionar --</option>
        <option value="Administrador">Administrador</option>
        <option value="Líder">Líder</option>
        <option value="Auxiliar">Auxiliar</option>
    </select>
</div>
<br>
<button type="submit" class="btn btn-primary">Editar</button>
</form>
<a href={{ route('employee.index') }}>Regresar</a>