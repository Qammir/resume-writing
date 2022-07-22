<?php
 

 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Facades\DB;
 use Auth;

class PayPalPaymentController extends Controller

{

public function handlePayment(Request $request)

{

$product['items'] = [

[
'name' => $request['name'],

'price' => $request['amount'],

'desc'  => $request['summary'],

'qty' => 1

]

];

 

$product['invoice_id'] = Auth::user()->id;

$product['invoice_description'] ="Order #{$product['invoice_id']} Bill";

$product['return_url'] = route('success.payment');

$product['cancel_url'] = route('cancel.payment');

$product['total'] = 1;

 

$paypalModule = new ExpressCheckout;

 

$res = $paypalModule->setExpressCheckout($product);
$res = $paypalModule->setExpressCheckout($product, true);


 

return redirect($res['paypal_link']);

}

 

public function paymentCancel()

{

dd('Your payment has been declend. The payment cancelation page goes here!');

}

 

public function paymentSuccess(Request $request)

{

$paypalModule = new ExpressCheckout;

$response = $paypalModule->getExpressCheckoutDetails($request->token);

 

if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

$getId = DB::table('orders')->insert([
    'user_id' => Auth::user()->id,
    'name' => $request['name'],
    'price' => $request['amount'],
    'summary' => $request['amount']
]);
$documents = $request['documents'];
    foreach ($documents as $key => $doc) 
    {
        if ($doc->hasFile('documents')){
         $file = $request->file('documents');
         $extension = $file->getClientOriginalExtension(); // you can also use file name
         $fileName = time().'.'.$extension;
         $path = public_path().'/order-documents';
         $uplaod = $file->move($path,$fileName);
         $data['document'] = $fileName;

        DB::table('order_documents')->insert([
        'order_id' => $getId->id;,
        'document' => $data['document']
        ]);
       }
    }
dd('Payment was successfull. The payment success page goes here!');

}

 

dd('Error occured!');

}

}


