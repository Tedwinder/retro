<?php
//config.php

//database credentials here
include 'credentials.php';

//echo DB_USER;
//die;

//echo basename($_SERVER['PHP_SELF']);
// This defines the current file name
define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
    



switch(THIS_PAGE)
{

    case "index.php":
            $title = "HOME";
            $pageID= "TEMPLATE HOME PAGE";
            $mylogo= "burger8.jpg";
        $heros= '';
        $planets = '';
            break;
        
         case "daily.php":
            $title = "DAILY";
            $pageID= "DAILY PREVIEW";
           $mylogo= "burger9.jpg";
        $heros= '';
        $planets = '';
            break;
        
            case "about.php":
            $title = "ABOUT";
            $pageID= "ABOUT US";
           $mylogo= "burger10.jpg";
$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';
        
        $planets[] = '
<p><img src="images/mercury.gif" style="float:left; margin:0 10px 10px 0" />Mercury concerns communication and short-distance travel. Language, words, speech.</p>
<p>
Through the position of Mercury in your horoscope you can see the areas that will be of most interest to you and stimulate your mental energies.</p>
';

$planets[] = '
<p><img src="images/venus.gif" style="float:left; margin:0 10px 10px 0" />Venus is the planet of love, beauty, art, aesthetics, value, fairness, socializing and relationships.</p>
<p>
The planet Venus astrologically represents the desire to bring together things that compliment each other. There is a strong need to create harmony and balance in the environment and in relationships.</p>
';

$planets[] = '
<p><img src="images/mars.gif" style="float:left; margin:0 10px 10px 0" />Mars represents how we assert ourselves in the world. The warrior archetype. anger, sexuality, war, sports.</p>
</p>
<p>
Through the position of Mars in your horoscope you can see what best motivates someone to go after what they want in life. An understanding of this desire can help you to be the instinctive master of your life.
</p>
';

$planets[] = '
<p><img src="images/jupiter.gif" style="float:left; margin:0 10px 10px 0" />Jupiter is the planet of expansion. International travel. Faith belief, the religious impulse. Higher education. Law, philosophy, ethics.
</p>
<p>
The position of Jupiter in your horoscope chart describes how you grow and evolve in the relative area of your life. The house position of Jupiter represents your desire and your search for meaning in your life.
</p>
';

$planets[] = '
<p><img src="images/saturn.gif" style="float:left; margin:0 10px 10px 0" />Saturn is the planet of restriction. Boundaries, tests, limitations. Manifestation. Hard work, responsibility.
</p>
<p>
The key is knowing how to work with the transits and cycles of Saturn because we do feel the the effects of it for a while since it is in a sign for about 2 1/2 years at a time.</p>
<p>
It completes its first trip around the zodiac by the age of thirty and its second just before the age of sixty. This marks the beginnings of middle and old age. Understanding the transits of Saturn provides a sense of self awareness this is of benefit here.
</p>
';

$planets[] = '
<p><img src="images/uranus.gif" style="float:left; margin:0 10px 10px 0" />Uranus is the planet of disruption, liberation, sudden changes. Revolution Technology.
</p>
<p>
In general all Uranus ruled changes have several things in common: 
They strike like lightning. They tend to turn a person\'s world upside down. They are frequently beyond the control of the person involved.</p>
<p>
The changes are radical and cannot as a rule be reversed e.g. personal achievement, status in society -- public honour or notoriety; accidents; impersonal relationships.
</p>
';

$planets[] = '
<p><img src="images/neptune.gif" style="float:left; margin:0 10px 10px 0" />This is the planet of transcendence. Illusion, delusion, image, spirituality, mysticism.
</p>
<p>
As the planet Neptune continually moves around the zodiac it passes over different areas in your personal birth chart. Since it is such a slow moving planet it will impact you for long periods of time.</p>
<p>
As an area is touched by Neptune it is best to know how that is affecting you. If it is a creative, inspirational impact then it is best to make use of it. On other hand it may point to times when you have to be more careful in your due diligence when it comes to both work and home life.
</p>
';

$planets[] = '
<p><img src="images/pluto.gif" style="float:left; margin:0 10px 10px 0" />Pluto is the planet of death and rebirth. The underworld. Taboos. Eroticism and Shadow. Healing and regeneration.</p>
<p>
The zodiac sign positions of Pluto are considered to possess great historical significance. Fundamental upheavals and drastic transformations in areas of human life and civilization are expected when Pluto travels through the different signs. Pluto passing through each zodiac sign is always considered to produce a change of a permanent nature.</p>
';
        
            break;
        
         case "contact.php":
            $title = "CONTACT";
            $pageID= "CONTACT US";
           $mylogo= "burger11.jpg";
        $heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';
        
        $planets[] = '
<p><img src="images/mercury.gif" style="float:left; margin:0 10px 10px 0" />Mercury concerns communication and short-distance travel. Language, words, speech.</p>
<p>
Through the position of Mercury in your horoscope you can see the areas that will be of most interest to you and stimulate your mental energies.</p>
';

$planets[] = '
<p><img src="images/venus.gif" style="float:left; margin:0 10px 10px 0" />Venus is the planet of love, beauty, art, aesthetics, value, fairness, socializing and relationships.</p>
<p>
The planet Venus astrologically represents the desire to bring together things that compliment each other. There is a strong need to create harmony and balance in the environment and in relationships.</p>
';

$planets[] = '
<p><img src="images/mars.gif" style="float:left; margin:0 10px 10px 0" />Mars represents how we assert ourselves in the world. The warrior archetype. anger, sexuality, war, sports.</p>
</p>
<p>
Through the position of Mars in your horoscope you can see what best motivates someone to go after what they want in life. An understanding of this desire can help you to be the instinctive master of your life.
</p>
';

$planets[] = '
<p><img src="images/jupiter.gif" style="float:left; margin:0 10px 10px 0" />Jupiter is the planet of expansion. International travel. Faith belief, the religious impulse. Higher education. Law, philosophy, ethics.
</p>
<p>
The position of Jupiter in your horoscope chart describes how you grow and evolve in the relative area of your life. The house position of Jupiter represents your desire and your search for meaning in your life.
</p>
';

$planets[] = '
<p><img src="images/saturn.gif" style="float:left; margin:0 10px 10px 0" />Saturn is the planet of restriction. Boundaries, tests, limitations. Manifestation. Hard work, responsibility.
</p>
<p>
The key is knowing how to work with the transits and cycles of Saturn because we do feel the the effects of it for a while since it is in a sign for about 2 1/2 years at a time.</p>
<p>
It completes its first trip around the zodiac by the age of thirty and its second just before the age of sixty. This marks the beginnings of middle and old age. Understanding the transits of Saturn provides a sense of self awareness this is of benefit here.
</p>
';

$planets[] = '
<p><img src="images/uranus.gif" style="float:left; margin:0 10px 10px 0" />Uranus is the planet of disruption, liberation, sudden changes. Revolution Technology.
</p>
<p>
In general all Uranus ruled changes have several things in common: 
They strike like lightning. They tend to turn a person\'s world upside down. They are frequently beyond the control of the person involved.</p>
<p>
The changes are radical and cannot as a rule be reversed e.g. personal achievement, status in society -- public honour or notoriety; accidents; impersonal relationships.
</p>
';

$planets[] = '
<p><img src="images/neptune.gif" style="float:left; margin:0 10px 10px 0" />This is the planet of transcendence. Illusion, delusion, image, spirituality, mysticism.
</p>
<p>
As the planet Neptune continually moves around the zodiac it passes over different areas in your personal birth chart. Since it is such a slow moving planet it will impact you for long periods of time.</p>
<p>
As an area is touched by Neptune it is best to know how that is affecting you. If it is a creative, inspirational impact then it is best to make use of it. On other hand it may point to times when you have to be more careful in your due diligence when it comes to both work and home life.
</p>
';

$planets[] = '
<p><img src="images/pluto.gif" style="float:left; margin:0 10px 10px 0" />Pluto is the planet of death and rebirth. The underworld. Taboos. Eroticism and Shadow. Healing and regeneration.</p>
<p>
The zodiac sign positions of Pluto are considered to possess great historical significance. Fundamental upheavals and drastic transformations in areas of human life and civilization are expected when Pluto travels through the different signs. Pluto passing through each zodiac sign is always considered to produce a change of a permanent nature.</p>
';
            break;

    case "data1.php":
            $title = "Our first data page";
            $pageID= "CUSTOMER DATA";
            $mylogo= "burger8.jpg";
        $heros= '';
        $planets = '';
            break;
            
 case "thanksgiving.php":
            $title = "THANKSGIVING";
            $pageID= "THANKSGIVING FEAST!!";
           $mylogo= "turkey.jpg";
        $heros= '';
        $planets = '';
            break;

    default:
            $title = THIS_PAGE;
            $pageID = "Retro Diner";
             $mylogo= '';
             $heros= '';
                $planets = '';
         break;
       

} 


//echo $title;


$nav1['index.php'] = 'Home';
$nav1['about.php'] = 'About';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';
$nav1['data1.php'] = 'Customer Data';
$nav1['thanksgiving.php'] = 'Thanksgiving Feast';
$nav1['africa.php'] = 'Management Africa Trip';


//foreach($nav1 as $link => $label)
//{
  //  echo "link is $link and label is $label<br/>";

//}

//die;
/*creates links inside the header.php*/


//<li><a href="LINK">LABEL</a></li>
    //<li

function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
    $myReturn = '';
    foreach($arr as $link => $label)
    {
       
        
        if(THIS_PAGE == $link)
        {//current file gets active class
               $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
  
        }else{
        
         $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
  
     }   
    }
        return $myReturn;
        
}//end makeLinks

/*
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
		*/	

/*
Allows us to send an email that respects the server domain spoofing polices of 
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo='','html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}

*/
function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
    
    if($replyTo !=''){
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    $headers = implode(PHP_EOL,$headers);

    
    return mail($to, $subject, $message, $headers);

}//end safeEmail()

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 

function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}
    function rotate ($arr)
{//rotate function is called in the right sidebar - an example of rotation (on day of month)
	if(is_array($arr))
	{//Generate item in array using date and modulus of count of the array
		return $arr[((int)date("j")) % count($arr)];
	}else{
		return $arr;
	}
}#end randomize()
