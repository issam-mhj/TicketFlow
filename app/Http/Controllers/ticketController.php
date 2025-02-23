<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ticketController extends Controller
{
    public function showTickets()
    {
        $tickets = Ticket::all();
        return view('admin/ticketDashboard', ["tickets" => $tickets]);
    }
}
