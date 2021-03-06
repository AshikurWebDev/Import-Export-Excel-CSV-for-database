@extends('layout.main')

@section('title', 'Resizing Image')

@section('content')
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Resize Image
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/resize-image" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">Choose Image</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-outline-info">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection