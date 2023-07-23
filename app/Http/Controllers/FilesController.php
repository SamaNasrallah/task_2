<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index(Request $request )
    {
        $folder_id = $request->route('folder_id');
        $files = File::where('folder_id', $folder_id)->get();
        $folders = Folder::with('files')->get();
        return view('actionfile.file', compact('folders', 'folder_id', 'files'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $folder_id = $request->route('folder_id');
        $files = File::where('folder_id', $folder_id)->get();
        $folders = Folder::with('files')->get();
        return view('actionfile.create', compact('folders', 'folder_id', 'files'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request['name'];
        $extension = $request['extension'];
        $file_tags = $request['file_tags'];
        $folder_id = request()->route('folder_id');
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('files');
                
                $result = File::create([
                    "name" => $name,
                    "file" => $file->getClientOriginalName(),
                    "extension" => $extension,
                    "file_link" => $filePath,
                    "folder_id" => $folder_id,
                    "file_tags" => $file_tags,
                ]);
            }
        }
        
        return redirect()->route('file.index', $folder_id);
    }
    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('actionfile.show',compact('file'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        return view('actionfile.edit',compact('file'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        $request->validate([
            'name'=>'required',
            'extension'=>'required',
            'file_tags'=>'required',
        ]);
        $input = $request->all();
        $file->update($input);
      
        return redirect()->route('file.index', ['folder_id' => $file->folder_id])
        ->with('success','File updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $file->delete();
        return redirect()->route('folder.index')
        ->with('success','Products deleted successfully');
    }

   

    public function search(Request $request)
    {
        $search = $request->input('search');
    
        if ($search) {
            $files = File::where('name', 'like', '%' . $search . '%')
                ->orWhere('file_tags', 'like', '%' . $search . '%')
                ->orWhereHas('folder', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->get();
        } else {
            $files = collect(); 
        }
    
        $folders = Folder::with('files')->get();
        return view('actionfile.search', compact('folders', 'search', 'files'));
    }
}