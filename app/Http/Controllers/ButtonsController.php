<?php

namespace App\Http\Controllers;

use App\Models\Button;
use App\Http\Requests\ButtonRequest;

class ButtonsController extends Controller
{
    public function index()
    {
        $buttons = Button::query()->paginate(10);

        return view('dashboard.buttons.index', compact('buttons'));
    }

    public function create()
    {
        return view('dashboard.buttons.create');
    }

    public function store(ButtonRequest $request)
    {
        Button::create($request->validated());

        return redirect()->route('dashboard.buttons.index');
    }

    public function show(Button $button)
    {
        return view('dashboard.buttons.show', compact('button'));
    }

    public function edit(Button $button)
    {
        return view('dashboard.buttons.edit', compact('button'));
    }

    public function update(ButtonRequest $request, Button $button)
    {
        $button->update($request->validated());

        return redirect()->route('dashboard.buttons.index');
    }

    public function destroy(Button $button)
    {
        $button->delete();

        return redirect()->route('dashboard.buttons.index');
    }
}
