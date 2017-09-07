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
            <h2>Loot Roller</h2>
            <p>
                Please input info below<br /><br />
                Treasure Hoard is for dungeon's or large encounters. EX. a castle siege or raiding a Goblin camp.<br />
                Individual Treasure is for small encounters. EX. a owlbear.<br /><br />
                Challange rating is determined by the monsters fought in the encounter. EX. a goblin with a CR of 1/2 would make the challenge rating 1/2. Or 3 owlbears with a challenge rating of 3 would make it 9. 
            </p>
            <form method="post" action="loot_calc.php">
                
                <input type="radio" name="loot_type" value="hoard_loot" />Treasure Hoard <br />
                <input type="radio" name="loot_type" value="ind_loot" checked />Individual Loot <br />
                Challange Level: <input type="number" name="chal" value="chal_level" placeholder="0-99" /><br />
                
                
                <br />
                <input type="submit" name="Calculate" value="Calculate" />
                
            </form>
            
        </div>
        
    </body>
    
</html>