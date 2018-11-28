@extends('admin.menuprincipal')
@section('tittle','Administración de personal')
@section('content')



<div class="box-body">
              <!-- comienza formulario datos personales -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Detalle solicitud</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->           
              <div class="box-body">
                {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}


   <div class="form-group">                                           
                                                {!! Form::label('lblfec', 'Fecha de solicitud',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-4">

                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>

                    <div class="col-sm-6 pull-right">
                    <a href="" class="btn btn-success"><i class="fa fa-check"> </i> Aprobar</a>
                    <a href="" class="btn btn-danger"><i class="fa fa-close"></i> Denegar</a>
                    </div>
                      

                                               
    </div>

   <div class="form-group">                                           
                                                {!! Form::label('lbexp', 'Solicitante',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">                                             
                                                <div class="input-group input-group">
                                                  {!! Form::text('txtexp',null,['class'=>'form-control pull-right','placeholder'=>'Número de expediente','required']) !!}                                                  
                                                      <span class="input-group-btn">
                                                        <a href="#" class="btn btn-primary">Buscar</a>
                                                      </span>
                                                </div>
                                                </div>

                                                 {!! Form::label('nombre', 'Nombre completo ',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtnombre',null,['class'=>'form-control pull-right','placeholder'=>'Nombre completo']) !!}
                                                </div>
      </div><!--fin form group-->

      <div class="form-group">                                           
                                                {!! Form::label('lbtipopermiso', 'Tipo permiso',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::select('type',['uno'=>'Menos de 5 dias','dos'=>'Mayor a 5 dias'], null,['class'=>'form-control'])!!}
                                                </div>

                                                {!! Form::label('lbmotivo', 'Motivo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::select('type',['P'=>'Personal','C'=>'Cita medica','CM'=>'Cumplimiento de misión'], null,['class'=>'form-control'])!!}
                                                </div>
      </div> 

   <div class="form-group">                                           
                                                {!! Form::label('lbtiemposolicitado', 'Tiempo solicitado (dias)',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txttiempo',null,['class'=>'form-control pull-right','placeholder'=>'Tiempo solicitado','required']) !!}
                                                </div>

                                                                                          
                                                {!! Form::label('lbgocesueldo', 'Con goce de sueldo',['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-sm-4">
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
                              {!! Form::label('lblfec', 'Fecha inicio',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-4">

                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>

                                {!! Form::label('lblfec', 'Fecha fin',['class'=>'col-sm-2 control-label']) !!}
                              <div class="col-sm-4">

                               <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                </div>                    

                                               
              </div>

          
               
                  <div class="form-group">                                           
                                                {!! Form::label('direccion', 'Observaciones',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtdireccion',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Observaciones','required']) !!}
                                                </div>
                </div>

                                                        
            </div>        
                
              <div class="box-footer" align="right">                
                 
                  <a href="{{route('listapermisosrh')}}" class="btn btn-primary">Regresar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
          



@endsection
