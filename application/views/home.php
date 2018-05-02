<header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center ptop-300">


                <h1>All Student Doctors And Doctors In The World</h1>
                <p>Can Meet, Advance Personally and Contribute Globally.</p>
                <a href="<?php echo base_url('home/registration');?>">   <input type="submit" value="Join Now Free" class="btn   btn-yellow"></a>
            </div>
        </div>
    </div>
</header>


<!--BG with 4 box -->
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center">
                <h2 class="ptop-50">Doctor's And Student Can Join Now </h2>
                <div class="ptop-50"></div>
                <!--start box here -->
                <div class="box-design">
                    <div  class="row">
                        <!-- box 1 -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title text-left mobiletext">Free Registration</h3>
                                    <p class="card-text text-left mobiletext free_registration">
                                        <a href="<?php echo base_url('home/registration');?>">
                                        All Doctors and Students Can</br>
                                        Join For Free. Simply Submit This</br>
                                        Short Form. (Click Here)
                                        </a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- box 1 -->
                        <!-- box 2 -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title text-right mobiletext">Free Features</h3>
                                    <p class="card-text text-right mobiletext">
                                        Enjoy Loads Of Free Features<br>
                                        Where You Network, Learn and Exhibit<br>
                                        Your Accomplishments With Other<br>
                                         Doctors and Student Doctors.</p>

                                </div>
                            </div>
                        </div>
                        <!-- box 2 -->
                    </div>
                    <!-- image make center -->
                    <img src="<?php echo base_url(); ?>comp/img/round-box.png"  class="img-responsive center-block absulateimage" />
                    <!-- image make center -->


                    <div  class="row ptop-60">
                        <!-- box 3 -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-block">

                                    <h3 class="card-title text-left mobiletext">Easy to Use </h3>
                                    <p class="card-text text-left mobiletext">
                                        We Have Made It Easy To Use <br>
                                        Our Site - No Frustrations, <br>
                                        No Learning Curve. <br>
                                        It Is Easy & Free For Your Enjoyment.
                                        </p>

                                </div>
                            </div>
                        </div>
                        <!-- box 3 -->
                        <!-- box 4 -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title text-right mobiletext">Mobile Friendly</h3>
                                    <p class="card-text text-right mobiletext">
                                        We've Done The Hard Work,<br>
                                        So You Can Easily Use <br>
                                        Our Awesome Site <br>
                                        On Just About Any Device.
                                        </p>

                                </div>
                            </div>
                        </div>
                        <!-- box 4 -->
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>

<!--Start Lending style-->
<div class="col-md-12">

    <div class="ptop-30 "></div>
    <div class="mobile-200 "></div>
    <div class="widget">


        <div class="entry-head text-center">
            <h2>Meet Some Of Our Professionals</h2>
        </div>

        <div class="col-md-7 col-md-offset-3">


            <div class="widget-searchprof">

                <form action="<?php echo base_url().'publicsearch'?>" id="" class="" method="POST">




                    <div class="col-md-4">
                        <select id="" class="search"  name="profession" data-live-search="true">

                            <?php
                            if (!empty($profession)) {
                                foreach ($profession as $row) {
                                    ?>
                                    <option  value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select onchange="getComboA(this)" name="country" id="js_country"  data-style="btn-info btn-filled" class="selectpicker" >
                            <option value="">Select Country</option>
                            <?php
                            if (is_array($countries)) {
                                foreach ($countries as $country) {
                                    $sel = ($country->id == set_value('country'))?'selected="selected"':'';
                                    ?>
                                    <option  value="<?php echo $country->id; ?>" <?php echo $sel;?> ><?php echo $country->name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <select  name="state" id="result" data-style="btn-info btn-filled"  class="selectpicker">
                            <option value="">Select State</option>

                        </select>
                    </div>


                    <div class="col-md-6 ptop-50 col-md-offset-2 mtop-30">
                        <button class="btn   btn-yellow btn-block mtop-10" name="Search" value="Search" type="submit"><span>Search Professionals</span></button>
                    </div>

                </form>
            </div>

        </div>


    </div>
</div>

<!--end Lending style-->


    <div class="advertise_div col-md-12">
        <div class="inner-item">
            <a href="#">
                <img class="center-block img-responsive"  src="<?php echo base_url().'comp/img/adcolor.jpg' ?>" alt="" >
            </a>
        </div>
    </div>




<div class="col-md-12 text-center styletext ptop-20">
    <h4>Browse Some Of Our Awesome Features.</h4>
</div>

<!--category with image-->
<section class="content">
    <div class="right-bg">
        <div class="container">
            <!--category first 5 image start-->
            <div class="row">
                <div class="cat-widget col-md-3">
                    <div class="inner-item">
                        <a href="<?php echo base_url('home/feature');?>">
                            <img  src="<?php echo base_url().'comp/img/free-classified.jpg' ?>" alt="" class="img-responsive rounded">
                        </a>
                    </div>
                </div>
                <div class="cat-widget col-md-3">
                    <div class="inner-item">
                        <a href="<?php echo base_url('home/feature/');?>">
                            <img  src="<?php echo base_url().'comp/img/free-personals.jpg' ?>" alt="" class="img-responsive rounded">
                        </a>
                    </div>
                </div>
                <div class="cat-widget col-md-3">
                    <div class="inner-item">
                        <a href="<?php echo base_url('home/feature/');?>">
                            <img  src="<?php echo base_url().'comp/img/free-forum.jpg' ?>" alt="" class="img-responsive rounded">
                        </a>
                    </div>
                </div>

                <div class="cat-widget col-md-3">
                    <div class="inner-item">
                        <a href="<?php echo base_url('home/feature/');?>">
                            <img  src="<?php echo base_url().'comp/img/free-blog.jpg' ?>" alt="" class="img-responsive rounded">
                        </a>
                    </div>
                </div>
            </div>
            <!--category first 5 image end-->

        </div>
        <!--category second 5 image end -------------------------------------------------------->


        <!--get free with image-->
        <div class="row ptop-40 ">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img src="<?php echo base_url(); ?>comp/img/dimond.jpg"  class="img-responsive center-block dimond ptop-20" />
            </div>
        </div>
        <!--get free with image-->

        <!--helpig-->
        <div class="row ptop-20">
            <div class="text-center helpig-hand">
                <h2>Gives people access to  <span>shared experiences, skills and expertise.</span></h2>

            </div>
        </div>
        <!--helpig-->


        <div class="ptop-40"></div>





    </div>

</section>


<section class="content" style="background: #fff;">
    <div class="ptop-20"></div>
    <h2 class="text-center"><span class="text-primary">Our </span> Latest <span class="text-primary"> Blog</span></h2>
    <div class="ptop-20"></div>
    <div class="container">
        <div class="row">
            <?php if(!empty($allblog)){
                foreach ($allblog as $row){
            ?>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card border-box">
                    <a href="<?php echo base_url('blog/Postlist/singlepost/' . $row->id); ?>"><img class="card-img-top" src="<?php echo base_url('assets/file/blog/'.$row->primary_image);?>" height="250px" width="100%" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="<?php echo base_url('blog/Postlist/singlepost/' . $row->id); ?>"><?php echo substr($row->title, 0, 30);?></a>
                        </h4>
                        <p class="card-text"><?php echo strip_tags(substr($row->description, 0, 100));?></p>
                    </div>
                </div>
            </div>
            <?php } }?>
        </div>
        <div class="col-md-4 ptop-50 col-md-offset-4 mtop-30">
            <a href="<?php echo base_url('blog')?>" class="btn   btn-yellow btn-block mtop-10"><span>Read More Blogs</span></a>
        </div>
    </div>
    <div class="ptop-40"></div>
</section>


<div style="display: none;" class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Find Your Doctors</h4>
      </div>
      <div class="modal-body">
                <form method="post">
                        <label>Country</label>
                        <select required="required" name="country" id="jscountry" class="form-control">
                         <option data-name="" value=""><?php echo 'select country';?></option>
                         <?php $v = (set_value('country')!='')?set_value('country'):'';?>

                         <?php foreach (get_all_locations_by_type('country')->result() as $row) {
                                $sel = ($row->id==$v)?'selected="selected"':'';
                                ?>
                                <option data-name="<?php echo $row->name;?>" value="<?php echo $row->id;?>" <?php echo $sel;?>><?php echo $row->name;?></option>
                            <?php }?>
                        </select>

                        <label>State</label>
                        <select required="required" name="jsstate" id="jsstate" class="form-control">
                         <option data-name="" value=""><?php echo 'select state';?></option>
                         <?php $v = (set_value('country')!='')?set_value('country'):'';?>

                         <?php foreach (get_all_locations_by_type('country')->result() as $row) {
                                $sel = ($row->id==$v)?'selected="selected"':'';
                                ?>
                                <option data-name="<?php echo $row->name;?>" value="<?php echo $row->id;?>" <?php echo $sel;?>><?php echo $row->name;?></option>
                            <?php }?>
                        </select>
                        <label>Zip code</label>
                        <input required="required" class="form-control" type="text" name="zipcode" id="zipcode"  placeholder="zipcode">
                        <label>Email</label>
                        <input required="required" class="form-control" type="email" name="email" id="email"  placeholder="email">

                        
                </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-prev">Prev</button>
        <button type="button" class="btn btn-info btn-next">Next</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div style="display: none;" class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Information</h4>
      </div>
      <div class="modal-body">
       <p style="font-size: 20px;font-weight: bold;"> I have pain or discomfort when I: Stand still (i.e., to cook, wash dishes, wait in line) </p>
       <label class="radiocontainer">I can do this,but it causes me pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>

        <label class="radiocontainer">This activity is limited due to pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>

        <label class="radiocontainer">I am unable to do this due to pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-prev">Prev</button>
        <button type="button" class="btn btn-info btn-next">Next</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div style="display: none;" class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Information</h4>
      </div>
      <div class="modal-body">
        <p style="font-size: 20px;font-weight: bold;"> I have pain or discomfort when I: walk (i.e., to walk, Walk up stairs , Walk down stairs) </p>
       <label class="radiocontainer">I can do this,but it causes me pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>

        <label class="radiocontainer">This activity is limited due to pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>

        <label class="radiocontainer">I am unable to do this due to pain 
          <input type="radio"  name="radio">
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-prev">Prev</button>
        <button type="button" class="btn btn-info btn-next">Next</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<section class="content" style="background: #fff;">

    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="card hovercard">
                   <img src="<?php echo base_url('assets/file/'.'slider-1.jpg');?>" alt=""/>
                   <div class="avatar">
                      <img src="<?php echo base_url('assets/file/'.'setone.jpg');?>" alt="" />
                   </div>
                   <div class="info">
                      <div class="title">
                         Chiropractor
                      </div>
                      <div class="desc">Find Your Doctors</div>
                   </div>
                   <div class="bottom">
                      <button class="btn btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal1">Search</button>
                   </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card hovercard">
                   <img src="<?php echo base_url('assets/file/'.'1491119649.jpeg');?>" alt=""/>
                   <div class="avatar">
                      <img src="<?php echo base_url('assets/file/'.'1491119649.jpeg');?>" alt="" />
                   </div>
                   <div class="info">
                      <div class="title">
                         The Title
                      </div>
                      <div class="desc">Lorem ipsum</div>
                      <div class="desc">Lorem ipsum</div>
                      <div class="desc">Lorem ipsum</div>
                   </div>
                   <div class="bottom">
                      <button class="btn btn-default">Button</button>
                   </div>
                   </div>
             </div>      

                <div class="col-md-4">
                <div class="card hovercard">
                   <img src="<?php echo base_url('assets/file/'.'1491119649.jpeg');?>" alt=""/>
                   <div class="avatar">
                      <img src="<?php echo base_url('assets/file/'.'1491119649.jpg');?>" alt="" />
                   </div>
                   <div class="info">
                      <div class="title">
                         The Title
                      </div>
                      <div class="desc">Lorem ipsum</div>
                      <div class="desc">Lorem ipsum</div>
                      <div class="desc">Lorem ipsum</div>
                   </div>
                   <div class="bottom">
                      <button class="btn btn-default">Button</button>
                   </div>
                   </div>
                </div>
        </div>

            
        </div>
  </div>

</section>

<section id="news">
    <div class="jumbotron">

        <div class="slide">
            <h2 class="text-center"><span class="text-primary">Medical </span> News <span class="text-primary"> Today</span></h2>
            <?php if(!empty($hello)) {

                foreach ($hello as $row)
                { ?>
                    <div class="slider-item">

                        <h3 class="text-center"><a href="<?php echo $row['link'];?>"><?php echo substr($row['title'], 20, 200);?></a></h3>

                        <p class="text-muted text-justify" style="font-size: 20px; color: #000; text-align: center;"><?php echo $row['description'];?></p>

                        <p style="font-size: 11px; color: #000; text-align: center;" class="lead"><?php echo $row['pubDate'];?></p>

                    </div>
                    <?php
                }
            }
            ?>


        </div>

    </div>

</section>


<section class="bottom-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center ptop-40">


                <h1>Only One Website</h1>
                <h3>All Student Doctors in the world</h3>
                <input type="submit" value="Join Now" class="btn btn-midum  btn-yellow">
            </div>
        </div>
    </div>
</section>





</main>

<style>
    .card {
  padding-top: 20px;
  margin: 10px 0 20px 0;
  background-color: #ffffff;
  border: 1px solid #d8d8d8;
  border-top-width: 0;
  border-bottom-width: 2px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}


.card.hovercard {
  position: relative;
  width: 300px;
  padding-top: 0;
  overflow: hidden;
  text-align: center;
  background-color: #fff;
}

.card.hovercard img {
  width: 300px;
  height: 200px;
}

.card.hovercard .avatar {
  position: relative;
  top: -40px;
  margin-bottom: -40px;
}

.card.hovercard .avatar img {
  width: 80px;
  height: 80px;
  max-width: 80px;
  max-height: 80px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid gray;

}

.card.hovercard .info {
  padding: 4px 8px 10px;
}

.card.hovercard .info .title {
  margin-bottom: 4px;
  font-size: 24px;
  line-height: 1;
  color: #262626;
  vertical-align: middle;
}

.card.hovercard .info .desc {
  overflow: hidden;
  font-size: 12px;
  line-height: 20px;
  color: #737373;
  text-overflow: ellipsis;
}

.card.hovercard .bottom {
  padding: 0 20px;
  margin-bottom: 17px;
}

.card.people .card-bottom {
  position: absolute;
  bottom: 0;
  left: 0;
  display: inline-block;
  width: 100%;
  padding: 10px 20px;
  line-height: 29px;
  text-align: center;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

/* The container */
.radiocontainer {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.radiocontainer input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radiocontainer:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radiocontainer input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.radiocontainer input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.radiocontainer .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
   // body...
   //if(document.cookie.indexOf('visited=true') == -1){
         //$("#myModal1").modal({backdrop: 'static', keyboard: false});
         var flag = 0;
         $("div[id^='myModal']").each(function(){
        
         var currentModal = $(this);

            //alert(currentModal);
           //click next
           currentModal.find('.btn-next').click(function(){
             var country = $('#jscountry').val();
             var state = $('#jsstate').val();
             var zipcode = $('#zipcode').val();
             var email = $('#email').val();
             var objArr = {};
              

             if(country != '' && state != '' && zipcode != '' && email !=''){
              
              if(flag == 0){
              var searchArr = [];
              objArr.country = country;
              objArr.state = state;
              objArr.zipcode = zipcode;
              objArr.email = email;
              searchArr.push(objArr);

              // $.ajax({
              //     type: 'POST',
              //     url: '<?php echo base_url('home/addSearchUser'); ?>',
              //     data:  {data : JSON.stringify(searchArr)},
              //     contentType: 'application/json; charset=utf-8',
              //     datatype: 'json',
              //     success: function (result) {
              //         alert('Success ' + result.id);
              //         flag = 1;
              //     },
              //     error: function (result) {
              //         alert('Fail ' + result.d);
              //     }
              // });
            }

               currentModal.modal('hide');
               currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal({backdrop: 'static', keyboard: false}); 
              }
              else{
                alert("Please Fill All fields Properly");
              }
           });
           
           //click prev
           currentModal.find('.btn-prev').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal({backdrop: 'static', keyboard: false}); 
           });

         });

         //var year = 1000*60*60*24*365;
         //var expires = new Date((new Date()).valueOf() + year);

         //document.cookie = "visited=true;expires=" + expires.toUTCString();
      //}

});
   
</script>