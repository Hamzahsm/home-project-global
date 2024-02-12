<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// / Use the Post Model
use App\Models\Client;
// We will use Form Request to validate incoming requests from our store and update method
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        // return view('/dashboard');
        return response()->view('/dashboard', [
            'clients' => Client::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return response()->view('/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        //
        $validated = $request->validated();

        $create = Client::create($validated);

        if ($create) {
            return redirect()->route('dashboard')->with('status', 'Client berhasil ditambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
