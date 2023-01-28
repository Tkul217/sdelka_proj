<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Http\Requests\ApartmentRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ApartmentsController extends Controller
{
    public function index()
    {
        $apartments = Apartment::query()->paginate();
        return view('dashboard.apartments.index', compact('apartments'));
    }

    public function create()
    {
        return view('dashboard.apartments.create');
    }

    public function store(ApartmentRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            $resize = Image::make($request->file('image'))->resize(400, 350)
                ->save('storage/apartments/' . $request->file('image')->hashName());
            Apartment::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'salary' => $data['salary'],
                'image' => 'public/apartments/' . $resize->basename,
                'type' => $data['type'],
                'link' => $data['link'],
            ]);
        }
        else{
            Apartment::create($data);
        }
        return redirect()->route('dashboard.apartments.index')->with('status', 'Квартира успешно добавлена!');
    }

    public function show(Apartment $apartment)
    {
        return view('dashboard.apartments.show', compact('apartment'));
    }

    public function edit(Apartment $apartment)
    {
        return view('dashboard.apartments.edit', compact('apartment'));
    }

    public function update(ApartmentRequest $request, Apartment $apartment)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            Storage::delete($apartment->image);
            if ($request->hasFile('image')){
                $resize = Image::make($request->file('image'))->resize(400, 350)
                    ->save('storage/apartments/' . $request->file('image')->hashName());
                Apartment::update([
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'salary' => $data['salary'],
                    'image' => 'public/apartments/' . $resize->basename,
                    'type' => $data['type'],
                    'link' => $data['link'],
                ]);
            }
        }
        else{
            $apartment->update($data);
        }
        return redirect()->route('dashboard.apartments.index')->with('status', 'Квартира успешно обновлена!');
    }

    public function destroy(Apartment $apartment)
    {
        Storage::delete($apartment->image);
        $apartment->delete();
        return redirect()->route('dashboard.apartments.index')->with('status', 'Квартира успешно удалена!');
    }
}
