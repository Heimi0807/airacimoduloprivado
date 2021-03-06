@extends('admin.menuprincipal')
@section('tittle', 'Administración bono escolar')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>Modificar cotización</Strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">

                 {!! Form::open(['route'=>'agregarseccion', 'method'=>'POST','class'=>'form-horizontal']) !!}


                <div class="col-sm-12">
                <div class="form-group">                                           
                                  {!! Form::label('fecha', 'Fecha de elaboración',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfecha',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de elaboración','required']) !!}
                                              </div> 
                                    </div> 

                                    {!! Form::label('fecha', 'Fecha de entrega',['class'=>'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4"> 
                                            <div class="input-group date">
                                              <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('txtfechaentrega',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Fecha de entrega','required']) !!}
                                              </div> 
                                              </div> 
                                              
                </div><!--fin form group-->
              </div><!--fin col 12-->
 
         

              <div class="col-sm-12">
                 <div class="form-group"> 

                        {!! Form::label('numcotizacion', 'Cotización #',['class'=>'col-sm-2 control-label']) !!}
                                                                                        
                        <div class="col-sm-4">
                       {!! Form::text('txtcotizacion',null,['class'=>'form-control pull-right','placeholder'=>'Número de cotización','required','disabled']) !!}
                     </div>                                               
                                                                    
                        {!! Form::label('lbproveedor', 'Proveedor',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-4">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
                          </div>
              </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('', 'Descripción',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::textarea('txtdesc',null,['class'=>'form-control pull-right','rows'=>'2','placeholder'=>'Descripción de la cotización  ','']) !!}
                                                </div>
                </div>
              </div>

               <div class="col-sm-12">
            <div class="form-group">                                           
                                                {!! Form::label('', 'Lugar de entrega',['class'=>'col-sm-2 control-label']) !!}
                                                <div class="col-sm-10">
                                                {!! Form::text('txtlugarent',null,['class'=>'form-control pull-right','placeholder'=>'Lugar de la entrega','']) !!}
                                                </div>
                </div>
              </div>

            <div class="col-sm-12">
            <div class="form-group"> 
            <hr>                                          
               {!! Form::label('', 'Producto',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                {!! Form::text('txtprod',null,['class'=>'form-control pull-right','placeholder'=>'Descripción del producto','']) !!}
                 </div>
                 {!! Form::label('', 'Cantidad',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                {!! Form::text('txtcant',null,['class'=>'form-control pull-right','placeholder'=>'Cantidad  ','']) !!}
                 </div>
                 
                          <div class="col-sm-1">
                             <a href="" class="btn btn-success"><i class="fa fa-plus"> Agregar</i></a>
                          </div>
                </div>
              </div>

               <div class="col-sm-12">
            <div class="form-group">                                          
               {!! Form::label('', 'Precio $',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                {!! Form::text('txtprod',null,['class'=>'form-control pull-right','placeholder'=>'Precio  ','']) !!}
                 </div>

                 {!! Form::label('lbmedida', 'Unidad de medida',['class'=>'col-sm-2 control-label']) !!}
                         <div class="col-sm-2">
                         {!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}
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
                  <th>CODIGO</th>
                  <th># PRODUCTO</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD DE MEDIDA</th>
                  <th>PRECIO UNITARIO</th>
                  <th>TOTAL</th> 
                  <th>ACCIONES</th>
                </tr>
               
                <tr>            
                 <td>1</td>
                 <TD>1001</TD>
                 <td>{!! Form::text('txtprod',null,['class'=>'form-control pull-right','placeholder'=>'libreta de notas','']) !!}</td>
                  <td>{!! Form::text('txtcant',null,['class'=>'form-control pull-right','placeholder'=>'10  ','']) !!}</td>
                  <td>{!! Form::select('type',[''=>'Seleccione','P'=>'Primero','S'=>'Segundo'], null,['class'=>'form-control'])!!}</td>
                  <td>{!! Form::text('txtcant',null,['class'=>'form-control pull-right','placeholder'=>'10.00','']) !!}</td>
                  <td>{!! Form::text('txtmonto',null,['class'=>'form-control pull-right','placeholder'=>'100','']) !!}</td>
                  <td>
                  <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa fa-close"></i></a>
                  </td>                   
                  
                </tr>
              </tbody></table>
            </div>
             </div>
              </div>

                
                                                   
          </div> 
             <div class="box-footer" align="right">                
                  {!! Form::submit('Actualizar',['class'=>'btn btn-primary ']) !!}
                  <a href="{{route('listacotizaciones')}}" class="btn btn-default">Cancelar</a>
              </div>

                {!! Form::close() !!}
              <!-- /.box-footer -->
          </div>
@endsection
