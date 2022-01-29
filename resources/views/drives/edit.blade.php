@extends('layouts.app')
@section('content')



    <h2 class="text-center text-danger">Edit File {{$drive->id}}</h2>
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('drive.update',$drive->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group"  >
                                <label for=""> Title: </label>
                                <input type="text" name="title" class="form-control" placeholder="File Title" value="{{$drive->title}}">
                            </div>
                            <div class="form-group">
                                <label for=""> Description: </label>
                                <input type="text" name="description" class="form-control" placeholder="File Description" value="{{$drive->description}}">
                            </div>
                            <div class="form-group">
                                <label for=""> File: {{$drive->file}}</label>
                                <input type="file" name="inputFile" class="form-control" placeholder="File">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-50">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
