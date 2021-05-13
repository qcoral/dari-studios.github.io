<?php
$_GET['titleName'] = 'Store';
$ROOT = "../";
include($ROOT.'include/head.php')
?>
<div id="store-content">
<body id="store-body">
    <h1 id="store-header">Store</h1>
    <p id="store-text-white">My store! Here you will find various items such as switch openers, 3D printing services, and Keyboard build services.</p>
    <p id="store-text-yellow">if you want to buy anything please reach out to me on discord or twitter</p>
    <p id="store-text-white">Available 3D printer colours: Gold, Orange, Pale blue.</p>
    <p id="store-text-pink">
    <a href="<?php echo $ROOT;?>store/switch-opener.php" id="store-text-pink">- 3D printed switch openers: $2 each </a></p>
    <p id="store-text-pink">
    <a href="<?php echo $ROOT;?>store/diode-bender.php" id="store-text-pink">- 3D printed diode benders: $1 each </a></p>
    <a href="<?php echo $ROOT;?>store/print-services.php" id="store-text-pink">- 3D printing services: ~ $2 per hour of printing. dm me for more info </a></p>
    <p id="store-text-pink">
    <a href="<?php echo $ROOT;?>store/build-services.php" id="store-text-pink">- Keyboard build services: DM </a></p>
    </p>
    <p id="store-text-white">Located in Ontario, please note any prices here do *not* include shipping</p>
    <p id="store-text-pink">I also send an extra with any 3D printed item (excluding 3D printing service items) in case they break during shipping</p>
</body>
    <a href="<?php echo $ROOT;?>" id="store-link">home</a>
</div>
</html>
