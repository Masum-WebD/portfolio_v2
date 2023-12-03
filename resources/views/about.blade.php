<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="bg-dark">
        <div class=" py-5" style="width: 80%; margin:0 10%">
            <div class="row align-items-center">
                <!-- Identity text on the left -->
                <div class="col-md-7 text-white">
                    <h4>Hello! I’m</h4>
                    <h2>MD Masum </h2>
                    <p>
                        I am a Php laravel Developer.
                    </p>
                    <!-- Add your contact info here -->
                    <div>
                        <a  href="https://www.linkedin.com/" target="_blank" class="social-icon text-white">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="social-icon text-white">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="mailto:youremail@example.com" target="_blank" class="social-icon text-white">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Photo and social icons on the right -->
                <div class="col-md-5 text-center p-0">
                    <div class="position-relative d-inline-block">
                        <!-- Circular background for the photo -->
                        <div class="circle-background"></div>
                        <!-- Your photo -->
                        <img src={{asset("assets/img/masum.jpg")}} alt="Your Photo" class=" profile-pic" height="300" width="300" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap, Font Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Your custom CSS -->
    <style>
        /* Add custom styles here */
        .circle-background {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #ccc;
            /* Change this to your desired color */
            z-index: -1;
        }

        .social-icon {
            font-size: 24px;
            margin-right: 10px;
            color: #333;
            /* Change icon color if needed */
        }
    </style>

    <!-- Bootstrap, Font Awesome JS (place these scripts before closing </body> tag) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
