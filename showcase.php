<div id="slideshow">
    <?php

    $directory = 'slide-img';
    $files = scandir($directory);
    $fileCount = count($files) - 2;

    for ($i = 2; $i <= $fileCount + 1; $i++) {
        $imgName = $files[$i];

        echo '<div class="mySlides">';
        echo '<img class="mySlides" src="slide-img/' . $imgName . '" alt="Image ' . $i . '">';
        echo '</div>';
    }
    ?>
    <button class="slideshow-button" onclick="plusSlides(-1)">Previous</button>
    <button class="slideshow-button" onclick="plusSlides(1)">Next</button>
</div>

<script>
    let slideIndex = 0;
    let timeout;
    showSlides()

    function plusSlides(n) {
        clearTimeout(timeout);
        showSlides(slideIndex += n);
    }

    function showSlides() {
        let i;
        const slides = document.getElementsByClassName("mySlides");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        } else if (slideIndex < 1) {
            slideIndex = slides.length;
        }

        slides[slideIndex - 1].style.display = "block";

        timeout = setTimeout(showSlides, 3000);
    }
</script>
