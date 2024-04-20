<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ItemsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ItemsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.pages.item.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.item.form', ['action' => route('dashboard.items.store')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('image');
        $item = Item::create($data);
        $item->addMediaFromRequest('image')->toMediaCollection('item_images');

        return redirect()->route('dashboard.items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('dashboard.pages.item.form', ['model' => $item, 'action' => route('dashboard.items.update', $item->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data = $request->except('image');
        $item->update($data);
        if ($request->hasFile('image')) {
            $item->clearMediaCollection('item_images');
            $item->addMediaFromRequest('image')->toMediaCollection('item_images');
        }
        return redirect()->route('dashboard.items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
