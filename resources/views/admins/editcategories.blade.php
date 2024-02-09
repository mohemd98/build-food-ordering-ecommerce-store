@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">edit Categories</h5>
                    <form method="POST" action="{{route('categories.update' , $category->id)}}" >
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" value="{{$category->name}}" name="name" id="form2Example1" class="form-control" placeholder="name" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" value="{{$category->icon}}" name="icon" id="form2Example1" class="form-control" placeholder="icon" />
                        </div>



                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
