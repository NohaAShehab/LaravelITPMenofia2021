<html>

    <head>
        <title>Plants</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="/plantshome">Plants</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/students">Students</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/plants/aboutus">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/plants/contactus">Contact us</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="p-3 mb-2 bg-info text-dark">
                @yield("maincontainer")
        </div>

        <div class="bg-warning">
            @yield("wrappercontent")

            <div class="bg-danger container">
                @yield("dangersection")
            </div>

        </div>
        <div class="bg-light">

                @yield("lightsection")

        </div>


        <div class>
            @yield("aboutuscontent")

        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>

</html>
