<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Division;
use App\Models\Subdivision;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalData = Contact::count();
        $activeDivisions = Division::count();
        $activeSubdivisions = Subdivision::count();
        $newDataThisMonth = Contact::whereMonth('created_at', now()->month)->count();
        $recentContacts = Contact::with(['division', 'subdivision'])->orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('totalData', 'activeDivisions', 'activeSubdivisions', 'newDataThisMonth', 'recentContacts'));
    }

    public function masterData(Request $request)
    {
        $divisionId = $request->input('division_id');
        $subdivisionId = $request->input('subdivision_id');

        $query = Contact::with(['division', 'subdivision']);

        if ($divisionId) {
            $query->where('division_id', $divisionId);
        }

        if ($subdivisionId) {
            $query->where('subdivision_id', $subdivisionId);
        }

        $contacts = $query->paginate(10);

        $divisions = Division::all();
        $subdivisions = Subdivision::all();

        return view('admin.master_data', compact('contacts', 'divisions', 'subdivisions'));
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'subdivision_id' => 'required',
            'photo_profile' => 'required|image',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'wa_link' => 'required|url|max:255',
            'status' => 'required|in:Aktif,Non Aktif'
        ]);

        $photoPath = $request->file('photo_profile')->store('photos', 'public');

        Contact::create([
            'division_id' => $request->division_id,
            'subdivision_id' => $request->subdivision_id,
            'photo_profile' => $photoPath,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'wa_link' => $request->wa_link,
            'status' => $request->status
        ]);

        return redirect()->route('master-data')->with('success', 'Data berhasil ditambahkan');
    }

    public function editData($id)
    {
        $contact = Contact::findOrFail($id);
        $divisions = Division::all();
        $subdivisions = Subdivision::where('division_id', $contact->division_id)->get();

        return view('admin.edit_data', compact('contact', 'divisions', 'subdivisions'));
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'division_id' => 'required',
            'subdivision_id' => 'required',
            'photo_profile' => 'image',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'wa_link' => 'required|url|max:255',
            'status' => 'required|in:Aktif,Non Aktif'
        ]);

        $contact = Contact::findOrFail($id);

        if ($request->hasFile('photo_profile')) {
            $photoPath = $request->file('photo_profile')->store('photos', 'public');
            $contact->photo_profile = $photoPath;
        }

        $contact->update([
            'division_id' => $request->division_id,
            'subdivision_id' => $request->subdivision_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'wa_link' => $request->wa_link,
            'status' => $request->status
        ]);

        return redirect()->route('master-data')->with('success', 'Data berhasil diperbarui');
    }

    public function deleteData($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('master-data')->with('success', 'Data berhasil dihapus');
    }
}
