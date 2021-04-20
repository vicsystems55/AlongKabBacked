<?php

namespace App\Http\Controllers;

use App\UserWallet;
use Illuminate\Http\Request;


class UserWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function user_wallet(Request $request)
    {
        //

        $cr = UserWallet::where('user_id', $request->user_id)->where('type', 'credit')->sum('amount');
        $db = UserWallet::where('user_id', $request->user_id)->where('type', 'debit')->sum('amount');

        $total = $cr - $db;

        return response()->json([
            'cr'=> $cr,
            'db' => $db,
            'total' => $total
        ], 200);

        // return response()->json(['error'=>'Unauthorized'], 401);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fund_wallet(Request $request)
    {

        //

        $user_wallet = $request->all();

        $user_wallet = UserWallet::create($user_wallet);

        // $user_wallet = UserWallet::Create([
        //     'user_id' => $request->user_id,
        //     'amount' => $request->amount,
        //     'type' => $request->type,
        //     'description' =>$request->description
        // ]);


        return response()->json($user_wallet, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function show(UserWallet $userWallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWallet $userWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserWallet $userWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserWallet  $userWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWallet $userWallet)
    {
        //
    }
}
