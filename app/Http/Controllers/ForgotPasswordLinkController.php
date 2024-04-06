<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordLinkController extends Controller
{
    /**
     * Display a listing of the resource.

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reset-request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

//        dd($status);

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __('success'))
            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
    }

}
