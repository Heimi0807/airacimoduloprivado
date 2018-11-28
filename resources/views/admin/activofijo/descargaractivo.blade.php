@extends('admin.menuprincipal')
@section('tittle', 'Administración activo fijo')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Descargar activo</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
              <div class="box-body">

                 {!! Form::open(['route'=>'activofijo', 'method'=>'POST','class'=>'form-horizontal']) !!}


                <div class="col-sm-12">
                <div class="form-group">                                           
                                                {!! Form::label('fecha', 'Fecha de descargo',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'','required']) !!}
                                              </div> 
                                              </div>  

                                              {!! Form::label('lbtipodescargo', 'Motivo de descargo',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',['O'=>'Obsoleto','M'=>'Mal estado','R'=>'Robo','H'=>'Hurto','I'=>'Inservible'], null,['class'=>'form-control'])!!}
                          </div>
                                                 
                </div><!--fin form group-->
              </div><!--fin col 12-->
 
             
               
            <div class="col-sm-12">
            <div class="form-group">                                           
                                               
                        {!! Form::label('lbcuenta', 'Clasificación de activo',['class'=>'col-sm-2 control-label']) !!}
                             <div class="col-sm-4">
                              {!! Form::text('txtclasi',null,['class'=>'form-control pull-right','placeholder'=>'Clasificación de activo','required']) !!}
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
                 {!! Form::submit('Descargar ',['class'=>'btn btn-danger ']) !!}
                  <a href="{{route('activofijo')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
           
          </div>





@endsection
