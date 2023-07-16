<?php include("include/header.php");?>
<style>
.coursedet {
height: 80px;
/*background: url(../images/demo.jpg);*/
background-size: cover;
border:1px solid #000;
text-align: center;
padding-top: 2%;
/* width: 14.666667%!important; */
margin-right: 3%;
font-weight: 400;
font-family: "Open Sans";
color: #000000;
background: linear-gradient(-45deg, #ff9a03, #ffe000f7, #ffe10c, #ff8e01);
/* background-size: 400% 400%; */
box-shadow: 0px 0px 18px #b3b2b1;

}
.row {
    margin-bottom: 0px;
}
.box1 {
margin:auto;
    margin-bottom: 3%;
	width:100%;
}
.coursedet h4:hover{
text-decoration:underline;
text-decoration-color:red;
}
.coursedet h4{
font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size: 18px;

}
.mt-5{
    margin-top: 20px;
}
.input{
    background-color: #e5f3ed!important;
    display: block;
    margin:auto;
    border: 1px solid #000!important;
    width: 400px!important;
}
@media screen and (max-width: 600px){
    .input{
        width: 90%!important; 
    }
}
.center{
    align-items: center;
    justify-content: center;
}
.d-none{
    display: none;
}
/* id card */

		.id-card-holder {
			width: 280px;
		    padding: 4px;
		    margin: 0 auto;
		    background-color: #1f1f1f;
		    border-radius: 5px;
		    position: relative;
		}
		.id-card-holder:after {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    border-radius: 0 5px 5px 0;
		}
		.id-card-holder:before {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    left: 269px;
		    border-radius: 5px 0 0 5px;
		}
		.id-card {
			
			background-color: #fff;
			padding: 10px;
			border-radius: 10px;
			text-align: center;
			box-shadow: 0 0 1.5px 0px #b9b9b9;
		}
		.id-card img {
			margin: 0 auto;
		}
		.header img {
			width: 140px;
    		margin-top: 15px;
		}
		.photo img {
			width: 100px;
    		margin-top: 15px;
		}
		h2 {
			font-size: 15px;
			margin: 5px 0;
			color: #000;
		}
		h3 {
			font-size: 12px;
			margin: 2.5px 0;
			font-weight: 300;
		}
		.qr-code img {
			width: 80px;
		}
		p {
			font-size: 8px;
			margin: 2px;
			color: #000;
		}
		.id-card-hook {
			background-color: #000;
		    width: 70px;
		    margin: 0 auto;
		    height: 15px;
		    border-radius: 5px 5px 0 0;
		}
		.id-card-hook:after {
			content: '';
		    background-color: #d7d6d3;
		    width: 47px;
		    height: 6px;
		    display: block;
		    margin: 0px auto;
		    position: relative;
		    top: 6px;
		    border-radius: 4px;
		}
		.id-card-tag-strip {
			width: 45px;
		    height: 40px;
		    background-color: #0950ef;
		    margin: 0 auto;
		    border-radius: 5px;
		    position: relative;
		    top: 9px;
		    z-index: 1;
		    border: 1px solid #0041ad;
		}
		.id-card-tag-strip:after {
			content: '';
		    display: block;
		    width: 100%;
		    height: 1px;
		    background-color: #c1c1c1;
		    position: relative;
		    top: 10px;
		}
		.id-card-tag {
			width: 0;
			height: 0;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			/*border-top: 100px solid #0958db;*/
			margin: -10px auto -30px auto;
		}
		/*.id-card-tag:after {*/
		/*	content: '';*/
		/*    display: block;*/
		/*    width: 0;*/
		/*    height: 0;*/
		/*    border-left: 50px solid transparent;*/
		/*    border-right: 50px solid transparent;*/
		/*    border-top: 100px solid #d7d6d3;*/
		/*    margin: -10px auto -30px auto;*/
		/*    position: relative;*/
		/*    top: -130px;*/
		/*    left: -50px;*/
		/*}*/
</style>
<div class="wrap-title-page">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="ui-title-page">Verify Student</h1>
          </div>
        </div>
      </div>
      <!-- end container--> 
    </div>
    <!-- end wrap-title-page -->
    
    <div class="section-breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="wrap-breadcrumb clearfix">
              <ol class="breadcrumb">
                <li><a href="index.php"><i class="icon stroke icon-House"></i></a></li>
                <li><a href="#">Students</a></li>
                
              </ol>
            </div>
          </div>
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end section-breadcrumb -->
    
    <div class="container">
         <div class="row">
            <div style="margin: auto;">
                <div style="text-align: center">
                    <input class="form-control mt-5 input" name="roll" id="roll" placeholder="Enter Your Registration Number">
                    
                    <button type="button" class="btn btn-primary mt-5" id="validate">Validate</button>
                    <div id="loader" class="d-none"><img src="images/spinner.gif"/></div>
                </div>
            </div> 
         </div>
         <h2 id="not" class="text-danger text-center d-none" style="margin: 25px 0px;">This Is Not A Valid Registration Number!</h2>
    <div class="card d-none table-card" style="padding: 20px 0px;">
    <div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="https://admin.futureflame.in/image/future.png" >
			</div>
			<div class="photo">
				<img src="">
			</div>
			<h2 id="st_name"></h2>
			<div class="qr-code">
			    <span>Registration no: </span><span id="st_id"></span></br>
				<span>Father's Name: </span> <span id="f_name"></span></br>
				<span>Course: </span><span id="c_name"></span></br>
				<span>Institute: </span><span id="institute"></span></br>
				<span></span><span></span>
			</div>
			<hr>
			<p>Plot No. 730, Arjun Market Complex, Infront of Hotel Sidhart, Nayapalli, Bhubaneswar, Odisha 751012</p>
			<p>Ph: +91-9090401063 | E-mail: Info@futureflame.in</p>

		</div>
	</div>
        </div>
    </div>
    <!-- end container -->
    
    <?php include("include/footer.php");?>
  </div>
  <!-- end wrapper --> 
</div>
<!-- end layout-theme --> 


<script>
   $(document).ready(function(){
        $('#validate').on('click', function(e){
            e.preventDefault();
            let roll = $('#roll').val();
            const url = "https://admin.futureflame.in/image/student";
            $.ajax({
                url: 'https://admin.futureflame.in/api/student-data',
                data: {'roll': `${roll}`},
                beforeSend: function(){
                    $('table').addClass('d-none');
                    $('#not').addClass('d-none');
                    $('.table-card').addClass('d-none');
                    $('#loader').removeClass('d-none');
                },
                success: function(result){
                    //let result = JSON.parse(data);
                    if(result.status == 200){
                        $('.photo img').attr('src', `${url}/${result.data.st_photo}`);
                        $('#st_name').text(`${result.data.st_name}`);
                        $('#f_name').text(`${result.data.father_name}`);
                        $('#st_id').text(`${result.data.st_id}`);
                        $('#c_name').text(`${result.data.course_name}`);
                        $('#institute').text(`${result.data.institute_name}`);
                        $('table').removeClass('d-none');
                        $('.table-card').removeClass('d-none');
                       
                    }else{
                        $('#not').removeClass('d-none');
                    }
                
                },
                complete: function(){
                    $('#loader').addClass('d-none');
                }
                
            })
            
        })
    })
</script>

</body>

<!-- Mirrored from templines.rocks/html/academica/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2017 03:07:46 GMT -->
</html>
