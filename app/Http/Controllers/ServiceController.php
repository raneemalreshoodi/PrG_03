<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('created_at','DESC')->get();

        return view('services.list',[
            'services' => $services
        ]);
    }

    public function create(){
        return view('services.create');
    }

    public function store(Request $request){
        $rules = [
            'title' => 'required|min:5',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('services.create')->withInput()->withErrors($validator);
        }

        $service = new Service();
        $service->title = $request->title;
        $service->desc = $request->desc;
        $service->save();

        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/services'), $imageName);
            $service->image = $imageName;
            $service->save();
        }

        return redirect()->route('services.index')->with('success', 'تم إدخال الخدمة بنجاح');
    }

    public function edit($id) {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }

    public function update($id, Request $request) {
        $service = Service::findOrFail($id);

        $rules = [
            'title' => 'required|min:5',
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('services.edit', $service->id)->withInput()->withErrors($validator);
        }

        $service->title = $request->title;
        $service->desc = $request->desc;
        $service->save();

        if ($request->image != "") {
            File::delete(public_path('uploads/services/'.$service->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/services'), $imageName);
            $service->image = $imageName;
            $service->save();
        }

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح.');
    }

    public function destroy($id) {
        $service = Service::findOrFail($id);

        File::delete(public_path('uploads/services/'.$service->image));
        $service->delete();

        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح.');
    }
}
