<?php

namespace App\Http\Controllers;

use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cuenta;
use App\Http\Requests\CuentaRequest;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::orderBy('cve_cuenta', 'ASC')->paginate(5);
        return view('admin.cuentas.index')->with('cuentas', $cuentas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuentaRequest $request)
    {
        $file = $request->file('foto');
        $foto = $request->user . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/cuentas/';
        $file->move($path, $foto);
        $cuenta = new Cuenta($request->all());
        $cuenta->foto = $foto;
        $cuenta->pass = bcrypt($request->pass);
        $cuenta->save();
        return redirect()->route('admin.cuentas.index')->withSuccess('Registrado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = Cuenta::find($id);
        return view('admin.cuentas.edit')->with('cuenta', $cuenta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->fill($request->all());
        $cuenta->save();

        return redirect()->route('admin.cuentas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->delete();
        return redirect()->route('admin.cuentas.index');
    }
}
