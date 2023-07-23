@extends('layouts.main')
@section('MainContent')
<br>
<div class="container p-5">
    @foreach ($files as $file)
        <div class="mb-3">
            <h3>File Name: <span style="color: rgb(25, 25, 28);">{{ $file->name }}</span></h3>
            <h3>Folder: <span style="color: rgb(25, 25, 28);">{{ $file->folder->name }}</span> </h3>
            <h3>File Tags: <span style="color: rgb(25, 25, 28);">{{ $file->file_tags }}</span></h3>
        </div>

        <hr>
        
    @endforeach
</div>
@endsection