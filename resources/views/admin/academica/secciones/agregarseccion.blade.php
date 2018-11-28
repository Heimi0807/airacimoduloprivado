@extends('admin.menuprincipal')
@section('tittle', 'Administración académica')
@section('content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Registrar nueva seccion</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                 {!! Form::open(['guardarseccion', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

 <div class="form-group">                                           
                                                {!! Form::label('seccion', 'Seccion',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtseccion',null,['class'=>'form-control pull-right','placeholder'=>'Sección','required']) !!}
                                                </div>
                </div>                                            
          </div>
         
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                  <a href="{{route('listasecciones')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            
          </div>





@endsection
