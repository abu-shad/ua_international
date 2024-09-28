<?php

namespace App\Http\Controllers\Backend;

use App\Models\Presence;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresenceController extends Controller
{
    use FileUpload;

    public function presenceList()
    {
        $presences = Presence::paginate(10);
        return view('backend.presence.list', compact('presences'));
    }

    public function createPresenceForm()
    {
        return view('backend.presence.create');
    }

    public function createPresence(Request $request)
    {
     
        $validatedData = $request->validate([
            'location_name' => 'required|string|max:255',
            'vacancy' => 'required|string',
            'companies' => 'required|string',
            'location_image' => 'required',
            'url' => 'required|string',
        ]);

        if ($request->hasFile('location_image')) {
            $path = 'location';
            $image = $request->file('location_image');
            $pathImage = FileUpload::imageUpload($image, $path);
        }

        Presence::create([
            'location_name' => $request->location_name,
            'vacancy' => $request->vacancy,
            'companies' => $request->companies,
            'location_image' => isset($pathImage) ? url('storage').'/'.$pathImage : '',
            'url' => $request->url,
         ]);
        
        return redirect()->route('presence.list')->with('success', 'Presence created successfully.');
    }

    public function editPresence($id)
    {
        $presence = Presence::find($id);
        return view('backend.presence.edit', compact('presence'));
    }

    public function updatePresence(Request $request, $id)
    {
        $validatedData = $request->validate([
            'location_name' => 'required|string|max:255',
            'vacancy' => 'required|string',
            'companies' => 'required|string',
            'location_image' => 'nullable',
            'url' => 'required|string',
        ]);

        if ($request->hasFile('location_image')) {
            $path = 'location';
            $image = $request->file('location_image');
            $pathImage = FileUpload::imageUpload($image, $path);
        }

        $presence = Presence::find($id);
        $presence->update($validatedData);

        $presence->update([
            'location_image' => isset($pathImage) ? url('storage').'/'.$pathImage : $request->profile_image,
            'location_name' => $request->location_name,
            'vacancy' => $request->vacancy,
            'companies' => $request->companies,
            'url' => $request->url
         ]);

        return redirect()->route('presence.list')->with('success', 'Presence updated successfully.');
    }

    public function destroyPresence($id)
    {
        $presence = Presence::find($id);
        $presence->delete();
        return redirect()->route('presence.list')->with('success', 'Presence deleted successfully.');
    }
}
