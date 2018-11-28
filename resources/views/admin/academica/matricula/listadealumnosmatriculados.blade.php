@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')


<div class="col-sm-12">
<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Lista de estudiantes matriculados</strong></h2>
              </div>
              <div class="col-sm-8" align="right">            
            
                <a href="{{ route('registrardatospersonalesexpediente') }}"" class="btn btn-primary">Crear expediente</a>
                <a href="{{route('antiguoingreso')}}" class="btn btn-primary">Actualizar expediente</a>
                <a href="{{route('matricula')}}" class="btn btn-primary">Registrar matrícula</a>

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
            <div class="box-body table-responsive ">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No.</th>
                  <th>NIE</th> 
                  <th>NOMBRES</th>
                  <th>APELLIDOS</th>                                   
                  <th>GRADO</th>
                  <th>PARTIDA</th>
                  <th>CERTIFICADO</th>
                  <th>MODALIDAD</th>
                  <th>ACCIONES</th>
                </tr>
                <tr>            
                 <td>No.</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>
                  <td>NIE</td>                 
                  
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
