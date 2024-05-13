@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calculate Average</div>

                    <div class="card-body">
                        <p>
                            The average balance amount of budgets is: <strong>{{ $average }}</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection