<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // عرض صفحة التحكم بالسلايدر
    public function index()
    {
        // نجلب السلايدات الثلاثة مرتبة
        $sliders = Slider::orderBy('order', 'asc')->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    // تحديث بيانات السلايد
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $data = $request->validate([
            'title_fr' => 'nullable|string',
            'subtitle_fr' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $slider->update($data);

        return redirect()->back()->with('success', 'Le slide a été mis à jour avec succès !');
    }
}