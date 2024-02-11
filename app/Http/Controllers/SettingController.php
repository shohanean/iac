<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('backend.others.settings', [
            'term' => 'Setting',
            'settings' => $settings
        ]);
    }
    public function update(Request $request, Setting $faq)
    {
        foreach ($request->except('_token') as $setting_name => $setting_value) {
            Setting::where('setting_name', $setting_name)->update([
                'setting_value' => $setting_value
            ]);
        }
        return back()->with('success', 'Setting Updated Successfully!');
    }
}
