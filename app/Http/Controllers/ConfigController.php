<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ConfigRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): View
	{
		$configs =
			DB::table('configs')
			->leftJoin('woo_tiendas', 'configs.woo_id_tienda', '=', 'woo_tiendas.woo_id_tienda')
			->first();
		#dd($configs);
		#$configs = Config::paginate();

		$configs = collect($configs);

		#dd($data);

		return view('config.index', compact('configs'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): View
	{
		$config = new Config();

		return view('config.create', compact('config'));
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(ConfigRequest $request): RedirectResponse
	{
		Config::create($request->validated());

		return Redirect::route('configs.index')
			->with('success', 'Config created successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show($woo_id_tienda): View
	{
		#dd($woo_id_tienda);
		$config = Config::where('woo_id_tienda', '=', $woo_id_tienda)->get()->first();
		#dd($config);

		
		return view('config.show', compact('config'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($woo_id_tienda): View
	{
		$configs = Config::where('woo_id_tienda', '=', $woo_id_tienda)->get()->first();

		return view('config.edit', compact('configs'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, $woo_id_tienda)
	{
		#dd($woo_id_tienda);
		#dd($request);
		$configs = Config::where('woo_id_tienda', '=', $woo_id_tienda)->get()->first();
		$configs->woo_id_tienda = $woo_id_tienda;
		$configs->url_create_order = $request->url_create_order;
		$configs->url_create_order_milo = $request->url_create_order_milo;
		$configs->url_rate = $request->url_rate;
		$configs->url_cancel_order = $request->url_cancel_order;
		$configs->url_cancel_order_milo = $request->url_cancel_order_milo;
		$configs->url_logistica_inversa = $request->url_logistica_inversa;
		$configs->url_download = $request->url_download;
		$configs->shipping_id = $request->shipping_id;
		$configs->key_shipping_id = $request->key_shipping_id;
		$configs->path_log = $request->path_log;
		$configs->save();

		return Redirect::route('configs.index')
			->with('success', 'Config updated successfully');
	}

	public function destroy($id): RedirectResponse
	{
		Config::find($id)->delete();

		return Redirect::route('configs.index')
			->with('success', 'Config deleted successfully');
	}
}
