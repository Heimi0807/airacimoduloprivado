@extends('admin.menuprincipal')
@section('tittle', 'Administración académica')
@section('content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Registrar nuevo grado</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}


                 <div class="form-group">                                           
                                                {!! Form::label('grado', 'Grado',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtgrado',null,['class'=>'form-control pull-right','placeholder'=>'Descripción','required']) !!}
                                                </div>
                </div>

                 
                <div class="form-group">                                           
                                                {!! Form::label('seccion', 'Sección',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione una sección','A'=>'A','B'=>'B'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>

            <div class="form-group">   

                                                {!! Form::label('turno', 'Turno',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione un tuno','M'=>'Mañana','T'=>'Tarde','N'=>'Noche'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>


                
                                                               
          </div>

         
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Registrar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listagrados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>





@endsection
