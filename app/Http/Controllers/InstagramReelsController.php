<?php

namespace App\Http\Controllers;

use App\Models\InstagramReels;
use App\Http\Requests\InstagramReelsRequest;

class InstagramReelsController extends Controller
{
    public function index()
    {
        $instagramReels = InstagramReels::query()->paginate(5);
        return view('dashboard.instagram-reels.index', compact('instagramReels'));
    }

    public function create()
    {
        return view('dashboard.instagram-reels.create');
    }

    public function store(InstagramReelsRequest $request)
    {
        $data = $request->validated();
        InstagramReels::create($data);
        return redirect()->route('dashboard.instagramReels.index');
    }

    public function destroy(InstagramReels $instagramReel)
    {
        $instagramReel->delete();
        return redirect()->route('dashboard.instagramReels.index');
    }
}
