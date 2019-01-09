<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- CSS --}}
        <link href="thirdparty/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="thirdparty/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet" type="text/css">

        {{-- JS --}}
        <script src="thirdparty/jquery/jquery-3.3.1.min.js"></script>
        <script src="thirdparty/air-datepicker/js/datepicker.min.js"></script>
        <script src="thirdparty/air-datepicker/js/i18n/datepicker.en.js"></script>
        <script src="thirdparty/air-datepicker/js/i18n/datepicker.nl.js"></script>
        <script src="thirdparty/bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Reservering</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::open(['action' => 'Form\BookingController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Naam') }}
                            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Naam']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Telefoon') }}
                            {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Telefoon']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        </div>

                        <div class="form-group">
                            <i class="fas fa-calendar-day" id="calendar"></i>
                            {{ Form::text('date', '', ['class' => 'test datepicker-here', 'placeholder' => 'Datum', 'data-language="nl"']) }}
                        </div>

                            {{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
                <div class="col-sm-6">
                    <p>Test</p>
                </div>
            </div>
        </div>
    </body>
</html>