@extends('admin.menuprincipal')
@section('tittle','Administración bono escolar')
@section('content')


<div class="col-sm-12">
<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Cotizaciones</strong></h2>
              </div>
              <div class="col-sm-8 " align="right">          
            
                <a href="{{ route('agregarcotizacion') }}" class="btn btn-primary">Agregar cotización</a>
                </div>
            </div>
           
            <div class="col-sm-12" align="right">
             <div class="box-tools">
                <div class="input-group input-group-sm" >
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar...">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <hr>

                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No.</th>
                  <th># COTIZACION</th>
                  <th>FECHA DE EMISION</th>
                  <th>FECHA DE RECEPCION</th> 
                  <th>DESCRIPCION</th>
                  <th>PROVEEDOR</th>                                   
                  <th>ACCIONES</th>
                </tr>
                <tr>            
                 <td>1</td>
                 <td>C1201521</td>
                  <td>18/11/2018</td>
                  <td>20/11/2018</td>
                  <td>Compra de utiles escolares</td>
                  <td>librerias Leos</td>
                  <td>                    
                    <a href="{{ route('vercotizacion') }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('editarcotizacion') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-close"></i></a>
                  </td>                   
                  
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->

            <div class="box-footer" align="right" >              
            <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>

            </div>
          </div>
     


@endsection
