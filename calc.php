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
            <h2>EXP Tool Calculation</h2>
        <?php
            
            
            /*  Declares these beforehand other wise there is a error and the program breaks*/
            // $z = 0;
            // $total = 1;
            $total_0 = 0;
            $total_1 = 0;
            $total_2 = 0;
            $total_3 = 0;
            $total_4 = 0;
            $total_5 = 0;
            $i = 1;
            $sum = 0;
            $party_size= 1;
            $mon_exp_0 = 0;
            $mon_amount_0 = 0;
            
            
            $monster_mult =  array("1" => 1, "2" => 1.5, "3" => 2, "4" => 2, "5" => 2, "6" => 2, "7" => 2.5, "8" => 2.5, "9" => 2.5, "10" => 2.5, "11" => 3, "12" => 3, "13" => 3, "14" => 3, "15" => 4);
            
            
            $cr_exp = array("1/8" => 25, "1/4" => 50, "1/2" => 100, "1" => 200, "2" => 450, "3" => 700, "4" => "1100", 
            "5" => 1800,"6" => 2300,"7" => 2900,"8" => 3900,"9" => 5000,"10" => 5900,"11" => 7200,"12" => 8400,"13" => 10000,"14" => 11500,"15" => 13000,"16" => 15000,"17" => 18000,"18" => 20000,"19" => 22000,
            "20" => 25000,"21" => 33000,"22" => 41000,"23" => 50000,"30" => 155000);
            
            $siz = 0;
            
            $party_size = (int)$_POST["party_size"];
            
            if($party_size == 0)
            {
                $party_size = 1;
            }
            
            
            $mon_exp_0 = (int)$_POST["mon_exp_0"];
            $mon_amount_0 = (int)$_POST["mon_amount_0"];
            $total_0 = $mon_exp_0 * $mon_amount_0;
            // print($party_size);
            // print($mon_exp_0);
            
            if(isset($_POST["extra_mon_1"]))
            {
                $mon_exp_1 = (int)$_POST["mon_exp_1"];
                $mon_amount_1 = (int)$_POST["mon_amount_1"];
                
                $total_1 = $mon_exp_1 * $mon_amount_1;
                
                $siz++;
            }
            
            if(isset($_POST["extra_mon_2"]))
            {
                $mon_exp_2 = (int)$_POST["mon_exp_2"];
                $mon_amount_2 = (int)$_POST["mon_amount_2"];
                
                $total_2 = $mon_exp_2 * $mon_amount_2;
                
                $siz++;
            }
            if(isset($_POST["extra_mon_3"]))
            {
                $mon_exp_3 = (int)$_POST["mon_exp_3"];
                $mon_amount_3 = (int)$_POST["mon_amount_3"];
                
                $total_3 = $mon_exp_3 * $mon_amount_3;
                
                $siz++;
            }
            if(isset($_POST["extra_mon_4"]))
            {
                $mon_exp_4 = (int)$_POST["mon_exp_4"];
                $mon_amount_4 = (int)$_POST["mon_amount_4"];
                
                $total_4 = $mon_exp_4 * $mon_amount_4;
                
                $siz++;
            }
            if(isset($_POST["extra_mon_5"]))
            {
                $mon_exp_5 = (int)$_POST["mon_exp_5"];
                $mon_amount_5 = (int)$_POST["mon_amount_5"];
                
                $total_5 = $mon_exp_5 * $mon_amount_5;
                
                $siz++;
            }
            
            $total = $total_0 + $total_1 + $total_2 + $total_3 + $total_4 + $total_5;
            $sum = $total / $party_size;
            
            print($sum);
            
            
            
            
            
            /*
            for ( $q = 0; $q <= 25; $q++)
            {
                if (isset($_POST["cr"]))
                {
                    foreach($cr_exp as $cr_num => $cr_ex)
                    {
                        if($_POST["amount_" . $i++] == $cr_num)
                        {
                            $sum = $sum + ($cr_ex * $_POST["amount_" . $i]);
                            
                        }
                        
                        
                    }
                    
                }
                printf($sum);
            }
            */
            /*
            foreach($monster_mult as $key => $i)
            {
                if($_POST["monster_count"] == $key)
                {
                    $mult = $i;
                    print($mult);
                }
            } */
            /*
            $cr_total = array();
            $mult = 1;
            foreach($cr_exp as $key_cr => $q)
            {
                $z++;
                if($_POST["cr"] == $key_cr)
                {
                    $cr_s = $q;
                    // print($cr_s);
                    if($_POST["cr_amount" . $z] != NULL)
                    {
                        foreach($monster_mult as $key => $i)
                            {
                                if($_POST["amount_" . $z] == $key)
                                {
                                    $mult = $i;
                                    // print($mult);
                                }
                            }
                        
                        
                        $cr_total = $cr_s * $_POST["cr_amount" . $z];
                    }
                }
                
            }
            
            $size= $_POST["party_size"];
            
            for($t = 0;$t < count($cr_total); $t++)
            {
                $total = $total + $cr_total[$t];
                
            }
        $total = $total * $mult;
        $total = $total / $size;
        
        print($total);
        */
        
        
        
        
        
        
        ?>
        </div>
    </body>
    
</html>