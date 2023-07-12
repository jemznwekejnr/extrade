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
                            <div class="tab-menu-heading crypto-tabs">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab5" class="active" data-bs-toggle="tab">Buy BTC</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="">Sell BTC</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card panel-body tabs-menu-body br-tl-0 border-top-0 p-6 w-100 shadow2 crypto-content">
                                <div class="tab-content">
                                    <div class="text-right float-right" style="margin-bottom: 20px;">
                                    <button class="btn btn-default btn-sm" type="button"><span><img src="{{ asset('assets/images/crypto-currencies/round-outline/Bitcoin.svg') }}" class="w-5 h-5 me-2" alt=""></span> BTC</button>
                                    <button class="btn btn-default btn-sm" type="button"><span><img src="{{ asset('assets/images/crypto-currencies/round-icons/Tether.svg') }}" class="w-5 h-5 me-2" alt=""></span> USDT</button>
                                    <button class="btn btn-default btn-sm" type="button"><span><img src="{{ asset('assets/images/crypto-currencies/round-icons/Ethereum.svg') }}" class="w-5 h-5 me-2" alt=""></span> ETH</button>
                                    <button class="btn btn-default btn-sm" type="button"><span><img src="{{ asset('assets/images/crypto-currencies/round-icons/Naira.svg') }}" class="w-5 h-5 me-2" alt=""></span> NGN</button>
                                    </div>
                                    <div class="tab-pane active" id="tab5">
                                        <div class="mb-0 border">
                                            <div class="card-body text-center">
                                                <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">

                                    
                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-success btn-sm" type="button">Buy</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-success btn-sm" type="button">Buy</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-success btn-sm" type="button">Buy</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-success btn-sm" type="button">Buy</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->
                                    
                                </div>
                            </div>
                        </div>
                                                <!--<div class="card-title text-start text-dark">Buy Crypto Coins</div>
                                                <div class="mb-3">
                                                    <label class="form-label float-start">Enter Your Money</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" Value="10,000">
                                                        <div class="br-tl-0 br-bl-0">
                                                            <select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
                                                                    <optgroup label="Currecy">
                                                                        <option value="USD">USD</option>
                                                                        <option value="EUR">EUR</option>
                                                                        <option value="INR">INR</option>
                                                                        <option value="GBP">GBP</option>
                                                                        <option value="JPY">JPY</option>
                                                                        <option value="RUB">RUB</option>
                                                                    </optgroup>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label float-start">Your Crypto Coins Converted to</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" Value="0.254">
                                                        <div class="br-tl-0 br-bl-0">
                                                            <select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
                                                                    <optgroup label="Coins">
                                                                        <option value="BTC">BTC</option>
                                                                        <option value="ETH">ETH</option>
                                                                        <option value="DAH">DAH</option>
                                                                        <option value="RIP">RIP</option>
                                                                        <option value="ITA">ITA</option>
                                                                        <option value="EOS">EOS</option>
                                                                    </optgroup>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-block btn-secondary" href="javascript:void(0)">Buy Coins</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="mb-0 border">
                                            <div class="card-body text-center">
                                                <div class="row">
                                                <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-danger btn-sm" type="button">Sell</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-danger btn-sm" type="button">Sell</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-danger btn-sm" type="button">Sell</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->

                                    <!-- col -->
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="chat-widget-header d-flex p-5" style="margin-bottom: -60px;">
                                                    <div class="font-weight-bold d-flex">
                                                            <div class="avatat avatar-md brround me-2" style="border-radius: 500px; background-color: #FFAC1C;">M</div>
                                                            <div class="mt-1 d-sm-block" style="text-align: left; padding-top: 10px;">
                                                                <h5 class="font-weight-semibold mb-0">Margarette Wycoff</h5>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Rate</small>
                                                                    <h4>&#8358;759.00</h4>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -40px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Cryto Amount</small> 
                                                            <h6> 587.89 USDT</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Limit</small>
                                                                    <h6>&#8358;50,000.00 - &#8358;100,000.00</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-widget-header d-flex p-5" style="margin-top: -30px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>895 Trades | 89%</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <a href="#" class="btn btn-danger btn-sm" type="button">Sell</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /col -->
                                </div>
                                                <!--<div class="card-title text-start text-dark">Sell Crypto Coins</div>
                                                <div class="mb-3">
                                                    <label class="form-label float-start">Enter Crypto Coin</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" Value="0.254">
                                                        <div class="br-tl-0 br-bl-0">
                                                            <select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
                                                                    <optgroup label="Coins">
                                                                        <option value="BTC">BTC</option>
                                                                        <option value="ETH">ETH</option>
                                                                        <option value="DAH">DAH</option>
                                                                        <option value="RIP">RIP</option>
                                                                        <option value="ITA">ITA</option>
                                                                        <option value="EOS">EOS</option>
                                                                    </optgroup>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label float-start">Your Money Converted to</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" Value="10,000">
                                                        <div class="br-tl-0 br-bl-0">
                                                            <select class="form-control select2 br-0 br-tl-0 br-bl-0 nice-select" data-placeholder="Choose one (with optgroup)">
                                                                    <optgroup label="Currecy">
                                                                        <option value="USD">USD</option>
                                                                        <option value="EUR">EUR</option>
                                                                        <option value="INR">INR</option>
                                                                        <option value="GBP">GBP</option>
                                                                        <option value="JPY">JPY</option>
                                                                        <option value="RUB">RUB</option>
                                                                    </optgroup>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-block btn-primary" href="javascript:void(0)">Sell Coins</a>-->
                                            </div>
                                        </div>
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