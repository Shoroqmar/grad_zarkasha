<?php 
if ($color_in == "navy")
    $color_out == "oraneg" ; 
if ($color_in == "navy")
    $color_out == "purple" ; 
if ($color_in == "navy") 
    $color_out == "blue" ; 

if ($color_in == "blue")
    $color_out == "dark_orange" ; 
if ($color_in == "blue")
    $color_out == "cyan" ;  
if ($color_in == "blue")
    $color_out == "navy" ; 

if ($color_in == "cyan")
    $color_out == "orange_red" ; 
if ($color_in == "cyan")
    $color_out == "green" ; 
if ($color_in == "cyan")
    $color_out == "blue" ; 

if ($color_in == "green")
    $color_out == "red" ; 
if ($color_in == "green")
    $color_out == "light_green" ;
if ($color_in == "green")
    $color_out == "cyan" ; 

if ($color_in == "light_green")
    $color_out == "crimson" ; 
if ($color_in == "light_green")
    $color_out == "yellow" ; 
if ($color_in == "light_green")
    $color_out == "green" ; 

if ($color_in == "yellow")
    $color_out == "purple" ; 
if ($color_in == "yellow")
    $color_out == "light_orange" ; 
if ($color_in == "yellow")
    $color_out == "light_green" ;

if ($color_in == "orange")
    $color_out == "navy" ; 
if ($color_in == "orange")
    $color_out == "dark_orange"  ; 
if ($color_in == "orange")
    $color_out == "yellow" ; 

if ($color_in == "dark_orange")
    $color_out == "blue" ; 
if ($color_in == "dark_orange")
    $color_out == "orange_red" ; 
if ($color_in == "dark_orange")
    $color_out == "orange" ; 

if ($color_in == "orange_red")
    $color_out == "cyan" ; 
if ($color_in == "orange_red")
    $color_out == "red" ; 
if ($color_in == "orange_red")
    $color_out == "dark_orange" ; 

if ($color_in == "red")
    $color_out == "green";  
if ($color_in == "red")
    $color_out == "crimson";  
if ($color_in == "red")
    $color_out == "orange_red";  

if ($color_in == "crimson")
    $color_out == "light_green";  
if ($color_in == "crimson")
    $color_out == "purple";
if ($color_in == "crimson")
    $color_out == "red";

if ($color_in == "purple")
    $color_out == "yellow";
if ($color_in == "purple")
    $color_out == "navy";
if ($color_in == "purple")
    $color_out == "crimson";
//clothe

if ($clothe == "shirt")
    $clothe_matching == "touser";  
if ($clothe == "shirt")
    $clothe_matching == "skirt";  
if ($clothe == "shirt")
    $clothe_matching == "jacket";

if ($clothe == "tshirt")
    $clothe_matching == "trouser";  
if ($clothe == "tshirt")
    $clothe_matching == "skirt";  
if ($clothe == "tshirt")
    $clothe_matching == "jacket"; 

if ($clothe == "jacket")
    $clothe_matching == "shirt";
if ($clothe == "jacket")
    $clothe_matching == "tshirt";
if ($clothe == "jacket")
    $clothe_matching == "trouser";
if ($clothe == "jacket")
    $clothe_matching == "skirt";
if ($clothe == "jacket")
    $clothe_matching == "dress";

if ($clothe == "trouser")
    $clothe_matching == "shirt";
if ($clothe == "trouser")
    $clothe_matching == "tshirt";
if ($clothe == "trouser")
    $clothe_matching == "jacket";

if ($clothe == "skirt")
    $clothe_matching == "jacket";
if ($clothe == "skirt")
    $clothe_matching == "shirt";
if ($clothe == "skirt")
    $clothe_matching == "tshirt";

if ($clothe == "dress")
    $clothe_matching == "jacket";
    
//pattern

if ($pattern == "floral")
    $pattern_matching == "striped" ; 
if ($pattern == "floral")
    $pattern_matching == "floral" ; 
if ($pattern == "floral")
    $pattern_matching == "no_pattern" ; 
if ($pattern == "floral")
    $pattern_matching == "plaid" ; 
if ($pattern == "floral")
    $pattern_matching == "dot" ; 

if ($pattern == "striped")
    $pattern_matching == "dot";
if ($pattern == "striped")
    $pattern_matching == "floral";
if ($pattern == "striped")
    $pattern_matching == "striped";
if ($pattern == "striped")
    $pattern_matching == "plaid";
if ($pattern == "striped")
    $pattern_matching == "no_pattern";

if ($pattern == "dot")
    $pattern_matching == "striped";
if ($pattern == "dot")
    $pattern_matching == "plaid";
if ($pattern == "dot")
    $pattern_matching == "no_pattern";
if ($pattern == "dot")
    $pattern_matching == "dot";

if ($pattern == "plaid")
    $pattern_matching == "striped";
if ($pattern == "plaid")
    $pattern_matching == "no_pattern";
if ($pattern == "plaid")
    $pattern_matching == "dot";
if ($pattern == "plaid")
    $pattern_matching == "plaid";
if ($pattern == "plaid")
    $pattern_matching == "floral";

if ($pattern == "animal")
    $pattern_matching == "animal";
if ($pattern == "animal")
    $pattern_matching == "no_pattern";
if ($pattern == "animal")
    $pattern_matching == "plaid";
if ($pattern == "animal")
    $pattern_matching == "striped";

if ($pattern == "no_pattern")
    $pattern_matching == "floral";
if ($pattern == "no_pattern")
    $pattern_matching == "striped";
if ($pattern == "no_pattern")
    $pattern_matching == "dot";
if ($pattern == "no_pattern")
    $pattern_matching == "plaid";
if ($pattern == "no_pattern")
    $pattern_matching == "animal";
if ($pattern == "no_pattern")
    $pattern_matching == "no_pattern";


//accessorize
while ($sex == "male")
    if ($outfit_type == "special_event")
        if ($clothe == "shirt") && ($clothe_matching == "trouser")
            $accessorize = "tie" ;
            $accessorize_2 = "fancy_watch" ; 
            $accessorize_3 = "fancy_belt" ; 
            $accessorize_4 = "cufflinks" ;

    else if ($outfit_type == "casual")
            $accessorize = "hat"
            $accessorize_2 ="casual_watch" ; 
            $accessorize_3 ="casual_belt" ;

    else if ($outfit_type == "work")
            $accessorize = "men_bag" ; 
    
    
    
while ($sex == "female")
   if ($outfit_type == "special_event")
            $accessorize = "hijab" ;
            $accessorize_2 = "fancy_bag" ; 
            $accessorize_3 = "necklace" ; 

    else if ($outfit_type == "casual")
            $accessorize = "hijab"
            $accessorize_2 ="w_casual_watch" ; 
            $accessorize_3 ="w_casual_bag" ;


    else if ($outfit_type == "work")
            $accessorize = "hijab" ; 
            $accessorize_2 = "w_casual_watch" ;
            $accessorize_3 = "women_bag" ; 

//mixing and matching things 
if ()
            