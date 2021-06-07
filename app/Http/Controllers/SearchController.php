<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Ad;



class SearchController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = 'title';
        $orderBy = 'desc';
        $perPage = 3;
        $q = $request->input('q');

        if ($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if ($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if ($request->has('perPage')) $perPage = $request->query('perPage');
        if ($request->has('q')) $q = $request->query('q');

        $ads = Ad::search($q)->orderBy($sortBy, $orderBy)->paginate($perPage);
        return view('ads.index', compact('ads', 'orderBy', 'sortBy', 'q', 'perPage'));
    }

    public function search(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
