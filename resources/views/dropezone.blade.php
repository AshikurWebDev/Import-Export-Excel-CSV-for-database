
@extends('layout.main')

@section('title', 'Dropezone Image Upload') 

@section('content')

<section style="padding-top:60px;">
    <div class="conatiner">
       <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Dropezone File Upload
                </div>
                <div class="card-body">
                    <form action="/dropezone-store" method="POST" class="dropzone dz-clickable" id="image-upload" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <h3 class="text-center">
                                    Uplod Image By Click On box
                                </h3>
                                <div class="dz-default dz-message">
                                    <span>Drop file here to upload</span>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
@endsection