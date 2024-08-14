<h3>Nuevo empleado</h3>
<form action="{{ route('employee.store') }}" method="post">
@csrf
<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="form-group">
    <label for="age">Edad:</label>
    <input type="number" class="form-control" id="age" name="age" required>
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
    <input type="email" class="form-control" id="email" name="email" required>
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
<button type="submit" class="btn btn-primary">Crear</button>
</form>
<a href={{ route('employee.index') }}>Regresar</a>