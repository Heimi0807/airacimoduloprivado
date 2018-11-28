@extends('admin.menuprincipal')
@section('tittle','Administración de personal')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Actualizar cuenta de usuario</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
    <div class="box-body">
                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST', 'class'=>'form-horizontal']) !!}


          <div class="col-sm-12" align="center">
            <li class="user-header">
                <img src="adminlte/img/user2-160x160.jpg"  class="img-circle" alt="User Image">
              </li>
              <hr>
          </div>

              

            <div class="col-sm-12">
               <div class="form-group">
                  {!! Form::label('lbfoto', 'Fotografía',['class'=>'col-sm-4 control-label']) !!}

                  <div class="col-sm-8">                   
                  {!!Form::file('txtusu',null,['class'=>'form-control pull-right','id'=>'exampleInputFile'])!!}                  
                  </div>               
                </div><hr>
            </div>


          
            <div class="form-group">                                           
                                                {!! Form::label('lbusuario', 'Usuario',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtusuario',null,['class'=>'form-control pull-right','placeholder'=>'Cuenta de usuario','','disabled']) !!}
                                                </div>
              </div>
              <div class="form-group">                                           
                                                {!! Form::label('lbclave', 'Contraseña',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtcontrasena',null,['class'=>'form-control pull-right','placeholder'=>'Clave de ingreso','']) !!}
                                                </div>
              </div> 

           </div>

              <div class="box-footer" align="right">                
                 {!! Form::submit('Finalizar',['class'=>'btn btn-primary ']) !!}               
                  
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
           
          </div>

 @endsection

  

