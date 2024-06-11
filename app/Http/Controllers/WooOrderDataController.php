<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WooOrderData;
#use App\Http\Controllers\WooOrderDataController;


class WooOrderDataController extends Controller
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
		WooOrderData::where('cli_id', $cli_id)
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
}
