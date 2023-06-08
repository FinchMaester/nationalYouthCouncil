<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pressreleases = Information::whereType("pressrelease")->latest()->get()->take(5);
        // $news = Information::whereType("news")->latest()->get()->take(5);
        // $otheropt = Information::whereType("other")->latest()->get()->take(5);
        // $notices = Information::whereType('notice')->latest()->get()->take(5);
        // $tenders = Information::whereType('tender')->latest()->get()->take(5);

        $information = Information::latest()->paginate(20);

        return view('admin.information.index', [
            "page_title" => "Information",
            "information" => $information,
        //    "notices" => $notices,
        //    "tenders" => $tenders,
        //     "pressreleases" => $pressreleases,
          
        //     "news" => $news,
        //     "otheropt" => $otheropt,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.information.create', [
            "page_title" => "Create Information"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    // Get the individual inputs
    $type = $request->input('type');
    $title = $request->input('title');
    $description = $request->input('description');
    $gdocs = $request->input('gdocs');
    $image = $request->file('image');
    $file = $request->file('file');
    
    // Validate the inputs
    $validator = Validator::make([
        'type' => $type,
        'title' => $title,
        'description' => $description,
        'gdocs' => $gdocs,
        'image' => $image,
        'file' => $file,
    ], [
        'type' => 'string',
        'title' => 'required|string',
        'description' => 'required|string',
        'gdocs' => 'nullable|url',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'file' => 'required|file|mimes:pdf|max:7000',
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    
    // Store the image and get the image path
    $imagePath = null;
    if ($image) {
        $imagePath = 'uploads/information/image/' . Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/information/image/'), $imagePath);
    }
    
    // Store the file and get the file path
    $filePath = null;
    if ($file) {
        $filePath = 'uploads/information/file/' . Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/information/file/'), $filePath);
    }
    
    // Create a new Information model and save it to the database
    $information = new Information;
    $information->type = $type;
    $information->title = $title;
    $information->slug = SlugService::createSlug(Information::class, 'slug', $title);
    $information->description = $description;
    $information->gdocs = $gdocs ?? '';
    $information->image = $imagePath;
    $information->file = $filePath;
    $information->save();
    
    return redirect()->route('admin.information.index')->with('success', 'Information created successfully.');
}

       
    //     $this->validate($request, [
    //         'type' => 'string',
    //         'title' => 'required|string',
    //         'description' => 'required|string',
    //         'gdocs' => 'nullable|url',
    //         'image' => 'image|mimes:jpg,png,peg,gif,svg|max:2048',
    //         'file' => 'required|file|max:7000'
    //     ]); 

        
    //     if ($request->hasFile('image')){
    //     $newImage = time() . "-image" . $request->title . "-" . $request->image->extension();
    //     $request->image->move(public_path('uploads/information/image'), $newImage);
    // }
    // else{
    //     $newImage = null;
    // }
    //     if ($request->hasFile('file')){
    //         $postPath = time() . "-file" . $request->title . '.' .$request->file->extension();
    //         $request->file->move(public_path('uploads/information/file'), $postPath );
    //     }else{
    //             $postPath = "NoFile";
    //     }

    //     $information = new Information;
    //     $information->type = $request->type;
    //     $information->title = $request->title;
    //     $information->slug = SlugService::createSlug(Information::class, 'slug', $request->title);
    //     $information->description = $request->description;
    //     $information->gdocs = $request->gdocs ?? '' ;

    //     $information->image = $newImage;
    //     $information->file = $postPath;


    //     if ($information->save()){
           
    //         return redirect()->route('admin.information.index')->with('success', 'Information Created successfully');
    //     } else {
    //         return redirect()->back()->with('error', 'Error creating information');
    //     }

        

    //     return redirect('admin/information/index')->with("message", "Information Saved");

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information, $id)
    {
        $information = Information::find($id);

        return view('admin.information.update', [
            'information' => $information,
            'page_title' => "Information Update"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $request->validate([
            "type" => "string",
            "title" => "required|string",
            "description" => "required|string",
            "image" => "image|mimes:jpg,png,peg,gif,svg|max:2048",
            "gdocs" => "nullable|url",
            "file" => "file|max:7000"
        ]);

        $information = Information::find($request->id);

        if ($request->hasFile('file')){
            $postPath = time() . '-file' . $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/information/file'), $postPath );
            Storage::delete('uploads/information/' . $information->file);
            $information->file = $postPath;
        }else {
            unset($request['file']);
        }
        

        if ($request->hasFile('image')) {
            $newImageName = time() . '-image' . $request->title . '.' .$request->image->extension();
            $request->image->move(public_path('uploads/information/image'), $newImageName );
            Storage::delete('uploads/other/image/' . $information->image);
            $information->image = $newImageName;
        }else{
            unset($request['image']);
            // $newImageName = null;
        }

      
       
        $information->type = $request->type;
        $information->title = $request->title;
        $information->slug = SlugService::createSlug(Information::class, 'slug', $request->title);
        $information->description = $request->description;
        $information->gdocs = $request->gdocs;

        $information->save();

        return redirect("admin/information/index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information, $id)
    {
        $information = Information::find($id);
        $information->delete();

        return redirect("admin/information/index");
    }
}
