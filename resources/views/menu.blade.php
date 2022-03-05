<html>
<head>
<title></title>

<style>
a {
text-decoration:none;
color: white;
font-size: 21px;
font-style: bold;
  }

ul {
color:blue;
list-style: none;
}

li {
margin-bottom: 10px;
}

.toggle-menu {
  width: 50px;
  height: 50px;
  display: inline-block;
  position: relative;
  top: 10px;
  float: right;
  z-index: 1000;
}

.toggle-menu i {
  position: absolute;
  display: block;
  height: 2px;
  background: black;
  width: 30px;
  left: 0px;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.toggle-menu i:nth-child(1) {
  top: 16px;
}

.toggle-menu i:nth-child(2) {
  top: 24px;
}

.toggle-menu i:nth-child(3) {
  top: 32px;
}

.toggle-menu.active i:nth-child(1) {
  top: 25px;
  -webkit-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.toggle-menu.active i:nth-child(2) {
  background: transparent;
}

.toggle-menu.active i:nth-child(3) {
  top: 25px;
  -webkit-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
}

.container {
  position: relative;
  overflow: hidden;
  height: 9000px;
}

.menu-drawer {
  width: 200px;
  background-color: #cde0ff;
  height: 900px;
  position: absolute;
  right: -550px;
  top: 0;
  transition: right linear .2s;
  padding: 50px;
}

.open {
  right: 0px;
  transition: right linear .2s;
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
<div class="container">
  <a class="toggle-menu" href="#">
    <i></i>
    <i></i>
    <i></i>
  </a>
  <div class="menu-drawer">
    <ul>
      <li><a href="#">Anasayfa</a></li>
      <li><a href="#">Hakkımızda</a></li>
      <li><a href="#">İletişim</a></li>
    </ul>
  </div>
</div>

<script type="text/javascript">

$(function() {
  $(".toggle-menu").click(function() {
    $(this).toggleClass("active");
    $('.menu-drawer').toggleClass("open");
  });
});

</script>

</body>
</html>
