<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Requests\ProductoCatRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductosCategorias;
use Auth;
use Hash;
use Session;
use Datatable;
use URL;
use App;
use Mail;

class ProductoCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productosCat = ProductosCategorias::all();
        $route     = URL::route('admin.productosCat.index');
        return view('admin.productosCat.index',compact('productosCat', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productosCat = new ProductosCategorias;
        $route     = 'admin.productosCat.store';
        return View('admin.productosCat.create')->with(compact('productosCat', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductoCatRequest $request)
    {
        $input     = $request->all();
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $productosCat = ProductosCategorias::create($input);

        Session::flash('flash_message', 'Categoria de productos creada exitosamente');
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

        return Datatable::collection(ProductosCategorias::all())
        ->showColumns('id', 'descripcion', 'estatus')
        ->searchColumns('id', 'descripcion', 'estatus')
        ->orderColumns('id', 'descripcion', 'estatus')
        ->addColumn('Actions',function($model){
            return '<a href="productosCat/'.$model->id.'/edit" class="btn btn-info pull-left"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
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
        $productosCat = ProductosCategorias::find($id);
        $action    = 'admin.productosCat.update';
        return View('admin.productosCat.edit', compact('productosCat','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ProductoCatRequest $request, $id)
    {
        $input    = $request->all();
        if (!isset($input['estatus'])) { $input['estatus'] = 0; }
        $productosCat = ProductosCategorias::find($id);

        $productosCat->update($input);

        Session::flash('flash_message', 'Categoria de productos actualizada exitosamente');
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
        ProductosCategorias::find($id)->update(array('estatus' => 0));
        Session::flash('flash_message', 'Categoria de productos desactivada exitosamente');
    }
}