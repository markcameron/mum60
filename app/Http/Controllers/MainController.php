<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\Charge;

class MainController extends Controller {

  public function index() {
    return view('index');
  }

  /**
   * Execute the stripe payment
   *
   * @param request
   *
   * @return
   */
  public function payStripe(Request $request) {
    Stripe::setApiKey(config('services.stripe.secret'));

    $customer = Customer::create(array(
      'email' => $request->email,
      'source'  => $request->stripeToken,
    ));

    $charge = Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $request->amount,
      'currency' => 'chf'
    ));

    return response()->json('OK');
  }

}
