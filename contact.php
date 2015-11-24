<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
					
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
    Email: <input type="email" name="Email"/><br/>
    Comments:<textarea name="Comments"></textarea><br/>
<input type="submit" value="Send" name="submit"/>
</form>';
}
    ?>

   
   
    
                  
    <?php include 'includes/footer.php';?>


                    