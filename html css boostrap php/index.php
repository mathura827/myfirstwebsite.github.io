<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"   href="style.css">
</head>
<body>
<!--nav start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">M TECHNICAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gellary.php">Gellary</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Contact.php">Contact Us</a>
          <a class="dropdown-item" href="#">Help</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Our Activites</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--end nav-->

<!--carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/th.jpg" class="d-block w-100" alt="hello">

    </div>
    <div class="carousel-item">
      <img src="image/th2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/th1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end carousel-->
<!-- start About us-->
<section>
<div class="container-fluid">
<h1 class="text-center text-capitalize pt-5">About Us</h1>
<hr class="w-25 mx-auto pt-5">

<div class="container">
		   <div class="row my-5">
		        <div class="col-lg-6 col-md-10 col-12 col-xxl-6">
		           <figure>
				        <img src="image/th5.jpg" alt="th5.jpg" class="image-fluid">
				   </figure>
		         </div>
	  <div class="col-lg-6 col-md-6 col-12">
	  <h1 class="text-capitalize text-center"> who i am?</h1>
	  <p class="text-capitalize ml-5">
                    hare krishna hare krishna krishna krishna hare hare <br>
	                  hare ram hare ram hare rama rama hare  hare<br>
                    hare krishna hare krishna krishna krishna hare hare <br>
	                  hare ram hare ram hare rama rama hare  hare<br>
                    hare krishna hare krishna krishna krishna hare hare <br>
	                  hare ram hare ram hare rama rama hare  hare ...... </p>
     <button class="btn bg-success text-white ml-5"><a href="About.php">Click more</a></button>
    
	  </div>
	  </div>
    </div>
</section>
<!--end about-->
<!--start Gellary-->

<section class="container-fluid">
<h1 class=" text-center text capitalize pt-5">Gellary</h1>
<hr class="w-25 mx-auto pt-5">

<div class="container">

	<div class="row my-5 mx-6 gx-0 gy-3">
		  <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th5.jpg" class="image-fluid" alt="image/th5.jpg">
		  </figure>
		  </div>

      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th4.jpg" class="image-fluid" alt="image/th4.jpg">
		  </figure>
		  </div>
      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th7.jpg" class="image-fluid" alt="image/th7.jpg">
		  </figure>
		  </div>
      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th3.jpg" class="image-fluid" alt="image/th3.jpg">
		  </figure>
		  </div>
      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th6.jpg" class="image-fluid" alt="image/th6.jpg">
		  </figure>
		  </div>

      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
		  <figure>
		  <img src="image/th2.jpg" class="image-fluid" alt="image/th2.jpg">
		  </figure>
		  </div>
</div>
</section>
<!--end gellary-->
<
   <br>
  

    <!--str join us-->
	 
	 <section class="bg-primary">
	    <article class="py-5">
	         <div class=" text-center text-white">
			 <h3 class="display-4 text-white">Want to join</h3>
			 <p> be a part opf m thechnical family</p>
			 <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">join now</button>
			 </div>
	  
	  
	  <div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Signup</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!--end joinus -->
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
	    </article>
	 
	 </section>
   <!--end joinus -->

<!--start videos-->

<section class="main-heading my-5 pt-5 offer-style"> 
		 
             <div class="container fluid">
	           <div class="row">
		         <div class="col-xxl-12 col-12 py-5 text-center">
		            <h1>Check out my videos</h1>
					<p>Naver give up something that you cont go a day</p>
					<a href="https://www.youtube.com/"target="_mathura">
					<button type="button" class="btn btn-outline-dark"data-toggle="modal" data-target="#exampleModal" 
					             data-placement="right" title="click here">                                
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg>Click Here
                 </button> </a>
		          </div>
		        </div>
		      </div>
		   </section>
       <!--end videos-->
        <!--start contCT-->
       <section>
		   
		   <div class="text-center my-2 pt-3">
         <h1><a class="dropdown-item" href="Contact.php">Contact Us</a></h1>
		 <hr/ class="w-25 mx-auto">
      </div>
      <div class="container">
	           <div class="row">
		         <div class="col-xxl-8 col-10 col-md-8 mx-auto">
				 <form action="userinfo.php" method="post">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Name</label>
    <input type="user" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="adress" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Comments</label>
    <input type="mobile" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
				 </div>
		       </div>
             </div>
           </section>
            <!--end contact-->

           <!--str contact us-->
	 
   <section class="bg-primary mt-3">
         <article class="py-5 text-center text-white">
              <div>
          <h3 class="display-4 text-white">+98777837129</h3>
          <p>if you want to best service call us now</p>
          <button class="btn btn-warning">contact now</button>
          </div>
       
         </article>
      
      </section>
      <!--contact end -->



            <footer class="pt-5">
            <p class="p-3 bg-dark text-white text-center">@Mtechnicalproduction</p>
            </footer>
</body>
</html>