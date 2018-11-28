@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')


<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Lista de Secciones</strong></h2>
              </div>
              <div class="col-sm-8" align="right">            
            
                <a href="{{route('agregarseccion')}}" class="btn btn-primary">Registrar nueva seccion</a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th>Grado</th>
                  <th>Sección</th> 
                  <th>Turno</th>
                  <th>Estado</th>                  
                  <th>Acción</th>
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
