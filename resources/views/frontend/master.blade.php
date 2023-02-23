<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
    <title>{!! setting('site.site_title') !!}</title>
    <style>
        /* Large desktops and laptops */
        @media (min-width: 1200px) {
            .carousel-inner {
                height: 400px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 180px;
                font-size: 22px;
                padding: 4px
            }
        }

        /* Landscape tablets and medium desktops */
        @media (min-width: 992px) and (max-width: 1199px) {
            .carousel-inner {
                height: 400px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 150px;
                font-size: 18px;
                padding: 4px
            }
        }

        /* Portrait tablets and small desktops */
        @media (min-width: 768px) and (max-width: 991px) {
            .gktoggle {
                width: 100%;
            }

            .carousel-inner {
                height: 200px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 100px;
                font-size: 17px;
                padding: 4px
            }
        }

        /* Landscape phones and portrait tablets */
        @media (max-width: 767px) {
            .gktoggle {
                width: 100%;
            }

            .carousel-inner {
                height: 200px;
            }

            .list-group-item {
                font-size: 12px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 90px;
                font-size: 16px;
                padding: 4px
            }

            #defaultOpen {
                font-size: 12px;
                margin-left: 0px;
                text-align: start;
            }

            .home-blog {
                margin-right: 0px;
                margin-left: -51px;
            }
        }

        /* Portrait phones and smaller */
        @media (max-width: 480px) {
            .gktoggle {
                width: 100%;
            }

            .carousel-inner {
                height: 200px;
            }

            .list-group-item {
                font-size: 12px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 70px;
                font-size: 15px;
                padding: 3px
            }

            .home-blog {
                margin-right: 0px;
                margin-left: -51px;
            }

            #defaultOpen {
                font-size: 12px;
                margin-left: 0px;
                text-align: start;
                width: 102%;
                height: auto;
                padding: 3px 3px;
            }

        }

             @media (max-width: 400px) {
            .gktoggle {
                width: 100%;
            }

            .carousel-inner {
                height: 200px;
            }

            .list-group-item {
                font-size: 12px;
            }

            .tb {
                margin-bottom: 2px;
                background: blue;
                color: white;
                width: 70px;
                font-size: 15px;
                padding: 3px
            }

            .home-blog {
                margin-right: 0px;
                margin-left: -51px;
            }

            #defaultOpen {
                font-size: 12px;
                margin-left: 0px;
                text-align: start;
                width: 102%;
                height: auto;
                padding: 3px 3px;
            }
            .rd{
            margin-top: -19px;
            }

        }
    </style>
</head>
<body>

@include('frontend.header')
@yield('home')
@yield('about')
@yield('program')
@yield('press')
@yield('career')
@yield('donate')
@yield('research')
@yield('event')
@yield('login')

@yield('contact')
@yield('singleevent')
@yield('singleblog')
@yield('singlepress')
@yield('singleresearch')

<!-- End of .container -->
@include('frontend.footer')


</body>
</html>
