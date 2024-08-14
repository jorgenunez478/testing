<h3>Datos del empleado</h3>

<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" id="name" name="name" disabled value="{{$employee->name}}">
</div>
<div class="form-group">
    <label for="age">Edad:</label>
    <input type="number" class="form-control" id="age" name="age" disabled value="{{$employee->age}}">
</div>
<div class="form-group">
    <label for="gender">Genero:</label>
    <input type="gender" class="form-control" id="gender" name="gender" disabled value="{{$employee->gender}}">
</div>
<div class="form-group">
    <label for="email">Correo:</label>
    <input type="email" class="form-control" id="email" name="email" disabled value="{{$employee->email}}">
</div>
<div class="form-group">
    <label for="position">Cargo:</label>
    <input type="position" class="form-control" id="position" name="position" disabled value="{{$employee->position}}">
</div>
<a href={{ route('employee.index') }}>Regresar</a>