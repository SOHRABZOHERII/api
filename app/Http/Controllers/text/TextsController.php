<?php

namespace App\Http\Controllers\text;

use App\Events\EmailEntered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Text;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class TextsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Text $text )
    {
        $validated=$request->validate([
            'text' => 'required|max:120',
        ]);
          $text->create($validated);



        // $users = User::all();
        // foreach($users as $user){
        //     Mail::to($user->email)->send(new TestMail($inputValue));
        // }



        // $user = User::find(1);
        // Mail::to($user->email)


       $inputValue = $request->input('text');
      Mail::to('Taha@gmail.com')->send(new TestMail($inputValue));

      return back()->with('success' , 'Mail has send');

// event(new EmailEntered($inputValue));
return back()->with('success' , 'Mail has send');

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
