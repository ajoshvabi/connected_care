<head>
    <link href="<?php echo base_url();?>payment\style.css" rel="stylesheet" type="text/css" media="all" />
    
   
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="heading text-center">PAYMENT</h2>
                    </div>
                </div>
                <form class="form-card" action="<?php echo base_url();?>Hospital/addpayment" method="post">
                    <div class="row justify-content-center mb-3 radio-group">
                    
                        <div class="col-sm-3 col-5">
                            <div class='radio selected mx-auto' data-value="dk"> <img class="fit-image" src="https://i.imgur.com/5TqiRQV.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="visa"> <img class="fit-image" src="https://i.imgur.com/OdxcctP.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="master"> <img class="fit-image" src="https://i.imgur.com/WIAP9Ku.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="paypal"> <img class="fit-image" src="https://i.imgur.com/cMk1MtK.jpg" width="105px" height="55px"> </div>
                        </div> <br>
                    </div>
                    <!-- <div class="row justify-content-center form-group">
                        <div class="col-12 px-auto">
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true"> <label for="customRadioInline1" class="custom-control-label label-radio">Private</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline2" type="radio" name="customRadioInline1" class="custom-control-input"> <label for="customRadioInline2" class="custom-control-label label-radio">Business</label> </div>
                        </div>
                    </div> -->
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> 
                            <input type="hidden" name="did" value="<?php echo $did;?>">
                            <input type="hidden" name="salary" value="<?php echo $salary;?>">

                            <input type="text" name="name" placeholder="Name"> <label>Name</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text"  name="cardno" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16"> <label>Card Number</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5"> <label>Expiry Date</label> </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group"> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12"> <input type="submit" value="Pay" class="btn btn-pay placeicon"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>payment\js.js"></script>
