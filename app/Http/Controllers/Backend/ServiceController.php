<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function serviceList()
    {
        $services = Service::paginate(10);
        return view('backend.services.list', compact('services'));
    }

    public function createServiceForm()
    {
        return view('backend.services.create');
    }

    public function createService(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|string',
        ]);

        $images = File::files(public_path('assets/imgs/page/homepage2')); 

        if (!empty($images)) {
            $randomImage = $images[array_rand($images)]; 
            $imagePath = asset('assets/imgs/page/homepage2/' . basename($randomImage)); 
        }
        $data = $request->all();
        $data['bg_image'] = $imagePath;

        Service::create($data);
        return redirect()->route('service.list')->with('success', 'Service created successfully.');
    }

    public function editService($id)
    {
        $service = Service::find($id);
        return view('backend.services.edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|string'
        ]);

        $service = Service::find($id);
        $service->update($validatedData);
        return redirect()->route('service.list')->with('success', 'Service updated successfully.');
    }

    public function destroyService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.list')->with('success', 'Service deleted successfully.');
    }
}