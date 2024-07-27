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
            // Define your validation rules here
            // 'field_name' => 'required|type',
        ]);   
           
        // Find the configuration to update
        $configuration = Configurations::find($request->id);
    
        // Update the configuration with the validated data
        $configuration->update($validated);

        // Return a response
        return response()->json(['message' => 'Configuration updated successfully']); 
    }
}
