@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Crear expediente estudiantil - Datos medicos</Strong></h3>
            </div>


<div class="box-body">

	 {!! Form::open(['route'=>'guardargrado', 'method'=>'POST','class'=>'form-horizontal']) !!}

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
                 <a href="{{route('registrarfamiliares')}}" class="btn btn-primary">Siguiente >></a>
              </div>

                {!! Form::close() !!}

</div>
@endsection