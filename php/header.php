<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="homepage.php" class="navbar-brand" style="margin-bottom:10px;">&#127969;</a>
        <a href="Plants.php" class="navbar-brand">
            <h6>
                 Plants
            </h6>
        </a>
        <a href="Fertilizers.php" class="navbar-brand">
            <h6>
                 Fertilizers
            </h6>
        </a>
        <a href="Tools.php" class="navbar-brand">
            <h6>
                 Tools
            </h6>
        </a>
        <a href="Pebbles.php" class="navbar-brand">
            <h6>
                 Pebbles
            </h6>
        </a>
        <a href="Accessories.php" class="navbar-brand">
            <h6>
                Accessories
            </h6>
        </a>
        <a href="Stools.php" class="navbar-brand">
            <h6>
                Stools
            </h6>
        </a>
        <a href="Pots.php" class="navbar-brand">
            <h6>
                 Pots
            </h6>
        </a>
        <a href="Seeds.php" class="navbar-brand">
            <h6>
                 Seeds
            </h6>
        </a>
        

       
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h6 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h6>
                </a>
            </div>
        </div>

    </nav>
</header>