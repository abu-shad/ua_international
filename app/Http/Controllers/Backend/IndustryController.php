<?php

namespace App\Http\Controllers\Backend;

use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
    public function industryList()
    {
        $industries = Industry::all();
        return view('backend.industry.list', compact('industries'));
    }

    public function createIndustryForm()
    {
        return view('backend.industry.create');
    }

    public function createIndustry(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Industry::create($validatedData);
        return redirect()->route('industry.list')->with('success', 'Insudtry created successfully.');
    }

    public function editIndustry($id)
    {
        $insudtry = Industry::find($id);
        return view('industry.edit', compact('industry'));
    }

    public function updateIndustry(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $insudtry = Industry::find($id);
        $insudtry->update($validatedData);
        return redirect()->route('industry.list')->with('success', 'Insudtry updated successfully.');
    }

    public function destroyIndustry($id)
    {
        $insudtry = Industry::find($id);
        $insudtry->delete();
        return redirect()->route('industry.list')->with('success', 'Insudtry deleted successfully.');
    }
}
