<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\NavLink;
use App\Models\Achievement;

class DashboardController extends Controller
{
    // Page d'accueil du Dashboard
    public function index() {
        return view('admin.dashboard');
    }

    // --- Section Paramètres (Téléphone, Email) ---
    public function settings() {
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request) {
        $data = $request->only(['phone', 'email']);
        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success', 'Paramètres généraux mis à jour avec succès !');
    }

    // --- Section Liens de Navigation ---
    public function navLinks() {
        $navLinks = NavLink::orderBy('position')->get();
        // ملاحظة: تأكد أن اسم الملف هو nav-links.blade.php كما في التوجيهات السابقة
        return view('admin.nav_links', compact('navLinks'));
    }

    public function updateNavLinks(Request $request) {
        if ($request->has('nav_links')) {
            foreach ($request->nav_links as $id => $data) {
                NavLink::where('id', $id)->update([
                    'title'     => $data['title'],
                    'url'       => $data['url'],
                    'position'  => $data['position'],
                    'is_active' => isset($data['is_active']) ? true : false,
                ]);
            }
        }
        return back()->with('success', 'Les liens du menu ont été mis à jour !');
    }

    // --- Section Réalisations (Achievements) ---
    public function achievements() {
        $achievements = Achievement::orderBy('order')->get();
        return view('admin.achievements', compact('achievements'));
    }

    public function updateAchievements(Request $request) {
        if ($request->has('achievements')) {
            foreach ($request->achievements as $id => $data) {
                Achievement::where('id', $id)->update([
                    'count' => $data['count'],
                    'title' => $data['title'],
                    'order' => $data['order'],
                ]);
            }
        }
        return back()->with('success', 'Les statistiques ont été mises à jour avec succès !');
    }
}