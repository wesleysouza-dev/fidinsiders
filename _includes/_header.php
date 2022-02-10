<header id="header-main" class="bg-black">
    <div class="bg-header-logo"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-lg-5">
                <a href="#"><img src="assets/images/logotipo-fidinsiders.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-4 col-lg-7 bg-navigation position-inherit">
                <nav class="navbar w-100 d-flex justify-content-end py-4 py-md-5">
                    <button id="navbar-button-mobile" class="d-block d-xl-none" type="button">
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                    </button>

                    <ul class="w-100 d-none d-xl-flex justify-content-end my-0" id="list-nav-main">
                        <?= require('_includes/_navMain.php'); ?>
                    </ul>
                </nav>
            </div>
        </div>

        <ul class="w-100 d-none my-0" id="list-nav-main-mobile">
            <?= require('_includes/_navMain.php'); ?>
        </ul>
    </div>
</header>