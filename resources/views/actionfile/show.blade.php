@extends('layouts.main')
@section('MainContent')
    <br>
    <div class="container p-5">
        <div class="mb-3">
            <h3>Name: <span style="color: rgb(25, 25, 28);">{{ $file->name }}</span></h3>
        </div>
        <div class="mb-3">
            <h3>Extension: <span style="color: rgb(25, 25, 28);">{{ $file->extension }}</span></h3>
        </div>
        <div class="mb-3">
            <h3>File Link: <span style="color: rgb(25, 25, 28);">{{ $file->file_link }}</span> </h3>
        </div>
        <div class="mb-3">
            <h3>File Tags: <span style="color: rgb(25, 25, 28);">{{ $file->file_tags }}</span></h3>
        </div>
    </div>
@endsection