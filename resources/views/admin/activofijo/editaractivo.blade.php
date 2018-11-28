@extends('admin.menuprincipal')
@section('tittle', 'Administración activo fijo')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Actualizar activo</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
              <div class="box-body">

                 {!! Form::open(['route'=>'activofijo', 'method'=>'POST','class'=>'form-horizontal']) !!}


                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('fecha', 'Fecha de adquisición',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de adquisición de activo','required']) !!}
                                              </div> 
                                              </div>  


                                                 
                </div><!--fin form group-->
              </div><!--fin col 12-->
 
             
               
            <div class="col-sm-12">
            <div class="form-group">                                           
                                               
                        {!! Form::label('lbcuenta', 'Clasificación de activo',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','M'=>'Mobiliario','EO'=>'Equipo de oficina'], null,['class'=>'form-control'])!!}
                          </div>
                                                {!! Form::label('lbcod', 'Código',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('codactivo',null,['class'=>'form-control pull-right','placeholder'=>'Código de activo','required','disabled']) !!}
                                                </div> 

                                                          
                </div>
                </div>

               


              <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbdesc', 'Descripción',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtdesc',null,['class'=>'form-control pull-right','placeholder'=>'Descripción activo','required']) !!}
                                                </div>

                                                {!! Form::label('lbserie', 'Serie',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtdesc',null,['class'=>'form-control pull-right','placeholder'=>'Número de serie','required']) !!}
                                                </div>                                                                 
                </div>
              </div>

                            
              <div class="col-sm-12">
                 <div class="form-group">                                           
                        

                                                {!! Form::label('lbmodelo', 'Modelo',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtmodelo',null,['class'=>'form-control pull-right','placeholder'=>'Modelo','required']) !!}
                                                </div>

                                                {!! Form::label('lbmarca', 'Marca',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtmarca',null,['class'=>'form-control pull-right','placeholder'=>'Marca','required']) !!}
                                                </div>
              </div>
             </div>

             <div class="col-sm-12">
                 <div class="form-group">                                           
                        

                                                {!! Form::label('lbvalor', 'Valor $ ',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtvalor',null,['class'=>'form-control pull-right','placeholder'=>'Valor del activo','required']) !!}
                                                </div>

                                                {!! Form::label('lbvidautil', 'Vida útil',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtvidautil',null,['class'=>'form-control pull-right','placeholder'=>'años','required']) !!}
                                                </div>
              </div>
             </div>

             <div class="col-sm-12">
                 <div class="form-group">                                           
                        

                                                {!! Form::label('lbmat', 'Material de construcción',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtmat',null,['class'=>'form-control pull-right','placeholder'=>'cemento - plástico - concreto - otros','']) !!}
                                                </div>

                                                {!! Form::label('lbmedida', 'Medida',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtmedida',null,['class'=>'form-control pull-right','placeholder'=>'centimetro - unidad - otros','']) !!}
                                                </div>
              </div>
             </div>

             <div class="col-sm-12">
                 <div class="form-group"> 

                        {!! Form::label('lbcondicion', 'Condición actual',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',['B'=>'Bueno','M'=>'Malo'], null,['class'=>'form-control'])!!}
                          </div>

                                                {!! Form::label('lbubicacion', 'Ubicación',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtubicacion',null,['class'=>'form-control pull-right','placeholder'=>'Especifique ubicación del activo','required']) !!}
                                                </div>
              </div>
             </div>

              <div class="col-sm-12">
                 <div class="form-group"> 
                                                {!! Form::label('lbobserv', 'Observaciones',['class'=>'col-sm-2 control-label']) !!}
                                                

                                              <div class="col-sm-10">
                                                {!! Form::textarea('txtobservaciones',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Observaciones','']) !!}
                                                </div>
              </div>
             </div>

                                                               
          </div> 
             <div class="box-footer" align="right">                
                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('activofijo')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
           
          </div>





@endsection
