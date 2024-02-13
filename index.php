<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jugantor</title>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font SolaimaniLipi -->
    <link href="http://mdminhazulhaque.github.io/solaimanlipi/css/solaimanlipi.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

    <div class="container d-flex justify-content-between bg-dark">
        <div class="col-lg-9 col-xl-9 h-25">
            <ul class="list-inline text-white ul-item">
                <li class="list-inline-item pr-2">ঢাকা, বাংলাদেশ</li>
                <li class="list-inline-item pr-2">
                    শনিবার, ১০ ফেব্রুয়ারি ২০২৪, ২৭ মাঘ ১৪৩০ <br />
                </li>
                <li class="list-inline-item pr-2">
                    <a class="text-decoration-none text-white" href="#">আজকের পত্রিকা
                    </a>
                </li>
                <li class="list-inline-item pr-2">
                    <a class="text-decoration-none text-white" href="#">ই-পেপার </a>
                </li>
                <li class="list-inline-item pr-2">
                    <a class="text-decoration-none text-white" href="#">আর্কাইভ </a>
                </li>
                <li class="list-inline-item pr-2">
                    <a class="text-decoration-none text-white" href="#">কনভার্টার </a>
                </li>
                <li class="list-inline-item pr-2">
                    <a class="text-decoration-none text-white" href="#">অ্যাপস </a>
                </li>
                <li class="list-inline-item pr-2 border border-0">বেটা ভার্সন</li>
            </ul>
        </div>
        <div class="col-xl-3 bg-dark h-25">
            <ul class="list-inline text-right text-white my-1 d-flex justify-content-end ul-item">
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-linkedin-in"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="text-decoration-none text-white" href="#"><i class="fa fa-rss"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <?php include 'navbar.php' ?>

    <!-- container -->
    <div class="container">
        <div class="row">

            <?php
            include 'leftSide.php';
            include 'rightSide.php'
            ?>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
    <!-- container -->

    <!-- footer  -->
    <div class="foot mt-2 w-100">
        <div class="col-4 col-sm-4">
            <img src="photo\footer-logo.png " alt="footer" height="60" class="w-50 py-2" />
        </div>
    </div>
    <!-- footer  -->




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- end Bootstrap -->
</body>

</html>