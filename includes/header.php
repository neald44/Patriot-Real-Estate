<header>
    <div class="flex-row container header-container">
        <img src="./images/Patriot-Real-Estate,-LLC-white-high-res-cropped.png" alt="Company Logo" class="logo">
        <nav class="nav">
            <?php include 'includes/nav-list.php';?>
            <div class="action-item">
                <a href="tel:+16066828949" id="callUs" class="action-btn" >Call Now</a>
            </div>
        </nav>
        <span class="icon" onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
        <nav id="mobile-nav" class="mobile-nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="action-item">
                <a hrefrem ipsum dolor, sit amet conse="tel:+16066828949" id="callUs" class="action-btn" >Call Now</a>
            </div>
            <?php include './includes/nav-list.php'; ?>
        </nav>
    </div>       
</header>
<script type="text/JavaScript">
    // For Mobile Menu
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mobile-nav").style.width = "250px";
    // document.getElementById("main").style.marginRight = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  function closeNav() {
    document.getElementById("mobile-nav").style.width = "0";
    // document.getElementById("main").style.marginRight = "0";
    document.body.style.backgroundColor = "var(--white)";
  }</script>
