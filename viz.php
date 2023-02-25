<?php
$path = "res/imgs/viz/";
$images = scandir($path, 1);
array_pop($images);
array_pop($images);
$images = array_reverse($images);
?>

<h1 class="fs-2 text-center">Szakolczai Ildikó: A VÍZ projekt</h1>

<p>A PROJEKTBEN RÉSZTVEVŐK KÖRE: A 9.A és 9.B osztály (informatika és távközlés ágazat), valamint a 9.E és 9.F osztály (elektronika és elektrotechnika ágazat) tanulói.</p>

<h2 class="fs-4">Letölthető fájl:</h2>
<ul id="files">
    <li>
        <a href="res/docs/viz/Szakolczai Ildikó - a víz.docx" class="container-fluid file bg-green">
            <i class="fa-solid fa-xl"></i>
            <span>Szakolczai Ildikó - a víz.docx</span>
        </a>
    </li>
</ul>
<script src="js/icons.js"></script>

<h2 class="fs-4">Képek:</h2>
<div id="galeria" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators top">
        <?php for ($i = 0; $i < count($images); $i++) { ?>
            <button type="button" data-bs-target="#galeria" data-bs-slide-to="<?php echo $i; ?>" <?php if ($i == 0)
                   echo 'class="active"'; ?> aria-current="true"
                aria-label="<?php echo substr($images[$i], 0, strlen($images[$i]) - 4); ?>"></button>
        <?php } ?>
    </div>
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($images); $i++) {
            $imgName = $images[$i];
            $title = substr($images[$i], 0, strlen($images[$i]) - 4);
            ?>
            <div class="carousel-item <?php if ($i == 0)
                echo "active" ?>">
                    <div class="card d-block">
                        <div class="card-body">
                            <img src="<?php echo $path; ?><?php echo $imgName; ?>" class="card-img" alt="<?php echo $imgName; ?>"
                            title="<?php echo $title; ?>">
                        <!--
                                <h3 class="card-title pt-2">
                                    <?php echo $title; ?>
                                </h3>
                                -->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#galeria" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#galeria" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>