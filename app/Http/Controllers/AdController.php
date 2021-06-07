<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Ad as AdRequest;
use App\Models\Ad;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ads = Ad::paginate(3);
        return view('ads.index', compact('ads'));
    }

    /**
     * searchbar
     */
    public function search(Request $request)
    {
        $sortBy = 'title';
        $orderBy = 'desc';
        $perPage = 3;
        $q = $request->input('q');

        if ($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if ($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if ($request->has('q')) {
            $q = $request->query('q');
        }

        $ads = DB::table('ads')->where("title", "LIKE", "%" . $q . "%")->orderBy($sortBy, $orderBy)->paginate(3);
        return view('users.ads.index', compact('ads', 'orderBy', 'sortBy', 'q'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdRequest $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
            'surface' => 'required',
            'price' => 'required',
            'street' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'surface' => 'required',
            'room' => 'required',
            'category_id' => 'required',

        ]);
        
        $imageName = time(). '.' .$request->file('image')->extension();

        $path = $request->image->move(public_path('images'), $imageName);
        
        $ad = new Ad;
        
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->image = $imageName;
        $ad->surface = $request->surface;
        $ad->price = $request->price;
        $ad->street = $request->street;
        $ad->postcode = $request->postcode;
        $ad->city = $request->city;
        $ad->room = $request->room;
        $ad->category_id = $request->category_id;
        $ad->save();
        // Ad::create($adRequest->all());
        return redirect()->route('ads.index')->with('info', 'Ad created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdRequest $request, Ad $ad)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
            'surface' => 'required',
            'price' => 'required',
            'street' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'surface' => 'required',
            'room' => 'required',
            'category_id' => 'required',
        ]);
        
        $imageName = time(). '.' .$request->file('image')->extension();

        $path = $request->image->move(public_path('images'), $imageName);

        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->image = $imageName;
        $ad->surface = $request->surface;
        $ad->price = $request->price;
        $ad->street = $request->street;
        $ad->postcode = $request->postcode;
        $ad->city = $request->city;
        $ad->room = $request->room;
        $ad->category_id = $request->category_id;
        $ad->save();
        // $ad->update($request->all());
        return redirect()->route('ads.index')->with('info', 'Ad has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('product')->with('info', 'Ad has been deleted.');
    }

    public function product()
    {
        $ads = Ad::paginate(5);
        return view('ads.product', compact('ads'));
    }
}
