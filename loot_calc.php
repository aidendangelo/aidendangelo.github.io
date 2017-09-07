<!DOCTYPE html>
<html>
    <head>
        <link rel= "stylesheet" type="text/css" href="style.css">
            <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
        <link rel='stylesheet' type='text/css' href='style_test.php' />
        
    </head>
    <body>
        <div>
        <p>
        <?php include_once('header.php'); ?>  
        <h2>Loot Calculation</h2>
                <?php
                
                
                $type = $_POST["loot_type"];
                
                $gold_total = 0;
                
                
                    /*$loot_table_1 = rand(0, 99);
                    $loot_table_2 = rand(0, 99);
                    
                    $table_1 = array(1,2,3,4,5,6,7,8,9,10);
                    $table_2 = array(11,12,13,14,15,16,17,18,19,20);
                    $table_3 = array(21,22,23,24,25,26,27,28,29,30);
                    $table_4 = array(31,32,33,34,35,36,37,38,39,40);
                    $table_5 = array(41,42,43,44,45,46,47,48,49,50);
                    $table_6 = array(51,52,53,54,55,56,57,58,59,60);
                    $table_7 = array(61,62,63,64,65,66,67,68,69,70);
                    $table_8 = array(71,72,73,74,75,76,77,78,79,80);
                    $table_9 = array(81,82,83,84,85,86,87,88,89,90);
                    $table_10 = array(91,92,93,94,95,96,97,98,99);
                    
                    
                if ($_POST["loot_type"] == "hoard_loot")
                {
                    for($i = 0; $i<10; $i++)
                    {
                        $loot_roll = array_fill_keys($table_ . ($i + 1), ($i + 1));
                    }
                    if($loot_table_1 == $table_1)
                    {
                        
                    }
                    
                    
                }
                else if ($_POST["loot_type"] == "ind_loot")
                {
                    
                    
                    
                    
                }
                */
                
                /* Individual Loot rolling code */
                if ($type == "ind_loot")
                {
                    if ((int)$_POST["chal"] < 4)
                    {
                        $d1 = rand(1,6);
                        $d2 = rand(1,5);
                        $gold_total = $d1 * $d2;
                        
                    }
                    elseif ((int)$_POST["chal"] < 10)
                    {
                        $d1 = rand(1,6);
                        $d2 = rand(1,12);
                        $gold_total = $d1 * $d2 * 10;
                        
                    }
                    elseif ((int)$_POST["chal"] < 16)
                    {
                        $d1 = rand(1,6);
                        $d2 = rand(1,12);
                        $gold_total = $d1 * $d2 * 100;
                        
                    }
                    elseif ((int)$_POST["chal"] > 17)
                    {
                        $d1 = rand(1,8);
                        $d2 = rand(1,3);
                        $gold_total = $d1 * $d2 * 1000;
                        
                    }
                    print("Gold:" . $gold_total);
                }
                
                
                if ($type == "hoard_loot")
                {
                    /* Declares all the loot tables once so I dont need to do it multiple times  */
                    
                    /* 8 */
                    $loot_table_a = array(1 => "Potion of healing",2 => "Spell scroll (cantrip)",3 => "Potion of climbing",4 => "Spell scroll (1st level)",5 => "Spell scroll (2nd leve l)",6 => "Potion of greater healing",7 => "Bag of holding",8 => "Driftglobe"); 
                    
                    /* 35 */
                    $loot_table_b =  array(1 => "Potion of greater healing",2 => "Potion of fire breath",3 => "Potion of resistance",4=> "Ammunition +1",5 => "Potion of animal friendship",6 => "Potion of hill giant strength",7 => "Potion of growth",8 => "Potion of water breathing",9 => "Spell scroll (2nd level)", 10 => "Spell scroll (3rd leve l)",11 => "Bag of holding",12 => "Keoghtom's ointment",13 => "Oil of slipperiness",14 => "Dust of disappearance",15 => "Dust of dryness",16 => "Dust of sneezing and choking", 17 => "Elemental gem",18 => "Philter of love",19 => "Alchemy jug",20 => "Cap of water breathing",21 => "Cloak of the manta ray",22 => "Driftglobe",23 => "Goggles of night",24 => "Helm of comprehending languages",25 => "Immovable rod",26 => "Lantern of revealing",27 => "Mariner's armor",28 => "Mithral armor",29 => "Potion of poison",30 => "Ring of swimming",31 => "Robe of useful items",32 => "Rope of climbing",33 => "Saddle of the cavalier",34 => "Wand of magic detection",35 => "Wand of secrets");
                    
                    /* 28 */
                    $loot_table_c = array(1 => "Potion of superior healing",2 => "Spell scroll (4th level)",3 => "Ammunition +2",4 => "Potion of clairvoyance",5 => "Potion of diminution",6 => "Potion of gaseous form",7 => "Potion of frost giant strength",8 => "Potion of stone giant strength",9 => "Potion of heroism",10 => "Potion of invu lnerability",11 => "Potion of mind reading",12 => "Spell scroll (5th level)",13 => "Elixir of health",14 => "Oil of etherealness",15 => "Potion of fire giant strength",16 => "Quaal's feather token",17 => "Scroll of protection",18 => "Bag of beans",19 => "Bead of force",20 => "Chime of opening",21 => "Decanter of endless water",22 => "Eyes of minute seeing",23 => "Folding boat",24 => "Heward's handy haversack",25 => "Horseshoes of speed",26 => "Necklace of fireballs",27 => "Periapt of health",28 => "Sending stones"); 
                    
                    /* 16 */
                    $loot_table_d = array(1 => "Potion of supreme healing",2 => "Potion of invisibility",3 => "Potion of speed",4 => "Spell scroll (6th level)",5 => "Spell scroll (7th level)",6 => "Ammunition +3",7 => "Oil of sharpness",8 => "Potion of flying",9 => "Potion of cloud giant strength",10 => "Potion of longevity",11 => "Potion of vitality",12 => "Spell scroll (8th level)",13 => "Horseshoes of a zephyr",14 => "Nolzur's marvelous pigments",15 => "Bag of devouring",16 => "Portable hole"); 
                    
                    /* 7 */
                    $loot_table_e = array(1 => "Spell scroll (8th level)",2 => "Potion of storm giant strength",3 => "Potion of supreme healing",4 => "Spell scroll (9th level)",5 => "Universal solvent",6 => "Arrow of slaying",7 => "Sovereign glue");
                    
                    /* 60 */
                    $loot_table_f = array(1 => "Weapon +1",2 => "Shield + 1",3 => "Sentinel shield",4 => "Amulet of proof against detection and location",5 => "Boots of elvenkind",6 => "Boots of striding and springing",7 => "Bracers of archery",8 => "Brooch of shielding",9 => "Broom of flying",10 => "Cloak of elvenkind",11 => "Cloak of protection",12 => "Gauntlets of ogre power",13 => "Hat of disguise",14 => "Javelin of lightning",15 => "Pearl of power",16 => "Rod of the pact keeper + 1",17 => "Slippers of spider climbing",18 => "Staff of the adder",
                    19 => "Staff of the python",20 => "Sword of vengeance",21 => "Trident of fish command",22 => "Wand of magic missiles",23 => "Wand of the war mage + 1",24 => "Wand of web",25 => "Weapon of warning",26 => "Adamantine armor (chain mail)",27 => "Adamantine armor (chain shirt)",28 => "Adamantine armor (scale mail)",29 => "Bag of tricks (gray)",30 => "Bag of tricks (rust)",31 => "Bag of tricks (tan)",32 => "Boots of the winterlands",33 => "Circlet of blasting",34 => "Deck of illusions",35 => "Eversmoking bottle",36 => "Eyes of charming",
                    37 => "Eyes of the eagle",38 => "Figurine of wondrous power (silver raven)",39 => "Gem of brightness",40 => "Gloves of missile snaring",41 => "Gloves of swimming and climbing",42 => "Gloves of thievery",43 => "Headband of intellect",44 => "Helm of telepathy",
                    45 => "Instrument of the bards (Doss lute)",46 => "Instrument of the bards (Fochlucan bandore)",47 => "Instrument of the bards (Mac-Fuimidh cittern)",48 => "Medallion of thoughts",49 => "Necklace of adaptation",50 => "Periapt of wound closure", 51 => "Pipes of haunting",52 => "Pipes of the sewers",53 => "Ring of jumping",54 => "Ring of mind shielding",55 => "Ring of warmth",56 => "Ring of water walking",57 => "Quiver of Ehlonna",58 => "Stone of good luck",59 => "Wind fan",60 => "Winged boots");
                    
                    /* 94 */
                    $loot_table_g = array(1 => "Weapon +2",2 => "loun stone (sustenance)",3 => "Iron bands of Bilarro",4 => "Figurine of wondrous power: Bronze griffon",5 => "Armor + 1 leather",6 => "Figurine of wondrous power:Ebony fly",7 => "Armor of resistance (leather)",
                    8 => "Figurine of wondrous power: Golden lions",9 => "Mace of disruption",10 => "Figurine of wondrous power: Ivory goats",11 => "Mace of smiting",12 => "Figurine of wondrous power: Marble elephant",13 => "Mace of terror",14 => "Figurine of wondrous power: Onyx dog",15 => "Mantle of spell resistance",16 => "Figurine of wondrous power: Serpentine owl",17 => "Necklace of prayer beads",
                    18 => "Adamantine armor (breastplate)",19 => "Periapt of proof against poison",20 => "Adamantine armor (splint)",21 => "Ring of animal influence",22 => "Amulet of health",23 => "Ring of evasion",24 => "Armor of vulnerability",25 => "Ring of feather falling",26 => "Arrow-catching shield",27 => "Ring of free action",
                    28 => "Belt of dwarvenkind",29 => "Ring of protection",30 => "Belt of hill giant strength",31 => "Ring of resistance",32 => "Berserker axe",33 => "Ring of spell storing",34 => "Boots of levitation",35 => "Ring of the ram",36 => "Boots of speed",37 => "Ring of X-ray vision",38 => "Bowl of commanding water elementals",39 => "Robe of eyes",
                    40 => "Bracers of defense",41 => "Rod of rulership",42 => "Brazier of commanding fire elementals",43 => "Rod of the pact keeper +2",44 => "Cape of the mountebank",45 => "Rope of entanglement",46 => "Censer of controlling air elementals",47 => "Armor +1 scale mail",48 => "Armor +1 chain mail",49 => "Armor of resistance (scale mail)",
                    50 => "Armor of resistance (chain mail)",51 => "Shield +2",52 => "Armor + 1 chain shirt",53 => "Shield of missile attraction",54 => "Armor of resistance (chain shirt)",55 => "Staff of charming",56 => "Cloak of displacement",57 => "Staff of healing",58 => "Cloak of the bat",59 => "Staff of swarming insects",60 => "Cube afforce",61 => "Staff of the woodlands",62 => "Daern's instant fortress",63 => "Staff of withering",
                    64 => "Dagger of venom",65 => "Stone of controlling earth elementals",66 => "Dimensional shackles",67 => "Sun blade",68 => "Dragon slayer",69 => "Sword of life stealing",70 => "Elven chain",71 => "Sword of wounding",72 => "Flame tongue",73 => "Tentacle rod",74 => "Gem of seeing",75 => "Vicious weapon",76 => "Giant slayer",77 => "Wand of binding",
                    78 => "Clamoured studded leather",79 => "Wand of enemy detection",80 => "Helm of teleportation",81 => "Wand of fear",82 => "Horn of blasting", 83 => "Wand of fireballs",84 => "Horn of Valhalla (silver or brass)",85 => "Wand of lightning bolts",86 => "Instrument of the bards (Canaith mandolin)",87 => "Wand of paralysis",88 => "Instrument ofthe bards (Cii lyre)",89 => "Wand of the war mage +2",90 => "loun stone (awareness)",91 => "Wand of wonder",92 => "loun stone (protection)",93 => "Wings of flying",94 => "loun stone (reserve)");
                    
                    /* 69 */
                    $loot_table_h = array(1 => "Weapon +3",2 => "Amulet of the planet",3 => "Carpet of flying",4 => "Crystal ball (very rare version)",5 => "Ring of regeneration",6 => "Ring of shooting stars",7 => "Ring of telekinesis",8 => "Robe of scintillating colors",9 => "Robe of stars",10 => "Rod of absorption",11 => "Rod of alertness",12 => "Rod of security",13 => "Rod of the pact keeper +3",
                    14 => "Scimitar of speed",15 => "Shield +3",16 => "Staff of fire",17 => "Staff of frost",18 => "Staff of power",19 => "Staff of striking",20 => "Staff of thunder and lightning",21 => "Sword of sharpness",22 => "Wand of polymorph",23 => "Wand of the war mage +3",24 => "Adamantine armor (half plate)",
                    25 => "Adamantine armor (plate)",26 => "Animated shield",27 => "Belt of fire giant strength",28 => "Belt of frost (or stone) giant strength",29 => "Armor + 1 breastplate",30 => "Armor of resistance (breastplate)",31 => "Candle of invocation",32 => "Armor +2 chain mail",33 => "Armor +2 chain shirt",34 => "Cloak of arachnida", 
                    35 => "Dancing sword",36 => "Demon armor",37 => "Dragon scale mail",38 => "Dwarven plate",39 => "Dwarven thrower",40 => "Efreeti bottle",41 => "Figurine of wondrous power (obsidian steed)",42 => "Frost brand",43 => "Helm of brilliance",44 => "Horn of Valhalla (bronze)",
                    45 => "Instrument of the bards (Anstruth harp)",46 => "loun stone (absorption)",47 => "loun stone (agility)",48 => "loun stone (fortitude)",49 => "loun stone (insight)",50 => "loun stone (intellect)",51 => "loun stone (leadership)",
                    52 => "loun stone (strength)",53 => "Armor +2 leather",54 => "Manual of bodily health",55 => "Manual of gainful exercise",56 => "Manual of golems",57 => "Manual of quickness of action",58 => "Mirror of life trapping",59 => "Nine lives stealer",60 => "Oath bow",61 => "Armor +2 scale mail",
                    62 => "Spellguard shield",63 => "Armor + 1 splint",64 => "Armor of resistance (splint)",65 => "Armor + 1 studded leather",66 => "Armor of resistance (studded leather)",67 => "Tome of clear thought",68 => "Tome of leadership and influence",69 => "Tome of understanding");
                    
                    /* 59 */
                    $loot_table_i = array(1 => "Defender", 2 => "Hammer of Thunder",3 => "Luck Blade",4 => "Sword of answering",5 => "Holy avenger",6 => "Ring of djinni summoning",7 => "Ring of invisibility",8 => "Ring of spell turning",9 => "Rod of lordly might",10 => "Staff of the Magi",11 => "Vorpal Sword",
                    12 => "Belt of cloud giant strength",13 => "Armor +2 breastplate",14 => "Armor +3 chain mail",15 => "Armor +3 chain shirt",16 => "Cloak of Invisibility",17 => "Crystal Ball(legendary version)",18 => "Armor +1 half plate",19 => "Iron Flask",20 => "Armor +3 leather",21 => "Armor +1 plate",22 => "Robe of the Archmagi",
                    23 => "Rod of resurection",24 => "Armor +1 Scale mail",25 => "Scarab of protection",26 => "Armor +2 splint",27 => "Armor +2 studded leather",28 => "Well of many worlds",29 => "Magic armor, Armor +2 half plate",30 => "Magic armor, Armor +2 plate",31 => "Magic armor, Armor +3 studded leather",32 => "Magic armor, Armor +3 breastplate",33 => "Magic armor, Armor +3 splint",34 => "Magic armor, Armor +3 half plate",35 => "Magic armor, Armor +3 plate",
                    36 => "Apparatus of Kwalish",37 => "Armor of invulnerability",38 => "Belt of storm giant strength",39 => "Cubic gate",40 => "Deck of many things",41 => "Efreeti chain",42 => "Armor of resistance (half plate)",43 => "Horn of Valhalla (iron)",44 => "Instrument of the bards (OIIamh harp)",45 => "loun stone (greater absorption)",46 => "loun stone (mastery)",47 => "loun stone (regeneration)",48 => "Plate armor of etherealness",49 => "Plate armor of resistance",50 => "Ring of air elemental command",
                    51 => "Ring of earth elemental command",52 => "Ring of fire elemental command",53 => "Ring of three wishes",54 => "Ring of water elemental command",55 => "Sphere of annihilation",56 => "Talisman of pure good",57 => "Talisman of the sphere",58 => "Talisman of ultimate evil",59 => "Tome of the stilled tongue");
                        
                    
                    /* Checks what challenge rating they put down and does loot accordingly*/
                    if ((int)$_POST["chal"] < 4)
                    {
                        $d1 = rand(1,6);
                        $d2 = rand(1,5);
                        $gold_total = $d1 * $d2 * 100;
                        
                        $d1_gem = rand(1,3);
                        $d2_gem = rand(2,4);
                        $gem_total = $d1_gem * $d2_gem;
                        
                        $gem_price = "25";
                        $magic_table = rand(1,5);
                        
                        if ($magic_table == 1)
                        {
                            $amount = rand(1,6);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_a = rand(1,8);
                                
                                print nl2br($loot_table_a[$magic_table_a] . "\n");
                            }
                            
                        }
                        if ($magic_table == 2)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_b = rand(1,35);
                            
                                print nl2br($loot_table_b[$magic_table_b] . "\n");
                            }
                        }
                        if ($magic_table == 3)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_c = rand(1,28);
                                
                                print nl2br($loot_table_c[$magic_table_c] . "\n");
                            }
                        }
                        if ($magic_table == 4)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_f = rand(1,16);
                                
                                print nl2br($loot_table_f[$magic_table_f] . "\n");
                            }
                            
                        }
                        if ($magic_table == 5)
                        {
                            
                                $magic_table_g = rand(1,28);
                                
                                
                                print nl2br($loot_table_g[$magic_table_g] . "\n");
                            
                            
                        }
                        
                        
                        
                        
                    }
                    elseif ((int)$_POST["chal"] < 10)
                    {
                        
                        $d1 = rand(2,6);
                        $d2 = rand(2,6);
                        $gold_total = $d1 * $d2 * 1000;
                        
                        $d1_gem = rand(1,4);
                        $d2_gem = rand(2,6);
                        $gem_total = $d1_gem * $d2_gem;
                        
                        $gem_price = "50";
                        $magic_table = rand(1,7);
                        
                        /* Challenge rating 5-10, magic table a */
                        if ($magic_table == 1)
                        {
                            $amount = rand(1,6);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_a = rand(1,8);
                                
                                print nl2br($loot_table_a[$magic_table_a] . "\n");
                            }
                            
                            
                            
                        }
                        /* Challenge rating 5-10, magic table b */
                        if ($magic_table == 2)
                        {
                            
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_b = rand(1,35);
                            
                                print nl2br($loot_table_b[$magic_table_b] . "\n");
                            }
                            
                            
                            
                        }
                        /* Challenge rating 5-10, magic table c */
                        if ($magic_table == 3)
                        {
                            
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_c = rand(1,28);
                                
                                print nl2br($loot_table_c[$magic_table_c] . "\n");
                            }
                            
                        }
                        /* Challenge rating 5-10, magic table d */
                        if ($magic_table == 4)
                        {
                            $magic_table_d = rand(1,16);
                            
                            print nl2br($loot_table_d[$magic_table_d] . "\n");
                            
                        }
                        /* Challenge rating 5-10, magic table f */
                        if ($magic_table == 5)
                        {
                            
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_f = rand(1,60);
                                
                                print nl2br($loot_table_f[$magic_table_f] . "\n");
                            }
                            
                            
                        }
                        /* Challenge rating 5-10, magic table g */
                        if ($magic_table == 6)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_g = rand(1,94);
                                
                                print nl2br($loot_table_g[$magic_table_g] . "\n");
                            }
                            
                            
                        }
                        /* Challenge rating 5-10, magic table h */
                        if ($magic_table == 7)
                        {
                            $magic_table_h = rand(1,69);
                            
                            print nl2br($loot_table_h[$magic_table_h] . "\n");
                            
                            
                            
                        }
                    }
                    elseif ((int)$_POST["chal"] < 16)
                    {
                        
                        $d1 = rand(2,6);
                        $d2 = rand(2,6);
                        $gold_total = $d1 * $d2 * 1000;
                        
                        $d1_gem = rand(1,4);
                        $d2_gem = rand(2,6);
                        $gem_total = $d1_gem * $d2_gem;
                        
                        $gem_price = "250";
                        $magic_table = rand(1,7);
                        
                        if ($magic_table == 1)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_a = rand(1,8);
                                
                                print nl2br($loot_table_a[$magic_table_a] . "\n");
                            }
                            $amount_2 = rand(1,6);
                            for($q = 0; $q < $amount_2; $q++)
                            {
                                $magic_table_b = rand(1,35);
                            
                                print nl2br($loot_table_b[$magic_table_b] . "\n");
                            }
                            
                        }
                        if ($magic_table == 2)
                        {
                            $amount = rand(2,6);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_c = rand(1,28);
                                
                                print nl2br($loot_table_c[$magic_table_c] . "\n");
                            }
                            
                        }
                        if ($magic_table == 3)
                        {
                            $amount = rand(1,4);
                            
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_d = rand(1,16);
                                
                                print nl2br($loot_table_d[$magic_table_d] . "\n");
                            }
                        }
                        if ($magic_table == 4)
                        {
                            
                            $magic_table_e = rand(1,7);
                            
                            print nl2br($loot_table_e[$magic_table_e] . "\n");
                            
                            
                        }
                        if ($magic_table == 5)
                        {
                            $magic_table_f = rand(1,60);
                            
                            print nl2br($loot_table_f[$magic_table_f] . "\n");
                            
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_g = rand(1,94);
                                
                                print nl2br($loot_table_g[$magic_table_g] . "\n");
                            }
                            
                            
                        }
                        if ($magic_table == 6)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_h = rand(1,69);
                                
                                print nl2br($loot_table_h[$magic_table_h] . "\n");
                            }
                            
                        }
                        if ($magic_table == 7)
                        {
                            
                            $magic_table_i = rand(1,59);
                                
                            print nl2br($loot_table_i[$magic_table_i] . "\n");
                            
                        }
                        
                    }
                    elseif ((int)$_POST["chal"] > 17)
                    {
                        
                        $d1 = rand(8,12);
                        $d2 = rand(4,8);
                        $gold_total = $d1 * $d2 * 1000;
                        
                        $d1_gem = rand(1,3);
                        $d2_gem = rand(4,10);
                        $gem_total = $d1_gem * $d2_gem;
                        
                        $gem_price = "2500";
                        $magic_table = rand(1,6);
                        
                        if ($magic_table == 1)
                        {
                            $amount = rand(1,8);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_c = rand(1,28);
                                
                                print nl2br($loot_table_c[$magic_table_c] . "\n");
                            }
                            
                            
                        }
                        if ($magic_table == 2)
                        {
                            $amount = rand(1,6);
                            
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_d = rand(1,16);
                                
                                print nl2br($loot_table_d[$magic_table_d] . "\n");
                            }
                            
                            
                        }
                        if ($magic_table == 3)
                        {
                            $amount = rand(1,6);
                            
                            for($q = 0; $q < $amount; $q++)
                            {
                                
                                $magic_table_e = rand(1,7);
                                
                                print nl2br($loot_table_e[$magic_table_e] . "\n");
                            }
                            
                        }
                        if ($magic_table == 4)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_g = rand(1,94);
                                
                                print nl2br($loot_table_g[$magic_table_g] . "\n");
                            }
                            
                            
                        }
                        if ($magic_table == 5)
                        {
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_h = rand(1,69);
                                
                                print nl2br($loot_table_h[$magic_table_h] . "\n");
                            }
                            
                            
                        }
                        if ($magic_table == 6)
                        {
                            
                            $amount = rand(1,4);
                            for($q = 0; $q < $amount; $q++)
                            {
                                $magic_table_i = rand(1,59);
                                
                            print nl2br($loot_table_i[$magic_table_i] . "\n");
                            }
                            
                        }
                        
                        
                        
                    }
                    print nl2br("Gold:" . $gold_total . "\n");
                    print nl2br("Gems: " .$gem_total. ", " . $gem_price . " gold gems." . "\n");
                    
                }
                
                
                ?></p>
        
        </div>
    </body>
    
</html>