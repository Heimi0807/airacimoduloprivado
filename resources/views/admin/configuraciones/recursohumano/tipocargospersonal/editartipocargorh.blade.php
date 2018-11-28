@extends('admin.menuprincipal')
@section('tittle', 'Administración académica')
@section('content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Tipo cargo</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                          <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST','class'=>'form-horizontal']) !!}


                 <div class="form-group">                                           
                                                {!! Form::label('lbid', 'Código',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtid',null,['class'=>'form-control pull-right','placeholder'=>'Código','required']) !!}
                                                </div>
                </div>
                 <div class="form-group">                                           
                                                {!! Form::label('lbtipocargo', 'Tipo cargo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txttipopers',null,['class'=>'form-control pull-right','placeholder'=>'Cargo','required']) !!}
                                                </div>
                </div>

                 
                

                                                  
          </div>

              <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listatipocargorh')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
           
          </div>





@endsection
