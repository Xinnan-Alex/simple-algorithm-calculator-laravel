<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customApp.css') }}">
    </link>
    <title>A Simple Algorithm Calculator</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center flex-nowrap align-items-center h-100">
        <div class="input-form">
            <h1>A Simple Algorith Calculator</h1>
            <form class="container-fluid d-flex justify-content-center flex-column align-items-center" method="GET" action="/result">
                <div class="mt-4">
                    <label>Input the number below:</label>
                    -
                </div>
                <div class="mt-4">
                    <script>
                        function isNumber(evt) {
                            evt = (evt) ? evt : window.event;
                            var charCode = (evt.which) ? evt.which : evt.keyCode;
                            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 44) {
                                return false;
                            }
                            return true;
                        }
                    </script>
                    <input class="numberInput form-control" onkeypress="return isNumber(event)" name="numberInput" type="text" placeholder="Example: 10,22,10,33,44..." required />
                </div>
                <div class="mt-4 d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>