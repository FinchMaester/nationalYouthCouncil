<?php

namespace App\Http\Controllers;

use App\Models\Insta;
use Illuminate\Http\Request;

class InstaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instas = Insta::paginate(50);
        return view('admin.insta.index',  ['instas' => $instas, 'page_title' =>'Insatgram']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insta.create', [ 'page_title' =>'Create Instagram Post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           
            'url' => 'required',
        ]);

  



        $insta = new Insta;

    
          
            $insta->url = $request->url;

        $insta->save();

        return redirect('admin/insta/index')->with(['successMessage' => 'Success !! Instagram link created']);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insta  $insta
     * @return \Illuminate\Http\Response
     */
    public function show(Insta $insta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insta  $insta
     * @return \Illuminate\Http\Response
     */
    public function edit(Insta $insta, $id)
    {
        $insta = Insta::find($id);
        return view('admin.insta.update',['insta' => $insta, 'page_title' => 'Update Instagram link']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Insta  $insta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insta $insta)
    {
        $this ->validate($request,[
           
            'url' => 'required',
        ]);

        $insta = Insta::find($request->id);

        $insta->url = $request->url;

        if ($insta->save()) {
            return redirect('admin/insta/index')->with(['successMessage' => 'Success !! Instagram Link Updated']);
        } else {
            return redirect()->back()->with(['errorMessage' => 'Error Instagram Link not updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insta  $insta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insta $insta, $id)
    {
        
        $insta = Insta::find($id);

        $insta->delete();
        return redirect('admin/insta/index')->with(['successmessage' => 'Success !! Instagram Link Deleted']);

    }
}
