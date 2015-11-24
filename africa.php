
//africa.php
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

					
    
    
<h1><?=$pageID?></h1>
<p> To celebrate our first year of profitability, the entire management team decided to travel to Africa for 2 months.  Below are the photos we took in Egypt.  We felt it was a great incentive to be profitable again in the coming year, and all board members voted in favor of the trip. </p>
   
<?php
    
  
    
$sql = "select * from Africa";  

//we connect to the db here

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);


if(mysqli_num_rows($result) > 0)
{//show records

    
      while ($row = mysqli_fetch_assoc($result))

     {

        echo '<div id="list"> <p>';
		//echo '<img src="uploads/' . $row['Pic'] . $row['PicID'] . '.jpg">';
        echo 'Location: <b>' . $row['Location'] . '</b> ';
        echo 'Photo: '; 

        echo '<a href="africa_view.php?id=' . $row['PicID'] . '">' . $row['Pic'] . $row['PicID'] . '</a>';  
          //echo '<img src="uploads/' . $row['Pic'] . $row['PicID'] . '.jpg">';
        echo '</p> </div>';


     }   

    
    
}

else
  //inform no records  
{echo '<div> No result returned</div>';

}

//release web server resources 
@mysqli_free_result($result);
//close connection to mysql
mysqli_close($iConn);


    ?>
    
                  
    <?php include 'includes/footer.php';?>


                    