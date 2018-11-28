@extends('admin.menuprincipal')
@section('tittle','Administración de personal')
@section('content')



<div class="box-body">
              <!-- comienza formulario datos personales -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Crear expediente</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->           
              <div class="box-body">
                {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}


  <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente','required']) !!}
                                                </div>
                                                
                </div>

                  

                 <div class="form-group">                                           
                                                {!! Form::label('nombres', 'Nombres',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtnombres',null,['class'=>'form-control pull-right','placeholder'=>'Nombres ','required']) !!}
                                                </div>
                </div>

                 <div class="form-group">                                           
                                                {!! Form::label('apellidos', 'Apellidos',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtapellidos',null,['class'=>'form-control pull-right','placeholder'=>'Apellidos ','required']) !!}
                                                </div>
                </div>

                <div class="form-group">                                           
                                                {!! Form::label('genero', 'Género',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione un género','M'=>'Masculino','F'=>'Femenino'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>

                   <div class="form-group">                                           
                                                {!! Form::label('lblfec', 'Fecha de nacimiento',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-4">

                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>
                        {!! Form::label('lbedad', 'Edad',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                  {!! Form::text('txtedad',null,['class'=>'form-control pull-right','placeholder'=>'Años','required']) !!}
                                                </div>

                                               
              </div>

                <div class="form-group">                                           
                                                {!! Form::label('lbdui', 'DUI',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtdui',null,['class'=>'form-control pull-right','placeholder'=>'99999999-9 ','required']) !!}
                                                </div>

                                                {!! Form::label('lbdui', 'NIT',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtnit',null,['class'=>'form-control pull-right','placeholder'=>'99999999-9 ','required']) !!}
                                                </div>
                </div>

          
                <div class="form-group">                                           
                                                {!! Form::label('direccion', 'Dirección',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtdireccion',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Dirección de residencia','required']) !!}
                                                </div>
                </div>

                <div class="form-group">                                           
                        {!! Form::label('lbltel', 'Teléfono de residencia',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::text('txttel',null,['class'=>'form-control pull-right','placeholder'=>'9999-9999','']) !!}
                        </div>

             
                {!! Form::label('lbcel', 'Teléfono celular',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                              {!! Form::text('txtcel',null,['class'=>'form-control pull-right','placeholder'=>'9999-9999','']) !!}
                                                </div>

                                               
          </div>

          <div class="form-group">                                           
                                                {!! Form::label('lbcorreo', 'Correo electónico',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtcorreo',null,['class'=>'form-control pull-right','placeholder'=>'ejemplo@gmai.com','']) !!}
                                                </div>
                </div>

                 <div class="form-group">                                           
                                                {!! Form::label('lblfecingreso', 'Fecha de contratación',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">
                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>                                              
              </div>  

               <div class="form-group">                                           
                                                {!! Form::label('lbtipopersonal', 'Tipo personal',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::select('type',['Admon'=>'Administrativo','Doc'=>'Docente','Coci'=>'Cocina','O'=>'Otros'], null,['class'=>'form-control'])!!}
                                                </div>

                                                {!! Form::label('lbcargo', 'Cargo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::select('type',['D'=>'Director','Docente'=>'Docente','EC'=>'Encargado de cocina','SE'=>'Secretaria'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>  

              <div class="form-group">                                           
                                                {!! Form::label('lbtipocontrato', 'Tipo de contratación',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::select('type',['SB'=>'Sueldo base','SS'=>'Sobre sueldo','HC'=>'Horas clase'], null,['class'=>'form-control'])!!}
                                                </div>

                                                {!! Form::label('lbsueldo', 'Salario mensual $ ',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtsalario',null,['class'=>'form-control pull-right','placeholder'=>'','']) !!}
                                                </div>
                </div>



               <div class="form-group">                                           
                                                {!! Form::label('lbescpeciadlidad', 'Especialidad docente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',['M'=>'Matemática','LE'=>'Lenguaje','IN'=>'Inglés','SS'=>'Ciencias Sociales'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>  


                   <div class="form-group">                                           
                                                {!! Form::label('lblfecingsedu', 'Fecha de ingreso al sistema educativo',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">

                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>                                 
              </div>

              <div class="form-group">                                           
                                                {!! Form::label('lbnivelesc', 'Nivel escalafón',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',['1'=>'Uno','2'=>'Dos','3'=>'Tres','4'=>'Cuatro'], null,['class'=>'form-control'])!!}
                                                </div>
                </div> 

                <div class="form-group">                                           
                                                {!! Form::label('lbcatescalafon', 'Categoria escalafón',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',['B'=>'Basica','I'=>'Intermedia','S'=>'Superior'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>  

                <div class="form-group">                                           
                        {!! Form::label('lbnip', 'NIP',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::text('txtnip',null,['class'=>'form-control pull-right','placeholder'=>'9999-9999','']) !!}
                        </div>

             
                {!! Form::label('lbnup','NUP',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                              {!! Form::text('txtcel',null,['class'=>'form-control pull-right','placeholder'=>'9999-9999','']) !!}
                                                </div>
                                               
                </div> 

                             



                                                           
            </div>        
                
              <div class="box-footer" align="right">                
                 
                 <a href="{{route('crearusuariorh')}}" class="btn btn-primary">Siguiente >></a>
                  <a href="#" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
          



@endsection
