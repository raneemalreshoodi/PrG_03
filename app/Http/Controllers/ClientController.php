<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\If_;

class ClientController extends Controller
{
    //show
    public function index(){
        $clients = Client::orderBy('created_at','DESC')->get();

        return view('clients.list',[
            'clients' => $clients
        ]);
    }
    //create
    public function create(){
        return view('clients.create');
        
    }
    //store or insert
    public function store(Request $request){
        $rules = [
            'title' => 'required|min:5',
        ];
        
       $validator = validator::make($request->all(),$rules);

       if ($validator->fails()) {
        # code...
        return redirect()->route('clients.create')->withInput()->withErrors($validator);
       }

       //insert clients in db
       $client = new Client();
       $client->title = $request->title;
       $client->desc = $request->desc;
       $client->save();

       if ($request->image != "") {
        // here we will store image
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; // Unique image name
        
        // Save image to clients directory
        $image->move(public_path('uploads/clients'),$imageName);

          // Save image name in database
          $client->image = $imageName;
          $client->save();
      }  

       return redirect()->route('clients.index')->with('success' ,'تم ادخال العميل بنجاح');
    }
    // This method will show edit client page
    public function edit($id) {
        $client = Client::findOrFail($id);
        return view('clients.edit',[
            'client' => $client
        ]);
    }
// This method will update a client
public function update($id, Request $request) {

    $client = Client::findOrFail($id);

     $rules = [
        'title' => 'required|min:5',
    ];

    if ($request->image != "") {
        $rules['image'] = 'image';
    }

    $validator = Validator::make($request->all(),$rules);

    if ($validator->fails()) {
        return redirect()->route('clients.edit',$client->id)->withInput()->withErrors($validator);
    }

    // here we will update client
   $client = new Client();
   $client->title = $request->title;
   $client->desc = $request->desc;
   $client->save();

    if ($request->image != "") {

        // delete old image
        File::delete(public_path('uploads/clients/'.$client->image));

        // here we will store image
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; // Unique image name

        // Save image to products directory
        $image->move(public_path('uploads/clients'),$imageName);

        // Save image name in database
        $client->image = $imageName;
        $client->save();
    }        

    return redirect()->route('clients.index')->with('success','تم تحديث العميل بنجاح.');
}

// This method will delete a client
public function destroy($id) {
    $client = Client::findOrFail($id);

   // delete image
   File::delete(public_path('uploads/clients/'.$client->image));

   // delete product from database
   $client->delete();

   return redirect()->route('clients.index')->with('success',' تم حذف العميل بنجاح.');
}
}
