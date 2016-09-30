@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				<div style='100%; float:right; '>
                    
                    
                    <a href="{{ url('addcurrencies') }}">Add Currencies</a> | <a href="{{ url('convert') }}">Convert</a> | <a href="{{ URL::to('logout') }}">logout</a>
                
				
				</div><div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
