<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsem -->
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <!-- Bootstrab  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- ***************** -->
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css.map')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css') }}">
    <title>Reset password</title>
    <style>

        form input{
            margin-bottom: 15px;
            
        }
        div.container{
            margin: auto;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{url('/')}}">
            <p>Researcher Guide</p>
        </a>
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link " href="{{url('web')}}"> web devolbment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('data')}}">Data since </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('mobile')}}">Mobile App Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.udemy.com/courses/development/game-development/">Game Development</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.udemy.com/courses/development/software-engineering/">Software engineering</a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="{{url('bookshop')}}">bookshop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('aboutus')}}">About US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contactus')}}">Contact us</a>
            </li>
            </ul>
            <!-- Left links -->
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-link px-3 me-2">
                    <a href="{{url('login')}}"> Login</a>
                </button>
                <button type="button" class="btn btn-primary me-3">
                    <a style="color:white" href="{{url('register')}}"> Register</a>
                </button>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>

<body>
    <section class="reset-password">
        <div  class="container">
            <div class="row ">
                <div class="row">
                    <div style="margin: auto; margin-top: 100px;" class="col-md-4 col-md-offset-4 ">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3><i class="fa fa-lock fa-4x"></i></h3>
                                    <h2 class="text-center">Forgot Password?</h2>
                                    <p>You can reset your password here.</p>
                                    <div class="panel-body">
                                        <form class="form">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                        <input id="emailInput" placeholder="email address"
                                                            class="form-control" type="email"
                                                            oninvalid="setCustomValidity('Please enter a valid email address!')"
                                                            onchange="try{setCustomValidity('')}catch(e){}" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password"
                                                        type="submit">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    </section>
   


    <!-- scrypt -->
    <script src="{{asset('front/js/all.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js.map')}}"></script>
    <script src="{{asset('front/js/mdb.min.js')}}"></script>
    <script src="{{asset('front/js/mdb.min.js.map')}}"></script>
    <script src="{{asset('front/js/scrypt.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
            once: true,
        });
    </script>
</body>

</html>