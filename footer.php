<!DOCTYPE html>
    <head>
        <link href="CSS/footer.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="navi">
            <ul>
                <li class="list active">
                    <a href="index.php">
                        <span class="icon"><ion-icon name="home-sharp"></ion-icon></span>
                    </a>
                </li>
                <li class="list">
                    <a href="shop.php">
                        <span class="icon"><ion-icon name="storefront"></ion-icon></span>
                    </a>
                </li>
                <li class="list">
                    <a href="character.php">
                        <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
                    </a>
                </li>               
                <li class="list">
                    <a href="establishment.php">
                        <span class="icon"><ion-icon name="settings-sharp"></ion-icon></span>>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>

        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
            item.addEventListener('click',activeLink))
        </script>


        <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
        <script  nomodule  src = "https:// unpkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js"> </script>
    </body>
</html>