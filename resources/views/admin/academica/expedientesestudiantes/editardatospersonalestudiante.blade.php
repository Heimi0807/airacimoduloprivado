@extends('admin.menuprincipal')
@section('tittle','Administracion académica')
@section('content')


<div class="box box-primary">
            <div class="box-header">
              <div class="col-sm-8">
                <h2 class="box-title"><Strong>Editar expediente estudiantil - Datos personales</Strong></h2>
              </div> 
              </div>            


<div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST','class'=>'form-horizontal']) !!}

          

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
                                                {!! Form::label('lbnivel', 'Nivel educativo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione','P'=>'Parvularia','B'=>'Básico','M'=>'Medio','S'=>'Superior'], null,['class'=>'form-control'])!!}
                                                </div>
                                                
                </div>
          <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente','required','disabled']) !!}
                                                </div>
                                                
                </div>

                  <div class="form-group">                                           
                                                {!! Form::label('nie', 'NIE',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('NIE',null,['class'=>'form-control pull-right','placeholder'=>'Número de identificación del estudiante']) !!}
                                                </div>
                                                
                </div>

                 <div class="form-group">                                           
                                                {!! Form::label('nombres', 'Nombres',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtnombres',null,['class'=>'form-control pull-right','placeholder'=>'Nombres segun partida de nacimiento','required']) !!}
                                                </div>
                </div>

                 <div class="form-group">                                           
                                                {!! Form::label('apellidos', 'Apellidos',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtapellidos',null,['class'=>'form-control pull-right','placeholder'=>'Apellidos segun partida de nacimiento','required']) !!}
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
                                                {!! Form::label('numpartida', 'Número de partida',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtnumpartida',null,['class'=>'form-control pull-right','placeholder'=>'Número partida de nacimiento','required']) !!}
                                                </div>

                                                {!! Form::label('lbfolio', 'Folio',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtfoliopartida',null,['class'=>'form-control pull-right','placeholder'=>'Folio','required']) !!}
                                                </div>
                </div>

                <div class="form-group">                                           
                                                {!! Form::label('lbtomo', 'Tomo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txttomo',null,['class'=>'form-control pull-right','placeholder'=>'Tomo','required']) !!}
                                                </div>

                                                {!! Form::label('lblibro', 'Libro',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtlibro',null,['class'=>'form-control pull-right','placeholder'=>'Libro','required']) !!}
                                                </div>
                </div>

             
        
                <div class="form-group">                                           
                                                {!! Form::label('direccion', 'Dirección',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtdireccion',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Dirección de residencia','required']) !!}
                                                </div>
                </div>
                
        <div class="form-group">                                           
                        {!! Form::label('lbldepto', 'Departamento',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','M'=>'San vicente','F'=>'San salvador'], null,['class'=>'form-control'])!!}
                        </div>

             
                {!! Form::label('lbmunici', 'Municipio',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                  {!! Form::select('type',[''=>'Seleccione','M'=>'Apastepeque','F'=>'San vicente'], null,['class'=>'form-control'])!!}
                                                </div>

                                               
          </div>

             <div class="form-group">                                           
                        {!! Form::label('lblbarrio', 'Colonia',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Caserio - Colonia','G'=>'El guayabo','LA'=>'colonia los angeles'], null,['class'=>'form-control'])!!}
                        </div>

             
                {!! Form::label('lbzona', 'Zona',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                         {!! Form::select('type',['U'=>'Urbana','R'=>'Rural'], null,['class'=>'form-control'])!!}
                                                </div>

                                               
          </div>

            <div class="form-group">
               {!! Form::label('lbzonariesgo', 'Es zona de riesgo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                         {!! Form::select('type',['N'=>'NO','S'=>'SI'], null,['class'=>'form-control'])!!}
                                                </div>

                    {!! Form::label('lbtiporiesgo', 'Tipo de riesgo (Opción múltiple)',['class'=>'col-sm-2 control-label']) !!}                  
                <div class="col-sm-4">
                  <select multiple="" class="form-control">
                    <option>Delincuencia</option>
                    <option>Rio</option>
                    <option>Quebrada</option>                    
                    <option>Otros</option>
                  </select> 
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

                 <hr>
<h5 align="center">Situación Familiar</h5><hr>
                <div class="form-group">                                           
                                                {!! Form::label('cantfam', 'Miembros',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtmiembros',null,['class'=>'form-control pull-right','placeholder'=>'Número de miembros que conforman su núcleo familiar','required']) !!}
                                                </div>
                </div>

                 
                <div class="form-group">                                           
                                                {!! Form::label('convivecon', 'Convive con',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione una opción','A'=>'Padre y madre','B'=>'Madre','C'=>'Padre','D'=>'Familiares','E'=>'Otros'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>
                <div class="form-group">   

                                                {!! Form::label('depende', 'Económicamente depende de',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione una opción','PYM'=>'Padre y madre','P'=>'Padre','M'=>'Madre','O'=>'Otros'], null,['class'=>'form-control'])!!}
                                                </div>
                </div>

                                                             
            </div>        
                
              <div class="box-footer" align="right">                
                 
                  <a href="{{route('editardatosmedicosestudiante')}}" class="btn btn-primary">Siguiente >></a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            
          </div><!-- termina formulario datos personales -->

 </div> <!--finaliza box body-->

@endsection
