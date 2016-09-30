<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Group Currency Converter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        @extends('layouts.app')

@section('content')

    <!-- Current Currencies Available -->
    @if (count($currencies) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Currencies
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                        <th>Currencies Convertable</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($currencies as $currency)
                            <tr>
                                <!-- Country/Currency Name -->
                                <td class="table-text">
                                    <div>{{ $currency->name }}</div>
                                </td>

                                <td>
                                    <!-- Update the Values associated -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
				
				
				<br><br><br><hr> <br><br><br>
				
                <table class="table table-striped task-table">
					<form action="currencylist" method='POST' class='form-inline'>
						<input type='hidden' name='_token' value='{{csrf_token()}}'>
						<p>Value to Convert</p>
						<p> <input type='text' class='form-control' name='value' placeholder='1'></p>
						<p> From Currency</p>
						<p> <input type='text' class='form-control' name='currencyfrom'></p>
						<p> To Currency </p>
						<p> <input type='text' class='form-control' name='currencyto'></p>
						<center><input type='submit' name='submit' class='btn btn-success' Value='Conver now'></center>
						<br><br>
				 {{ Form::reset('Clear form') }}
						
				</table><br><br>
				<hr>
				<a href="{{ url('addcurrencies') }}">Add more Currencies</a>
				
            </div>
        </div>
    @endif
@endsection
        </div>
    </body>
</html>
