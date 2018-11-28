@extends('admin.menuprincipal')
@section('tittle', 'Administración activo fijo')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Agregar traslado</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
              <div class="box-body">

                 {!! Form::open(['route'=>'activofijo', 'method'=>'POST','class'=>'form-horizontal']) !!}


                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('fecha', 'Fecha',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de traslado','required']) !!}
                                              </div> 
                                              </div> 

                                              {!! Form::label('lbtipoTRASLADO', 'Motivo de traslado',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',['P'=>'Préstamo','R'=>'Reparación','TD'=>'Traslado definitivo'], null,['class'=>'form-control'])!!}
                          </div> 


                                                 
                </div><!--fin form group-->
              </div><!--fin col 12-->
 
             
           <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lborigen', 'Origen',['class'=>'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-1">
                                                {!! Form::text('txtcodorigen',null,['class'=>'form-control pull-right','placeholder'=>'Código','']) !!}
                                                </div>
                                                <div class="col-sm-3">
                                                {!! Form::text('txtorigen',null,['class'=>'form-control pull-right','placeholder'=>'Origen del activo','required']) !!}
                                                </div>

                                                {!! Form::label('lbdestino', 'Destino',['class'=>'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-1">
                                                {!! Form::text('txtcoddestino',null,['class'=>'form-control pull-right','placeholder'=>'Código','']) !!}
                                                </div>
                                                <div class="col-sm-3">
                                                {!! Form::text('txtdestino',null,['class'=>'form-control pull-right','placeholder'=>'Destino del activo','required']) !!}
                                                </div>                                                                 
                </div>
              </div>
    
               <div class="col-sm-12">
                 <div class="form-group">                                           
                        

                                                {!! Form::label('lbcodigo', 'Código',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtcodigo',null,['class'=>'form-control pull-right','placeholder'=>'Código activo','required']) !!}
                                                </div>

                                                {!! Form::label('lbdescrip', 'Descripción',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtvidautil',null,['class'=>'form-control pull-right','placeholder'=>'Descripción','required']) !!}
                                                </div>
              </div>
             </div>          


              <div class="col-sm-12">
                 <div class="form-group">                                           
                                                {!! Form::label('lbcondicion', 'Condición actual',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',['B'=>'Bueno','M'=>'Malo'], null,['class'=>'form-control'])!!}
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
                        

                                                {!! Form::label('lbpautoriza', 'Autoriza',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtautoriza',null,['class'=>'form-control pull-right','placeholder'=>'Persona que autoriza traslado','required']) !!}
                                                </div>

                                                {!! Form::label('lbrecibe', 'Recibe',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txtrecibe',null,['class'=>'form-control pull-right','placeholder'=>'Persona que recibe','required']) !!}
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
                  <a href="{{route('trasladoactivofijo')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
           
          </div>





@endsection
