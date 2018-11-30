@extends('admin.menuprincipal')
@section('tittle','Configuraciones/Recurso Humano')
@section('content')
<div class="box">
  <div class="box-header">
    <div class="col-sm-4">
    <h2 class="box-title"><strong>Clasificación de personal</strong></h2>
  </div>
  <div class="col-sm-8" align="right">            
    <a href="{{ route('creartipopersonalrh') }}" class="btn btn-primary">Agregar tipo</a>
  </div>
</div>
<!-- /.box-header -->
<div class="box-body no-padding">
  <table class="table table-responsive">
    <thead>
      <th></th>
      <th>CODIGO</th>
      <th>TIPO PERSONAL</th>                  
      <th>ACCIONES</th>
    </thead>
    <tbody>
      @foreach($tipos as $tipo)
      <tr> 
        <td></td>           
        <td>{{ $tipo->id }}</td>
        <td>{{ $tipo->v_tipopersonal }}</td>                 
        <td>
          <a href="{{ route('editartipopersonalrh',$tipo->id) }}"class="btn btn-success"><i class="fa fa-edit"></i></a>
          <a href="{{ route('eliminartipopersonalrh',$tipo->id) }}" onclick="return confirm('¿Desea eliminar este tipo de personal?')" class="btn btn-danger"><i class="fa fa-close"></i></a>
        </td>
      </tr>   
      @endforeach 
      <tr>            
      </tr>        
    </tbody>
  </table>
</div>
<!-- /.box-body -->
<div class="box-footer" align="right" >              
  <div class="box-tools">
    <ul class="pagination pagination-sm no-margin pull-right">
      <li>{{ $tipos->links() }}</li>
    </ul>
  </div>
</div>
@endsection
