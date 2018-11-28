@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')
<div class="box">
            <div class="box-header">
              <div class="col-sm-2">
              <h2 class="box-title"><strong>Lista de grados</strong></h2>
              </div>
              <div class="col-sm-10" align="right">            
            
                <a href="{{ route('agregargrado') }}" class="btn btn-primary">Agregar grado</a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th>GRADO</th>
                  <th>SECCION</th> 
                  <th>TURNO</th>
                  <th>ESTADO</th>                  
                  <th>ACCIONES</th>
                </tr>
                <tr>            
                 
                  
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
                  <li><a href="#">»</a></li>
                </ul>
              </div>

            </div>
          </div>


@endsection
