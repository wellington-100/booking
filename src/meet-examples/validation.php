<!-- this script allows client to RATE a HOTEL -->
<style>body {background: #333; color: white}</style>
<?php
    $agg_rate_value = 4.5;
    $agg_rate_count = 10;
    if(isset($_GET['rate'])){
        if(is_numeric($_GET['rate'])){
          if(preg_match('/[0-4]\.\d/', $_GET['rate'])){
            $rate = (float)$_GET['rate'];
            var_dump($rate);
            $total_rate = $agg_rate_count * $agg_rate_value;
            $total_rate += $rate;
            $current_rate = $total_rate / ($agg_rate_count + 1);
            print("You've rated this app with $rate \nCurrent app rating: ". round($current_rate, 1));
          } else{
              print("Only numbers between 0.0 and 5.0 are allowed!");
          }
        } else{
          print("Only numbers between 0.0 and 5.0 are allowed!");
        }

    } else {
        print("This app was rates at ". round($agg_rate_value, 1)." by ". $agg_rate_count." users");
    } 

?>
<form action="/meet-examples/validation.php" method="GET">
    <input
        required
        type="text" 
        name="rate"
    />
    <button>RATE</button>
</form>


<!--
    USER
      |
    /meet-examples/validation.php (acces the page)
      |
      v
    BROWSER
      |
      v
      x----------------------- GET request /meet-examples/validation.php ------------------- >  SERVER
                                                                                                   |
                                                                                          isset($_GET['rate]) ?   
                                                                                                   v
                                                              +--------   Warning: Undefined... <- $rate = $_GET['rate']
                                                              |                                    |
                                                              +--------         <form>  <----------+
                                                              |                   ...
      x <-----------------------  response -------------------+                </form>  
      |
      v
    BROWSER
      v
    render
      v
    WINDOW <--- USER clicks button
      v
    client side validation:
        - required
        - pattern
    x----------------------- GET /meet-examples/validation.php?rate=3---------------------- > SERVER
                                                                                                   |
                                                                                          isset($_GET['rate]) ?  
                                                                                                   |
                                                                                        is_numeric($_GET['rate'])
                                                                                                   |
                                                                                  preg_match('/[0-4]\.\d/', $_GET['rate'])
                                                                                                   |
                                                                                       $rate = (float)$_GET['rate']            
                                                                                                   v
                                                              +--------   Warning: Undefined... <- $rate = $_GET['rate']
                                                              |                                    |
                                                              +--------         <form>  <----------+
                                                              |                   ...
      x <-----------------------  response -------------------+                </form>  