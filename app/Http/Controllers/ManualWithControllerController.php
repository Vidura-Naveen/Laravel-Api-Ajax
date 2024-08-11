<?php

namespace App\Http\Controllers;

use App\Models\ManualWithController;
use Illuminate\Http\Request;

class ManualWithControllerController extends Controller
{

    public function filterData(Request $request)
    {
        // Sample data
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john1@example.com', 'age' => 28, 'city' => 'New York', 'phone' => '123-456-7890'],
            ['id' => 2, 'name' => 'John Smith', 'email' => 'john2@example.com', 'age' => 34, 'city' => 'Los Angeles', 'phone' => '987-654-3210'],
            ['id' => 3, 'name' => 'John Davis', 'email' => 'john3@example.com', 'age' => 29, 'city' => 'Chicago', 'phone' => '555-555-5555'],
            ['id' => 4, 'name' => 'John Walker', 'email' => 'john4@example.com', 'age' => 40, 'city' => 'Houston', 'phone' => '111-222-3333'],
            ['id' => 5, 'name' => 'John Johnson', 'email' => 'john5@example.com', 'age' => 23, 'city' => 'Phoenix', 'phone' => '444-555-6666'],
            ['id' => 6, 'name' => 'John Brown', 'email' => 'john6@example.com', 'age' => 31, 'city' => 'Philadelphia', 'phone' => '777-888-9999'],
            ['id' => 7, 'name' => 'Jane Doe', 'email' => 'jane1@example.com', 'age' => 26, 'city' => 'San Francisco', 'phone' => '223-456-7890'],
            ['id' => 8, 'name' => 'Jane Smith', 'email' => 'jane2@example.com', 'age' => 32, 'city' => 'Boston', 'phone' => '987-654-1111'],
            ['id' => 9, 'name' => 'Jane Davis', 'email' => 'jane3@example.com', 'age' => 27, 'city' => 'Seattle', 'phone' => '555-555-2222'],
            ['id' => 10, 'name' => 'Jane Walker', 'email' => 'jane4@example.com', 'age' => 35, 'city' => 'Miami', 'phone' => '333-444-5555'],
            ['id' => 11, 'name' => 'Jane Johnson', 'email' => 'jane5@example.com', 'age' => 24, 'city' => 'Atlanta', 'phone' => '444-666-7777'],
            ['id' => 12, 'name' => 'Jane Brown', 'email' => 'jane6@example.com', 'age' => 30, 'city' => 'Dallas', 'phone' => '888-999-0000'],
        ];

        // Check if filters are applied
        if ($request->has('search') || $request->has('age')) {
            $filteredData = collect($data)->filter(function ($item) use ($request) {
                $matchesSearch = true;
                $matchesAge = true;

                if ($request->has('search') && $request->search != '') {
                    $matchesSearch = stripos($item['name'], $request->search) !== false ||
                                     stripos($item['email'], $request->search) !== false ||
                                     stripos($item['phone'], $request->search) !== false ||
                                     stripos($item['city'], $request->search) !== false;
                }

                if ($request->has('age') && $request->age != '') {
                    $matchesAge = $item['age'] == $request->age;
                }

                return $matchesSearch && $matchesAge;
            });

            $data = $filteredData->values()->all();
        }

        return view('Manualbycontroller', ['data' => $data]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sample data
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john1@example.com', 'age' => 28, 'city' => 'New York', 'phone' => '123-456-7890'],
            ['id' => 2, 'name' => 'John Smith', 'email' => 'john2@example.com', 'age' => 34, 'city' => 'Los Angeles', 'phone' => '987-654-3210'],
            ['id' => 3, 'name' => 'John Davis', 'email' => 'john3@example.com', 'age' => 29, 'city' => 'Chicago', 'phone' => '555-555-5555'],
            ['id' => 4, 'name' => 'John Walker', 'email' => 'john4@example.com', 'age' => 40, 'city' => 'Houston', 'phone' => '111-222-3333'],
            ['id' => 5, 'name' => 'John Johnson', 'email' => 'john5@example.com', 'age' => 23, 'city' => 'Phoenix', 'phone' => '444-555-6666'],
            ['id' => 6, 'name' => 'John Brown', 'email' => 'john6@example.com', 'age' => 31, 'city' => 'Philadelphia', 'phone' => '777-888-9999'],
            ['id' => 7, 'name' => 'Jane Doe', 'email' => 'jane1@example.com', 'age' => 26, 'city' => 'San Francisco', 'phone' => '223-456-7890'],
            ['id' => 8, 'name' => 'Jane Smith', 'email' => 'jane2@example.com', 'age' => 32, 'city' => 'Boston', 'phone' => '987-654-1111'],
            ['id' => 9, 'name' => 'Jane Davis', 'email' => 'jane3@example.com', 'age' => 27, 'city' => 'Seattle', 'phone' => '555-555-2222'],
            ['id' => 10, 'name' => 'Jane Walker', 'email' => 'jane4@example.com', 'age' => 35, 'city' => 'Miami', 'phone' => '333-444-5555'],
            ['id' => 11, 'name' => 'Jane Johnson', 'email' => 'jane5@example.com', 'age' => 24, 'city' => 'Atlanta', 'phone' => '444-666-7777'],
            ['id' => 12, 'name' => 'Jane Brown', 'email' => 'jane6@example.com', 'age' => 30, 'city' => 'Dallas', 'phone' => '888-999-0000'],
        ];
        return view('Manualbycontroller', ['data' => $data]);
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
    public function show(ManualWithController $manualWithController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManualWithController $manualWithController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManualWithController $manualWithController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManualWithController $manualWithController)
    {
        //
    }
}
