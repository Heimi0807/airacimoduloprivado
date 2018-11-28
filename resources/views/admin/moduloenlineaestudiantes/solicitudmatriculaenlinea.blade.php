@extends('admin.menuprincipal')
@section('tittle', 'Administración académica')
@section('content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Solicitud matrícula</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

              {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST']) !!}


                


                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('exp', 'Expediente',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">                                             
                                                <div class="input-group input-group">
                                                  {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente estudiantil','']) !!}                                                  
                                                      <span class="input-group-btn">
                                                        <a href="#" class="btn btn-primary">Buscar</a>
                                                      </span>
                                                </div>
                                                </div>
                                                
                                                
                </div><!--fin form group-->
              </div><!--fin col 12-->

                          <div class="col-sm-12">
                          <div class="form-group">                                           
                                                {!! Form::label('nie', 'NIE',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('NIE',null,['class'=>'form-control pull-right','placeholder'=>'Número de identificación del estudiante']) !!}
                                                </div>
                                                
                          </div>
                          </div> 

              <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('nombres', 'Nombres',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtnombres',null,['class'=>'form-control pull-right','placeholder'=>'Nombres','required']) !!}
                                                </div>
                </div>
                </div>

                <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('apellidos', 'Apellidos',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtapellidos',null,['class'=>'form-control pull-right','placeholder'=>'Apellidos','required']) !!}
                                                </div>
                </div>
              </div>


              <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('anyo', 'Año',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtanyo',null,['class'=>'form-control pull-right','placeholder'=>'Año escolar','required']) !!}
                                                </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">                  
               {!! Form::label('fecha', 'Fecha de solicitud',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10"> 
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de solicitud de inscripción','required']) !!}
              </div> 
              </div>             
              </div><!--fin form group-->
              </div><!--fin col 12-->
              
              <div class="col-sm-12">
                 <div class="form-group">                                           
                        {!! Form::label('lbgrado', 'Grado',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-10">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>
              </div>
            </div>

            <div class="col-sm-12">
                 <div class="form-group">                                           
                        {!! Form::label('lbseccion', 'Sección',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-10">
                         {!! Form::select('type',[''=>'Seleccione','A'=>'A','B'=>'B'], null,['class'=>'form-control'])!!}
                       </div>
                </div>
              </div>


              <div class="col-sm-12">
                 <div class="form-group">                                           
                        {!! Form::label('lbturno', 'Turno',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-10">
                         {!! Form::select('type',[''=>'Seleccione','M'=>'Mañana','T'=>'Tarde','N'=>'Noche'], null,['class'=>'form-control'])!!}
                       </div>
                </div>
              </div> 

            <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('lbasesor', 'Asesor',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtdasesor',null,['class'=>'form-control pull-right','placeholder'=>'Docente asesor','required']) !!}
                                                </div>
                </div>
                </div>
                                               
              </div><!--finaliza box body-->         
                
              <div class="box-footer" align="right">                
                 {!! Form::submit('Guardar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listasecciones')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
            </form>
          </div>





@endsection
