<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\BulkDestroyStore;
use App\Http\Requests\Admin\Store\DestroyStore;
use App\Http\Requests\Admin\Store\IndexStore;
use App\Http\Requests\Admin\Store\StoreStore;
use App\Http\Requests\Admin\Store\UpdateStore;
use App\Models\WooOrder;
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
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class WooOrderController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @param IndexOrder $request
	 * @return array|Factory|View
	 */

	public function index()
	{
		$id = Auth::id();
		$user_cli_id = User::where('id', $id)
			->select('cli_id')
			->first();
		$cli_id = $user_cli_id->cli_id;

		$data =
			WooOrder::where('cli_id', $cli_id)
				->select(
				'woo_orders.id',
				'woo_orders.cli_id',
				'woo_orders.order_id',
				'woo_orders.tracking_id',
				'woo_orders.shipment_id',
				'woo_orders.print_url',
				'woo_orders.code',
				'order_in.order_nro',
				'order_in.store',
				'order_in.index_id',
				'order_in.app_id',
				'order_in.financial_status',
				'order_in.fecha_creacion',
			)
			->leftJoin('order_in', 'woo_orders.order_id', '=', 'order_in.order_id')
			->get();


		#dd($data);
		return view('admin.woo_orders.index', ['data' => $data]);
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
	public function store(StoreStore $request)
	{
		// Sanitize input
		$sanitized = $request->getSanitized();

		// Store the Store
		$store = Store::create($sanitized);

		if ($request->ajax()) {
			return ['redirect' => url('admin/stores'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
		}

		return redirect('admin/stores');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Store $store
	 * @throws AuthorizationException
	 * @return void
	 */
	public function show(Store $store)
	{
		$this->authorize('admin.store.show', $store);

		// TODO your code goes here
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Store $store
	 * @throws AuthorizationException
	 * @return Factory|View
	 */
	public function edit(Store $store)
	{
		$this->authorize('admin.store.edit', $store);


		return view('admin.store.edit', [
			'store' => $store,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param UpdateStore $request
	 * @param Store $store
	 * @return array|RedirectResponse|Redirector
	 */
	public function update(UpdateStore $request, Store $store)
	{
		// Sanitize input
		$sanitized = $request->getSanitized();

		// Update changed values Store
		$store->update($sanitized);

		if ($request->ajax()) {
			return [
				'redirect' => url('admin/stores'),
				'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
			];
		}

		return redirect('admin/stores');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param DestroyStore $request
	 * @param Store $store
	 * @throws Exception
	 * @return ResponseFactory|RedirectResponse|Response
	 */
	public function destroy(DestroyStore $request, Store $store)
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
	public function bulkDestroy(BulkDestroyStore $request): Response
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
