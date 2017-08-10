<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $owners = \App\Owner::all();
      $dokumens = \App\Dokumen::all();

      if ($owner_id = ($request->get('owner_id')))
      {
        $details = \App\Detail::where('owner_id', $owner_id)
                                ->with('owner', 'dokumen', 'stopmap')
                                ->paginate(3);
      }
      else
      {
        $details = \App\Detail::with('owner', 'dokumen', 'stopmap')
                                ->paginate(3);
      }
      // \DB::enableQueryLog();

      return view('details.index', compact('dokumens', 'owners', 'details'));
      // $data = view('template.main', compact('dokumens', 'owners', 'details'))->render();
      // dd(\DB::getQueryLog($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
