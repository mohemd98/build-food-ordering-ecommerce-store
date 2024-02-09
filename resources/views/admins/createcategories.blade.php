@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Categories</h5>
                    <form method="POST" action="{{route('categories.stroe')}}" enctype="multipart/form-data">
                       @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="icon" id="form2Example1" class="form-control" placeholder="icon" />
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <label>Image</label>

                            <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
                        </div>


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
