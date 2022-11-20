<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT SEMIFINALS   </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
    .navContainer {
        margin: 0px;
        width: 100%;
        height: 60px;
        background-color: black;
        display: flex;
        justify-content: space-around;
        align-items: center;
        /* position: fixed; */
    }

    .navContainer a:hover {
        background-color: #49494a;
        opacity: 0.6;
        color: white;
        border-radius: 10px;
    }

    .navContainer a {
        text-decoration: none;
        margin: 0px 15px;
        color: #ffff;
    }

    .logobtn{
        margin-right: 25%;
    }
    .nav-buttons{
        margin-left: 25%;
    }
    /* body {
        background-color: #9f9fe0;
    } */
</style>
<body>
    <div class="navContainer">
        <div class="logobtn">
            <a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
        <div class="nav-buttons">
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('/destinations')}}">Destinations</a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>