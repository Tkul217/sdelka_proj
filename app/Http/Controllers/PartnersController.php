<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\PartnerRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::query()
            ->paginate(5);
        return view('dashboard.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('dashboard.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $data = $request->validated();
        $logo = $request->file('logo')->store('public/partners');
        Partner::create([
            'role' => $data['role'],
            'logo' => $logo,
        ]);
        return redirect()->route('dashboard.partners.index')->with('status', 'Партнер успешно добавлен!');
    }

    public function show(Partner $partner)
    {
        $partner = Partner::find($partner->id);
        return view('dashboard.partners.show', compact('partner'));
    }

    public function destroy(Partner $partner)
    {
        Storage::delete($partner->logo);
        Partner::find($partner->id)->delete();
        return redirect()->route('dashboard.partners.index')->with('status', 'Партнер успешно удален!');
    }
}
