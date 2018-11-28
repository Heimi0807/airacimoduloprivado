@extends('admin.menuprincipal')
@section('tittle','Recurso humano')
@section('content')


<div class="col-sm-12">
<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Solicitudes de permisos</strong></h2>
              </div>
              <div class="col-sm-8 " align="right">       
              <a href="{{route('crearsolicitudespermisorh')}}" class="btn btn-primary">Agregar solicitud</a>               
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
                <thead >
                <tr>
                  <th>No.</th>
                  <th>CODIGO</th>
                  <th>FECHA</th> 
                  <th>TIPO SOLICITUD</th>
                  <th>MOTIVO</th>
                  <th>SOLICITANTE</th>
                  <th>ESTADO</th>                                                    
                  <th>ACCIONES</th>
                </tr>
              </thead>
                <tbody>
                <tr> 
                <td>1</td>           
                 <td>SS0001</td>
                  <td>05-11-18</td>
                   <td>normal</td>
                   <td>Personal</td>
                  <td>Danna alejandra flores</td>               
                  <td><span class="label label-warning">Pendiente</span></td>
                  <td>                    
                    <a href="{{route('versolicitudespermisorh')}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="{{route('editarsolicitudespermisorh')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-success"><i class="fa fa-check"></i></a>
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
                  <li  class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>

            </div>

<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>




          </div>
     


@endsection
