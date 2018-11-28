@extends('admin.menuprincipal')
@section('tittle','Administracion académica')
@section('content')


<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
                <h2 class="box-title">Actualizar expediente estudiantil</h2>
              </div> 
              </div>            


<div class="box-body no-padding">
<div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              
              <li class=""><a href="#tab_3-3" data-toggle="tab" aria-expanded="false">Datos del responsable</a></li>
               <li class=""><a href="#tab_3-2" data-toggle="tab" aria-expanded="false">Situación familiar</a></li>
                <li class=""><a href="#tab_3-1-1" data-toggle="tab" aria-expanded="false">Datos Médicos</a></li>
              <li class="active"><a href="#tab_3-1" data-toggle="tab" aria-expanded="false">Datos Personales</a></li>
              
              <li class="pull-left header"></li>
            </ul>

          <div class="tab-content">
              
  <!-- ////////////////////////////////datos del responsable////////////////////////////////////-->
              <div class="tab-pane" id="tab_3-3"> 

  <div class="col-sm-8">
              <!-- comienza formulario datos personales -->
  

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Datos Personales</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"> 
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}

          
          <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente familiar','required']) !!}
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
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listagrados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div><!-- termina formulario datos personales -->                            
         </div><!-- / col sm 6 finaliza -->



             <div class="col-sm-4">                           
            

            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Fotografía</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}


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
                </div>
            </div>


          
            
             
                                           
          </div>

              <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listagrados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>
    </div><!-- / col sm 6 finaliza -->


 </div><!-- / tab 3-3 finaliza -->
 <!-- ///////////////////////////////////situacion familiar////////////////////////////////////-->             
            <div class="tab-pane " id="tab_3-2">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Situación familiar</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}


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
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listagrados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>
             </div><!-- / tab 3-2 finaliza -->



<!--///////////////////////////////////////////////////////////////////////////////////////-->

<!-- ///////////////////////////////////////////////////////////////////////////////////-->             
  <div class="tab-pane " id="tab_3-1-1">
    
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Salud y nutrición</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('cantfam', 'Presenta tarjeta de vacuna',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="vacunaRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="vacunaRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm6-->

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('cantfam', 'Esquema de vacunas completo',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="vacunacompletoRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="vacunacompletoRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->

                <div class="col-sm-12">
                  <div class="form-group"> 
                    {!! Form::label('cantfam', 'Discapacidades (Puede elegir más de una opción)',['class'=>'col-sm-4 control-label']) !!}                  
                <div class="col-sm-8">
                  <select multiple="" class="form-control">
                    <option>Ninguna</option>
                    <option>Baja visión</option>
                    <option>Sordera</option>
                    <option>Problemas motores</option>
                    <option>Ausencia de miembros</option>
                    <option>Otros</option>
                  </select> 
                  </div>              

                  </div>
                  </div><!--fin col sm12-->



                 <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbhorariosuenonoche', 'Horario de sueño por la noche',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txthorarionocturno',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->


                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbhorariosuenodia', 'Horario de sueño durante el dia',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txthorariodiurno',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->
               
               <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbdificultad', 'Presenta dificultades para dormir',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="insomnioRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="insomnioRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm12--> 

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lblechematerna', 'Es o fue alimentado con leche materna',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="lecheRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lecheRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->

                  <div class="col-sm-12">
                    <div class="form-group">                                           
                                                {!! Form::label('lbmeseslactancia', 'Cuanto tiempo',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Meses','']) !!}
                                                </div>
                                                
                </div><!--fin form group-->
                  </div> <!--fin col sm12-->   


                   <div class="col-sm-12">
                    <div class="form-group">                                           
                                                {!! Form::label('lbdifalimentacion', 'Ha presentado dificultades para la alimentación',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::text('txtdifalimentos',null,['class'=>'form-control pull-right','placeholder'=>'Especifíque','']) !!}
                                                </div>                 
                   </div><!--fin form group-->
                  </div> <!--fin col sm12--> 


            <div class="col-sm-12">
                  <div class="form-group"> 
                    {!! Form::label('lbalimentos', 'Alimentos que consume (Puede elegir más de una opción)',['class'=>'col-sm-4 control-label']) !!}                  
                <div class="col-sm-8">
                  <select multiple="" class="form-control">
                    <option>Leche</option>
                    <option>Jugos</option>
                    <option>Verduras</option>
                    <option>Cereales</option>
                    <option>Frutas</option>
                    <option>Carne de res</option>
                    <option>Carne de cerdo</option>
                    <option>Pollo</option>
                    <option>Pescado</option>
                    <option>Otros</option>
                  </select> 
                  </div>              

                  </div>
                  </div><!--fin col sm12-->

              <div class="col-sm-12">
                  <div class="form-group"> 
                    {!! Form::label('lbalimentos', 'Cuantos tiempo de comida realiza? (Puede elegir más de una opción)',['class'=>'col-sm-4 control-label']) !!}                  
                <div class="col-sm-8">
                  <select multiple="" class="form-control">
                    <option>Desayuno</option>
                    <option>Almuerzo</option>
                    <option>Cena</option>
                  </select> 
                  </div>              

                  </div>
                  </div><!--fin col sm12-->


                  <div class="col-sm-12">
                    <div class="form-group">                                           
                                                {!! Form::label('lbrefrigerios', 'Cuantos refrigerios realiza',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::text('txtrefrigerios',null,['class'=>'form-control pull-right','placeholder'=>'Cantidad','']) !!}
                                                </div>                 
                   </div><!--fin form group-->
                  </div> <!--fin col sm12--> 


                  <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbalergico', 'Es alérgico',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="alergiaRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="alergiaRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->


                 <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbalergia', 'Alérgico a',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txtalergias',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->


                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbalimentoqprefiere', 'Alimentos que prefiere',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txtalimentosqueprefiere',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbalimentoqrechaza', 'Alimentos que rechaza',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txtalimentosquerechaza',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbprescmedica', 'Tiene el estudiante alguna prescripción médica especial que debe seguirse en el centro',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                        <div class="radio">
                    <label>
                      <input type="radio" name="recetaRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="recetaRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>
                   </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->


                 <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('', '',['class'=>'col-sm-4 control-label']) !!}
                                                <div class="col-sm-8">
                                                {!! Form::textarea('txtreceta',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Especifique...','']) !!}
                                                </div>
                </div><!--fin form group-->
                </div><!--fin col sm12-->



                                                               
          </div>         
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="#" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>
        
             </div><!-- / tab 3-1-1 finaliza -->

  <!-- ///////////////////////////////datos personales est////////////////////////////////////-->             
              <div class="tab-pane active" id="tab_3-1">

<div class="col-sm-8">
              <!-- comienza formulario datos personales -->
  

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Datos Personales</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"> 
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}

          <div class="form-group">                                           
                                                {!! Form::label('lbnivel', 'Nivel educativo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::select('type',[''=>'Seleccione','P'=>'Parvularia','B'=>'Básico','M'=>'Medio','S'=>'Superior'], null,['class'=>'form-control'])!!}
                                                </div>
                                                
          </div>

          <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente','required']) !!}
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
                


                
                                                               
            </div>        
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listagrados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div><!-- termina formulario datos personales -->                            
         </div><!-- / col sm 6 finaliza -->



             <div class="col-sm-4">                           
            

            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Fotografía</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST']) !!}


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
                </div>
            </div>


          
            
                                           
          </div>

              <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="#" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>
    </div><!-- / col sm 6 finaliza -->

  </div><!-- / tab 3-1 finaliza -->
 <!-- ////////////////////////////////////////////////////////////////////////////////////////-->

        </div><!--finaliza tab content-->
      </div><!--finaliza tab custom-->
 </div> <!--finaliza box body-->

@endsection
