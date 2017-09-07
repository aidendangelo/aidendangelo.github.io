<!DOCTYPE html>
<html>
    <head>
        <link rel= "stylesheet" type="text/css" href="style.css">
            <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
        <link rel='stylesheet' type='text/css' href='style_test.php' />
        
        
    </head>
    
    <body>
    <?php include_once('header.php'); ?>
    <div id="dynamic">
        <h2>Exp Tool</h2>
        <p>
            Please input the info below.<br /><br />
            For number of players input the amount of players present at the encounter.<br />
            For monster EXP input the amount of EXP the monster is worth. EX. Goblin is worth 50 EXP<br />
            For amount of monster input the amount of that type of monster. EX. 5 Goblins<br /><br />
            If using more than one type of monster than click the checkbox and add it in. EX. 3 Goblins and 1 Goblin Shaman
        </p>
        <form action="calc.php" method="POST">
            Number of player/s&nbsp;&nbsp;<input type="text" name="party_size" placeholder="1-99" /><br />
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_0" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_0" placeholder="1-99" /> <br />
            
            Press Check box to add more input
            <!--- Reveals hidden input fields,  was planing on using php or javascript to add them for infiite amount but it kept breaking --->
            <input type="checkbox" name="extra_mon_1" value="1" /><i class="hidden">
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_1" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_1" placeholder="1-99" /> <br />
            </i>
            
            <input type="checkbox" name="extra_mon_2" value="2" /><i class="hidden">
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_2" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_2" placeholder="1-99" /> <br />
            </i>
            
            <input type="checkbox" name="extra_mon_3" value="3" /><i class="hidden">
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_3" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_3" placeholder="1-99" /> <br />
            </i>
            
            <input type="checkbox" name="extra_mon_4" value="4" /><i class="hidden">
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_4" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_4" placeholder="1-99" /> <br />
            </i>
            
            <input type="checkbox" name="extra_mon_5" value="5" /><i class="hidden">
            Monster EXP&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mon_exp_5" placeholder="0-99999" /> <br />
            Amount of Monster/s&nbsp;&nbsp;<input type="text" name="mon_amount_5" placeholder="1-99" /> <br />
            </i>
            
            <!--- <h2>Challenge Rating</h2>
            <table>
                <tr>
                    <td><input type="checkbox" name="cr" value="0.125" > 1/8 <input class="cr_amount" type="text" name="amount_1" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="0.25" > 1/4 <input class="cr_amount" type="text" name="amount_2" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="0.5"> 1/2 <input class="cr_amount" type="text" name="amount_3" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="1" > 1 <input class="cr_amount" type="text" name="amount_4" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="2"> 2 <input class="cr_amount" type="text" name="amount_5" placeholder="amount of monsters 1-99" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cr" value="3" > 3 <input class="cr_amount" type="text" name="amount_6" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="4"> 4 <input class="cr_amount" type="text" name="amount_7" placeholder="amount of monsters 1-99" /></td> 
                    <td><input type="checkbox" name="cr" value="5" > 5 <input class="cr_amount" type="text" name="amount_8" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="6"> 6 <input class="cr_amount" type="text" name="amount_9" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="7" > 7 <input class="cr_amount" type="text" name="amount_10" placeholder="amount of monsters 1-99" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cr" value="8"> 8 <input class="cr_amount" type="text" name="amount_11" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="9" > 9 <input class="cr_amount" type="text" name="amount_12" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="10"> 10 <input class="cr_amount" type="text" name="amount_13" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="11" > 11 <input class="cr_amount" type="text" name="amount_14" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="12"> 12 <input class="cr_amount" type="text" name="amount_15" placeholder="amount of monsters 1-99" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cr" value="13" > 13 <input class="cr_amount" type="text" name="amount_16" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="14"> 14 <input class="cr_amount" type="text" name="amount_17" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="15" > 15 <input class="cr_amount" type="text" name="amount_18" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="16"> 16 <input class="cr_amount" type="text" name="amount_19" placeholder="amount of monsters 1-99" /></td> 
                    <td><input type="checkbox" name="cr" value="17" > 17 <input class="cr_amount" type="text" name="amount_20" placeholder="amount of monsters 1-99" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cr" value="18"> 18 <input class="cr_amount" type="text" name="amount_21" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="19" > 19 <input class="cr_amount" type="text" name="amount_22" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="20"> 20 <input class="cr_amount" type="text" name="amount_23" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="21" > 21 <input class="cr_amount" type="text" name="amount_24" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="22" > 22 <input class="cr_amount" type="text" name="amount_25" placeholder="amount of monsters 1-99" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cr" value="23"> 23 <input class="cr_amount" type="text" name="amount_26" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="24" > 24 <input class="cr_amount" type="text" name="amount_27" placeholder="amount of monsters 1-99" /></td>
                    <td><input type="checkbox" name="cr" value="30"> 30 <input class="cr_amount" type="text" name="amount_28" placeholder="amount of monsters 1-99" /></td>
                </tr>
            </table>
            --->
            
            <br /><br /><input type="submit" name="submit" value="Calculate" />
        </form>
        
        
    </div>
    
        
        
        
    </body>
</html>