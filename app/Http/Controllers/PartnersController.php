<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\PartnerRequest;
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
        $logo = Storage::put('public/partners', $request->file('logo'));
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
        Partner::find($partner->id)->delete();
        return redirect()->route('dashboard.partners.index')->with('status', 'Партнер успешно удален!');
    }
}
