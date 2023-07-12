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
                                                <div class="card-title text-start text-dark">Rate This Transaction</div>
                                                <div class="mb-3">
                                                    <div class="chat-widget-header d-flex" style="margin-top: 0px;">
                                                    <div class=" d-flex">
                                                        <div class="float-left text-left">
                                                            <small>Order No</small> 
                                                            <h6>2023070200001</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex">
                                                            <div class="float-right text-right">
                                                                    <small>Seller</small>
                                                                    <h5>AndJemz Crypto</h5>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="font-weight-bold d-flex text-center">
                                                            <div class="rating-stars block" id="rating-5" data-stars="2"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="font-weight-bold d-flex text-center">
                                                            <input type="text" name="comment" id="comment" class="form-control" placeholder="Additional Comment">
                                                    </div>
                                                </div>
                                                



                                        </div>
                                    </div>
                                    
                                    </div>
                                    

                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-block btn-success" style="margin-top: 20px;">Submit Rating</button>
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