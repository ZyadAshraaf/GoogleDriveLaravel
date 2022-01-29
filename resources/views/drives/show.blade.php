@extends('layouts.app')
@section('content')



    <h2 class="text-center text-danger">{{$drive->title}}</h2>
    @if ($errors->any())
        <div class="alert alert-danger mx-auto w-50">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body text-center">
                        <!--<img src="https://png.pngitem.com/pimgs/s/118-1189137_folder-png-open-yellow-folder-icon-png-transparent.png" alt="" class="w-75">-->
                        <img src="{{ asset("upload/$drive->file") }}" alt="" class="w-75">
                        <h3 class="text-center mt-3">Title : {{$drive->title}}</h3><h3 class="text-center mt-3">Description : {{$drive->file}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
