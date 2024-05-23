<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\User;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $urlroot = config('sfenv.urlroot');
        $cli_id = config('sfenv.cli_id');
        $cli_pass = config('sfenv.cli_pass');
        $re_dir_url = config('sfenv.re_dir_url');
        $fi_logs = config('sfenv.fi_logs');
        $scope = config('sfenv.scope');
        $callback_url_carrier = config('sfenv.callback_url_carrier');
        $webhook_address_orders_create = config('sfenv.webhook_address_orders_create');
        $webhook_address_orders_paid = config('sfenv.webhook_address_orders_paid');
        $webhook_address_orders_cancelled = config('sfenv.webhook_address_orders_cancelled');
        $api_u = config('sfenv.api_u');
        $api_p = config('sfenv.api_p');
        $shop_test = config('sfenv.shop_test');

        # Actualizo el registro de la tabla Stores
        Config::updateOrInsert(
            [
                'cli_id' => $cli_id
            ],
            [
                'urlroot' => $urlroot,
                'cli_pass' => $cli_pass,
                're_dir_url' => $re_dir_url,
                'fi_logs' => $fi_logs,
                'scope' => $scope,
                'callback_url_carrier' => $callback_url_carrier,
                'webhook_address_orders_create' => $webhook_address_orders_create,
                'webhook_address_orders_paid' => $webhook_address_orders_paid,
                'webhook_address_orders_cancelled' => $webhook_address_orders_cancelled,
                'api_u' => $api_u,
                'api_p' => $api_p,
                'shop_test' => $shop_test,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        $id = Auth::id();
        User::updateOrInsert(
            [
                'id' => $id
            ],
            [
                'cli_id' => $cli_id,
            ]
        );


        return view('home');
    }
}
