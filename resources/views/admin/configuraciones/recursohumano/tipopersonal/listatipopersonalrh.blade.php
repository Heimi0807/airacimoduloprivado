@extends('admin.menuprincipal')
@section('tittle','Administración académica')
@section('content')
<div class="box">
            <div class="box-header">
              <div class="col-sm-4">
              <h2 class="box-title"><strong>Clasificación de personal</strong></h2>
              </div>
              <div class="col-sm-8" align="right">            
            
                <a href="{{ route('creartipopersonalrh') }}" class="btn btn-primary">Agregar tipo</a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-responsive">
                <tbody><tr>
                  <th></th>
                  <th>No.</th>
                  <th>TIPO PERSONAL</th>                  
                  <th>ACCIONES</th>
                </tr>
                <tr> 
                <td></td>           
                 <td>1</td>
                 <td>Administrativo</td>                 
                  <td>
                   <a href="{{route('editartipopersonalrh')}}"class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-close"></i></a>
                  </td>
                  </tr>                <tr>            
                 
                  
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
                  <li><a href="#">»</a></li>
                </ul>
              </div>

            </div>
          </div>


@endsection
