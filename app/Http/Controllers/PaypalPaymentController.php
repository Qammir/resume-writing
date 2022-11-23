<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalPaymentController extends Controller

{
/**
 * Responds with a welcome message with instructions
 *
 * @return \Illuminate\Http\Response
 */

public function payment()
{
 $data = [];
 $data['items'] = [
[
'name' => 'codesolutionstuff.com',
'price' => 100,
'desc' => 'Description for codesolutionstuff.com',
'qty' => 1
]
];

 $data['invoice_id'] = 1;
 $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
 $data['return_url'] = route('payment.success');
 $data['cancel_url'] = route('payment.cancel');
 $data['total'] = 100;

 $provider = new ExpressCheckout();
 $response = $provider->setExpressCheckout($data);
 dd($response);
 $response = $provider->setExpressCheckout($data, true);
return redirect($response['paypal_link']);
dd($response);
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

if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
 dd('Your payment was successfully. You can create success page here.');
}

 dd('Something is wrong.');
}
}