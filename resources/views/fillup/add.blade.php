@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('fillup/store') }}">
            <div class="form-group">
                <label for="odometer">Odometer</label>
                <input type="number" class="form-control" id="odometer" name="odometer">
            </div>
            <div class="form-group">
                <label for="gallons">Gallons</label>
                <input type="number" class="form-control" id="gallons" name="gallons">
            </div>
            <div class="form-group">
                <label for="pricepergallon">Price per Gallon</label>
                <input type="number" class="form-control" id="pricepergallon" name="pricepergallon">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" class="form-control" id="total" name="total">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection
