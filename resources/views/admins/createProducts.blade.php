@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Products</h5>
                    <form method="POST" action="{{route('products.stroe')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <label>Name</label>
                            <input type="text" name="name" id="form2Example1" class="form-control"
                                   placeholder="name"/>
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <label>Price</label>
                            <input type="text" name="price" id="form2Example1" class="form-control"
                                   placeholder="price"/>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" placeholder="description" class="form-control"
                                      id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                <option>--select category--</option>
                                @foreach($allcatecory as $cate)
                                    <option value="{{$cate->id}}" >{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Expiration Date</label>
                            <select name="exp_date" class="form-control" id="exampleFormControlSelect1">
                                <option>--select expiration date--</option>
                                <option value="2024" >2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <label>Image</label>
                            <input type="file" name="image" id="form2Example1" class="form-control"
                                   placeholder="image"/>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
