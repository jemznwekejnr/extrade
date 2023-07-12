@include('layouts.app-title')
@include('layouts.app-header')
@include('layouts.main-sidebar')
<div class="app-content main-content">
        <div class="side-app">
            <div class="container-fluid main-container">
                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <h4 class="page-title">P2P Market Place</h4>
                    </div>
                    <div class="page-rightheader ms-auto d-lg-flex d-none">
                        <div class="ms-5 mb-0">
                            <!--<a class="btn btn-white date-range-btn" href="javascript:void(0)" id="daterange-btn">
                                <svg class="header-icon2 me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <path d="M5 8h14V6H5z" opacity=".3"/><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"/>
                                    </svg> <span>Select Date
                                    <i class="fa fa-caret-down"></i></span>
                            </a>-->
                        </div>
                    </div>
                </div>
                <!--End Page header-->
                <div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="panel panel-primary w-100">
                           <!-- <div class="tab-menu-heading crypto-tabs">
                                <div class="tabs-menu1">
                                    !-- Tabs --
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab5" class="active" data-bs-toggle="tab">By Fiat</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="">By Crypto</a></li>
                                    </ul>
                                </div>
                            </div>-->
                            <div class="card panel-body tabs-menu-body br-tl-0 border-top-0 p-6 w-100 shadow2 crypto-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="mb-0 border">
                                            <div class="card-body">
                                                <div class="card-title text-start text-dark">Order Crated</div>
                                                <div class="mb-3">
                                                    <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Pay the seller within</small> 
                                                            <h6>11:45</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Seller's Contact</small>
                                                                    <h6>08136003441</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C; text-align: center;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="input-group">
                                                        <img src="{{ asset('assets/images/crypto-currencies/round-icons/icons8-check-20.png') }}"> <small>This seller's crypto is being held in the escrow account.</small>
                                                    </div>
                                                    <div class="input-group">
                                                        <img src="{{ asset('assets/images/crypto-currencies/round-icons/icons8-check-20.png') }}"> <small>Our 24/7 customer support is available to resolve your issues.</small>
                                                    </div>
                                                    <div class="input-group">
                                                        <img src="{{ asset('assets/images/crypto-currencies/round-icons/icons8-check-20.png') }}"> <small>Contact the seller first before making payment.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning" style="margin-top: 20px;">
                                        <small><b>ATTENTION ! </b>We only support real name verified bank payment methods.</small>
                                    </div>
                                    <div class="alert alert-info">
                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <h5 style="margin-top: 20px;">Buy BTC </h5> 
                                                    
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <small>Fiat Amount</small> 
                                                    
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex">
                                                    <div class="float-right text-right">
                                                            <h4> &#8358; 7,000,000.00 </h4>
                                                        </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <small>Rate</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex">
                                                    <div class="float-right text-right">
                                                            
                                                            <h6> &#8358; 789.00 </h6>
                                                        </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <small>Crypto Amount</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex">
                                                    <div class="float-right text-right">
                                                            <h6> 0.0003452 BTC</h6>
                                                        </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <small>Order No</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex">
                                                    <div class="float-right text-right">
                                                            <h6> 2023082400001</h6>
                                                        </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <h5 style="margin-top: 0px;">Terms</h5> 
                                                    
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <p style="margin-top: 0px;">Seller's terms will show here</p> 
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-info">
                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <h5 style="margin-top: 20px;">Payment Info </h5> 
                                                    
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>

                                    

                                    <div class="mb-3">
                                            <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                            <div class=" d-flex">
                                                <div class="float-left text-left">
                                                    <small class="alert alert-warning">Use this <i>Order No</i> as the payment description.</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-danger">Cancel Order</button> <button type="submit" class="btn btn-success">Make Payment</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
        </div>
    </div>
    <!-- end app-content-->
</div>
@include('layouts.app-footer')