<?php

namespace App\Http\Controllers\Backend;

use App\Models\Help;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function employerList()
    {
        $employers = Employer::paginate(10);
        return view('backend.employer.list', compact('employers'));
    }

    public function helpDeskList()
    {
        $helpdesks = Help::paginate(10);
        return view('backend.helpdesk.list', compact('helpdesks'));
    }

    public function destroyEmployer($id)
    {
        $insudtry = Employer::find($id);
        $insudtry->delete();
        return redirect()->route('employer.list')->with('success', 'Employer deleted successfully.');
    }

    public function destroyHelp($id)
    {
        $insudtry = Help::find($id);
        $insudtry->delete();
        return redirect()->route('help.list')->with('success', 'HelpDesk Detail deleted successfully.');
    }
}
