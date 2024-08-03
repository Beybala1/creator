<?php

namespace App\Http\Controllers;

use App\Models\Configurations;
use Illuminate\Http\Request;

class ConfigurationsController extends Controller
{
    public function index()
    {
        return view('web.backend.configurations.index');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'is_header'    => 'in:0,1',
            'is_slider'    => 'in:0,1',   
            'is_service'   => 'in:0,1',
            'is_blog'      => 'in:0,1',
            'is_brand'     => 'in:0,1',
            'is_contact_us'=> 'in:0,1',
            'is_footer'    => 'in:0,1',
        ]);

        $configuration = Configurations::first();
        
        $configuration->update([
            'is_header'     => $request->is_header,
            'is_slider'     => $request->is_slider,
            'is_service'    => $request->is_service,
            'is_blog'       => $request->is_blog,
            'is_brand'      => $request->is_brand,
            'is_about'      => $request->is_about,
            'is_contact_us' => $request->is_contact_us,
            'is_footer'     => $request->is_footer,
        ]);

        return response()->json(['message' => 'Configuration updated successfully']); 
    }
}
