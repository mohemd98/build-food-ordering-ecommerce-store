@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">edit orders</h5>
                    <form method="POST" action="{{route('orders.update' , $ordser->id)}}">
                        @csrf
                        <!-- Email input -->
                        <p>{{$ordser->status}}</p>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select orders status</label>
                            <select name="status" class="form-control" id="exampleFormControlSelect1">
                                <option>--select orders status--</option>
                                <option value="proccessing">proccessing</option>
                                <option value="deliverd">deliverd</option>
                            </select>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
