<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Cook.in</title>
        <link rel="stylesheet" type="text/css" href="styles/style_index.css">
        
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="assets/logos/title_icon.png" type="image/icon type">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <!--Navbar-->
        <nav>
            <ul class="menu-bar">
                <div class="logo">
                    <a href="index.php">
                        <i class="material-icons">restaurant_menu</i>Cook.in
                    </a>
                </div>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#latest_recipes">Latest Recipes</a></li>
                <li><a href="index.php#cuisines">Cuisines</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="map.html">Explore Recipes</a></li>
                <li><a href="create_recipe.html" style="text-decoration: none;">Create Recipe</a></li>
            </ul>
        </nav>

        <!--Welcome Content-->
        <div class="container">
            <table>
                <tr>
                    <td>
                        <h1>Learn. Cook. Share.<br>Cooking Made Easy.</h1>
                        <p>Say good bye to long and frustrating food blogs and recipe videos.<br>Access our recipe cards to prepare any dish in minutes.</p>
                        <a class="btn-primary" style="text-decoration: none;" href="#search_recipes">Browse Recipes</a>
                    </td>
                    <td>
                        <img src="assets/main/main_plate.png">
                    </td>
                </tr>
            </table>
            
            <h1 style="font-size: 3rem;">Search Recipes</h1>
            <form action="" id="search_recipes">
                <input type="search" onkeyup="searchList()" placeholder="Search for Cusines, Recipies..." id="search_key">
                <i class="fa fa-search" onclick="searchList()"></i>
            </form>

            <div class="variable_zone">

            <!--Recipe Cards-->
            <h2 id="latest_recipes">Latest Recipes</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_filter_coffee.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_filter_coffee.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Kumbakonam Filter Coffee</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/North_Lucknow_Biryani.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Lucknow_Biryani.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Lucknow Biriyani</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_lasagna.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Lasagna.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Lasagne</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_falooda.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_falooda.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Falooda</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_mysore_pak.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_mysore_pak.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Mysore Pak</h4>
                </div>
            </div>
            
            <h2 id="cuisines">South Indian Cuisine</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_filter_coffee.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_filter_coffee.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Kumbakonam Filter Coffee</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_ven_pongal.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_ven_pongal.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Ven Pongal</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_ghee_roast.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_ghee_roast.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Ghee Roast</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_podi_idli.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_podi_idli.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Podi Idli</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_ragi_mudde.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_ragi_mudde.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Ragi Mudde</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_bun_parota.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_bun_parota.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Madurai Bun Parotta</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_dum_biryani.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_dum_biryani.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Dum Biriyani</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_bisi_bele_bath.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_besi_bele_bath.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Besi Bela Bath</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_kerala_appam.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_appam.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Aappam</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/south_indian/south_mysore_bonda.html" target="_blank">
                        <img src="assets/cusines/recipes/south_indian/south_mysore_bonda.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Mysore Bonda</h4>
                </div>
            </div>

            <h2>North Indian Cuisine</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_chole_bhature.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Chole_Bhature.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Chole Bhature</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/North_Lucknow_Biryani.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Lucknow_Biryani.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Lucknow Biriyani</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_bajra_khichdi.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Bajra_Khichdi.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Bajra Khichdi</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_gatte_ki_sabji.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Gatte_Ki_Subzi.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Gatte Ki Subji</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_matar_paneer.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Matar_Paneer.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Matar Paneer</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_pav_bhaji.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/pav_bhaji.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Pav Bhaji</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/North_Rajma_Chawal.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Rajma_Chawal.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Rajma Chawal</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_kafuli.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Kafuli.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Kafuli</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/north_rogan_josh.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Rogan_Josh.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Rogan Josh</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/north_indian/noth_Dal_Makhani.html" target="_blank">
                        <img src="assets/cusines/recipes/north_indian/North_Dal_Makhani.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Dal Makhni</h4>
                </div>
            </div>

            <h2>Italian Cuisine</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/italian/italian_arancini.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Arancini.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Arancini</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_bagna_cauda.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Bagna_Cauda.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Bagna Cauda</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_focaccia.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Focaccia.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Focaccia</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_gnocchi.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Gnocchi.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Gnocchi</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_lasagna.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Lasagna.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Lasagne</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_pizza.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Pizza.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Pizza</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_polenta.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Polenta.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Polenta</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_ribollita.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Ribollita.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Ribolitta</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_risotto.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Risotto.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Risotto</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/italian/italian_tuna_pasta.html" target="_blank">
                        <img src="assets/cusines/recipes/italian/Italian_Tuna_Pasta.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Tuna Pasta</h4>
                </div>
            </div>

            <h2>Chinese Cuisine</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/chinese/chinese_chow_mein.html" target="_blank">
                        <img src="assets/cusines/recipes/chinese/chinese_chow_mein.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Chow Mein</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/chinese/chinese_fried_rice.html" target="_blank">
                        <img src="assets/cusines/recipes/chinese/chinese_fried_rice.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Schezwan Fried Rice</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/chinese/chinese_Manchurian.html" target="_blank">
                        <img src="assets/cusines/recipes/chinese/chinese_veg_manchurian.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Veg Ball Manchurian</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/chinese/Chinese_Peking_Duck.html" target="_blank">
                        <img src="assets/cusines/recipes/chinese/Chinese_Peking_Duck.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Peking Duck</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/chinese/chinese_sushi.html" target="_blank">
                        <img src="assets/cusines/recipes/chinese/chinese_sushi.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Sushi</h4>
                </div>
            </div>

            <h2>Beverages/Drinks</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_lassi.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_lassi.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Sweet Lassi</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_falooda.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_falooda.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Falooda</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_nannari.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_nannari.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Nannari Sarbath</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_jaljeera.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_Jaljeera.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Jaljeera</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/drinks/drinks_jigarthanda.html" target="_blank">
                        <img src="assets/cusines/recipes/drinks/drinks_Jigarthanda.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Madurai Jigarthanda</h4>
                </div>
            </div>

            <h2>Desserts</h2>
            <div class="recipe-list">
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_chakkara_pongal.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_chakara_pongal.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Chakra Pongal</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_Kozhukattai.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_kozhukattai.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Mothagam</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_mysore_pak.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_mysore_pak.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Mysore Pak</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_paal_payasam.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_paal_payasam.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Paal Payasam</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/desert_tirunelveli_halva.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/desert_tirunelveli_halwa.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Tirunelveli Halwa</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/dessert_gajar_ka_halwa.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/Dessert_Gajar_Ka_Halwa.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Gajar ka Halwa</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/dessert_gond_ke_ladoo.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/Dessert_Gond_Ke_Ladoo.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Gond ke Ladoo</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/dessert_motichoor_ladoo.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/Dessert_Motichoor_Ladoo.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Motichoor Ladoo</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/dessert_phirni.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/Dessert_Phirni.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Phirni</h4>
                </div>
                <div class="recipe-card">
                    <a href="recipes/dessert/dessrt_ghevar.html" target="_blank">
                        <img src="assets/cusines/recipes/dessert/Dessert_Ghevar.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Ghevar</h4>
                </div>
            </div>
            </div>
            <br><br>


        </div>
        <div class="contact-us" id="contact">
            <h2>About Us</h2>
            <h3>Our Team</h3>
            <div class="contact-card">
                <div class="contact-item">
                    <img src="assets/team/download.png">
                    <h4>Dharshini A S</h4>
                </div>
                <div class="contact-item">
                    <img src="assets/team/download.png">
                    <h4>Kaviyaa Priyadharshini A</h4>
                </div>
            </div>
            <p>© 2024 All Rights Reserved, <a href="index.php" style="color: white; font-weight: bold;">Cook.in</a></p>
        </div>
        <script src="js/index_logic.js"></script>
    </body>
</html>