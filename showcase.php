<div class="slideshow-container">
    <?php
    // Get the list of files in the directory
    $directory = 'slide-img';
    $files = scandir($directory);
    $fileCount = count($files) - 2;

    // Loop through the files and display images in slides
    for ($i = 1; $i <= $fileCount; $i++) {
        $imgName = $files[$i + 1];

        echo '<div class="mySlidesContainer">';
        echo "<div class='numbertext'>$i / $fileCount</div>"; // Display image number and total count
        echo "<img class='mySlides' src='slide-img/$imgName' style='width:100%' alt='Image $i'>";
        echo '</div>';
    }
    ?>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<?php
    // Display dots/circles for each slide
    for ($i = 1; $i <= $fileCount; $i++) {
        echo '<div style="text-align:center">';
        echo "<span class='dot' onclick='currentSlide($i)'></span>";
        echo '</div>';
    }
?>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Display the slides
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesContainer");
    let dots = document.getElementsByClassName("dot");
    
    // Handle boundary conditions
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}

    // Hide all slides and remove active class from dots
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Display the current slide and mark the corresponding dot as active
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
</script>
