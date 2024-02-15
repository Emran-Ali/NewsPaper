<?php

$res = $obj->lastNews();

?>

<div class="col px-0 my-2">
    <div class="d-flex justify-content-between">
        <button class="btn btn-secondary w-50">সর্বশেষ</button>
        <button class="btn w-45">সর্বাধিক পঠিত</button>
    </div>

    <div style="overflow: auto; width: auto; height: 410px">
        <?php
        while ($data = $res->fetch_assoc()) {
        ?>
            <div class="row no-gutters mb-2 mt-2">
                <div class="col-3">
                    <a href="#" class="text-decoration-none">
                        <img loading="lazy" src="<?php echo $data['Photo'] ?>" class="img-fluid" width="90" height="60" alt="Text" />
                    </a>
                </div>
                <div class="col-9"><?php echo $data['Heading'] ?></div>
            </div>
        <?php } ?>

    </div>
    <div class="nav nav-pills nav-fill mt-2">
        <span class="nav-item"><a class="btn btn-full w-100 btn-secondary py-1 font-weight-bold" href="#">সব খবর</a></span>
    </div>
</div>