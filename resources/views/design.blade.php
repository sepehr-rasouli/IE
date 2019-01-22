@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Design your Game</div>

                <div class="card-body">

                </div>
                <form method="POST" action="{{ url("design") }}" >
                    <label for="max">Maximum of scores:</label>
                    <input type="text" class="form-control" name="max">

                    <label for="score">Current score:</label>
                    <input type="text" class="form-control" name="score">

                    <label >Number of Dices:</label>

                    <label class="radio-inline" name="dice">
                        <input type="radio" name="optradio" checked>1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">4
                    </label>

                    <div>
                    <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection