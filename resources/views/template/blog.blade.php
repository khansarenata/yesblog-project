<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset('yesblog')}}/style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HAEDER -->
    <header class="position-fixed w-100 transition text-white">
        <div class="d-flex p-4 container">
            <a href="/yes-blog" class="d-flex text-decoration-none">
                <h3 class="my-auto text-white">ScarWash</h3>
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('blog.index') }}" class="btn text-white">
                    Blog
                </a>
                <a href="{{ route('location.index') }}" class="btn text-white">
                    Location
                </a>
                <a href="{{ route('gallery.index') }}" class="btn text-white">
                    Gallery
                </a>
                <a href="{{route ('price.index')}}" class="btn btn-dark">
                    Price List
                </a>
                <a href="{{ route('login.index') }}" class="btn text-white">
                    Login
                </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="{{ route('blog.index') }}" class="btn text-white">
                Blog
                <hr />
            </a>
            <a href="{{ route('location.index') }}" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="{{ route('gallery.index') }}" class="btn text-white">
                Gallery
                <hr />
            </a>
            <div>
                <a href="{{route ('price.index')}}" class="btn btn-light w-100">Price List</a>
            </div>
            <div>
                <a href="{{ route('login.index') }}" class="btn text-white">Login</a>
            </div>
        </div>
    </header>

    @yield('section')

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <h5><b>Contact Us :</b></h5>
                <b>Line:</b>
                <p>@scarwash</p>
                <b>Facebook:</b>
                <p>Scar Wash</p>
                <b>Instagram:</b>
                <p>@scar.wash</p>
                <b>Email</b>
                <p>scar.wash17@gmail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Store Surabaya</b>
                <p>Store 1 (Surabaya Selatan)    : Jl. Manunggal Kebonsari No. 05 Jambangan</p>
                <p>Store 2 (Surabaya Pusat)      : Jl. Dharmahusada Stand No. 14</p>
                <p>Store 3 (Surabaya Barat)      : Jl. Ruko Northwest bouvardnv1 No 23 Citraland</p>
                <p>Store 4 (Surabaya Barat)      : Jl. Raya Lidah Wetan No. 5</p>
                <p>Store 5 (Surabaya Timur)      : Jl. Gebang Lor No. 74 Sukolilo</p>

                <b>Store Sidoarjo</b>
                <p>Store 6 (Sidoarjo)            : Jl Pecantingan No. 74 Sekardangan</p>
                <p>Store 7 (Sidoarjo)            : Jl Raya Wadung Asri No. 26 Waru</p>

                {{-- <div class="d-flex justify-content-between">
                    <b>About us</b>

                    <a href="{{ route('contact.index') }}">Contact Us</a>

                    <b>Hire Us</b>
                </div> --}}
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright © 2023 Khansa
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'black'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
