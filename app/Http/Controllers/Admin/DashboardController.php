<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    function index() : View {
        $usersCount = User::count();
        $permissionsCount = Permission::count();
        $rolesCount = Role::count();
        return view('dashboard', compact('usersCount','permissionsCount','rolesCount'));
    }
}
