<?php include 'includes/config.php';?>

<?php

if(isset($_GET['day']))

{//show the selected day

    
   $myDay = $_GET['day'];
}

else
{//show today

    $myDay = date('l');
    
}
//die;
//$myDay = date('l');



switch($myDay)



{
    case 'Monday':
    $myPic= "burger1.jpg";
    $myColor="#4A44FF";
    $myDescription = "Monday's Special Burger is awesome!";
   break;
   
	 case 'Tuesday':
    $myPic= "burger2.jpg";
    $myColor="#FF264F";
    $myDescription = "Tuesday's Special Burger is even awesomer!";
	   break;
	   
	 case 'Wednesday':
    $myPic= "burger3.jpg";
    $myColor="#B651FF";
    $myDescription = "Wednesday's Special Burger is more more awesome!";
	   break;
	   
	 case 'Thursday':
    $myPic= "burger4.jpg";
    $myColor="#CD29FF";
    $myDescription = "Thursday's Special Burger is even more awesomer!";
	   break;
	   
	 case 'Friday':
    $myPic= "burger5.jpg";
    $myColor="#FF27A8";
    $myDescription = "Friday's special burger isn't as awesome but it's still good!";
	   break;
	   
	 case 'Saturday':
    $myPic= "burger6.jpg";
    $myColor="#44C3FF";
    $myDescription = "Saturday's special burger is the most awesome we promise!";
	   break;
	   
	 case 'Sunday':
    $myPic= "burger7.jpg";
    $myColor="#FF4620";
    $myDescription = "Sunday's special burger is even more awesome than Saturday's";
	   break;
	

 

}

// ' . xxx . '
?>
<?php include 'includes/header.php';?>
	    
				
<img src="images/<?php echo $myPic ;?>" alt="A burger for every day of the week" id="burger" />
 <p></p><strong class="feature"><?php echo $myDay; ?>'s Burger Special:</strong> <?php echo $myDescription; ?></strong></p>

  <p> <a href="daily.php?day=Sunday">Sunday</a></p>  
<p> <a href="daily.php?day=Monday">Monday</a></p>  
<p> <a href="daily.php?day=Tuesday">Tuesday</a></p>  
<p> <a href="daily.php?day=Wednesday">Wednesday</a></p>  
<p> <a href="daily.php?day=Thursday">Thursday</a></p>  
<p> <a href="daily.php?day=Friday">Friday</a></p>  
<p> <a href="daily.php?day=Saturday">Saturday</a></p>  
					
   
    
                  
    <?php include 'includes/footer.php';?>


                    