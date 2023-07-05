<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Registration;
use App\Models\My_team;
use App\Models\My_referral;
use App\Models\Investment;
use App\Models\Withdraw;
use App\Models\ROI;
use App\Models\Matching;
use App\Models\Bonanza; // Add the Bonanza model
use DB;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;


class BonanzaController extends Controller
{
    public function create()
    {
        return view('Admin.add_bonanza');
    }

public function add_bonanza(Request $request)
{
    // Validate the input
    $validatedData = $request->validate([
        'left_business' => 'nullable|numeric',
        'right_business' => 'nullable|numeric',
        'direct_business' => 'nullable|numeric',
        'amount' => 'nullable|numeric',
        'count' => 'nullable|numeric',
        'price' => 'nullable|numeric',
        'description' => 'required',
        'no_of_direct_business' => 'nullable|numeric',
    ]);

    // Set default value of 0 for empty fields
    $bonanza = new Bonanza();
    $bonanza->left_business = $validatedData['left_business'] ?? 0;
    $bonanza->right_business = $validatedData['right_business'] ?? 0;
    $bonanza->direct_business = $validatedData['direct_business'] ?? 0;
    $bonanza->amount = $validatedData['amount'] ?? 0;
    $bonanza->count = $validatedData['count'] ?? 0;
    $bonanza->price = $validatedData['price'] ?? 0;
    $bonanza->description = $validatedData['description'];
    $bonanza->no_of_direct_business = $validatedData['no_of_direct_business'] ?? 0;

    // Save the bonanza record
    $bonanza->save();

    // Return a response or redirect with a success message
    $request->session()->flash('success', 'Data submitted successfully!');
return redirect()->route('view_bonanza');

}


public function view_bonanza(Request $request)
{
    if ($request->ajax()) {
        $bonanzaData = Bonanza::view_bonanza();

        return Datatables::of($bonanzaData)
            ->addIndexColumn()
            ->toJson();
    }
 return view('Admin.view_bonanza');
}




}

