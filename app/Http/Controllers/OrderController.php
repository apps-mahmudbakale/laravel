<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Wallet;
use App\Models\Security;
use App\Models\Commodity;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $order = Order::create(array_merge($request->all(), [
            'user_id' => auth()->user()->id,
        ]));
        $commodity = Commodity::findOrfail($request->commodity_id);
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        $commodity->no_of_deals += 1;
        if ($request->order_type == 'buy') {
            $commodity->no_of_buys += 1;
            $wallet->cash_balance = ($wallet->cash_balance) - ($request->qty * $commodity->current_price);
        } elseif ($request->order_type == 'sell') {
            $commodity->no_of_sells += 1;
            $wallet->cash_balance = ($wallet->cash_balance) + ($request->qty * $commodity->current_price);
        }
        $commodity->save();
        $wallet->save();

        if ($request->order_type == 'buy') {
            if ($security = Security::where('user_id', auth()->user()->id)->where('commodity_id', $commodity->id)->first()) {
                $security_qty = $security->security_qty + $request->qty;
                $security->security_qty = $security_qty;
                $security->save();
            } else {
                $security_qty = $request->qty;
                $saveSecurity = Security::create(array_merge($request->only('commodity_id'), ['user_id' => auth()->user()->id, 'security_qty' => $security_qty]));
            }
        } elseif ($request->order_type == 'sell') {
            if ($security = Security::where('user_id', auth()->user()->id)->where('commodity_id', $commodity->id)->first()) {
                $security_qty = $security->security_qty - $request->qty;
                $security->security_qty = $security_qty;
                $security->save();
            }
        }
        return redirect()->route('app.market.index')->with('success', 'Your Order Has Been Added');

        // dd($wallet->cash_balance = ($wallet->cash_balance) - ($request->qty * $commodity->current_price));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
