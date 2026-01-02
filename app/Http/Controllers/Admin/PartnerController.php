<?php

namespace App\Http\Controllers\Admin; // تأكد من هذا السطر بدقة

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner; // تأكد من استدعاء الموديل أيضاً
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        $partner = new Partner();
        $partner->name = $request->name;

        if ($request->hasFile('logo_file')) {
            $name = 'partner_'.time().'.'.$request->logo_file->extension();
            $request->logo_file->move(public_path('uploads/partners'), $name);
            $partner->logo = 'uploads/partners/'.$name;
        }

        $partner->save();
        return back()->with('success', 'Partenaire ajouté avec succès !');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        if($partner->logo && File::exists(public_path($partner->logo))) {
            File::delete(public_path($partner->logo));
        }
        $partner->delete();
        return back()->with('success', 'Partenaire supprimé !');
    }
}