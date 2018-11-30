@extends('admin.menuprincipal')
@section('tittle', 'Configuraciones/Recurso Humano')
@section('content')

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title"><Strong>Editar tipo personal: {{ $tipo->v_tipopersonal }}</Strong></h3>
  </div>
  <!-- /.box-header -->
  @if(count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <div class="box-body">
    {!! Form::open(['route'=>['actualizartipopersonalrh', $tipo], 'method'=>'PUT','class'=>'form-horizontal']) !!}
    <div class="form-group">                                           
      {!! Form::label('lbid', 'Código',['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('txtid',$tipo->id,['class'=>'form-control pull-right','placeholder'=>'Código','disabled','required']) !!}
      </div>
    </div>
    <div class="form-group">                                           
      {!! Form::label('lbtipopersonal', 'Tipo personal',['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('v_tipopersonal',$tipo->v_tipopersonal,['class'=>'form-control pull-right','placeholder'=>'Tipo personal','required']) !!}
      </div>
    </div>                                              
  </div>
  <!-- form start -->
  <div class="box-footer" align="right">                
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
    <a href="{{route('listatipopersonalrh')}}" class="btn btn-default">Cancelar</a>
  </div>
{!! Form::close() !!}
<!-- /.box-footer -->
</div>
@endsection
