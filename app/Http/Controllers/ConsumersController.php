<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Http\Requests\ConsumerRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ConsumersController extends Controller
{
    public function index()
    {
        $consumers = Consumer::paginate(10);
        return view('dashboard.consumers.index', compact('consumers'));
    }

    public function create()
    {
        return view('dashboard.consumers.create');
    }

    public function store(ConsumerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('avatar')){
            $resize = Image::make($request->file('avatar'))->resize(400, 350)
                ->save('storage/consumers/' . $request->file('avatar')->hashName());
            Consumer::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'role' => $data['role'],
                'avatar' => 'public/consumers/' . $resize->basename,
            ]);
        }
        else{
            Consumer::create($data);
        }
        return redirect()->route('dashboard.consumers.index')->with('status', 'Агент успешно добавлен!');
    }

    public function show(Consumer $consumer)
    {
        return view('dashboard.consumers.show', compact('consumer'));
    }

    public function edit(Consumer $consumer)
    {
        return view('dashboard.consumers.edit', compact('consumer'));
    }

    public function update(ConsumerRequest $request, Consumer $consumer)
    {
        $data = $request->validated();
        if ($request->hasFile('avatar')){
            Storage::delete($consumer->avatar);
            if ($request->hasFile('avatar')){
                $resize = Image::make($request->file('avatar'))->resize(400, 350)
                    ->save('storage/consumers/' . $request->file('avatar')->hashName());
                $consumer->update([
                    'name' => $data['name'],
                    'phone' => $data['phone'],
                    'role' => $data['role'],
                    'avatar' => 'public/consumers/' . $resize->basename,
                ]);
            }
        }
        else{
            $consumer->update($data);
        }
        return redirect()->route('dashboard.consumers.index')->with('status', 'Агент успешно обновлен!');
    }

    public function destroy(Consumer $consumer)
    {
        \Storage::delete($consumer->avatar);
        $consumer->delete();
        return redirect()->route('dashboard.consumers.index')->with('status', 'Агент успешно удален!');
    }
}
