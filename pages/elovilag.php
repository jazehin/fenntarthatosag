<?php
$path = "res/imgs/elovilag/";
$images = scandir($path, 1);
array_pop($images);
array_pop($images);
$images = array_reverse($images);
?>

<h1 class="fs-2 text-center">A vizek és vízpartok élővilága</h1>

<p>Iskolánk természettudományos tehetségműhelyének tagjai, Szakolczai Ildikó tanárnő irányításával, csaknem egy évtizede
    terepgyakorlatokon vesznek részt. A vizes élőhelyek megismerése fontos feladatuk. A fajismeret bővítése, a
    határozókönyvek használata, az adott környezet ökológiai megfigyelése mellett, például BISEL-féle vízminőség
    vizsgálatokat végeznek. A közös tevékenység erősíti az egy közösséghez való tartozás érzését, a környezettudatos
    szemlélet kialakulását.</p>


<p class="mb-0">Helyszínek: </p>
<ul>
    <li>2015. Kóspallag</li>

    <li>2017. Vácrátót</li>

    <li>2019. Veresegyháza</li>

    <li>2022. Margit-sziget</li>
</ul>
<p>Az alábbi fotók bepillantást engednek a terepgyakorlatokon folyó munkába.</p>

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

<h2 class="fs-4 pt-3">Letölthető fájlok:</h2>
<ul id="files">
    <li>
        <a href="res/docs/elovilag/A-vizek novenyvilaga-2014-01.doc" class="container-fluid file bg-green">
            <i class="fa-solid fa-xl"></i>
            <span>A-vizek novenyvilaga-2014-01.doc</span>
        </a>
    </li>
    <li>
        <a href="res/docs/elovilag/vizek_osszefuzott.pdf" class="container-fluid file bg-green">
            <i class="fa-solid fa-xl"></i>
            <span>vizek_osszefuzott.pdf</span>
        </a>
    </li>
</ul>
<script src="js/icons.js"></script>