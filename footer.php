<!DOCTYPE html>
    <head>
        <link href="CSS/footer.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="navi">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="home-sharp"></ion-icon></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="storefront"></ion-icon></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
                    </a>
                </li>               
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-sharp"></ion-icon></span>>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
add_index_page/#5
 master
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
 add_index_page/#5
 master
        <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
        <script  nomodule  src = "https:// unpkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js"> </script>
    </body>
</html>