<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoSection;
use Illuminate\Support\Facades\File;

class VideoSectionController extends Controller
{
    // دالة عرض الصفحة (هذه كانت مفقودة)
    public function index()
    {
        $video = VideoSection::first() ?? new VideoSection();
        return view('admin.video.index', compact('video'));
    }

    public function update(Request $request) 
    {
        $video = VideoSection::firstOrCreate(['id' => 1]);

        // معالجة صورة الفيديو
        if ($request->hasFile('video_img_file')) {
            if($video->video_img && File::exists(public_path($video->video_img))) {
                File::delete(public_path($video->video_img));
            }
            $name = 'video_thumb_'.time().'.'.$request->video_img_file->extension();
            $request->video_img_file->move(public_path('uploads/video'), $name);
            $video->video_img = 'uploads/video/'.$name;
        }

        $video->update([
            'video_url' => $request->video_url,
            'title_fr'  => $request->title_fr,
            'text_fr'   => $request->text_fr,
            'video_img' => $video->video_img
        ]);

        return back()->with('success', 'Section Vidéo mise à jour !');
    }
}