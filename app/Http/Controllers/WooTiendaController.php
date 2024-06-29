<?php

namespace App\Http\Controllers;

use App\Models\WooUsrMilo;
use App\Models\WooTienda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\WooTiendaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class WooTiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	public function index()
	{
		#$data = WooTienda::get(); 
		$data = DB::table('woo_tiendas')
		->select('*')
			->get();

		$milonga = WooUsrMilo::paginate();

		#dd($data);
		return view('woo-tienda.index', ['data' => $data], ['milonga' => $milonga]);
	}


	 public function index1(Request $request): View
    {
        $wooTiendas = WooTienda::paginate();

        return view('woo-tienda.index', compact('wooTiendas'))
            ->with('i', ($request->input('page', 1) - 1) * $wooTiendas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $woo_tiendas = new WooTienda();
		#dd($woo_tiendas);

        return view('woo-tienda.create', compact('woo_tiendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
		#dd($_POST);

		$id = DB::table('woo_tiendas')->insertGetId(
			[
				'razon_social' => $_POST['razon_social'],
				'usr_api' => $_POST['usr_api'],
				'psw_api' => $_POST['psw_api'],
				'f_alta' => $_POST['f_alta'],
				'f_update' => $_POST['f_update'],
				'id_tienda' => $_POST['id_tienda'],
				'prefijo' => $_POST['prefijo'],
				'ck_tienda' => $_POST['ck_tienda'],
				'cs_tienda' => $_POST['cs_tienda'],
				'url_tienda' => $_POST['url_tienda'],
				'activo' => $_POST['activo']
			]
		);

		$reg_actualizados = DB::table('woo_tiendas')
			->where('id', $id)
			->update(['woo_id_tienda' => $id]);


        return Redirect::route('woo-tiendasindex')
            ->with('success', 'WooTienda created successfully.');
    }

    /**
     * Display the specified resource.
     */
	public function show($store)
	{
		#$this->authorize('admin.store.show', $store);
		#dd($store);
		$woo_tiendas = WooTienda::where('woo_id_tienda', '=', $store)->get()->first();
		$milonga = WooUsrMilo::where('id_tienda', '=', $store)->get();
		#dd($woo_tiendas);
		return view('woo-tienda.show', [
			'store' => $woo_tiendas,
			'milonga' => $milonga,
		]);

		// TODO your code goes here
	}

	public function show1($id): View
    {
        $wooTienda = WooTienda::find($id);

        return view('woo-tienda.show', compact('wooTienda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($woo_id_tienda): View
    {
		$woo_tiendas = WooTienda::where('woo_id_tienda', '=', $woo_id_tienda)->get()->first();
        #$wooTienda = WooTienda::find($id);
		#dd($woo_tiendas);
        return view('woo-tienda.edit', compact('woo_tiendas'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  IlluminateHttpRequest  $request
	 * @param  int  $id
	 * @return IlluminateHttpResponse
	 */
	public function update(Request $request, $woo_id_tienda)
	{
		#dd($request);

		$woo_tienda = WooTienda::find($woo_id_tienda);
		$woo_tienda->woo_id_tienda = $woo_id_tienda;
		$woo_tienda->razon_social = $request->razon_social;
		$woo_tienda->usr_api = $request->usr_api;
		$woo_tienda->psw_api = $request->psw_api;
		$woo_tienda->f_alta = $request->f_alta;
		$woo_tienda->f_update = $request->f_update;
		$woo_tienda->id_tienda = $request->id_tienda;
		$woo_tienda->prefijo = $request->prefijo;
		$woo_tienda->ck_tienda = $request->ck_tienda;
		$woo_tienda->cs_tienda = $request->cs_tienda;
		$woo_tienda->url_tienda = $request->url_tienda;
		$woo_tienda->activo = $request->activo;
		$woo_tienda->save();

		return redirect()->route('woo-tiendasindex')
		->with('success', 'Post updated successfully.');
	}
    /**
     * Update the specified resource in storage.
     */
    public function update1( $request,  $wooTienda)
    {
		#dd($request);
        $wooTienda->update($request->validated());

        return Redirect::route('woo-tiendasindex')
            ->with('success', 'WooTienda updated successfully');
    }

    public function destroy($id)
    {
		#dd($id);
        WooTienda::find($id)->delete();

        return Redirect::route('woo-tiendasindex')
            ->with('success', 'WooTienda deleted successfully');
    }
}
