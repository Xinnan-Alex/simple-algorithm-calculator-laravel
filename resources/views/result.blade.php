<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customApp.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center flex-nowrap align-items-center h-100 flex-column bg-dark">
        <h1 class="text-white">Result</h1>
        <table class="table table-hover table-dark resultTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Number</th>
                    <th scope="col">Count</th>
                </tr>
            </thead>
            <tbody>
                @php ($count = 1)
                @foreach ($countObject as $key => $value )
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <td>{{$key}}</td>
                    <td> {{$value}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="mt-4 d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary btn-lg" type="button" onclick="window.location='{{ url("/") }}'">Back</button>
        </div>
    </div>
</body>

</html>