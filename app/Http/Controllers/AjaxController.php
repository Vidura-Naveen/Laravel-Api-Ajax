<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getData(Request $request)
    {
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john1@example.com', 'age' => 2, 'city' => 'New York', 'phone' => '123-456-7890'],
            ['id' => 2, 'name' => 'John Smith', 'email' => 'john2@example.com', 'age' => 34, 'city' => 'Los Angeles', 'phone' => '987-654-3210'],
            ['id' => 3, 'name' => 'John Davis', 'email' => 'john3@example.com', 'age' => 2, 'city' => 'Chicago', 'phone' => '555-555-5555'],
            ['id' => 4, 'name' => 'John Walker', 'email' => 'john4@example.com', 'age' => 40, 'city' => 'Houston', 'phone' => '111-222-3333'],
            ['id' => 5, 'name' => 'John Johnson', 'email' => 'john5@example.com', 'age' => 23, 'city' => 'Phoenix', 'phone' => '444-555-6666'],
            ['id' => 6, 'name' => 'John Brown', 'email' => 'john6@example.com', 'age' => 2, 'city' => 'Philadelphia', 'phone' => '777-888-9999'],
        ];

        return response()->json($data);
    }

    public function getDataTwo(Request $request)
    {
        $data = [
            ['id' => 1, 'name' => ' Doe', 'email' => 'jane111@example.com', 'age' => 261, 'city' => 'San Francisco', 'phone' => '223-456-7890'],
            ['id' => 2, 'name' => ' Smith', 'email' => 'jane211@example.com', 'age' => 321, 'city' => 'Boston', 'phone' => '987-654-1111'],
            ['id' => 3, 'name' => ' Davis', 'email' => 'jane311@example.com', 'age' => 271, 'city' => 'Seattle', 'phone' => '555-555-2222'],
            ['id' => 4, 'name' => ' Walker', 'email' => 'jane411@example.com', 'age' => 315, 'city' => 'Miami', 'phone' => '333-444-5555'],
            ['id' => 5, 'name' => ' Johnson', 'email' => 'jane511@example.com', 'age' => 214, 'city' => 'Atlanta', 'phone' => '444-666-7777'],
            ['id' => 6, 'name' => ' Brown', 'email' => 'jane611@example.com', 'age' => 310, 'city' => 'Dallas', 'phone' => '888-999-0000'],
        ];

        return response()->json($data);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Ajax $ajax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ajax $ajax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ajax $ajax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ajax $ajax)
    {
        //
    }
}
