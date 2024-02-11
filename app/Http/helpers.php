<?php

use App\Models\Contact;
use App\Models\Setting;

function setting($name)
{
    if (Setting::where('setting_name', $name)->exists()) {
        return Setting::where('setting_name', $name)->first()->setting_value;
    } else {
        return "Setting not found";
    }
}
function contacts()
{
    return Contact::count();
}
