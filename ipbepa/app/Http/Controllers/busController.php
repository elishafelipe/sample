<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\bus;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Http\Request;

class busController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['buses'] = bus::all();
        return view('pages.bus.index', $this->data);
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
        $this->validate($request, [
            
            'bus_route' => 'required|max:255',
            'bus_platenumber' => 'required|max:255',
            
            'total_seats' => 'required|numeric',
            
            
        ],[
                'bus_route.required' => 'Bus Route is required.',
                'bus_platenumber.required' => 'Plate Number is required.',
                'total_seats.required' => 'Total Seats is required.',
                'total_seats.numeric' => 'Total Seats must be a number.'
            ]);
        $bus = new bus();
        $bus->bus_route = $request->bus_route;
        $bus->bus_platenumber = $request->bus_platenumber;
        $bus->total_seats = $request->total_seats;
        $bus->is_fullybooked = $request->is_fullybooked;

        $bus->save();
        
        return redirect('/buses')->with('msg', 'Information Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, bus $bus)
    {
        
        return view('pages.bus.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'bus_route' => 'required|max:255',
            'bus_platenumber' => 'required|max:255',
            
            'total_seats' => 'required|numeric',
            
            
        ],[
                'bus_route.required' => 'Bus Route is required.',
                'bus_platenumber.required' => 'Plate Number is required.',
                'total_seats.required' => 'Total Seats is required.',
                'total_seats.numeric' => 'Total Seats must be a number.'
            ]);

        $bus = bus::findorFail($id);

        $bus->bus_route = $request->bus_route;
        $bus->bus_platenumber = $request->bus_platenumber;
        $bus->total_seats = $request->total_seats;
        $bus->is_fullybooked = $request->is_fullybooked;

        $bus->save();
        
        return redirect('/buses')->with('msg', 'Information Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(bus $bus)
    {
        $bus->delete();
        return redirect('/buses')->with('delete', 'Information Deleted!');
    }
}
