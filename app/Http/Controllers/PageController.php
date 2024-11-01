<?php

namespace App\Http\Controllers;

use App\Models\Subdivision;
use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        return view('pages.landing_page.landing_page');
    }

    public function bidang1()
    {
        $subdivisions = Subdivision::where('division_id', 1)->get();
        return view('pages.user.bidang1', compact('subdivisions'));
    }

    public function bidang2()
    {
        $subdivisions = Subdivision::where('division_id', 2)->get();
        return view('pages.user.bidang2', compact('subdivisions'));
    }

    public function bidang3()
    {
        $subdivisions = Subdivision::where('division_id', 3)->get();
        return view('pages.user.bidang3', compact('subdivisions'));
    }

    public function detailBidang(Request $request)
    {
        $subdivision = Subdivision::findOrFail($request->subdivision_id);
        $contacts = Contact::where('subdivision_id', $request->subdivision_id)->get();
        return view('pages.user.detail_bidang', compact('subdivision', 'contacts'));
    }
}