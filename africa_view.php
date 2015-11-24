//africa_view.php
//displays the photo corresponding to the list africa.php

<?php include 'includes/config.php';?>

<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:africa.php');
    
}

$sql = "select * from Africa where PicID = $id";  

//we connect to the db here

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);


if(mysqli_num_rows($result) > 0)
{//show records

    
      while ($row = mysqli_fetch_assoc($result))

     {

          $Pic = stripslashes($row['Pic']);
          $Location = stripslashes($row['Location']);
          $Description = stripslashes($row['Description']);
          $title = "Picture" . $Pic . $row;
          $pageID = $title;
        
     }     
    
}

else
  //inform no records  
{
    $Feedback = '<p> We cannot retrieve the picture requested at this time</p>';

}



?>





<?php include 'includes/header.php';?>
					
    
    
<h1><?=$pageID?></h1>
<?php
 
    if($Feedback == '')
{//data exists

echo '<p>';

          echo '<p>';
		echo '<img src="uploads/' . $Pic . $id . '.jpg">';
        echo 'Location: <b>' . $Location . '</b> ';
        echo 'Description: <b>' . $Description . '</b> ';

        
        /*
        
        echo '<p>';

        echo 'FirstName: <b>' . $FirstName . '</b> ';
        echo 'LastName: <b>' . $LastName . '</b> ';
        echo 'Email: <b>' . $Email . '</b> ';
        
        */
        
}else
{//warn user no data

echo $Feedback;

}



     

   

  echo '<p><a href="africa.php">Go Back</a></p>';
    


//release web server resources 
@mysqli_free_result($result);
//close connection to mysql
mysqli_close($iConn);


    ?>
    
                  
    <?php include 'includes/footer.php';?>


                    