@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Crear expediente estudiantil - Registro de familiares</Strong></h3>
            </div>


<div class="box-body">
	{!! Form::open(['route'=>'guardargrado', 'method'=>'POST','class'=>'form-horizontal']) !!}

        

          <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente familiar','required','disabled']) !!}
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
                                                {!! Form::label('lbdui', 'DUI',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtdui',null,['class'=>'form-control pull-right','placeholder'=>'99999999-9 ','required']) !!}
                                                </div>
                </div>

                
                <div class="form-group">                                           
                                                {!! Form::label('lbparentesco', 'Parentesco',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                               {!! Form::select('type',[''=>'Seleccione','P'=>'Padre','M'=>'Madre','T'=>'Tia'], null,['class'=>'form-control'])!!}
                                                </div>
                                                
                </div>
                <div class="form-group">                                           
                                                {!! Form::label('lbencargado', 'Encargado',['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                  
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
                                                {!! Form::label('direccion', 'Dirección',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtdireccion',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Dirección de residencia','required']) !!}
                                                </div>
                </div>

                <div class="form-group">                                           
                                                {!! Form::label('lbniveledu', 'Nivel educativo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione','N'=>'Ninguno','B'=>'Básico','M'=>'Noveno grado','Br'=>'Bachillerato','T'=>'Técnico','U'=>'Universidad'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>

                <div class="form-group">                                           
                                                {!! Form::label('lbprofesion', 'Profesión',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtprofesion',null,['class'=>'form-control pull-right','placeholder'=>'Profesión u oficio ','required']) !!}
                                                </div>
                </div>


                <div class="form-group">                                           
                                                {!! Form::label('lbtrabajo', 'Lugar de trabajo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txttrabajo',null,['class'=>'form-control pull-right','placeholder'=>'Lugar de trabajo ','required']) !!}
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
                        {!! Form::label('lblteltrabajo', 'Teléfono de trabajo',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::text('txtteltrabajo',null,['class'=>'form-control pull-right','placeholder'=>'9999-9999','']) !!}
                        </div>                
          </div>

          <div class="form-group">                                           
                                                {!! Form::label('lbcorreo', 'Correo electónico',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtcorreo',null,['class'=>'form-control pull-right','placeholder'=>'ejemplo@gmai.com','']) !!}
                                                </div>
                </div>
                


                
                                                               
            </div>        
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Guardar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listaexpedientes')}}" class="btn btn-default">Finalizar</a>
              </div>

                {!! Form::close() !!}
</div>
</div>
@endsection