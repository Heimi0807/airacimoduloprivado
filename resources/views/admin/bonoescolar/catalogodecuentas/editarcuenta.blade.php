@extends('admin.menuprincipal')
@section('tittle', 'Administración bono escolar')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Actualizar cuenta</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <div class="box-body">
             {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}

             <div class="col-sm-12">
            <div class="form-group">

              {!! Form::label('lbtipocuenta', 'Tipo de cuenta',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>

                           {!! Form::label('nivelcuenta', 'Nivel',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-4">
                                {!! Form::text('txtnivel',null,['class'=>'form-control pull-right','placeholder'=>'Nivel','required']) !!}
                                </div>                                           
                                                
                </div>
                </div>

                <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('codigo', 'Código',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtcodigo',null,['class'=>'form-control pull-right','placeholder'=>'Código','required']) !!}
                                                </div>

                                                {!! Form::label('nombre', 'Nombre',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtnombre',null,['class'=>'form-control pull-right','placeholder'=>'Nombre','required']) !!}
                                                </div>
                </div>
                </div>

                <div class="col-sm-12">
            <div class="form-group">

              {!! Form::label('lbsaldo', 'Saldo',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-10">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>

                                                                     
                                                
                </div>
                </div>


            

            </div>
             <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('catalogodecuentas')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
</div>
@endsection
