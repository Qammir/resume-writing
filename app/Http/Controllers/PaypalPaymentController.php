<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;
use App\Mail\Order as MailOrder;
use App\Models\OrderDocument;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Facades\Mail;


class PaypalPaymentController extends Controller

{
/**
 * Responds with a welcome message with instructions
 *
 * @return \Illuminate\Http\Response
 */

public function payment(Request $request)
{
	
	$order 					= new Order();
	$order->email 			= $request->email;
	$order->plan 			= $request->plan;
	$order->price 			= $request->amount;
	$order->summary 		= $request->description;
	$order->save();

	if($request->documents){
		foreach ($request->documents as $key => $document) {

		 $fileName = time().'.'.$document->extension();  
   
         $uploaded  = $document->move(public_path('uploads'), $fileName);
         if($uploaded){
         	$orderDocument            = new OrderDocument();
         	$orderDocument->order_id  = $order->id; 
         	$orderDocument->document  = $fileName; 
         	$orderDocument->save();
         }
		}
	}

	 $data = [];
	 $data['items'] = [
		[
			'name' 	=> $request->paypal_email,
			'price' => $request->amount,
			'desc' 	=> 'DESCRIPTION : '.$request->description,
			'qty' 	=> 1
		]
	];

	 $data['invoice_id'] 			= rand();
	 $data['invoice_description'] 	= "Order #{$data['invoice_id']} Invoice";
	 $data['return_url'] 			= route('payment.success');
	 $data['cancel_url'] 			= route('payment.cancel');
	 $data['total'] 				= $request->amount;

	 $provider 				= new ExpressCheckout();
	 $response 				= $provider->setExpressCheckout($data);
	 $response 				= $provider->setExpressCheckout($data, true);

	 $payment 		  		= new Payment();
	 $payment->order_id  	= $order->id;
	 $payment->user_email   = $request->paypal_email;
 	 $payment->token 		= $response['TOKEN'];
	 $payment->approval_url = $response['paypal_link'];
	 $payment->save();

	 return redirect($response['paypal_link']);

}

/**
 * Responds with a welcome message with instructions
 *
 * @return \Illuminate\Http\Response
 */

public function cancel()
{
 dd('Your payment is canceled. You can create cancel page here.');
}

/**
 * Responds with a welcome message with instructions
 *
 * @return \Illuminate\Http\Response
 */

public function success(Request $request)
{

 $provider = new ExpressCheckout();
 $response = $provider->getExpressCheckoutDetails($request->token);
  
   $payment 				= Payment::where('token',$response['TOKEN'])->first();
   $payment->payer_id 		= $response['PAYERID'];
   $payment->total 			= $response['AMT'];
   $payment->currency 		= env('PAYPAL_CURRENCY','USD');
   $payment->status 	    = $response['ACK'];
  
   $payment->save();

	if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
		
		Mail::to('qammar.khan1125@gmail.com')->send(new MailOrder($payment->email));	
		Mail::to('arslan.rana.201659@gmail.com')->send(new MailOrder($payment->email));	
		Mail::to('aneesahmad7257@gmail.com')->send(new MailOrder($payment->email));	
			
 		return view('success');
	}

 		dd('Something is wrong.');
	}
}