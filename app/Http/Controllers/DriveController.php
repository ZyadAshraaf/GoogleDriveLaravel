<?php

namespace App\Http\Controllers;

use App\Drive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index()
    {   $drives=Drive::all();
        return view('drives.index')->with('drives',$drives);
    }

    public function create()
    {
        return view("drives.create");
    }

    
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>"required|min:1|max:20",
                'description'=>"required|min:10|max:50",
                'inputFile'=>"required|file|max:10000"
            ]
            );
            $drive=new Drive();
            $drive->title=$request->title;
            $drive->description=$request->description;
            //file code
            $file_data=$request->file('inputFile');
            $file_name=$file_data->getClientOriginalName();
            $file_data->move(public_path()."/upload/",$file_name);
            ###############
            $drive->file=$file_name;
            $drive->save();
            return redirect('drive')->with('done',"Uploaded");
    }

   
    public function show($id)
    {
        $drive=Drive::find($id);
        return view("drives.show")->with("drive",$drive);
    }

  
    public function edit($id)
    {
        $drive=Drive::find($id);
        return view("drives.edit")->with("drive",$drive);
    }

   
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'title'=>"required|min:1|max:20",
                'description'=>"required|min:10|max:50",
                'inputFile'=>"required|file|max:10000"
            ]
            );
            $drive=Drive::find($id);
            $drive->title=$request->title;
            $drive->description=$request->description;
            //file code
            $file_data=$request->file('inputFile');
            $file_name=$file_data->getClientOriginalName();
            $file_data->move(public_path()."/upload/",$file_name);
            ###############
            $drive->file=$file_name;
            $drive->save();
            return redirect('drive')->with('done',"Updated");
    }


    public function destroy($id)
    {
        $drive=Drive::find($id);
        $drive->delete();
        return redirect('drive')->with('done',"Deleted");
    }

    public function download($id)
    {
        $drive=Drive::where("id","=","$id")->firstOrFail();
        $pathToFile=public_path('upload/'.$drive->file);
        return  response()->download($pathToFile);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
