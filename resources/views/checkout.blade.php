<head>

  <link rel="stylesheet" type="text/css" href="css/checkout.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="application/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" type="application/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  
      @include("layouts/head"); 

</head>

      @include("layouts/header"); 
<div class="container d-flex justify-content-center mt-5 mb-5">

            

            <div class="row g-3">

              <div class="col-md-6">  
                
                <span>Payment Method</span>
                <div class="card">

                  <div class="accordion" id="accordionExample">
                    
                    <div class="card">
                      <div class="card-header p-0" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="d-flex align-items-center justify-content-between">

                              <span>Paypal</span>
                              <img src="{{ asset('front/paypal.png') }}"  width="30"/>
                              
                            </div>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <input type="text" class="form-control" placeholder="Paypal email">
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header p-0">
                        <h2 class="mb-0">
                          <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex align-items-center justify-content-between">

                              <span>Credit card</span>
                              <div class="icons">
                                <img src="{{ asset('front/card1.png') }}"  width="30"/>
                                <img src="{{ asset('front/card2.png') }}"  width="30"/>
                                <img src="{{ asset('front/card3.png') }}"  width="30"/>
                                <img src="{{ asset('front/card4.png') }}"  width="30"/>
                              </div>
                              
                            </div>
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body payment-card-body">
                          
                          <span class="font-weight-normal card-text">Card Number</span>
                          <div class="input">

                            <i class="fa fa-credit-card"></i>
                            <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                            
                          </div> 

                          <div class="row mt-3 mb-3">

                            <div class="col-md-6">

                              <span class="font-weight-normal card-text">Expiry Date</span>
                              <div class="input">

                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control" placeholder="MM/YY">
                                
                              </div> 
                              
                            </div>


                            <div class="col-md-6">

                              <span class="font-weight-normal card-text">CVC/CVV</span>
                              <div class="input">

                                <i class="fa fa-lock"></i>
                                <input type="text" class="form-control" placeholder="000">
                                
                              </div> 
                              
                            </div>
                            

                          </div>

                          <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                         
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>

              </div>
              <div class="col-md-6">
              <form method="post" action="{{ route('make.payment') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <span>Summary</span>

                  <div class="card">

                    <div class="d-flex justify-content-between p-3">

                      <div class="d-flex flex-column">

                        <span>Total 
                        
                        
                      </div>

                      <div class="mt-1">
                        <input type="hidden" name="amount" value="{{$user['price']}}">
                        <sup class="super-price"><b>{{$user['price']}}$</b></sup>
                      </div>
                      
                    </div>

                    <hr class="mt-0 line">

                    <div class="p-3">

                      <div class="d-flex justify-content-between mb-2">
                        <input type="hidden" name="plan" value="{{$user['plan']}}">
                        <span>Selected plan</span>
                        <span>{{$user['plan']}}</span>
                        
                      </div>
                      

                    </div>

                    <hr class="mt-0 line">


                    <div class="p-3 d-flex justify-content-between">

                      <div class="d-flex flex-column">

                        <span>Details</span>
                        <small>{{$user['details']}}</small>
                        
                      </div>
                      

                      

                    </div>
                    <div class="p-3 d-flex justify-content-between">

                      <div class="d-flex flex-column">
                        
                        <span>upload files(old resume,profile image if you want to include) etc.</span>
                        <input type="file" name="documents[]" class="form-control">
                        
                      </div>
                      

                      

                    </div>
                    <div class="p-3 d-flex justify-content-between">

                      <div class="d-flex flex-column">

                        <span>Summary(if any)</span>
                        <textarea name="summary" cols="100" rows="4" style="width: 100%;" class="form-control"></textarea>
                        
                        
                      </div>
                      

                      

                    </div>


                    <div class="p-3">

                    <button class="btn btn-primary btn-block free-button">Pay Now</button> 
                   <div class="text-center">
                     <!-- <a href="#">Have a promo code?</a> -->
                   </div>
                      
                    </div>



                    
                  </div>
              </form>
              </div>
            </div>
            

          </div>
          @include("layouts/footer"); 