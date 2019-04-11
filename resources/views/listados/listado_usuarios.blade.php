@extends('admin.panel')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')


<section  id="contenido_principal">



<div class="box box-primary box-gris">

     <div class="box-header">
        <h4 class="box-title">Usuarios</h4>
        <form   action="{{ url('buscar_usuario') }}"  method="post"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
					<span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar" >
					</span>

				</div>

        </form>


		<div class="margin" id="botones_control">
              @can('users.add')
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar Usuario</a>
              @endcan
              @can('users.list')
              <a href="{{ url("/listado_usuarios") }}"  class="btn btn-xs btn-primary" >Listado Usuarios</a>
              @endcan
              @can('rol.add')
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(2);">Roles</a>
              @endcan
              @can('permisos.add')
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(3);" >Permisos</a>
              @endcan
		</div>

    </div>

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped" cellspacing="0" width="100%">
				<thead>
						<tr>    <th>codigo</th>
								<th>Rol</th>
								<th>Nombre</th>
								<th>Email</th>
							    <th>Acción</th>
						</tr>
				</thead>
	    <tbody>

	    @foreach($usuarios as $usuario)
		<tr role="row" class="odd">
			<td>{{ $usuario->id }}</td>
			<td>
                <select id="permiso_rol" name="permiso_rol[]" class="form-control" >
                    @foreach($usuario->getRoles() as $roles)
                    <option value="{{ $roles }}">{{ $roles }}</option>
                    @endforeach
                </select>
           </td>
			<td class="mailbox-messages mailbox-name"><a href="javascript:void(0);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $usuario->username  }}</a></td>
			<td>{{ $usuario->email }}</td>
			<td>
            @can('users.edit')
            <button type="button" class="btn  btn-default btn-xs" onclick="verinfo_usuario({{  $usuario->id }})" ><i class="fa fa-fw fa-edit"></i></button>
            @endcan
            @can('users.delete')
            <button type="button"  class="btn  btn-danger btn-xs"  onclick="borrado_usuario({{  $usuario->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
            @endcan
			</td>
		</tr>
	    @endforeach



		</tbody>
		</table>

	</div>
</div>




{{ $usuarios->links() }}

@if(count($usuarios)==0)


<div class="box box-primary col-xs-12">

<div class='aprobado' style="margin-top:70px; text-align: center">

<label style='color:#177F6B'>
              ... no se encontraron resultados para su busqueda...
</label>

</div>

 </div>


@endif

</div></section>
@endsection
