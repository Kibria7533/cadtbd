<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="text-center gktoggle">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/career">Career </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/press">Press </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/admin">Login </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 d-none d-lg-block d-xl-block">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded stk">

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/program">Program</a>
            </li>
            <li class="nav-item d-none d-lg-block d-xl-block" style="border: 1px solid black">
                <img src="{{asset('/')}}storage/{!! setting('site.site_logo') !!}" style="width: 130px;height: 41px;" alt="">
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/event">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/research">Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<style>
    .nav-link:hover {
        background: #98cb00;
        border-radius: 10px;
    }

</style>
<script>

    $(document).ready(function () {
        $(window).scroll(function () {
            $val = $(window).scrollTop();
            if ($val > 150) {
                $(".stk").addClass("sticky-top");
            } else {
                $(".stk").removeClass("sticky-top");
            }
        })
    })

</script>
