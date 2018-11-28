@extends('admin.menuprincipal')
@section('tittle', 'Administración bono escolar')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Detalle orden de compra</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">

                 {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}


                
         <div class="col-sm-12">
                <div class="form-group"> 

                {!! Form::label('numOC', 'Orden de compra #',['class'=>'col-sm-2 control-label']) !!}
                                                                                        
                        <div class="col-sm-4">
                       {!! Form::text('txtoc',null,['class'=>'form-control pull-right','placeholder'=>'Número de orden de compra','required']) !!}
                     </div> 
                     {!! Form::label('numcoti', 'Cotización #',['class'=>'col-sm-2 control-label']) !!}
                     <div class="col-sm-4">
                       {!! Form::text('txtcoti',null,['class'=>'form-control pull-right','placeholder'=>'Número de cotización','required']) !!}
                     </div>                                             
                  
                </div><!--fin form group-->
              </div><!--fin col 12-->

              <div class="col-sm-12">
                <div class="form-group">                                           
                                  {!! Form::label('fecha', 'Fecha de elaboración ',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de elaboración OC','required']) !!}
                                              </div> 
                                    </div> 

                                    {!! Form::label('fecha', 'Fecha de entrega',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfechaentrega',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de entrega ','required']) !!}
                                              </div> 
                                              </div> 
                                              
                </div><!--fin form group-->
              </div><!--fin col 12-->

              <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('', 'Lugar de entrega',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::textarea('txtlugarent',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Lugar de la entrega','']) !!}
                                                </div>

                                                {!! Form::label('', 'Hogar de entrega',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                {!! Form::text('txthora',null,['class'=>'form-control pull-right','placeholder'=>'Hora de la entrega','']) !!}
                                                </div>
                </div>
              </div>

 

              <div class="col-sm-12">
                 <div class="form-group"> 

                        
                        {!! Form::label('lbencargadocompra', 'Encargado de compras',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>
                          {!! Form::label('lbformadepago', 'Forma de pago',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',['C'=>'Contado','CR'=>'Crédito'], null,['class'=>'form-control'])!!}
                          </div>


              </div>
            </div>
 
      <div class="col-sm-12">
            <div class="form-group"> 
               <hr> 
            <div class="box-body table-responsive ">
              <table class="table table-hover table-bordered">
                <tbody><tr>
                  <th>No.</th>
                  <th># PRODUCTO</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD DE MEDIDA</th>
                  <th>PRECIO UNITARIO</th>
                  <th>TOTAL</th> 
                </tr>
                <tr>            
                 <td>1</td>
                 <td>Lamina Zic-alum</td>
                  <td>20</td>
                  <td>Unidad</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
              </tbody></table>
            </div>
             </div>
              </div>

                
                                                   
          </div> 
             <div class="box-footer" align="right">                
                  <a href="{{route('listaordenesdecompra')}}" class="btn btn-primary"><< Regresar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
          </div>
@endsection
