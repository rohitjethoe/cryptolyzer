<div class="footer">
  <div class="creator">
    created by <a href="https://rohit.nl">Rohit<span>.</span></a>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
<script>
    let chart = document.getElementById("chart").getContext('2d');

    let btcChart = new Chart(chart, {
        type: 'line',
        data:{
            labels:[
                <?php 
                    for ($i = 0; $i < 6; $i++) {
                        echo "'$day[$i]',";
                    }    
                    echo "'" . date("Y-m-d") . "'";
                ?>],
            datasets:[{
                label: 'BTC/USD',
                backgroundColor: 'rgba(81, 108, 173, 0.4)',
                borderColor: 'rgb(81,108, 173)',
                data:[<?php
                        for ($i = 0; $i < 6; $i++) {
                            echo $price[$i] . ",";
                        }
                        echo $lastPrice;
                        ?>]
            }]
        },
        options:{
            scaleLineColor: "rgba(0,0,0,0)",  
            legend:{
                display: false
            },
            scales: {
                xAxes: [{
                    
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            },
            layout:{
                padding:{
                    left:10,
                    right:10,
                    bottom:10,
                    top:40
                }
            }
        }
    })
</script>
</body>
</html>