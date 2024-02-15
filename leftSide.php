<?php
$res = $obj->HeadNews();

?>
<div class="col-md-8">
    <div class="col p-2 m-2">
        <div class="row">
            <!-- front News -->
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 pt-2 pt-sm-2 pt-md-2 pt-lg-2 pt-xl-2">
                <?php
                while ($data = $res->fetch_assoc()) {
                ?>
                    <div class="d-md-none d-lg-none d-xl-none">
                        <a href="#" class="text-decoration-none text-white">
                            <img class="card-img rounded-0 w-100 d-block" alt="text" src="<?php echo $data['Photo']; ?>" />
                            <div class="card-body pb-0">
                                <h3 class="card-title font-weight-bold">
                                    <?php
                                    echo $data['Heding'];
                                    ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <!--for small screen -->
                    <div class="border border-0 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="Text" />
                            <div class="card-body pl-0 py-3">
                                <h2 class="card-title font-weight-bold" style="font-size: 28px !important">
                                    <?php echo $data['Heading']; ?>
                                </h2>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!-- front side News -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-none d-sm-none d-md-block d-lg-block d-xl-block pt-2 pt-sm-2 pt-md-2 pt-lg-2 pt-xl-2">
                <div class="row">
                    <?php
                    $res = $obj->subHead2();
                    while ($data = $res->fetch_assoc()) {

                    ?>
                        <div class="col-12">
                            <a href="#">
                                <figure class="figure">
                                    <img alt="Text" src="<?php echo $data['Photo']; ?>" class="figure-img img-fluid" />
                                    <figcaption class="figure-caption">
                                        <?php echo $data['Heading']; ?>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- news Sub Heading -->
    <?php
    $res = $obj->subHead();

    ?>
    <div class="col p-2 m-2">
        <div id="show-news" class="row row-cols-2 row-cols-sm-2 row-cols-md-3">
            <?php
            while ($data = $res->fetch_assoc()) {


            ?>
                <div class="col d-lg-block d-xl-block">
                    <a href="#" class="text-decoration-none">
                        <figure class="figure">
                            <img src="<?php echo $data['Photo'] ?>" class="figure-img h-100 w-100" alt="Text" />
                            <figcaption class="figure-caption">
                                <?php echo $data['Heading'] ?>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            <?php    }  ?>

        </div>
    </div>
    <!-- catagory 1 -->
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 d-flex justify-content-between">
        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">জাতীয়</div>
                </a>
                <?php
                $res = $obj->CatHead(2);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(2);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>

        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">রাজনীতি</div>
                </a>
                <?php
                $res = $obj->CatHead(3);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(3);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <!-- catagory 2 -->
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 d-flex justify-content-between mt-5">
        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">আন্তর্জাতিক</div>
                </a>
                <?php
                $res = $obj->CatHead(5);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(5);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>

        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">সারাদেশ</div>
                </a>
                <?php
                $res = $obj->CatHead(6);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(6);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- catagory type 2 -->
    <div class="row row-cols-1 mt-5">
        <a href="#" class="text-decoration-none">
            <div class="fs-4 text-dark bdr">ইসলাম ও জীবন</div>
        </a>
        <div class="row row-cols-sm-1 row-cols-md-2 d-flex justify-content-between">
            <?php
            $res = $obj->CatHead(21);
            while ($data = $res->fetch_assoc()) {
            ?>
                <div class="col">
                    <div class="border border-0 d-md-block d-lg-block d-xl-block mt-2">
                        <a href="#" class="text-decoration-none text-dark">
                            <img class="card-img rounded-0 w-100 d-block" alt="Text" src="<?php echo $data['Photo'] ?>" />
                            <div class="card-body pl-0 py-3">
                                <h2 class="card-title fw-bold text-dark" style="font-size: 28px !important">
                                    <?php echo $data['Heading'] ?>
                                </h2>
                                <p class="pt-2">
                                    ইমানের পর ইসলামের সবচেয়ে তাৎপর্যপূর্ণ আমল হলো সালাত বা
                                    নামাজ।...
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <!-- right  -->
            <div class="col">
                <div class="row row-cols-2">
                    <?php
                    $res = $obj->CatNews(21);
                    while ($data = $res->fetch_assoc()) {
                    ?>
                        <div class="mt-2 d-lg-block d-xl-block">
                            <a href="Text" class="text-decoration-none">
                                <figure class="figure">
                                    <img src="<?php echo $data['Photo']; ?>" class="figure-img h-100 w-100" alt="" />
                                    <figcaption class="figure-caption">
                                        <?php echo $data['Heading']; ?>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- catagory type 2 -->

    <!-- ctagory three line -->
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 d-flex justify-content-between">
        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">সম্পাদকীয়</div>
                </a>
                <?php
                $res = $obj->CatHead(16);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(16);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">বাতায়ন</div>
                </a>
                <?php
                $res = $obj->CatHead(14);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(14);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col pt-2 pt-sm-2 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="text-decoration-none">
                <a href="#" class="text-decoration-none">
                    <div class="float-left fs-4 text-dark bdr">দৃষ্টিপাত</div>
                </a>
                <?php
                $res = $obj->CatHead(15);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <div class="">
                            <a href="#" class="text-decoration-none text-white">
                                <img class="card-img rounded-0 w-100 d-block" src="<?php echo $data['Photo']; ?>" alt="text" />
                                <div class="card-body pb-0">
                                    <h3 class="card-title font-weight-bold text-dark fs-4 pt-2">
                                        <?php echo $data['Heading']; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                $res = $obj->CatNews(15);
                while ($data = $res->fetch_assoc()) {

                ?>
                    <div class="float-right pt-2">
                        <a href="#" class="text-decoration-none d-flex flex-row">
                            <img class="card-img rounded-0 w-25" src="<?php echo $data['Photo'] ?>" alt="text" />
                            <div class="card-body pb-0">
                                <h3 class="card-title fs-6 text-dark pl-10">
                                    <?php echo $data['Heading'] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end three line -->
</div>