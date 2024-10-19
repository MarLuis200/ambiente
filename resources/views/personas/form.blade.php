<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $persona->nombre ?? '') }}" required>

    <label for="a_p">Apellido Paterno</label>
    <input type="text" name="a_p" value="{{ old('a_p', $persona->a_p ?? '') }}" required>

    <label for="a_m">Apellido Materno</label>
    <input type="text" name="a_m" value="{{ old('a_m', $persona->a_m ?? '') }}" required>

    <label for="correo">Correo</label>
    <input type="email" name="correo" value="{{ old('correo', $persona->correo ?? '') }}" required>

    <label for="contrasenia">Contraseña</label>
    <input type="password" name="contrasenia" required>

    <label for="rol">Rol</label>
    <select name="rol">
        <option value="Administrador" {{ (old('rol', $persona->rol ?? '') == 'Administrador') ? 'selected' : '' }}>Administrador</option>
        <option value="Editor" {{ (old('rol', $persona->rol ?? '') == 'Editor') ? 'selected' : '' }}>Editor</option>
        <option value="Usuario" {{ (old('rol', $persona->rol ?? '') == 'Usuario') ? 'selected' : '' }}>Usuario</option>
    </select>

    <label for="foto">Foto</label>
    <input type="file" name="foto">

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion">{{ old('descripcion', $persona->descripcion ?? '') }}</textarea>
</div>
