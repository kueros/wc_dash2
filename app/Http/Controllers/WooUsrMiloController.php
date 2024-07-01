<?php

namespace App\Http\Controllers;

use App\Models\WooUsrMilo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\WooUsrMiloRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WooUsrMiloController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): View
	{
		$wooUsrMilos = WooUsrMilo::paginate();

		return view('woo-usr-milo.index', compact('wooUsrMilos'))
			->with('i', ($request->input('page', 1) - 1) * $wooUsrMilos->perPage());
	}

	public function index1($request)
	{
		#dd($request);

		$wooUsrMilos =
			DB::table('woo_usr_milo')
			->leftJoin('woo_tiendas', 'woo_usr_milo.id_tienda', '=', 'woo_tiendas.woo_id_tienda')
			->where('woo_tiendas.woo_id_tienda', '=', $request)
			->get();
		#dd($wooUsrMilos);

		return view('woo-usr-milo.index', compact('wooUsrMilos'));
		#->with('i', ($request->input('page', 1) - 1) * $wooUsrMilos->perPage());
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): View
	{
		$wooUsrMilo = new WooUsrMilo();

		return view('woo-usr-milo.create', compact('wooUsrMilo'));
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(WooUsrMiloRequest $request): RedirectResponse
	{
		WooUsrMilo::create($request->validated());

		return Redirect::route('woo-usr-milos.index')
			->with('success', 'WooUsrMilo created successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id): View
	{
		$wooUsrMilo = 
		DB::table('woo_usr_milo')
			->leftJoin('woo_tiendas', 'woo_usr_milo.id_tienda', '=', 'woo_tiendas.woo_id_tienda')
			->where('woo_usr_milo.id', '=', $id)
			->first();

		return view('woo-usr-milo.show', compact('wooUsrMilo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id): View
	{
		$wooUsrMilo = WooUsrMilo::find($id);
		#dd($wooUsrMilo);
		return view('woo-usr-milo.edit', compact('wooUsrMilo'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(WooUsrMiloRequest $request, WooUsrMilo $wooUsrMilo)
	{
		#dd($wooUsrMilo->id_tienda);
		$wooUsrMilo->update($request->validated());

		#return Redirect::route('woo-usr-milos.index')
		#    ->with('success', 'WooUsrMilo updated successfully');
		header("Location: /woo-usr-milos/index1/" . $wooUsrMilo->id_tienda);
		die();

		#redirect("/woo-usr-milos/index1/{{$request}}");
		return;
		#redirect()->back();

	}

	public function destroy($id): RedirectResponse
	{
		WooUsrMilo::find($id)->delete();

		return Redirect::route('woo-usr-milos.index')
			->with('success', 'WooUsrMilo deleted successfully');
	}
}
