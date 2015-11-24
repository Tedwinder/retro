<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h2>2015 Thanksgiving Feast!</h2>
<p> This year we are inviting a select group of customers to our Thanksgiving Party.  To ensure we save a spot for you, please fill out the form below!</p>
 <? if(isset($_POST['submit']))
{//data submitted


//echo '<pre>';

//echo '</pre>';

    $to = 'ecallo01@seattlecentral.edu';
    $message = process_post();
    $replyTo = $_POST['Email'];
    $subject = 'Test from contact form';
    
    $response = safeEmail($to, $subject, $message, $replyTo='','html');
    
}else{//show form

echo '

<form method="post" action="'. THIS_PAGE . '">

Name: <input type="text" name="Name" required="required" /> <br/>
    
Email: <input type="email" name="Email" required="required"/><br/>

<tr>
			</br><td align="right">Would You Like To Reserve a Spot in our Turkey Burger Thanksgiving Feast?</td>
			<td></br>
				<input type="radio" name="Join_Feast?" value="Yes" /> Yes <br />
				<input type="radio" name="Join_Feast?" value="No" /> No <br />
			</td>
		</tr>
<tr><td align="right">What Feast Would You Like to Pre-Order?:</td></br>
			<td>
				<input type="checkbox" name="Interested_In[]" value="Vegan Turkey Burger Feast" /> Vegan Turkey Burger Feast <br />
				<input type="checkbox" name="Interested_In[]" value="Gluten Free Turkey Burger Feast" /> Gluten Free Turkey Burger Feast <br />
				<input type="checkbox" name="Interested_In[]" value="All Beef Turkey Burger Feast" /> All Beef Turkey Burger Feast <br />
				
			</td>
		</tr>

</br>
Comments:<textarea name="Comments"></textarea><br/>
<input type="submit" value="Send" name="submit"/>
</form>';
}
    ?>

   
   
    
                  
    <?php include 'includes/footer.php';?>


                    