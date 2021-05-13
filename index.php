<?php
$_GET['titleName'] = 'Home';
$ROOT = '';
include($ROOT.'include/head.php')
?>
<body id=home-body>
  <div id="logo-home">
    <img src="logo.png" alt="Logo" width="454" height="161">
  </div>
  <div id="menu-home">
    <h1 id="menu-header">Dari Site</h1>
    <button id="github-btt">GitHub</button>
    <button id="store-btt">Store</button>
    <button id="socials-btt">Socials</button>
    <script type="text/javascript">
      document.getElementById('github-btt').onclick = function(){
        location.href = "https://github.com/Dari420";
      };
      document.getElementById('store-btt').onclick = function(){
      location.href = "store/index.php";
      };
     document.getElementById('socials-btt').onclick = function(){
      location.href = "socials.php";
      };
    </script>
  </div>
</body>
</html>