<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginproject;

class LoginprojectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loginproject =loginproject::all();
        return view ('loginprojects.index', [
            'loginprojects' => $loginproject
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('loginprojects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "fullname" => "required|unique:loginprojects",
            "age" => "required|integer|min:0",
            "location" => "required|string",
            "experience" => "required|integer|min:0",
            "degree" => "required|string",
            "image" => "required|mimes:jpg,png,jpeg|max:1999"
            ]);

            $newImageName = time(). '-'. $request->name. '.'.
            $request->image->extension();

            $request->image->move(public_path('images'), $newImageName);

        $loginproject = loginproject::create([

            'fullname' => $request->input('fullname'),
            'age' => $request->input('age'),
            'location' => $request->input('location'),
            'experience' => $request->input('experience'),
            'degree' => $request->input('degree'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id

        ]);


        return redirect('/loginprojects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loginproject = loginproject::find($id);

        return view('loginprojects.show')->with('loginproject', $loginproject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loginproject = loginproject::find($id)->first();

        return view('loginprojects.edit')->with('loginproject', $loginproject);
    }

    /**
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newImageName = time(). '-'. $request->name. '.'.
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);



        $loginproject = loginproject::where('id', $id)
             ->update([
                'fullname' => $request->input('fullname'),
                'age' => $request->input('age'),
                'location' => $request->input('location'),
                'experience' => $request->input('experience'),
                'degree' => $request->input('degree'),
                'image_path' => $newImageName
        ]);

        return redirect('/loginprojects');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( loginproject $loginproject )
    {
        $loginproject -> delete();

        return redirect('/loginprojects')->with('message', 'profile successfully deleted');
    }
}
