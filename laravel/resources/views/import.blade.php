@extends('layout')
@section('content')

    <div class="row justify-content-center align-items-center">
    <form method="post" action="{{ url('import') }}" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file1"><h3>Please upload "IMDb names.csv" file here</h3></label>
            <input type="file" class="form-control-file" id="file1" name="file1" required>
        </div>
        <div class="form-group">
            <label for="file2"><h3>Please upload "IMDb movies.csv" file here</h3></label>
            <input type="file" class="form-control-file" id="file2" name="file2" required>
        </div>
        <button type="submit" class="btn btn-primary" name="upload"><h5>Upload</h5></button>
    </form>
    </div>

@stop
