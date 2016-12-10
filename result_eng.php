<?php 
session_start(); 
//	require 'ifuser.php';
	require 'connect.php';

		if($_POST!==NULL)
		{

//			foreach ($_POST['sub'] as $selectedOption)
   			// echo $selectedOption."\n";
		

			$have_clothe   =$_POST['clothe_have'];
            $want_clothe   =$_POST['clothe_want'];
            $pattern   = $_POST['pattern'];
            $material      = $_POST['mate'];
			$background    = $_POST['background'];
			$maincolor     = $_POST['main'];
			$subcolor      = $_POST['sub'];
			$sleevlength   = $_POST['sleeve'];
			$bouttomlength = $_POST['bottom'];
            $sex = $_POST['sex'] ;
            echo $background ;
            echo $have_clothe ; 
            echo $want_clothe ; 
            echo $pattern ; 
            echo $sex;
		}
		else
		{
			header("location: account.php");
		}

        $bg_matching = array() ; 
        $main_matching = array() ; 
        $sub_matching = array() ; 
    if($background !=null){ $color_in_bg=$background;
                    $bg_matching [1] = $color_in_bg+1; 
                   if($color_in_bg ==1){$bg_matching[2]=12 ;} 
                   else{$bg_matching [2] = $color_in_bg_1; }
                     $bg_matching [3] = $color_in_bg+6; 
} //background color matching 
if($maincolor != null){$maincolor_in= $maincolor ; 
                  $main_matching[1] =$maincolor_in +1 ; 
                  if($maincolor_in ==1) {$main_matching[2]=12;}
                   else $main_matching[2] =$maincolor_in -1 ; 
                   $main_matching[3] =$maincolor_in +6 ; 
                  }//main color matching 
        if($subcolor != null){ 
            $subcolor_in = $subcolor ;
            $sub_matching [1] = $subcolor_in+1; 
           if($subcolor_in ==1){$sub_matching[2]=12 ;} 
           else{$sub_matching [2] = $subcolor_in-1; }
             $sub_matching [3] = $subcolor_in+6; 
            
        }//sub color matching
    
//echo $bg_matching[1] , $main_matching[2] , $sub_matching[3] ; testing 

//we have three input colors
//    $color_in_bg , $maincolor_in , $subcolor_in 
//    and an 3 arrays for each possible matching colors 
//where the third matching color is the complemantry and it's the must prefered color 

//clothe
//i will have to variables $have_clothe and $want_clothe 
//
if($have_clothe != null && $want_clothe !="all")
    {
    
    $clothe_matching = $want_clothe ; 
} 
elseif ($have_clothe == "shirt"){
    $clothe_matching_1 = "trouser";  
    $clothe_matching_2 = "skirt"; 
    $clothe_matching_3 = "jacket";
}
elseif ($have_clothe == "tshirt"){
    $clothe_matching_1 = "trouser";  
    $clothe_matching_2 = "skirt"; 
    $clothe_matching_3 = "jacket";
}
elseif ($have_clothe == "jacket"){
    $clothe_matching_1 = "trouser";  
    $clothe_matching_2 = "skirt"; 
    $clothe_matching_3 = "jacket";
    $clothe_matching_4 ="skirt";
    $clothe_matching_5 ="dress" ;
    
}
elseif ($have_clothe == "trouser"){
    $clothe_matching_1 = "shirt";  
    $clothe_matching_2 = "tshirt"; 
    $clothe_matching_3 = "jacket";
}
elseif ($have_clothe == "skirt"){
    $clothe_matching_1 = "shirt";  
    $clothe_matching_2 = "tshirt"; 
    $clothe_matching_3 = "jacket";
}
elseif ($have_clothe == "dress"){
    $clothe_matching_1 = "jacket";
}


echo $clothe , $clothe_matching , $clothe_matching_1 ;

//pattern

if ($pattern == "floral"){
    $pattern_matching_1 = "striped" ; 
    $pattern_matching_2 = "floral" ; 
    $pattern_matching_3 = "no_pattern" ; 
    $pattern_matching_4 = "plaid" ; 
    $pattern_matching_5 = "dot" ; }

elseif ($pattern == "striped"){
    $pattern_matching_1 = "dot";
    $pattern_matching_2 = "floral";
    $pattern_matching_3 = "striped";
    $pattern_matching_4 = "plaid";
    $pattern_matching_5 = "no_pattern";}

elseif ($pattern == "dot"){
    $pattern_matching_1 = "striped";
    $pattern_matching_2 = "plaid";
    $pattern_matching_3 = "no_pattern";
    $pattern_matching_4 = "dot";}

elseif ($pattern == "plaid"){
    $pattern_matching_1 = "striped";
    $pattern_matching_2 = "no_pattern";
    $pattern_matching_3 = "dot";
    $pattern_matching_4 = "plaid";
    $pattern_matching_5 = "floral";}

elseif ($pattern == "animal"){
    $pattern_matching_1 = "animal";
    $pattern_matching_2 = "no_pattern";
    $pattern_matching_3 = "plaid";
    $pattern_matching_4 = "striped";}

elseif ($pattern == "no_pattern"){
    $pattern_matching_1 = "floral";
    $pattern_matching_2 = "striped";
    $pattern_matching_3 = "dot";
    $pattern_matching_4 = "plaid";
    $pattern_matching_5 = "animal";
    $pattern_matching_6 = "no_pattern";
}

echo $pattern_matching_1 , $pattern_matching_2 , $pattern_matching_4 ; 

//accessorize
if ($sex == "male"){
    if ($outfit_type == "special_event"){
        if ($have_clothe == "shirt"){
            $accessorize = "tie" ;
            $accessorize_2 = "fancy_watch" ; 
            $accessorize_3 = "fancy_belt" ; 
            $accessorize_4 = "cufflinks" ;
        }//    CLOTHE TYPE STATMENT 
}//SPECIAL EVENTS 

    elseif ($outfit_type == "casual"){
            $accessorize = "hat";
            $accessorize_2 ="casual_watch" ; 
            $accessorize_3 ="casual_belt" ;
    }//CASUAL
    elseif ($outfit_type == "work"){
            $accessorize = "men_bag" ; }//WORK
////TIE RULES 
if ($accessorize == "tie" && $pattern =="no_pattern"){
$tie_style_1 = "plaid" ; 
$tie_style_2 = "striped" ; 
$tie_style_3 = "dot" ; 
$tie_color = $bg_matching[3] ; 
}
elseif ($accessorize == "tie" && $pattern != "no_pattern"){ 
$tie_style = "no_pattern" ; 
$tie_color = $main_matching[3] ; 

}
} //while end
//
////in matching ties we used the complementry color rules the saved in each color array with offset 3 
////        
//    
//    
//    
if ($sex == "female"){
   if ($outfit_type == "special_event"){
            $accessorize = "hijab" ;
            $accessorize_2 = "fancy_bag" ; 
            $accessorize_3 = "necklace" ; 
   }

    elseif ($outfit_type == "casual"){
            $accessorize = "hijab";
            $accessorize_2 ="w_casual_watch" ; 
            $accessorize_3 ="w_casual_bag" ;
    }


    elseif ($outfit_type == "work"){
            $accessorize = "hijab" ; 
            $accessorize_2 = "w_casual_watch" ;
            $accessorize_3 = "women_bag" ; 
    }
    if ($accessorize == "hijab" && $pattern =="no_pattern"){
$hijab_style_1 = "plaid" ; 
$hijab_style_2 = "striped" ; 
$hijab_style_3 = "dot" ; 
$hijab_color = $bg_matching[3] ; 
}
elseif ($accessorize == "hijab" && $pattern != "no_pattern"){ 
$hijab_style = "no_pattern" ; 
$hijab_color = $main_matching[3] ; 

}
    
}//while end 

$result = mysql_query("SELECT 'file' FROM clothes WHERE BG=$bg_matching[1]  ,main=$main_matching[1] , type = $clothe_matching ,pattern=$pattern_matching_1 ", $connect);

$result_2 = mysql_query("SELECT 'file' from clothes where BG=$bg_matching[2] ,main=$main_matching[2] , type = $clothe_matching_2 ,pattern=$pattern_matching_2 ", $connect ) ; 

$result_3 = mysql_query("SELECT 'file' from clothes where BG=$bg_matching[3] ,main=$main_matching[3] , type = $clothe_matching_3 ,pattern=$pattern_matching_3 ", $connect ) ;

$result_4 = mysql_query("SELECT 'file' from clothes where BG=$bg_matching[2] ,main=$main_matching[2] , type = $clothe_matching_2 ,pattern=$pattern_matching_2 ", $connect ) ; 
$row =  
echo $row ; 

$ff = '<img src="images/si1.jpg">'; 

$_SESSION ['result'] = $result ; 
$_SESSION ['img'] = $ff ; 
