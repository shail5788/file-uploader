<?php 
 session_start();
 require("library/core_class.php");
 if(!isset($_SESSION['user']['info'])&& $_SESSION['user']['info']==""){
 	header("location:index.php");
 }

   if(isset($_FILES['file'])){

     	  $data=$coreClass->upload_file($_FILES);
          print_r($data);
   }

  ?>


<?php include("./partials/header-part.php"); ?>

    <div id="page-wrapper">
        
        <?php include("./partials/header.php"); ?>
        <div id="page-content-wrapper">
            <div id="page-content">
              <!--   <div class="container">
				</div>
 -->

						<div class="row">
						    <div class="col-md-12">
						        <div class="panel">
						            <div class="panel-body">
						                <h3 class="title-hero">
						                    File Uploader
						                </h3>
						                <div class="example-box-wrapper">
						                    <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
						                 <div class="row">
						                 	<form action="" method="post" enctype="multipart/form-data">
						                 		<input type="file" name="file" >
						                 		<input type="submit" value="upload">

							                </form>	
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


    <!-- WIDGETS -->

 <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.js"></script>



<!-- Bootstrap Progress Bar -->

 <script type="text/javascript" src="./assets/widgets/progressbar/progressbar.js"></script>


 
 <script type="text/javascript" src="./app/Helpers.js"></script>
<script type="text/javascript" src="./app/authentication.js"></script>

</div>
</body>
</html>