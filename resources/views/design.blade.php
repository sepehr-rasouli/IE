@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Design your Game</div>

                <div class="card-body">

                </div>
                <div class="form-group">
                    <label for="max">Maximum of scores:</label>
                    <input type="text" class="form-control" id="max">

                    <label for="score">Current score:</label>
                    <input type="text" class="form-control" id="score">

                    <label >Number of Dices:</label>

                    <label class="radio-inline">
                        <input type="radio" name="optradio" checked>1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">4
                    </label>

                    <div>
                    <button type="button" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection