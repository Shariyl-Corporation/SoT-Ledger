<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Restaurant;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class RestaurantController extends Controller
{
    public function index() {
        // return Restaurant::paginate(10);

        return Inertia::render('Restaurant/index', [
            'paginatedRestaurant' => Restaurant::paginate(10)
        ]);
    }

    public function view(Request $request, $id) {
        return Inertia::render('Restaurant/view', [
            'restaurant' => Restaurant::find($id),
        ]);
    }

    public function update(Request $request) {
    }


    public function delete(Request $request) {
        
    }

}