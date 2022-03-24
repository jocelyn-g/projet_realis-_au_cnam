<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'buro | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="admin">

<header>

    <div class="container-fluid border-bottom border-3 border-dark">
            <div class="row">
                <div class="col-2 align-items-start p-3 bg-dark">
                    <p><strong><a class="text-white text-decoration-none" href="/admin">Admin</a></strong></p>
                </div>
                <div class="col-1 p-4">
                    <a href="/admin/reservation" class="text-dark p-3 text-decoration-none">Réservation</a>
                </div>
                <div class="col-1 p-4">
                    <a href="/admin/menu" class="text-dark p-3 text-decoration-none">Menu</a>
                </div>
            </div>
    </div>

</header>

    @section('content')
    @show


    
</body>
</html>