<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand justify-content-end page-scroll" href="/"><img class="brand" src="/asset/logo-warna.png" />Dreamson</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="/custom-made">CUSTOM MADE</a>
                </li>
                <li>
                    <a class="page-scroll" href="/">RETAIL SHOP</a>
                </li>
                <li>
                    <a class="page-scroll" href="/about">ABOUT US</a>
                </li>
                <li>
                    <a class="page-scroll" href="/galeri">GALERY</a>
                </li>
                <li>
                    <a class="page-scroll" href="/home">BLOG</a>
                </li>
                <li>
                    <a class="page-scroll" href="/contact">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 200 && $(window).innerWidth() > 767) {
            $('img.brand').attr("src", "/asset/logo-warna.png")
        } else {
            $('img.brand').attr("src", "/asset/Dreamson-Logo.png")
        }
    })
</script>