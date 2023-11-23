<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use App\Models\Drug;
use App\Models\User;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchases::all();

        return response()->json($purchases);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purchase = Purchases::create($request->all());

        return response()->json($purchase, 201);
    }

    /**
     * Display the specified resource.
     */
    
    // List of all purchases by user id
     public function show(string $id)
    {
        $purchases = Purchases::where('user_id', $id)->get();
        return response()->json($purchases);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function create()
{
    $users = User::all();
    $drugs = Drug::all();

    return response()->json([
        'users' => $users,
        'drugs' => $drugs,
    ]);
}
}