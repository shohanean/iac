<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\User;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'banners' => Banner::count(),
            'faqs' => Faq::count(),
            'blogs' => Blog::count(),
            'users' => User::count(),
            'messages' => Contact::count(),
            'roles' => Role::all()
        ]);
    }
    public function role()
    {
        return view('backend.others.role', [
            'term' => 'Role',
            'roles' => Role::latest()->get(),
            'permissions' => Permission::all(),
            'nonStudents' => User::withoutRole('student')->get()
        ]);
    }
    public function role_store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);
        $role = Role::create(['name' => Str::lower($request->role_name)]);
        $role->givePermissionTo($request->permissions);
        return back()->with('success', 'Role added successfully!');
    }
    public function role_change($id, Request $request){
        User::find($id)->syncRoles($request->role_name);
        return back()->with('role_success', 'Role changed successfully!');
    }
}
