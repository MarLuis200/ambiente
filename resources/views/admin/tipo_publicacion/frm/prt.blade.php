
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">

				@if ( !empty ( $tipo_publicacion->id) )

					<div class="mb-3">
						<label for="desc_tipos" class="negrita">Descripcion:</label>
						<div>
							<input class="form-control" placeholder="desc_tipos" required="required" name="desc_tipos" type="text" id="marca" value="{{ $tipo_publicacion->desc_tipos }}">
						</div>
					</div>


					@else

                    <div class="mb-3">
                        <label for="desc_tipos" class="negrita">Descripcion:</label>
                        <div>
                            <input class="form-control" placeholder="Desc_tipos" required="required" name="desc_tipos" type="text" id="desc_tipos" >
                        </div>
                    </div>

				@endif

				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin.tipo_publicacion') }}" class="btn btn-warning">Cancelar</a>

				<br>
				<br>

			</div>
		</section>
	</div>
</div>
