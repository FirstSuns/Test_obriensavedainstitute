<?php
require_once('Stripe/init.php');

\Stripe\Stripe::setApiKey('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');

header('Content-Type: application/json');

$token = $_POST['id'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$error = false;


$Stripe = new \Stripe\StripeClient("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");
\Stripe\Stripe::setVerifySslCerts(false);

if ($token !== "") {
    $error = false;

	try{
    		$CreateCharge = $Stripe->charges->create(array([
      		'amount' => $amount*100,
		      'description' => $description,
      		'currency' => 'usd',
      		'source' => $token
    		])
		);

	} catch(\Stripe\Error\Card $e) {
		  echo "Card Error !! ".$e->getMessage();
	} catch (\Stripe\Error\InvalidRequest $e) {
  		echo "Invalid parameters were supplied to Stripe's API !! ".$e->getMessage();
	} catch (\Stripe\Error\Authentication $e) {
  		echo "Authentication with Stripe's API failed !! ".$e->getMessage();
	} catch (\Stripe\Error\ApiConnection $e) {
  		echo "Network communication with Stripe failed !! ".$e->getMessage();
	} catch (\Stripe\Error\Base $e) {
  		echo "Error occurred !! ".$e->getMessage();
	} catch (Exception $e) {
  		echo "Error occurred !! ".$e->getMessage();
	}
  if (!$CreateCharge->paid) {
    $error = true;
    echo "Error occurred. Not paid";
  }

  // echo "<pre>";
  // print_r($CreateCharge);
  // var_dump($CreateCharge);

  if ($error = false) {
	   try{
	      $ChargeID = $CreateCharge->id;

	      $CaptureCharge = $Stripe->charges->capture(
      		  $ChargeID,[],['api_key' =>'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']
    	         );
	       } catch (Exception $e) {
             echo "Error occurred !! ".$e->getMessage();
         }
    }
}
