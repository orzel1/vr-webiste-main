<?php
require_once './partials/header.php';
require_once './data/data.php';
?>

<body>

    <main class="banner">

        <div class="innerWrapper">

            <div class="bannerText">

                <h1>Immersive <br> experiences <br> that deliver</h1>

            </div>
        </div>
    </main>

<section class="aboutSection">

<div class="innerWrapper">

    <img class="aboutImage" src="./images/desktop/image-interactive.jpg" alt="A man carrying on vr headset">

    <div class="aboutText">

    <h2>The leader in <br> interactive VR</h2>

    <p>Founded in 2011, Loopstudios has been producing world-class virtual reality projects for some of the best companies around the globe. Our award-winning creations have transformed businesses through digital experiences that bind to their brand.
    </p>
    
    </div>

</div>

</section>

    <section class="portfolioSection">

    <div class="innerWrapper">

    <div class="portfolioCreations">

    <h2>Our creations</h2>

    <button class="btn" aria-label="Click to see all posts" href="#">See all</button>

    </div>

    <div class="portfolioGallery">

    <?php  for($i = 0; $i < 4; $i++) { ?>

    <div class="portfolioImage">
    <img src=" <?php echo $images[$i]['link']; ?> " alt="Deep earth">
    <h3> <?php echo $images[$i]['title']; ?> </h3>
    </div>
    <?php } ?>
    </div>

    <div class="portfolioGallery2">

    <?php  for($i = 4; $i < count($images); $i++) { ?>

<div class="portfolioImage">
<img src=" <?php echo $images[$i]['link']; ?> " alt="Deep earth">
<h3> <?php echo $images[$i]['title']; ?> </h3>
</div>
<?php } ?>

    </div>

    </div>

    </section>

</body>

<?php
require_once './partials/footer.php';
?>

</body>

</html>