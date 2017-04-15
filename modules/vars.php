<?php
$currentUpdateVersion='0.01 Foxy';
$domainName=$_SERVER['HTTP_HOST'];
$adminName="root";
$adminPassword="PASSWORD";
$secureLogin=false;
$salt='$6$rounds=5000$2a07fKFNGBoDjWAfb1jV5rnd-cPSuqbPDMM6jHvYpeTUKf';
$token=generateToken();

function buildUrl($input)
{
	echo "http://$_SERVER[HTTP_HOST]$input";
}
function buildConnection($input)
{
	try
	{
		$con=new PDO("mysql:host=localhost;dbname=$input",$GLOBALS['adminName'],$GLOBALS['adminPassword']);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $con;
	}
	catch(PDOException $ex){echo $ex->getMessage();}
}
function buildQuery($database,$input)
{
	try
	{
		$con=buildConnection($database);
		$stm=$con->prepare($input);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_BOTH);
	}
	catch(PDOException $ex){echo $ex->getMessage();}
}
function buildQueryBind($database,$input,$data)
{
	try
	{
		$con=buildConnection($database);
		$stm=$con->prepare($input);
		$stm->execute($data);
		return $stm->fetch(PDO::FETCH_BOTH);
	}
	catch(PDOException $ex){echo $ex->getMessage();}
}
function buildQueryBindNoFetch($database,$input,$data)
{
	try
	{
		$con=buildConnection($database);
		$stm=$con->prepare($input);
		$stm->execute($data);
	}
	catch(PDOException $ex){echo $ex->getMessage();}
}
function buildEncryption($input,$salt)
{
	return trim(crypt($input,$salt),'$6$rounds=5000$');
}
function generateToken()
{
	return buildEncryption(uniqid(mt_rand(),true),$GLOBALS['salt']);
}
function buildQueryBindNoDatabaseOrFetch($input,$data)
{
	try
	{
		$con=new PDO("mysql:host=localhost;",$GLOBALS['adminName'],$GLOBALS['adminPassword']);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stm=$con->prepare($input);
		$stm->execute($data);
	}
	catch(PDOException $ex){echo $ex->getMessage();}
}
?>
