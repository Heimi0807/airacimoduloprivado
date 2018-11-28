@extends('admin.menuprincipal')
@section('tittle', 'Administración académica')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Matrícula</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">

                 {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}


                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">                                             
                                                <div class="input-group input-group">
                                                  {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente estudiantil','required']) !!}                                                  
                                                      <span class="input-group-btn">
                                                        <a href="#" class="btn btn-primary">Buscar</a>
                                                      </span>
                                                </div>
                                                </div>

                                                 {!! Form::label('nie', 'NIE',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('NIE',null,['class'=>'form-control pull-right','placeholder'=>'Número de identificación del estudiante']) !!}
                                                </div>
                                                
                                                
                </div><!--fin form group-->
              </div><!--fin col 12-->
 

               
            <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('nombres', 'Nombres',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtnombres',null,['class'=>'form-control pull-right','placeholder'=>'Nombres','required']) !!}
                                                </div>

                                                {!! Form::label('apellidos', 'Apellidos',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtapellidos',null,['class'=>'form-control pull-right','placeholder'=>'Apellidos','required']) !!}
                                                </div>
                </div>
                </div>

               


              <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('anyo', 'Año',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtanyo',null,['class'=>'form-control pull-right','placeholder'=>'Año escolar','required']) !!}
                                                </div>

                                                {!! Form::label('fecha', 'Fecha de solicitud',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de solicitud de inscripción','required']) !!}
                                              </div> 
                                              </div>                    
                </div>
              </div>

              
              
              <div class="col-sm-12">
                 <div class="form-group">                                           
                        {!! Form::label('lbgrado', 'Grado',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>

                           {!! Form::label('lbseccion', 'Sección',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','A'=>'A','B'=>'B'], null,['class'=>'form-control'])!!}
                       </div>
              </div>
            </div>

            


              <div class="col-sm-12">
                 <div class="form-group">                                           
                        {!! Form::label('lbturno', 'Turno',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','M'=>'Mañana','T'=>'Tarde','N'=>'Noche'], null,['class'=>'form-control'])!!}
                       </div>

                       {!! Form::label('lbasesor', 'Asesor',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtdasesor',null,['class'=>'form-control pull-right','placeholder'=>'Docente asesor','required']) !!}
                                                </div>
                </div>
              </div> 

           
                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('exppadre', 'Matriculó',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">                                             
                                                <div class="input-group input-group">
                                                  {!! Form::text('txtexppadre',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente padre de familia','required']) !!}                                                  
                                                      <span class="input-group-btn">
                                                        <a href="#" class="btn btn-primary">Buscar</a>
                                                      </span>
                                                </div>
                                                </div>

                                                 {!! Form::label('nombre', 'Nombre ',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('Nombre',null,['class'=>'form-control pull-right','placeholder'=>'Padre de familia']) !!}
                                                </div>
                                                
                                                
                </div><!--fin form group-->
              </div><!--fin col 12-->


            <div class="col-sm-12">
            <div class="form-group">

              {!! Form::label('lbpartida', 'Presentó partida',['class'=>'col-sm-2 control-label']) !!}                  
                  <div class="col-sm-4">
                  <div class="radio">
                    <label>
                      <input type="radio" name="partidaRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="partidaRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>                  
                </div> <!--fin radio-->

                {!! Form::label('lbcertificado', 'Presentó certificado',['class'=>'col-sm-2 control-label']) !!}                  
                  <div class="col-sm-4">
                  <div class="radio">
                    <label>
                      <input type="radio" name="certificadoRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="certificadoRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>                  
                </div> <!--fin radio-->


            </div>
            </div> 

           

           
            <div class="col-sm-12">                            
            <div class="form-group">
              {!! Form::label('lbtraslado', 'Traslado',['class'=>'col-sm-2 control-label']) !!}                  
                  <div class="col-sm-4">
                  <div class="radio">
                    <label>
                      <input type="radio" name="trasladoRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="trasladoRadios" id="optionsRadios2" value="option2">
                      NO
                    </label>
                  </div>                  
                </div>

                {!! Form::label('lbcentroescorigen', 'Del Centro Escolar ',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtcentroorigen',null,['class'=>'form-control pull-right','placeholder'=>'Centro escolar de origen','required']) !!}
                                                </div>

            </div>           
          </div>
              
         

            <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('', '',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtobservaciones',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Observaciones  ','']) !!}
                                                </div>
                </div>
              </div>

                                                               
          </div> 
             <div class="box-footer" align="right">                
                 {!! Form::submit('Guardar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listadematriculados')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
          </div>





@endsection
