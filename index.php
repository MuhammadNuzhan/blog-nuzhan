<!DOCTYPE html>
<html>

<head>
    <title>My Self</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Bootstrap JavaScript (optional, for components like modals) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Raleway Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <!-- Favicon -->
    <link rel="icon" href="image/Instagram.png" type="image/x-icon">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif;
        }

        .card {
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-light">

    <!-- Container for the whole page -->
    <div class="container-fluid" style="max-width: 1400px;">

        <!-- Header -->
        <header class="jumbotron text-center bg-light text-dark">
            <h1><b>MY BLOG</b></h1>
            <p>Welcome to the blog of <span class="badge badge-secondary">unknown</span></p>
        </header>

        <!-- Row for Grid -->
        <div class="row">

            <!-- Blog entries -->
            <div class="col-lg-8 col-md-12">
                <!-- Blog entry -->
                <div class="card mb-3">
                    <img src="image/woods.jpg" alt="Nature" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><b>TITLE HEADING</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-primary"><b>READ MORE »</b></button>
                            </div>
                            <div class="col-md-4">
                                <p class="text-right"><b>Comments  </b> <span class="badge badge-primary">0</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="card mb-3">
                    <img src="image/bridge.jpg" alt="Norway" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><b>BLOG ENTRY</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-primary"><b>READ MORE »</b></button>
                            </div>
                            <div class="col-md-4">
                                <p class="text-right"><b>Comments  </b> <span class="badge badge-primary">2</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="col-lg-4">
                <!-- About Card -->
                <div class="card mb-3">
                    <img src="image/avatar_g.jpg" alt="My Photo" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><b>My Name</b></h4>
                        <p class="card-text">Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest in lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                    </div>
                </div>

                <!-- Posts -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">My Pets</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <img src="image/kitten.jpeg" alt="Image" class="img-fluid  mr-3" style="width:50px;">
                                <span class="font-weight-bold">Lorem</span><br>
                                <span>Sed mattis nunc</span>
                            </li>
                            <li class="list-group-item">
                                <img src="image/kitten.jpeg" alt="Image" class="img-fluid mr-3" style="width:50px;">
                                <span class="font-weight-bold">Ipsum</span><br>
                                <span>Praes tinci sed</span>
                            </li>
                            <li class="list-group-item">
                                <img src="image/kitten.jpeg" alt="Image" class="img-fluid mr-3" style="width:50px;">
                                <span class="font-weight-bold">Dorum</span><br>
                                <span>Ultricies congue</span>
                            </li>
                            <li class="list-group-item d-none d-md-block">
                                <img src="image/kitten.jpeg" alt="Image" class="img-fluid mr-3" style="width:50px;">
                                <span class="font-weight-bold">Mingsum</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Labels / tags -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tags</h4>
                        <p>
                            <span class="badge badge-dark mr-1">Travel</span>
                            <span class="badge badge-light mr-1">New York</span>
                            <span class="badge badge-light mr-1">London</span>
                            <span class="badge badge-light mr-1">IKEA</span>
                            <span class="badge badge-light mr-1">NORWAY</span>
                            <span class="badge badge-light mr-1">DIY</span>
                            <span class="badge badge-light mr-1">Ideas</span>
                            <span class="badge badge-light mr-1">Baby</span>
                            <span class="badge badge-light mr-1">Family</span>
                            <span class="badge badge-light mr-1">News</span>
                            <span class="badge badge-light mr-1">Clothing</span>
                            <span class="badge badge-light mr-1">Shopping</span>
                            <span class="badge badge-light mr-1">Sports</span>
                            <span class="badge badge-light mr-1">Games</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END ROW -->
        </div><br>

        <!-- END Container -->
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-dark text-white text-center py-5 mt-2">
        <button class="btn btn-secondary disabled">Previous</button>
        <button class="btn btn-secondary">Next »</button>

    </footer>

</body>

</html>