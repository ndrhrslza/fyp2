<!-- // resources/views/components/head.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title ?? 'SecurityJourney' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('import/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset ('import/navbar/css/style.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('import/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">

    <script src="{{ asset ('import/navbar/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/popper.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selects = document.querySelectorAll('.status-select');
            selects.forEach(select => {
                select.className = select.options[select.selectedIndex].className;
            });
        });
    </script>
    <style>
        .enabled {
            background-color: yellow;
            border-radius: 5px;
            padding: 2px;

        }

        .disabled {
            background-color: red;
            color: white;
            border-radius: 5px;
            padding: 2px;
        }

        .gallery-item {
            height: 100%;
        }

        .textbox {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .gallery-row {
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: auto;
            /* Adjust the width as needed */
            margin: 10px;
            padding: 10px;
            border: 1px solid #1e2a2a;
            display: flex;
            background-color: #82C6C6;
        }

        .box img {
            max-width: 250px;
            /* Adjust the image size */
            margin-right: 10px;
            max-height: 350px;
        }

        .box p {
            margin: 0;
            color: black;
        }

        .box a {
            text-decoration: none;
            /* Remove underline from links */
            color: blue;
            /* Change link color */
            font-weight: bold;
            /* Make the titles bold */
        }
    </style>
</head>