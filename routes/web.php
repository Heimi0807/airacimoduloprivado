<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::group(['prefix'=>'admin/academica'], function(){
	Route::resource('grados','AgregargradoController');
});

*/


Route::get('/', function () {
   return view('admin.menuprincipal');  
});

//Route::get('slide', ['as' => 'slide', 'uses' => 'IndexController@index']);

//BONOESCOLAR
//catalogo de cuentas
Route::get('catalogodecuentas', ['as' => 'catalogodecuentas', 'uses' => 'CatalogodecuentasController@index']);
Route::get('crearcuenta', ['as' => 'crearcuenta', 'uses' => 'CatalogodecuentasController@crearcuenta']);
Route::get('editarcuenta', ['as' => 'editarcuenta', 'uses' => 'CatalogodecuentasController@editarcuenta']);

//cotizaciones 
Route::get('listacotizaciones', ['as' => 'listacotizaciones', 'uses' => 'CotizacionesController@index']);
Route::get('agregarcotizacion', ['as' => 'agregarcotizacion', 'uses' => 'CotizacionesController@agregarcotizacion']);
Route::get('editarcotizacion', ['as' => 'editarcotizacion', 'uses' => 'CotizacionesController@editarcotizacion']);
Route::get('vercotizacion', ['as' => 'vercotizacion', 'uses' => 'CotizacionesController@vercotizacion']);

//ordenes de compra 
Route::get('listaordenesdecompra', ['as' => 'listaordenesdecompra', 'uses' => 'OrdenesdecompraController@index']);
Route::get('agregarordendecompra', ['as' => 'agregarordendecompra', 'uses' => 'OrdenesdecompraController@agregarordendecompra']);
Route::get('editarordendecompra', ['as' => 'editarordendecompra', 'uses' => 'OrdenesdecompraController@editarordendecompra']);
Route::get('verordendecompra', ['as' => 'verordendecompra', 'uses' => 'OrdenesdecompraController@verordendecompra']);

//Proveedores
Route::get('listaproveedores', ['as' => 'listaproveedores', 'uses' => 'ProveedoresController@index']);
Route::get('agregarproveedor', ['as' => 'agregarproveedor', 'uses' => 'ProveedoresController@agregarproveedor']);
Route::get('editarproveedor', ['as' => 'editarproveedor', 'uses' => 'ProveedoresController@editarproveedor']);
Route::get('verproveedor', ['as' => 'verproveedor', 'uses' => 'ProveedoresController@verproveedor']);

//tipodecuentas
Route::get('listatipocuenta', ['as' => 'listatipocuenta', 'uses' => 'TipocuentascatalogoController@index']);
Route::get('creartipocuenta', ['as' => 'creartipocuenta', 'uses' => 'TipocuentascatalogoController@creartipocuenta']);
Route::get('editartipocuenta', ['as' => 'editartipocuenta', 'uses' => 'TipocuentascatalogoController@editartipocuenta']);


//Grados
Route::get('agregargrado', ['as' => 'agregargrado', 'uses' => 'AgregargradoController@index']);
Route::post('agregargrado', ['as' => 'guardargrado', 'uses' => 'AgregargradoController@store']);
Route::get('listagrados', ['as' => 'listagrados', 'uses' => 'GradosController@index']);

//Secciones
Route::get('agregarseccion', ['as' => 'agregarseccion', 'uses' => 'SeccionesController@index']);
Route::post('agregarseccion', ['as' => 'guardarseccion', 'uses' => 'SeccionesController@guardar']);
Route::get('listasecciones', ['as' => 'listasecciones', 'uses' => 'ListaseccionesController@index']);

//cuentausuario Recurso humano
Route::get('crearcuentausuariorrhh', ['as' => 'crearusuariorh', 'uses' => 'CrearcuentausuariorrhhController@index']);
Route::get('editarcuentausuariorrhh', ['as' => 'editarcuentausuariorh', 'uses' => 'CrearcuentausuariorrhhController@editarcuentausuario']);

// Expedientes recurso humano
Route::get('listaexpedientesrrhh', ['as' => 'listaexpedientesrh', 'uses' => 'ExpedientesrrhhController@index']);
Route::get('crearexpedientesrrhh', ['as' => 'crearexpedientesrh', 'uses' => 'ExpedientesrrhhController@crearexpedienterh']);
Route::get('verexpedienterrhh', ['as' => 'verexpedienterh', 'uses' => 'ExpedientesrrhhController@verexpedienterh']);
Route::get('editarexpedienterrhh', ['as' => 'editarexpediente', 'uses' => 'ExpedientesrrhhController@editarexpedienterh']);


//Permisos  recurso humano
Route::get('listasolicitudespermiso', ['as' => 'listapermisosrh', 'uses' => 'SolicitudespermisosrhController@index']);
Route::get('versolicitudpermiso', ['as' => 'versolicitudespermisorh', 'uses' => 'SolicitudespermisosrhController@versolicitud']);
Route::get('crearsolicitudpermiso', ['as' => 'crearsolicitudespermisorh', 'uses' => 'SolicitudespermisosrhController@crearsolicitud']);
Route::get('editarsolicitudpermiso', ['as' => 'editarsolicitudespermisorh', 'uses' => 'SolicitudespermisosrhController@editarsolicitud']);

//configuraciones recurso humano - tipo cargo
Route::get('listatipocargorh', ['as' => 'listatipocargorh', 'uses' => 'CargosrhController@index']);
Route::get('creartipocargorh', ['as' => 'creartipocargorh', 'uses' => 'CargosrhController@creartipocargo']);
Route::get('editartipocargorh', ['as' => 'editartipocargorh', 'uses' => 'CargosrhController@editartipocargo']);

//configuraciones recurso humano - tipo personal
Route::get('listatipopersonalrh', ['as' => 'listatipopersonalrh', 'uses' => 'TipopersonalrhController@index']);
Route::get('creartipopersonalrh', ['as' => 'creartipopersonalrh', 'uses' => 'TipopersonalrhController@creartipopersonal']);
Route::get('editartipopersonalrh', ['as' => 'editartipopersonalrh', 'uses' => 'TipopersonalrhController@editartipopersonal']);

// gestion de matricula
Route::get('solicitudmatriculaenlinea', ['as' => 'llenarsolicitudmatricula','uses' => 'SolicitudmatriculaenlineaController@index']);
Route::get('solicitudespendientesdeaprobar', ['as' => 'listasolicitudesmatricula','uses' => 'SolicitudespendientesdeaprobarController@verlista']);
Route::get('matricula', ['as' => 'matricula','uses' => 'MatriculasController@registrarmatricula']);
Route::get('matriculaantiguoingreso', ['as' => 'antiguoingreso','uses' => 'AntiguoingresosController@index']);
Route::get('verexpedienteestudiantes', ['as' => 'verexpediente', 'uses' => 'ExpedientesController@verexpediente']);

// gestion de Expediente estudiantes

Route::get('listadeexpedientesactivos', ['as' => 'listaexpedientes', 'uses' => 'GestionexpedientesestudiantesController@index']);
Route::get('registrardatospersonalestudiante', ['as' => 'registrardatospersonalesexpediente', 'uses' => 'GestionexpedientesestudiantesController@registrardatospersonales']);
Route::get('registrarusuarioestudiante', ['as' => 'registrarcuentadeusuarioestudiante', 'uses' => 'GestionexpedientesestudiantesController@registrarcuentausuario']);
Route::get('registrardatosmedicosestudiante', ['as' => 'registrardatosmedicosestudiante', 'uses' => 'GestionexpedientesestudiantesController@registrardatosmedicos']);
Route::get('registrarfamiliaresestudiantes', ['as' => 'registrarfamiliares', 'uses' => 'GestionexpedientesestudiantesController@registrarfamiliares']);
Route::get('editardatospersonalestudiante', ['as' => 'editardatospersonales', 'uses' => 'GestionexpedientesestudiantesController@editardatospersonales']);
Route::get('editardatosmedicosestudiante', ['as' => 'editardatosmedicosestudiante', 'uses' => 'GestionexpedientesestudiantesController@editardatosmedicos']);


Route::get('expediente', ['as' => 'expediente', 'uses' => 'GestionexpedientesestudiantesController@verexpediente']);

//padres de familia
Route::get('gestionarpadresdefamilia', ['as' => 'listafamiliares', 'uses' => 'GestionpadresdefamiliaController@index']);


//Matriculas
Route::get('listadealumnosmatriculados', ['as' => 'listadematriculados', 'uses' => 'ListadematriculadosController@verlista']);

Route::get('agregarusuarios', ['as' => 'agregarusuario','uses' => 'UsuariosController@agregarusuario']);


Route::get('gestionaractivofijo', ['as' => 'activofijo', 'uses' => 'GestionaractivofijoController@index']);
Route::get('agregaractivo', ['as' => 'agregaractivofijo', 'uses' => 'GestionaractivofijoController@agregaractivo']);
Route::get('editaractivo', ['as' => 'editaractivofijo', 'uses' => 'GestionaractivofijoController@editaractivo']);
Route::get('verdetalleactivo', ['as' => 'verdetalleactivofijo', 'uses' => 'GestionaractivofijoController@verdetalleactivo']);
Route::get('descargaractivo', ['as' => 'descargaractivo', 'uses' => 'GestionaractivofijoController@descargaractivo']);

Route::get('gestionartraslado', ['as' => 'trasladoactivofijo', 'uses' => 'GestionartrasladoactivofijoController@index']);
Route::get('agregartraslado', ['as' => 'registrartraslado', 'uses' => 'GestionartrasladoactivofijoController@registrartraslado']);
Route::get('verdetalletraslado', ['as' => 'verdetalletraslado', 'uses' => 'GestionartrasladoactivofijoController@vertraslado']);
Route::get('editartraslado', ['as' => 'editartraslado', 'uses' => 'GestionartrasladoactivofijoController@editartraslado']);





//Route::get('agregarseccion', 'SeccionesController@agregarseccion');


  

   
   
   
