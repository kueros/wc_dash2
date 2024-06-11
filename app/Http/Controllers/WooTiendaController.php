<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\BulkDestroyStore;
use App\Http\Requests\Admin\Store\DestroyStore;
use App\Http\Requests\Admin\Store\IndexStore;
use App\Http\Requests\Admin\Store\StoreStore;
use App\Http\Requests\Admin\Store\UpdateStore;
use App\Models\WooTienda;
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

class WooTiendaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexWooTienda $request
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
                WooTienda::where('cli_id', $cli_id)
                    ->select(  'woo_tiendas.id', 
                                'woo_tiendas.token', 
                                'woo_tiendas.code', 
                                'woo_tiendas.cuit', 
                                'woo_tiendas.shop', 
                                'woo_tiendas.fapiusr', 
                                'woo_tiendas.fapiclave', 
                                'woo_tiendas.hmac', 
                                'woo_tiendas.host', 
                                'woo_tiendas.state')
                    ->leftJoin( DB::raw(
                                '(SELECT shopId, 
                                MAX(webhookId) AS webhookId, 
                                MAX(url) AS url, 
                                MAX(tipo) AS tipo, 
                                MAX(state) AS state 
                                FROM webhooks 
                                GROUP BY shopId) AS grouped_webhooks'), 
                    function($join) {
                                $join->on(
                                    'woo_tiendas.id', '=', 'grouped_webhooks.shopId');
                    })
                    ->groupBy('woo_tiendas.id') // Agrupa por el campo woo_tiendas.id
                    ->get();

#dd($data);
        return view('admin.store.index', ['data' => $data]);
}


     public function index2(IndexStore $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Store::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'token', 'code', 'cuit', 'shop', 'fapiusr', 'fapiclave', 'hmac', 'host', 'state'],

            // set columns to searchIn
            ['id', 'token', 'code', 'cuit', 'shop', 'fapiusr', 'fapiclave', 'hmac', 'host', 'state']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.store.index', ['data' => $data]);
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
    public function bulkDestroy(BulkDestroyStore $request) : Response
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
