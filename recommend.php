<?php 
//	require 'ifuser.php';
//	require 'connect.php';

		if($_POST!==NULL)
		{

//			foreach ($_POST['sub'] as $selectedOption)
   			// echo $selectedOption."\n";
		

			$have_clothe   =$_POST['clothe_have'];
            $want_clothe   =$_POST['clothe_want'];
            $patterntype   = $_POST['pattern'];
            $material      = $_POST['mate'];
			$background    = $_POST['background'];
			$maincolor     = $_POST['main'];
			$subcolor      = $_POST['sub'];
			$sleevlength   = $_POST['sleeve'];
			$bouttomlength = $_POST['bottom'];
            echo $background ;
		}
		else
		{
			header("location: account.php");
		}

//if($background != null)$count ++ ; 
//if($maincolor  != null)$count ++ ;
//if($subcolor   != null)$count ++ ; 
//


//for ($i = 1; $i <$count+1; $i++) {
//    if($i==1){
//    
//        if($background != null)
//            $background =$color_in ;
//        if($maincolor != null)$maincolor = $color_in ; 
//        if($subcolor != null)$subcolor = $color_in ; 
//    }
//    elseif($i ==2)$maincolor== $color_in ; 
//    elseif($I==3)$subcolor == $color_in ; 

    
    
//    ------------------------------------------ 
//        $bg_matching = array() ; 
//        $main_matching = array() ; 
//        $sub_matching = array() ; 
//    if($bg !=null){ $color_in_bg=$bg;
//                    bg_matching [1] = $color_in_bg+1; 
//                   if($color_in_bg ==1){bg_matching[2]=12 ;} 
//                   else{bg_matching [2] = $color_in_bg_1; }
//                     bg_matching [3] = $color_in_bg+6; 
//} //background color matching 
//    
// if($main != null){$maincolor_in= $main ; 
//                  main_matching[1] =$maincolor_in +1 ; 
//                  if($maincolor_in ==1) {main_matching[2]=12;}
//                   else main_matching[2] =$maincolor_in -1 ; 
//                   main_matching[3] =$maincolor_in +6 ; 
//                  }//main color matching 
//        if($sub != null){ 
//            $subcolor_in = $sub ;
//            sub_matching [1] = $subcolor_in+1; 
//           if($subcolor_in ==1){sub_matching[2]=12 ;} 
//           else{sub_matching [2] = $subcolor_in-1; }
//             sub_matching [3] = $subcolor_in+6; 
//            
//        }//sub color matching
//we have three input colors
//    $color_in_bg , $maincolor_in , $subcolor_in 
//    and an 3 arrays for each possible matching colors 
//where the third matching color is the complemantry and it's the must prefered color . 



//    ------------------------
//    if($i==1)$color_out =$bg_final_color ;
//    elseif ($i==2)$color_out =$main_final_color ;
//    elseif($i==3)$color_out =sub_final_color ;
//}

    ---------------------
        
    
//clothe
//i will have to variables $have_clothe and $want_clothe 
//
//if($have_clothe != null)&& ($have_clothe !="all")
//    {
//    $clothe = $have_clothe;
//    $clothe_matching = $want_clothe ; 
//} 
//elseif ($have_clothe == "shirt"){
//    $clothe_matching_1 == "trouser";  
//    $clothe_matching_2 == "skirt"; 
//    $clothe_matching_3 == "jacket";
//}
//elseif ($have_clothe == "tshirt"){
//    $clothe_matching_1 == "trouser";  
//    $clothe_matching_2 == "skirt"; 
//    $clothe_matching_3 == "jacket";
//}
//elseif ($have_clothe == "jacket"){
//    $clothe_matching_1 == "trouser";  
//    $clothe_matching_2 == "skirt"; 
//    $clothe_matching_3 == "jacket";
//    $clothe_matching_4 =="skirt";
//    $clothe_matching_5 =="dress" ;
//    
//}
//elseif ($have_clothe == "trouser"){
//    $clothe_matching_1 == "shirt";  
//    $clothe_matching_2 == "tshirt"; 
//    $clothe_matching_3 == "jacket";
//}
//elseif ($have_clothe == "skirt"){
//    $clothe_matching_1 == "shirt";  
//    $clothe_matching_2 == "tshirt"; 
//    $clothe_matching_3 == "jacket";
//}
//elseif ($have_clothe == "dress"){
//    $clothe_matching_1 == "jacket";
//}




    


    
////pattern
//
//if ($pattern == "floral"){
//    $pattern_matching_1 == "striped" ; 
//    $pattern_matching_2 == "floral" ; 
//    $pattern_matching_3 == "no_pattern" ; 
//    $pattern_matching_4 == "plaid" ; 
//    $pattern_matching_5 == "dot" ; }
//
//if ($pattern == "striped"){
//    $pattern_matching_1 == "dot";
//    $pattern_matching_2 == "floral";
//    $pattern_matching_3 == "striped";
//    $pattern_matching_4 == "plaid";
//    $pattern_matching_5 == "no_pattern";}
//
//if ($pattern == "dot"){
//    $pattern_matching_1 == "striped";
//    $pattern_matching_2 == "plaid";
//    $pattern_matching_3 == "no_pattern";
//    $pattern_matching_4 == "dot";}
//
//if ($pattern == "plaid"){
//    $pattern_matching_1 == "striped";
//    $pattern_matching_2 == "no_pattern";
//    $pattern_matching_3 == "dot";
//    $pattern_matching_4 == "plaid";
//    $pattern_matching_5 == "floral";}
//
//if ($pattern == "animal"){
//    $pattern_matching_1 == "animal";
//    $pattern_matching_2 == "no_pattern";
//    $pattern_matching_3 == "plaid";
//    $pattern_matching_4 == "striped";}
//
//if ($pattern == "no_pattern"){
//    $pattern_matching_1 == "floral";
//    $pattern_matching_2 == "striped";
//    $pattern_matching_3 == "dot";
//    $pattern_matching_4 == "plaid";
//    $pattern_matching_5 == "animal";
//    $pattern_matching_6 == "no_pattern";
//}
//
//
////accessorize
//while ($sex == "male"){
//    if ($outfit_type == "special_event"){
//        if ($clothe == "shirt") && ($clothe_matching == "trouser"){
//            $accessorize = "tie" ;
//            $accessorize_2 = "fancy_watch" ; 
//            $accessorize_3 = "fancy_belt" ; 
//            $accessorize_4 = "cufflinks" ;
//        }//    CLOTHE TYPE STATMENT 
//}//SPECIAL EVENTS 
//
//    else if ($outfit_type == "casual"){
//            $accessorize = "hat"
//            $accessorize_2 ="casual_watch" ; 
//            $accessorize_3 ="casual_belt" ;
//    }//CASUAL
//} //while end
//    else if ($outfit_type == "work"){
//            $accessorize = "men_bag" ; }//WORK
////TIE RULES 
//if ($accessorize == "tie")&&($pattern =="no pattern"){
//$tie_style_1 = "plaid" ; 
//$tie_style_2 = "striped" ; 
//$tie_style_3 = "dot" ; 
//$tie_color = bg_matching[3] ; 
//}
//elseif ($accessorize == "tie") && ($pattern != "no pattern"){ 
//$tie_style = "no_pattern" ; 
//$tie_color = main_matching[3] ; 
//
//}
//in matching ties we used the complementry color rules the saved in each color array with offset 3 
//        
    
    
//    
//while ($sex == "female"){
//   if ($outfit_type == "special_event")
//            $accessorize = "hijab" ;
//            $accessorize_2 = "fancy_bag" ; 
//            $accessorize_3 = "necklace" ; 
//
//    else if ($outfit_type == "casual")
//            $accessorize = "hijab"
//            $accessorize_2 ="w_casual_watch" ; 
//            $accessorize_3 ="w_casual_bag" ;
//
//
//    else if ($outfit_type == "work")
//            $accessorize = "hijab" ; 
//            $accessorize_2 = "w_casual_watch" ;
//            $accessorize_3 = "women_bag" ; 
//}
//
////mixing and matching things 
//
//$result = mysql_query("SELECT * FROM clothes WHERE BG='bg_matching[1]' , ", $connect);
//$_SESSION ['result'] = 
//$row = mysql_fetch_array($getit);
?>