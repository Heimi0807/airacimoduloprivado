@extends('admin.menuprincipal')
@section('tittle','Administración activo fijo')
@section('content')


<div class="col-sm-12">
<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Gestión de activo fijo</strong></h2>
              </div>
              <div class="col-sm-8 " align="right">          
            
                <a href="{{route('agregaractivofijo')}}" class="btn btn-primary">Agregar activo</a>               
                </div>
            </div>
           
            <div class="input-group input-group-sm" >
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar...">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <hr>

                  </div>
                </div>
                
              
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover" id="example1" role="grid">
                <tbody><tr>
                  <th>No.</th>
                  <th>CODIGO</th>
                  <th>DESCRIPCION</th> 
                  <th>FECHA DE ADQUISICION</th>
                  <th>VALOR</th>                                   
                  <th>UBICACION</th>
                  <th>ACCIONES</th>
                </tr>
                <tr>            
                 <td>1</td>
                 <td>10101200</td>
                  <td>Computadora portatil</td>
                  <td>25/06/2018</td>
                  <td>600</td>
                  <td>Aula 2-2 local I</td>
                  <td>                    
                    <a href="{{ route('verdetalleactivofijo') }}" class="btn btn-primary" ><i class="fa fa-eye"></i></a>
                    <a href="{{ route('editaractivofijo') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{route('registrartraslado')}}" class="btn btn-warning"><i class="fa fa-truck"></i></a>
                    <a href="{{route('descargaractivo')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>                   
                  
                </tr>

                <tr>            
                 <td>2</td>
                 <td>10101200</td>
                  <td>Computadora escritorio</td>
                  <td>25/06/2018</td>
                  <td>600</td>
                  <td>Aula 2-2 local I</td>
                  <td>                    
                    <a href="{{ route('verdetalleactivofijo') }}" class="btn btn-primary" ><i class="fa fa-eye"></i></a>
                    <a href="{{ route('editaractivofijo') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{route('registrartraslado')}}" class="btn btn-warning"><i class="fa fa-truck"></i></a>
                    <a href="{{route('descargaractivo')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>                   
                  
                </tr>

                <tr>            
                 <td>3</td>
                 <td>10101200</td>
                  <td>Proyector</td>
                  <td>25/06/2018</td>
                  <td>600</td>
                  <td>Aula 2-2 local I</td>
                  <td>                    
                    <a href="{{ route('verdetalleactivofijo') }}" class="btn btn-primary" ><i class="fa fa-eye"></i></a>
                    <a href="{{ route('editaractivofijo') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{route('registrartraslado')}}" class="btn btn-warning"><i class="fa fa-truck"></i></a>
                    <a href="{{route('descargaractivo')}}"  class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>                   
                  
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->

            <div class="box-footer" align="right" >              
            <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
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
.