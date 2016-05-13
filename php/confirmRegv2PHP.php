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







	
	
//build in quesry
$query = "insert into `customer`(name,uname,pword,email)"."values('$name','$uname','$pword',$email')";
	
	
	
//run query
$result = mysqli_query($dbc, $query) or die('DB write error: '.mysqli_error($dbc));

//closedir
mysqli_close($dbc);

?>