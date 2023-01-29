<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
    }

    public function create()
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('reservations.create', compact('tables'));
    }

    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }
        Reservation::create($request->validated());

        return back()->with('success', 'Reservation created successfully.');
    }

    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('reservations.edit', compact('reservation', 'tables'));
    }

    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        // dd($reservation->table_id);
        foreach ($reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }

        $reservation->update($request->validated());
        return back()->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return back()->with('danger', 'Reservation deleted successfully.');
    }
}