<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Account;

class AccountsListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::with('server')->orderBy('domain')->get();

        return response()->json($accounts);
    }
}