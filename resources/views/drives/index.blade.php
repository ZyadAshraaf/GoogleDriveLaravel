@extends('layouts.app')
@section('content')


    <h2 class="text-center text-danger">Files</h2>
    @if (Session::has('done'))
        <div class="alert alert-success mx-auto w-50 text-enter">
            {{ Session::get('done') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th colspan="4">Action</th>
                            </tr>
                            @foreach ($drives as $data)
                                <tr>
                                    <th>{{ $data->id }}</th>
                                    <th>{{ $data->title }}</th>
                                    <th><a href="{{ route('drive.show', $data->id) }}"><i class="fas fa-eye"></i></a>
                                    </th>
                                    <th><a href="{{ route('drive.destroy', $data->id) }}"><i class="fas fa-trash-alt"></i></a></th>
                                    <th><a href="{{ route('drive.edit', $data->id) }}"><i class="fas fa-edit"></i></a></th>
                                    <th><a href="{{ route('drive.download', $data->id) }}"><i class="fas fa-cloud-download-alt"></i></a></th>
                                    
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
