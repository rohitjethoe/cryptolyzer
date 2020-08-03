<?php include "lib/includes/Header.php"; ?>
<div class="container">
    <div class="intro">
        <div class="btc-current-price">
            <span class='btc-cp-title'>Bitcoin (BTC) is worth</span> <br>
            <span class="btc-cp-price">$ <?php echo $lastPrice; ?></span> <span class="btc-cp-pair">BTC/USD</span> <br>
        </div>
        <div class="intro-image">
            <img src="images/chart.svg" >
        </div>
    </div>
    <div class="overlay">
        <img src="images/bottom.svg">
    </div>
    <div id="about"></div>
    <div class="about">
        <div class="title">
            About Bitcoin
        </div>
        <div class="rect"></div>
        <div class="text">
            What even is Bitcoin?
        </div>
    </div>
    <div class="cards"> 
        <div class="card card-left">
            <div class="image">
                <img src="images/p2p.svg">
            </div>
            <div class="title">
                P2P Transactions
            </div>
            <div class="text">
                <p>Bitcoin is open source and can process transactions without a middleman. </p>
            </div>
        </div>
        <div class="card ">
            <div class="image">
                <img class="world" src="images/world.svg">
            </div>
            <div class="title">
                Worldwide
            </div>
            <div class="text">
                <p>You can make worldwide transactions with low transaction costs with Bitcoin. </p>
            </div>
        </div>
        <div class="card card-right">
            <div class="image">
                <img src="images/satoshi.svg">
            </div>
            <div class="title">
                Satoshi Nakamato
            </div>
            <div class="text">
                <p>Blockchain is created by a group or person who is called Satoshi Nakamato.</p>
            </div>
        </div>
    </div>
    <div class="overlay-bottom">
        <img src="images/top.svg">
    </div>
    <div class="scrollup">
        <a href="#">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <div id="chart-nav"></div>
    <div class="chart">
        <div class="chart-content">
            <div class="chart-header">
                <div class="chart-title">
                    Bitcoin Price <br>
                    <span>last 7 days</span>
                </div>
                <div class="chart-price">
                    <span class="chart-price-btc">
                        $<?php echo $lastPrice; ?>
                    </span> 
                    <br>
                    <span class="movement <?php if ($priceMovement > 0) { echo "positive"; }?>">
                        <?php if ($priceMovement > 0) { echo "+$"; } else { echo "-$"; }
                            echo $priceMovement; 
                        ?>
                    </span>
                </div>
            </div>
            <canvas id="chart"></canvas>
        </div>
        <div class="chart-text-intro">
            <div class="title">
                Bitcoin Chart
            </div>
            <div class="rect"></div>
            <div class="text">
                7 day chart of Bitcoin to USD from <?php echo "$date to $date2" ?>.
                <br>
                <div class="currencies">
                    $ <?php echo $lastPrice; ?> BTC/USD
                    <br>
                    € <?php echo number_format(($lastPrice / 1.11), 2, '.', ''); ?> BTC/EUR
                    <br>
                    ¥ <?php echo number_format(($lastPrice / 0.0094), 2, '.', ''); ?> BTC/JPY
                </div>
                <br>
                <a target="_blank" href="https://www.binance.com/en/register?ref=36150924">Buy BTC</a>
            </div>
        </div>
    </div>
    <div id="contact"></div>
    <div class="contact">
        <img src="images/polygon.svg">
        <div class="contact-form">
            <div class="contact-title">
                Send me a message <br>
            </div>
            <form action="index.php" method="post" enctype="multipart/form-data"> 
                <input type="text" name="name" placeholder="Name" class="input"> <br>
                <input type="email" name="email" placeholder="Enter email-adress" class="input"> <br>
                <textarea name="message" cols="30" rows="10" placeholder="Your message" class="input message"></textarea> <br>
                <div class="btn">
                    <button class="input submitbtn" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "lib/includes/Footer.php"; ?>
