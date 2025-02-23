<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;


class adminController extends Controller
{
    public function dashboard(Request $request)
    {
        $users = User::all();
        $tickets = Ticket::all();
        $categories = Category::all();

        return view('admin.adminDashboard', ['users' => $users, "tickets" => $tickets, "categories" => $categories]);
    }
}
