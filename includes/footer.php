<footer id="footer" class="flex-row">
    <div id="footer-col-one" class="flex-column min-width">
        <div id="footer-logo">
            <img src="../images/Patriot-Real-Estate,-LLC-white-high-res-cropped.png" alt="" class="logo">
        </div>
        <div id="footer-address">
            <h3>Patriot Real Estate LLC</h3>
            <p>37 South Park CTR<br>Suite 5<br>Corbin, KY 40701<br>Phone: <a href="tel:+16066828949"> (606)682-8949</a><br>email: <a href="mailto:patriot@patriotrealestateky.com">patriot@patriotrealestateky.com</a></p>
        </div>
    </div>
    <div id="footer-col-two" class="flex-column min-width">
        <div id="footer-nav" class="min-width">
            <nav class="footer-nav">
                <?php include './includes/nav-list.php';?>
            </nav>
        </div>
        <div></div>
    </div>
    <div id="footer-col-three" class="flex-column min-width">
        <div id="footer-socials" class="flex-row min-width">
            <a href="https://www.facebook.com/MarkemSOLD/" target="_blank"><i class="fa-brands fa-facebook" style="color: #fafcf8;"></i></a>
            <a href="https://www.instagram.com/drillsergeantwife09/"target="_blank"><i class="fa-brands fa-instagram" style="color: #fafcf8;"></i></a>
            <a href="https://www.tiktok.com/@markemsoldinky" target="_blank"><i class="fa-brands fa-tiktok" style="color: #fafcf8;"></i></a>
        </div>
        <div></div>
    </div>
    <div id="footer-copyright" class="flex-row">
        <div id="copyright">
                <?php echo "<p>Copyright &copy; " . date("Y") . " Patriot Real Estate LLC</p>"; ?>
        </div>
    </div>
</footer>
<div id="scrollToTop">
        <div class="arrow"><i class="fa-solid fa-arrow-up"></i></div>
    </div>
    <script type="text/JavaScript">
   
   // For Scroll To Top

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("scrollToTop").style.display = "block";
    } else {
        document.getElementById("scrollToTop").style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}
const scrollTop = document.getElementById('scrollToTop');
scrollTop.addEventListener('click', topFunction);
    </script>
