@extends('layouts.main')
@section('MainContent')
<br>
<div class="row">
    <div class="col-12">
        <form action="{{ route('file.store',$folder_id) }}" method="POST" enctype="multipart/form-data">
       
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
        <label for ="name">File Name</label> 
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="files[]" id="file" class="form-control-file" multiple>
    </div>
    <div class="form-group">
        <label for="birth_date"> Extension</label>
        <input type="text" name="extension" id="extension" class="form-control">
    </div>

    <div class="form-group">
        <label for="birth_date"> File_Tags</label>
        <input type="text" name="file_tags" id="file_tags" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
  
    </form>
    </div>
    </div>
  
    @stop
    