    @extends('layout.main')

    @section('title', 'Importing Excel | CSV file')
        
    @section('content')
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Import 
                        </div>
                        <div class="card-body">
                            <form action="/import" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Choose CSV\Excel</label>
                                    <input type="file" name="file" class="form-control">
                                </div> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
