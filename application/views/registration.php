<!--breadcrumbs end-->
<main class="main-wrapper">


    <section class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pdl">
                    <div class="tab-wrapper row">
                        <!--container start-->
                        <div class="registration-bg">
                            <div class="advertise_div col-md-4">
                                <div class="inner-item">
                                    <a href="#">
                                        <img class="center-block img-responsive"  src="<?php echo base_url().'comp/img/300x250.gif' ?>" alt="" >
                                    </a>
                                </div>


                            </div>

                            <div class="container col-md-4">
                                <?php
                                if (!empty($error)) {
                                    showErrorMessage($error);
                                } else {
                                    if ($this->session->flashdata('success')) {
                                        showSuccessMessage();
                                    }
                                }
                                ?>

                                <?php if(!empty($this->session->flashdata('msg'))){
                                    echo $this->session->flashdata('msg');
                                }?>

                                <form class="form-signin wow fadeInUp" action="<?php echo base_url('home/registration'); ?>" method="post" enctype="multipart/form-data">


                                    <div class="login-wrap">

                                        <div class="form-group mb-10">
                                            <a href="<?php echo base_url('home/newaccount/fb');?>" class="btn btn-small btn-block btn-fb"><i class="pull-cnter fa fa-facebook"></i>&nbsp &nbsp Facebook Login</a>
                                            <h5 class="text-center">or</h5>
                                            <a href="<?php echo base_url('home/newaccount/google_plus');?>" class="btn btn-filled btn-danger btn-block"><i class="fa fa-google-plus"></i> &nbsp; Login with Google</a>
                                            <h5 class="text-center">or</h5>
                                            <div class="hr-text">
                                                <hr>
                                            </div>
                                        </div>

                                        <div  class="form-group">
                                            <p>Select  Your Profession First </p>
                                            <select required="required" name="profession" class="form-control">
                                                <option value="">Select  Your Profession</option>
                                                <option value="8">Physician</option>
                                                <option value="1">Attorney</option>
                                                <option value="2">Chiropractor</option>
                                                <option value="3">Dentist</option>
                                                <option value="4">Optometrist</option>
                                                <option value="5">Osteopathist</option>
                                                <option value="6">Ph.D</option>
                                                <option value="7">Pharmacist</option>
                                                <option value="9">Podiatrist</option>
                                                <option value="11">Veterinarian</option>
                                                <option value="10">POI</option>
                                                <option value="12">Publisher</option>
                                                <option value="13">Advertiser</option>

                                            </select>
                                        </div>
                                        <div class="form-group mb-10">
                                            <input required=""  type="text" name="first_name" class="form-control" placeholder="First Name" autofocus="">
                                        </div>
                                        <div class="form-group mb-10">
                                            <input  required="" type="text" name="last_name" class="form-control" placeholder="Last Name" autofocus="">
                                        </div>
                                        <div class="form-group mb-10">
                                            <input required  type="email" name="email" class="form-control" placeholder="Your E-mail" autofocus="">
                                        </div>


                                        <div class="form-group mb-10">
                                            <input required="" type="text" name="user_name" class="form-control" placeholder="User Name" autofocus="">
                                        </div>

                                        <div class="form-group mb-10">
                                            <input  required="" type="password" name="password" class="form-control" placeholder="Password" autofocus="">
                                        </div>

                                        <div class="form-group mb-10">

                                            <input   required type="password" name="conf" class="form-control" placeholder="Confirm Password" autofocus="">
                                        </div>

                                         <div  class="form-group">
                                            <select required="required" id="country" name="country"  class="form-control">
                                              <option data-name="" value=""><?php echo 'Select  Your Country';?></option>
                                            <?php foreach (get_all_locations_by_type('country')->result() as $row) {
                                                $sel = ($row->id==set_value('country'))?'selected="selected"':'';
                                                ?>
                                                <option data-name="<?php echo $row->name;?>" value="<?php echo $row->id;?>" <?php echo $sel;?>><?php echo $row->name;?></option>
                                            <?php }?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                                <select name="state" id="state" class="form-control">
                                                    
                                                </select>
                                        </div>

                                        <div class="form-group mb-10">
                                            <?php $v = (set_value('zipcode')!='')?set_value('zipcode'):'';?>
                                            <input  required type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zip Code" value="<?php echo $v;?>">
                                        </div>

                                        <div class="form-group mb-10">

                                            <?php $v = (set_value('address')!='')?set_value('address'):'';?>
                                            <input id="address" type="text" name="address" placeholder="<?php echo 'address';?>" value="<?php echo $v;?>" class="form-control">
                                            <?php echo form_error('address');?>
                                        </div>

                                        <div class="form-group mb-10">
                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="codeAddress()"><i class="fa fa-map-marker"></i> <?php echo 'view on map';?></a>
                                        </div>

                                        <div class="form-group mb-10">
                                            <div id="form-map"></div>
                                        </div>

                                        <div class="form-group mb-10">
                                            <?php $v = (set_value('latitude')!='')?set_value('latitude'):'';?>
                                            <input id="latitude" type="text" name="latitude" placeholder="<?php echo 'latitude';?>" value="<?php echo $v;?>" class="form-control">
                                        </div>

                                        <div class="form-group mb-10">
                                             <?php $v = (set_value('longitude')!='')?set_value('longitude'):'';?>
                                                <input id="longitude" type="text" name="longitude" placeholder="<?php 'longitude';?>" value="<?php echo $v;?>" class="form-control">
                                        </div>


                               </div>



                                        <!-- <div class="form-group mb-10">
                                        <div required="" class="g-recaptcha" data-sitekey="6LciozgUAAAAABs4Yxkpqgqq7JGayumkDLG10LBV" autofocus=""></div>
                                        </div> -->


                                        <div class="form-group mb-10">

                                            <input required="" type="checkbox" value="agree this condition"> I agree to the <a href="<?php echo base_url('home/terms');?>">Terms & Conditions </a> and
                                            <a href="<?php echo base_url('home/privacy');?>">Privacy Policy </a>

                                        </div>
                                        <div class="form-group mb-10">
                                            <input type="submit" name="submit" class="btn btn-mid btn-yellow btn-block" value="Sign Up">
                                        </div>
                                        <div class="registration">
                                            Already Registered?
                                            <a class="" href="<?php echo base_url(); ?>home/login">
                                                Login Here
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="advertise_div col-md-4">


                                <div class="inner-item">
                                    <a href="#">
                                        <img class="center-block img-responsive"  src="<?php echo base_url().'comp/img/300x250.png' ?>" alt="" >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--container end-->



                    </div>
                </div>

            </div>
        </div><!--container-->
    </section>

</main>

<link href="<?php echo base_url(); ?>script-assets/js/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>script-assets/js/jquery-ui.js"></script>
<style>
    #form-map{
        background-color: #e5e3df;
        height: 300px;
        width: 100%;
    }
    #form-map img { max-width: none; }
</style>

<script src="<?php echo base_url(); ?>script-assets/js/jQuery-2.1.4.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<script src="<?php echo base_url(); ?>script-assets/js/markercluster.min.js"></script>
<script src="<?php echo base_url(); ?>script-assets/js/map-icons.min.js"></script>
<script src="<?php echo base_url(); ?>script-assets/js/map_config.js"></script>

<script src="<?php echo base_url(); ?>script-assets/js/jquery.form.js"></script>


<script type="text/javascript">
$(document).ready(function(){
    

     $('#country').on('change',function(){
        // jQuery('#city').val('');
        // jQuery('#selected_city').val('');
        var val = $(this).val();
       
        
        var loadUrl = '<?php echo base_url() ?>'+'/home/get_state_by_country_ajax/'+val;

        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                jQuery('#state').html(responseText);
                var sel_country = '<?php echo (set_value("country")!='')?set_value("country"):'';?>';
                var sel_state   = '<?php echo (set_value("state")!='')?set_value("state"):'';?>';
                if(val==sel_country)
                    jQuery('#state').val(sel_state);
                else
                jQuery('#state').val('');
                jQuery('#state').focus();
                jQuery('#state').trigger('change');

            }
        );
     }).change();
});

</script>

<script type="text/javascript">
    var markers = [];
    //    var map;
    var Ireland = "Dhaka, Bangladesh";
    function initialize() {
        
        geocoder = new google.maps.Geocoder();
        var mapOptions = {
            center: new google.maps.LatLng(-34.397, 150.644),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: MAP_STYLE
        };
        map = new google.maps.Map(document.getElementById("form-map"),
            mapOptions);
//        codeAddress();//call the function
        var ex_latitude = $('#latitude').val();
        var ex_longitude = $('#longitude').val();

        if (ex_latitude != '' && ex_longitude != ''){
            map.setCenter(new google.maps.LatLng(ex_latitude, ex_longitude));//center the map over the result
            var marker = new google.maps.Marker(
                {
                    map: map,
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(ex_latitude, ex_longitude)
                });

            markers.push(marker);
            google.maps.event.addListener(marker, 'dragend', function()
            {
                var marker_positions = marker.getPosition();
                $('#latitude').val(marker_positions.lat());
                $('#longitude').val(marker_positions.lng());
//                        console.log(marker.getPosition());
            });

        }

    }

    function codeAddress()
    {
        
        var main_address = $('#address').val();
        var country = $('#country').find(':selected').data('name');
        var state = $('#state').find(':selected').data('name');

        var zipcode = $('#zipcode').val();
      

        var address = [state, country,zipcode].join();

        console.log(address);

        if(country != '' && state != '')
        {


            setAllMap(null); //Clears the existing marker

            geocoder.geocode( {address:address}, function(results, status)
            {
                if (status == google.maps.GeocoderStatus.OK)
                {
//                    console.log(results[0].geometry.location.lat());
                    $('#latitude').val(results[0].geometry.location.lat());
                    $('#longitude').val(results[0].geometry.location.lng());
                    map.setCenter(results[0].geometry.location);//center the map over the result


                    //place a marker at the location
                    var marker = new google.maps.Marker(
                        {
                            map: map,
                            draggable:true,
                            animation: google.maps.Animation.DROP,
                            position: results[0].geometry.location
                        });

                    markers.push(marker);


                    google.maps.event.addListener(marker, 'dragend', function()
                    {
                        var marker_positions = marker.getPosition();
                        $('#latitude').val(marker_positions.lat());
                        $('#longitude').val(marker_positions.lng());
//                        console.log(marker.getPosition());
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });

        }
        else{
            alert('You must enter at least country and city');
        }

    }

    function setAllMap(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>




    




    
    
