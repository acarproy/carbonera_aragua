<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Requests\ProductoRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\Productos;
use App\Models\Admin\ProductosCategorias;
use Auth;
use Hash;
use Session;
use Datatable;
use URL;
use App;
use Mail;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productos = Productos::all();
        $route     = URL::route('admin.productos.index');
        return view('admin.productos.index',compact('productos', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productos    = new Productos;
        $productosCat = ['' => 'Seleccione la categoria'] + ProductosCategorias::where('estatus','=','1')->lists('descripcion', 'id')->toArray();
        $route     = 'admin.productos.store';
        return View('admin.productos.create')->with(compact('productos', 'productosCat', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductoRequest $request)
    {
        $input     = $request->all();
        if (!isset($input['exento'])) { $input['exento'] = 0; }
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $productos = Productos::create($input);

        Session::flash('flash_message', 'Producto creado exitosamente');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {       

        return Datatable::collection(Productos::all())
        ->showColumns('id', 'codigo', 'referencia', 'precio')
        ->searchColumns('id', 'codigo', 'referencia', 'precio')
        ->orderColumns('id', 'codigo', 'referencia', 'precio')
        ->addColumn('Actions',function($model){
            return '<a href="productos/'.$model->id.'/edit" class="btn btn-info pull-left"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
        })
        ->make();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $productos = Productos::find($id);
        $productosCat = ['' => 'Seleccione la categoria'] + ProductosCategorias::where('estatus','=','1')->lists('descripcion', 'id')->toArray();
        $action    = 'admin.productos.update';
        return View('admin.productos.edit', compact('productos', 'productosCat', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ProductoRequest $request, $id)
    {
        $input    = $request->all();
        if (!isset($input['exento'])) { $input['exento'] = 0; }
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $productos = Productos::find($id);

        $productos->update($input);

        Session::flash('flash_message', 'Producto actualizado exitosamente');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Productos::find($id)->update(array('estatus' => 0));
        Session::flash('flash_message', 'Producto desactivado exitosamente');
    }
}