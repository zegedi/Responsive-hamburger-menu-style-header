<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="style.css" type="text/css">
   <title>Hamburgesr menu</title>
</head>
<body>

   <header>
      <div class="container">

         <div id="header-logopart">
            <h1>Logo</h1>
         </div>
         
         <div id="header-nav">
            <nav>
               <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Serices</a></li>
                  <li><a href="">Contact</a></li>
               </ul>
            </nav>
         </div>
         
         <div class="header-hamb01" id="hamb">
            <span id="hamb-first"></span>
            <span id="hamb-second"></span>
            <span id="hamb-third"></span>
         </div>

      </div>
   </header>

   
   <div id="side-menu">
      <nav id="side-nav">
         <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Serices</a></li>
            <li><a href="">Contact</a></li>
         </ul>
      </nav>
   </div>

   <script>

      document.getElementById('hamb').addEventListener('click', openSideMenu);
      
      function openSideMenu() {
         document.getElementById('side-menu').style.left = "0";
         document.getElementById('hamb').classList.add("header-hamb02");
         document.getElementById('hamb').removeEventListener('click',openSideMenu);
         document.getElementById('hamb').addEventListener('click',closeSideMenu);
      }

      function closeSideMenu() {
         document.getElementById('side-menu').style.left = "-200px";
         document.getElementById('hamb').classList.remove('header-hamb02');
         document.getElementById('hamb').removeEventListener('click', closeSideMenu);
         document.getElementById('hamb').addEventListener('click', openSideMenu);
      }

   </script>

</body>
</html>