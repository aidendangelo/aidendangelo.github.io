<!DOCTYPE html>
<html>
    <head>
        <link rel= "stylesheet" type="text/css" href="style.css">
            <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
        <link rel='stylesheet' type='text/css' href='style_test.php' />
        
    </head>
    <body>
        <!--- makes a navigation bar for the tools --->
        <?php include_once('header.php'); ?>  
        <div>
            <form method="post" action="home_calc.php">
                <p>Brady's RNG coconut roller</p>
                Tier: <input type="number" name="chal" value="chal_level" placeholder="1-10" /><br />
                
                <br />
                <input type="submit" name="Calculate" value="Calculate" />
                
            </form>
            
            
        </div>
        
        
    </body>
    
</html>