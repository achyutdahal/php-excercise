@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Upload</div>
                <div class="card-body">
                    <form method="POST" enctype='multipart/form-data' action="{{ route('upload') }}" >
                        
                        @foreach ($errors->all() as $error)
                        <div class='alert alert-danger'> {{ $error }}</div>
                        @endforeach
                        
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Project File</label>
                            <br>
                            <input type="file" name="projectxml" required/>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection