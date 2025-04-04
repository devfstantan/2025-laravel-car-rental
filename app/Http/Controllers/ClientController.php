<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = [
            (object) ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '123-456-7890'],
            (object) ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => '987-654-3210'],
            (object) ['id' => 3, 'name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'phone' => '456-789-1234'],
            (object) ['id' => 4, 'name' => 'Bob Brown', 'email' => 'bob.brown@example.com', 'phone' => '321-654-9870'],
            (object) ['id' => 5, 'name' => 'Charlie Davis', 'email' => 'charlie.davis@example.com', 'phone' => '654-321-0987'],
            (object) ['id' => 6, 'name' => 'Diana Evans', 'email' => 'diana.evans@example.com', 'phone' => '789-123-4567'],
            (object) ['id' => 7, 'name' => 'Ethan Harris', 'email' => 'ethan.harris@example.com', 'phone' => '234-567-8901'],
            (object) ['id' => 8, 'name' => 'Fiona Green', 'email' => 'fiona.green@example.com', 'phone' => '890-123-4567'],
            (object) ['id' => 9, 'name' => 'George Hill', 'email' => 'george.hill@example.com', 'phone' => '567-890-1234'],
            (object) ['id' => 10, 'name' => 'Hannah White', 'email' => 'hannah.white@example.com', 'phone' => '678-901-2345'],
        ];

        return view('clients.index', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $client = (object) ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '123-456-7890'];

        return view('clients.edit', compact('client'));
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
