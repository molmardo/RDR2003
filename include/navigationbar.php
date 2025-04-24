<?php error_reporting(0); ?>
<?php
$isHomepage = basename($_SERVER['SCRIPT_NAME']) === 'index.php';
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/navigationbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<nav class="navbar <?php echo $isHomepage ? 'navbar-index' : 'navbar-default'; ?>">
  <div class="content">
    <div class="logo">
      <a href="./">
        <img src="imgs/logo.png" alt="Logo" class="logo-img-1">
        <img src="imgs/logo.png" alt="" class="logo-img-2">

      </a>
    </div>
    <ul class="menu-list">
      <div class="icon cancel-btn">
        <i class="fas fa-times"></i>
      </div>
      <li><a href="./" class="nav-a-black">Kezdőlap</a></li>
      <li><a href="./#tanfolyamok" class="nav-a-black">Tanfolyamok</a></li>
      <!-- <li><a href="kapcsolat" class="nav-a-black">Tanácsadás</a></li> -->
      <li><a href="berbeadas" class="nav-a-black">Bérbeadás</a></li>
      <!-- <li><a href="kapcsolat" class="nav-a-black">Audit</a></li> -->
      <!-- <li><a href="kapcsolat" class="nav-a-black">Bérbeadás</a></li> -->
      <li><a href="./#rolunk" class="nav-a-black">Rólunk</a></li>
      <li><a href="./#kapcsolat" class="nav-a-black">Kapcsolat</a></li>
      <li><a href="https://www.facebook.com/rdr2003.hu" class="nav-a-black" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <li><a href="mailto:rdr2003@rdr2003.hu" class="nav-a-black"><i class="fas fa-envelope"></i></a></li>
      <select id="languageSwitcher" onchange="changeLanguage(this.value)">
        <option value="en">EN</option>
        <option value="vi">DE</option>
        <option value="hu">HU</option>
        <option value="vi">VN</option>
      </select>
    </ul>
    <div class="icon menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>

<script>
  const body = document.querySelector("body");
  const navbar = document.querySelector(".navbar");
  const menuBtn = document.querySelector(".menu-btn");
  const cancelBtn = document.querySelector(".cancel-btn");
  const nav_a_black = document.querySelector(".nav-a-black");
  menuBtn.onclick = () => {
    navbar.classList.add("show");
    menuBtn.classList.add("hide");
    body.classList.add("disabled");
    nav_a_black.classList.add("nav-a-white")
  }
  cancelBtn.onclick = () => {
    body.classList.remove("disabled");
    navbar.classList.remove("show");
    menuBtn.classList.remove("hide");
    // menuBtn.classList.remove("nav-a-white");
  }
  window.onscroll = () => {
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6416005539.js" crossorigin="anonymous"></script>