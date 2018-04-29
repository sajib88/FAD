<style>
    .upProPic{
        margin: 10px 33.33333% auto 31.333%;
    }
    @media (max-width: 767px) {
        .upProPic{
            margin: 10px 33.33333% auto 15.333%;
        }
    }
    .form-group p{
        color: red;
    }
</style>
<div id="page-content">
    <div class="content-wrapper">
        <section class="content-header">
            <h1><i class="fa fa-cog"></i>
                Profile Manage
            </h1>
        </section>

        <section class="content">
            <!-- /.row -->
            <div class="row">
                <?php if($this->session->flashdata('message')){ ?>
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Your Profile Updatted Successfully.</strong>
                        </div>
                    </div>
                <?php } $this->session->unset_userdata('message'); ?>

                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('profile/profile/index'); ?>">

                    <div class="col-lg-6 ">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Personal Information</h3><i class="fa fa-user title-icon"></i>
                            </div>
                            <!-- /.box-header -->
                            <div class="padd">
                                <!-- form start -->
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input disabled  name="email" value="<?php echo $user_info['email']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="first_name" value="<?php echo $user_info['first_name']; ?>" class="form-control">
                                    <?php echo form_error('first_name');?>
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="last_name" value="<?php echo!empty($user_info['last_name']) ? $user_info['last_name'] : ''; ?>" class="form-control">
                                    <?php echo form_error('last_name');?>
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option name="gender" value="male" <?php if($user_info['gender'] === 'male'){echo 'selected';}?>>Male</option>
                                        <option name="gender" value="female" <?php if($user_info['gender'] === 'female'){echo 'selected';}?> >Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Professional Licensing Country</label>
                                    <input name="plc" value="<?php echo!empty($user_info['plc']) ? $user_info['plc'] : ''; ?>"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Professional Licensing State</label>
                                    <input name="pls" value="<?php echo!empty($user_info['pls']) ? $user_info['pls'] : ''; ?>"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>NPI</label>
                                    <input name="npi" value="<?php echo!empty($user_info['npi']) ? $user_info['npi'] : ''; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Professional License Number</label>
                                    <input name="pln" value="<?php echo!empty($user_info['pln']) ? $user_info['pln'] : ''; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" value="<?php echo $user_info['phone']; ?>"  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>University / College Name</label>
                                    <input name="university_clg" value="<?php echo $user_info['university_clg']; ?>"  class="form-control">
                                </div>

                            </div>
                        </div>
                        <!-- /.box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Change Password</h3></h3><i class="fa fa-user title-icon"></i>
                            </div>
                            <div class="padd">
                                <div class="form-group">
                                    <label>Change Password</label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <!--           <label>Password</label>
                                                                       <input name="password" class="form-control" disabled>-->
                                    <button class="btn btn-success">Change Your Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Basic Information</h3><i class="fa fa-user title-icon"></i>
                            </div>
                            <div class="padd">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="user_name" value="<?php echo $user_info['user_name']; ?>" disabled class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input disabled  name="email" value="<?php echo $user_info['email']; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Profession Type</label>
                                    <select disabled name="profession" class="form-control">

                                        <?php
                                        if (is_array($profession)) {
                                            foreach ($profession as $row) {
                                                ?>
                                                <option <?php if ($row->id == $user_info['profession']) echo 'selected'; ?>  value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Address</h3></h3><i class="fa fa-user title-icon"></i>
                            </div>
                            <!-- /.box-header -->
                            <div class="padd">
                                <!-- form start -->
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country" id="country" class="form-control">
                                     <option data-name="" value=""><?php echo 'select country';?></option>
                                     <?php $v = (set_value('country')!='')?set_value('country'):$countryInfo['country'];?>

                                     <?php foreach (get_all_locations_by_type('country')->result() as $row) {
                                            $sel = ($row->id==$v)?'selected="selected"':'';
                                            ?>
                                            <option data-name="<?php echo $row->name;?>" value="<?php echo $row->id;?>" <?php echo $sel;?>><?php echo $row->name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div id="result">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" id="state" class="form-control">
                                        
                                        </select>
                                    <?php echo form_error('state');?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input name="city" value="<?php echo!empty($user_info['city']) ? $user_info['city'] : ''; ?>"  class="form-control">
                                </div>

                                <div class="form-group">
                                 <label>Zipcode</label>
                                    <?php $v = (set_value('zipcode')!='')?set_value('zipcode'):$countryInfo['zipcode'];?>
                                    <input  required type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zip Code" value="<?php echo $v;?>">
                                </div>

                                <div class="form-group">
                                <label>Address</label>
                                    <?php $v = (set_value('address')!='')?set_value('address'):$countryInfo['address'];?>
                                    <input id="address" type="text" name="address" placeholder="<?php echo 'address';?>" value="<?php echo $v;?>" class="form-control">
                                    <?php echo form_error('address');?>
                                </div>

                                <div class="form-group">
                                <a href="javascript:void(0)" class="btn btn-danger" onclick="codeAddress()"><i class="fa fa-map-marker"></i> <?php echo 'view on map';?></a>
                                </div>

                                <div class="form-group mb-10">
                                    <div id="form-map"></div>
                                </div>

                                <div class="form-group">
                                <label>Latitude</label>
                                    <?php $v = (set_value('latitude')!='')?set_value('latitude'):$countryInfo['latitude'];?>
                                    <input id="latitude" type="text" name="latitude" placeholder="<?php echo 'latitude';?>" value="<?php echo $v;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                 <label>Longitude</label>
                                     <?php $v = (set_value('longitude')!='')?set_value('longitude'):$countryInfo['longitude'];?>
                                        <input id="longitude" type="text" name="longitude" placeholder="<?php 'longitude';?>" value="<?php echo $v;?>" class="form-control">
                                </div>

                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-6 ">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Update Your Profile <small>Picture Now</small></h3><i class="fa fa-user title-icon"></i>
                            </div>
                            <!-- /.box-header -->
                            <div class="padd">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget-user-header" style="
                                             margin-top: -30px;">
                                            <div class="widget-user-image text-center">
                                                <?php
                                                if($user_info['profilepicture'] == 0) {?>
                                                    </br>
                                                    <div class="text-center">
                                                        <img src="<?php echo base_url() . '/assets/upload_prfl.png'?>" alt="" class="img-rounded " width="150" height="150" />
                                                    </div>
                                                    </br>
                                                <?php }
                                                else {?>
                                                    </br>

                                                    <img src="<?php echo base_url() . '/assets/file/' .$user_info['profilepicture'] ?>" alt="" width="170" height="170" class="img-rounded" />
                                                    </br>
                                                <?php }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group text-center" id="profilepicture">
                                            <div class="input-profile">
                                                <label>Your Profile picture Format <br><small> jpg,gif,png format </small></label>
                                                <input class="upProPic" style="" name="profilepicture" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <?php echo anchor('profile/dashboard',"<i class='fa fa-undo'></i> &nbsp; &nbsp; Cancel",array('class' => 'btn btn-danger btn-small pull-left'));?>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <button class="btn  btn-success  btn-small pull-right"  name="submit" type="submit">
                                                    <i class="fa fa-check"></i> &nbsp; &nbsp; Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
</div>
<style>
    #form-map{
        background-color: #e5e3df;
        height: 200px;
        width: 100%;
    }
    #form-map img { max-width: none; }
</style>


<script type="text/javascript">
    jQuery(document).ready(function() {
        //Date picker
        $('#datepicker2').datepicker({
            autoclose: true
        });
        $('#datepicker').datepicker({
            autoclose: true
        });
        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });

        $(".timepickerend").timepicker({
            showInputs: false
        });
    });
</script>




<script src="//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<script src="<?php echo base_url(); ?>script-assets/js/markercluster.min.js"></script>
<script src="<?php echo base_url(); ?>script-assets/js/map-icons.min.js"></script>
<script src="<?php echo base_url(); ?>script-assets/js/map_config.js"></script>

<script src="<?php echo base_url(); ?>script-assets/js/jquery.form.js"></script>


<script type="text/javascript">
$(document).ready(function(){

    var val = jQuery('#country').val();
    var loadUrl = '<?php echo base_url() ?>'+'home/get_state_by_country_ajax/'+val;
    jQuery.post(
        loadUrl,
        {},
        function(responseText){
            jQuery('#state').html(responseText);
            var sel_country = '<?php echo (set_value("country")!='')?set_value("country"):$countryInfo['country'];?>';
            var sel_state   = '<?php echo (set_value("state")!='')?set_value("state"):$countryInfo['state'];?>';
            if(val==sel_country)
                jQuery('#state').val(sel_state);
            else
                jQuery('#state').val('');
            jQuery('#state').focus();
            jQuery('#state').trigger('change');
        }
    );
    

     $('#country').on('change',function(){
        // jQuery('#city').val('');
        // jQuery('#selected_city').val('');
        var val = $(this).val();
       
        
        var loadUrl = '<?php echo base_url() ?>'+'home/get_state_by_country_ajax/'+val;

        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                jQuery('#state').html(responseText);
                var sel_country = '<?php echo (set_value("country")!='')?set_value("country"):$countryInfo['country'];?>';
                var sel_state   = '<?php echo (set_value("state")!='')?set_value("state"):$countryInfo['state'];?>';
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
