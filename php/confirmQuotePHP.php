<?php

//set default time zone

date_default_timezone_set('MST');


//ss validation variables
$rub = '_';
$perc = '%';
$work = '';
$bslash = '\\'; //we want one backslash but its dumb code so you need two for 1
$fslash = '/';
$chars = '_%';
$dash = '-';


//name
$oname = $_POST['name'];

//move html value into work variables
$work = $oname; //we want their name as they entered it AND we want a copy of their name that works in SQL Db 

//server side validation: /\ _ % 
if (strpos($work, $rub) > -1 || 
	strpos($work, $perc) > -1 ||
	strpos($work, $bslash) > -1 ||
	strpos($work, $fslash) > -1)
	{
		//string position fx, send it stuff we want to validate, will return -1 if fails
		header("location: SSVAL.php?work=$work&field=NAME");
		exit;
		
		
	}	
	
	//ss val : length
	
	if (strlen($work) < 2 || strlen($work) > 30)
	{
		header("location: SSVAL.php?work=$work&field=NAME");
		exit;
	}
	
	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	
	
	//escape the cahrs real escape misses ADD TO NAMES
	$work = addcslashes($work, $chars);	
	
	
	//entry should be ok, so store
	$name = $work;
	
	$work = "";
	
//**** ** *** COMPANY
$work = $_POST['company']; 

if ($work != "")
{
	//server side validation: /\ _ % 
	if (strpos($work, $perc) > -1 ||
		strpos($work, $rub) > -1 ||
		strpos($work, $bslash) > -1 ||
		strpos($work, $fslash) > -1)
		{
			//string position fx, send it stuff we want to validate, will return -1 if fails
			header("location: SSVAL.php?work=$work&field=COMPANY");
			exit;
			
			
		}	
	
	//ss val : length
	
	if (strlen($work) < 1 || strlen($work) > 30)
		{
			header("location: SSVAL.php?work=$work&field=COMPANY");
			exit;
		}
		
		
		
}


	
	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	//escape characters real_whatervers
	$work = addcslashes($work, $chars);
	
	//entry should be ok, so store
	$company = $work;
	
	


//email
 //not copied

 $work = $_POST['email']; //this the issue
 
 
 
if (strpos($work, $perc) > -1 ||
	strpos($work, $bslash) > -1 || 
	strpos($work, $fslash) > -1)
	{
		header("Location: ssval.php?&work=$work&field=EMAIL1");
		exit;
		
	}	
	
	if (strlen($work) < 6 || strlen($work) > 50)
	{
		header("Location: ssval.php?&work=$work&field=EMAIL2"); //tthis where variable goes
		exit; 
		
	}
	
	//escape entry
	$work = mysqli_real_escape_string($dbc, $work);
	
	//escape chacarters real escape string missees
	 
	$work = addcslashes($work, $chars);
	
	
	//verify email with PHP
	if (filter_var($work, FILTER_VALIDATE_EMAIL) === false)
	{
		header("LOcation: ssval.php?&work=$work&field=EMAIL");
		exit;
		
	}
	
	
	
	
	
	
	
	//entry ok store in db 
	$email = $work;
	
	
	
	
//****************** phone
$phone = '';

$work = $_POST['phone'];

if (strpos($work, $perc) > -1 ||
	strpos($work, $rub) > -1 ||
	strpos($work, $bslash) > -1 ||
	strpos($work, $fslash) > -1)
	{
		
		header("location: SSVAL.php?work=$work&field=PHONE");
		exit;
		
		
	}	
	
	//checks if the string is numerals ONLY
if (ctype_digit($work) == false)
	{
		header("location: SSVAL.php?work=$work&field=PHONEINT");
		exit;
	
	}

if (strlen($work) != 10)
	{
		header("location: SSVAL.php?work=$work&field=PHONELNGTH");
		exit;	
		
	}

	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	//escape characters real_whatervers
	$work = addcslashes($work, $chars);

//store	
$phone = $work;


//***************************** UNAME


$work = $_POST['uname']; 

if ($work != "")
{
	//if it isn't blank, we want to check it 
	//server side validation: /\ _ % 
	if (strpos($work, $perc) > -1 ||
		strpos($work, $bslash) > -1 ||
		strpos($work, $fslash) > -1)
		{
			//string position fx, send it stuff we want to validate, will return -1 if fails
			header("location: SSVAL.php?work=$work&field=USERNAME");
			exit;
			
			
		}	
	
	//ss val : length
	
	if (strlen($work) < 4 || strlen($work) > 15)
	{
		header("location: SSVAL.php?work=$work&field=USERNAME");
		exit;
	}
	
}


	
	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	//escape characters real_whatervers
	$work = addcslashes($work, $chars);
	
	//entry should be ok, so store
	$uname = $work;






//****************** date 
	$work = $_POST['date']; //this the issue
	
	if ($work != "")
	{
		if (strpos($work, $perc) > -1 ||
		strpos($work, $rub) > -1 ||
		strpos($work, $bslash) > -1 ||
		strpos($work, $fslash) > -1)
			{
				
				header("location: SSVAL.php?work=$work&field=DATE");
				exit;
				
				
			}	
	
		//checks if the string is numerals ONLY
		if (strpos($work, $dash) == false)
			{
				header("location: SSVAL.php?work=$work&field=DATENUMERALS");
				exit;
			
			}
				
		
		
	}
	else
	{
		
		$work = "19911017";
	}
	
	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	//escape characters real_whatervers
	$work = addcslashes($work, $chars);
	
	//entry should be ok, so store
	$date = $work;
	
	
	
//****************** rush, was probation
	//intizlidb variable
	$rush = '';
	
	//post input from html and check value if set
	if (isset($_POST['rush']))
	{
		$work = $_POST['rush'];
		if ($work == 'yes')
		{
			$rush = $work;
		}
		else
		{
			header("Location: ssval.php?&work=$work&field=RUSH");
			exit;
			
		}
	}
	
	
	
//****************** purpose          <copied from above
	//intizlidb variable
	$purpose = '';
	
	//post input from html and check value if set
	if (isset($_POST['purpose']))
	{
		$work = $_POST['purpose'];
		if ($work == 'commercial' || $work == 'personal')
		{
			$purpose = $work;
		}
		else
		{
			header("Location: ssval.php?&work=$work&field=PURPOSE");
			exit;
			
		}
	}
	
	
//****************** EVENT was beers
	//post input from HTML
	$work = $_POST['event'];
	
	//check value, we allow lower vase values only
	for ($i = 0; $i < strlen($work); $i++)
	{
		if(ord($work[$i] > 90) && ord($work[$i] < 150)) //ACSII 
		{
			header("Location: ssval.php?&work=$work&field=EVENT");
			exit;
			
		}
	}
	$event = $work; 
	
	
//****************** comments commied from name
$work = $_POST['comments'];

//server side validation: /\ _ % 
if (strpos($work, $bslash) > -1 ||
	strpos($work, $fslash) > -1)
	{
		//string position fx, send it stuff we want to validate, will return -1 if fails
		header("location: SSVAL.php?work=$work&field=COMMENTS");
		exit;
		
		
	}	
	
	//ss val : length
	
	if (strlen($work) > 500)
	{
		header("location: SSVAL.php?work=$work&field=COMMENTS");
		exit;
	}
	
	//escape entry 
	$work = mysqli_real_escape_string($dbc, $work);
	
	
	//escape the cahrs real escape misses ADD TO NAMES
	$work = addcslashes($work, $chars);	
	
	
	
	//entry should be ok, so store
	$comments = $work;
	
	
//build in quesry
$query = "insert into quote(name,company,uname,email,phone,date,rush,purpose,event,comments)".
	"values('$name','$company','$uname','$email','$phone','$date','$rush','$purpose','$event','$comments')";
	
	
	
//run query
$result = mysqli_query($dbc, $query) or die('DB write error: '.mysqli_error($dbc));

//closedir
mysqli_close($dbc);

?>