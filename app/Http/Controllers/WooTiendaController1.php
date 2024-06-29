<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\BulkDestroyStore;
use App\Http\Requests\Admin\Store\DestroyStore;
use App\Http\Requests\Admin\Store\IndexStore;
use App\Http\Requests\Admin\Store\StoreStore;
use App\Http\Requests\Admin\Store\UpdateStore;
use App\Models\WooTienda;
use App\Models\WooUsrMilo;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use function Ramsey\Uuid\v1;

class WooTiendaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param IndexStore $request
	 * @return array|Factory|View
	 */

	public function index()
	{
		#$data = WooTienda::get(); 
		$data = DB::table('woo_tiendas')
            ->select('*')
            ->get();

		$milonga = WooUsrMilo::paginate();

		#dd($data);
		return view('admin.woo_tienda.index', ['data' => $data],['milonga' => $milonga]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param Store $store
	 * @throws AuthorizationException
	 * @return void
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

	/**
	 * Show the form for creating a new resource.
	 *
	 * @throws AuthorizationException
	 * @return Factory|View
	 */
	public function create()
	{
		$this->authorize('admin.store.create');

		return view('admin.store.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreStore $request
	 * @return array|RedirectResponse|Redirector
	 */
	public function store(Store $request)
	{
		// Sanitize input
		$sanitized = $request->getSanitized();

		// Store the Store
		$store = Store::create($sanitized);

		if ($request->ajax()) {
			return ['redirect' => url('admin/woo_tiendas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
		}

		return redirect('admin/woo_tiendas');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Store $store
	 * @throws AuthorizationException
	 * @return Factory|View
	 */
	public function edit($woo_id_tienda)
	{

		$this->authorize('woo-tiendas.edit', $woo_id_tienda);

		return view('woo-tiendas.edit', [
			'store' => $woo_id_tienda,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param UpdateStore $request
	 * @param Store $store
	 * @return array|RedirectResponse|Redirector
	 */
	public function update(Store $request, Store $store)
	{
		// Sanitize input
		$sanitized = $request->getSanitized();

		// Update changed values Store
		$store->update($sanitized);

		if ($request->ajax()) {
			return [
				'redirect' => url('admin/woo_tiendas'),
				'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
			];
		}

		return redirect('admin/woo_tiendas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param DestroyStore $request
	 * @param Store $store
	 * @throws Exception
	 * @return ResponseFactory|RedirectResponse|Response
	 */
	public function destroy(Store $request, Store $store)
	{
		$store->delete();

		if ($request->ajax()) {
			return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
		}

		return redirect()->back();
	}

	/**
	 * Remove the specified resources from storage.
	 *
	 * @param BulkDestroyStore $request
	 * @throws Exception
	 * @return Response|bool
	 */
	public function bulkDestroy(Store $request): Response
	{
		DB::transaction(static function () use ($request) {
			collect($request->data['ids'])
				->chunk(1000)
				->each(static function ($bulkChunk) {
					Store::whereIn('id', $bulkChunk)->delete();

					// TODO your code goes here
				});
		});

		return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
	}
}
