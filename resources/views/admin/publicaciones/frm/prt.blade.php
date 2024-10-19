<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @foreach ($publicaciones as $publicacion)
                    <div class="mb-3">
                        <label for="id" class="negrita">Id:</label>
                        <div>
                            <input class="form-control" name="id" type="text" id="id" value="{{ $publicacion->id }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="negrita">Título:</label>
                        <div>
                            <input class="form-control" name="titulo" type="text" id="titulo" value="{{ $publicacion->titulo ?? old('titulo') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripción:</label>
                        <div>
                            <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $publicacion->descripcion ?? old('descripcion') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_creacion" class="negrita">Fecha Creación:</label>
                        <div>
                            <input class="form-control" name="fecha_creacion" type="date" id="fecha_creacion" value="{{ $publicacion->fecha_creacion ?? old('fecha_creacion') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_tipo" class="negrita">Publicación:</label>
                        <div>
                            <select name="id_tipo" class="form-control @error('id_tipo') is-invalid @enderror" id="id_tipo" required>
                                <option value="" disabled selected>Selecciona un tipo</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}" {{ $publicacion->id_tipo == $tipo->id ? 'selected' : '' }}>{{ $tipo->desc_tipos }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_persona" class="negrita">Persona:</label>
                        <div>
                            <select name="id_persona" class="form-control @error('id_persona') is-invalid @enderror" id="id_persona" required>
                                <option value="" disabled selected>Selecciona una persona</option>
                                @foreach($personas as $persona)
                                    <option value="{{ $persona->id }}" {{ $publicacion->id_persona == $persona->id ? 'selected' : '' }}>{{ $persona->nombre }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('id_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contenido" class="negrita">Contenido:</label>
                        <div>
                            <input class="form-control" name="contenido" type="text" id="contenido" value="{{ $publicacion->contenido ?? old('contenido') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                            <br><br>
                            @if (!empty($publicacion->img))
                                <span>Imagen Actual:</span><br>
                                <img src="../../../uploads/{{ $publicacion->img }}" width="200" class="img-fluid">
                            @else
                                Aún no se ha cargado una imagen para este producto.
                            @endif
                        </div>
                    </div>
                    <hr>
                @endforeach

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin.publicaciones') }}" class="btn btn-warning">Cancelar</a>

            </div>
        </section>
    </div>
</div>
