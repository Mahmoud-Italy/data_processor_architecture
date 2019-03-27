<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <title>Data Processor Architecture</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Data Processor Architecture<a href="{{ url('api/v1/docs') }}" style="font-size:15px;color:#000">Using Api</a><br/>
                </div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" aria-label="close">×</a>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('success'))
                    <p class="alert alert-success">{{Session::get('success') }}</p>
                @elseif(Session::has('error'))
                    <p class="alert alert-danger">{{Session::get('error') }}</p>
                @endif

                <div class="links row">
                    <div class="col-md-3"> 
                        {!! Form::Open(['url'=>'exportJSON']) !!}
                        <button id="exportJSON">Export JSON</button>
                        {!! Form::Close() !!}
                    </div>
                    <div class="col-md-3"> 
                        {!! Form::Open(['url'=>'exportCSV']) !!}
                        <button id="exportCVS">Export CSV</button>
                        {!! Form::Close() !!}
                    </div>
                    <div class="col-md-3"> 
                        {!! Form::Open(['url'=>'importJSON','files'=>true]) !!}
                        <button id="1importJSON">IMPORT JSON</button>
                        <input type="file" name="import_file">
                        {!! Form::Close() !!}
                    </div>
                    <div class="col-md-3"> 
                        {!! Form::Open(['url'=>'importCSV','files'=>true]) !!}
                        <button id="importXML">Import CSV</button>
                        <input type="file" name="import_file">
                        {!! Form::Close() !!}
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as  $key => $row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->description}}</td>
                            </tr>
                        @endforeach
                        @if(count($data) == 0)
                        <tr><td  colspan="6"> No data found.</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </body>
</html>
