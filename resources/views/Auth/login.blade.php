<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
	<section class="text-center text-lg-start">
		<style>
		  .cascading-right {
			margin-right: -50px;
		  }
	  
		  @media (max-width: 991.98px) {
			.cascading-right {
			  margin-right: 0;
			}
		  }
		</style>
	<div class="container py-4">
		<div class="row g-0 align-items-center">
		  <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
			<div class="card cascading-right mt-4" data-aos="fade-right"
			data-aos-offset="300"
			data-aos-easing="ease-in-sine"	 style="
				background: hsla(0, 0%, 100%, 0.55);
				backdrop-filter: blur(30px);
				">
			  <div class="card-body p-5 shadow-5 text-center">
				<h2 class="fw-bold mb-5">Login Now</h2>
				<form method="POST" action="{{route('loginStore')}}">
				  <!-- 2 column grid layout with text inputs for the first and last names -->
					@csrf
				  <!-- Email input -->
				  <div class="form-outline mb-4">
					<input type="email" id="form3Example3" name="email" class="form-control" placeholder="Email"/>
				  </div>
	
				  <!-- Password input -->
				  <div class="form-outline mb-4">
					<input type="password" name="password" id="form3Example4" class="form-control" placeholder="Password"/>
				  </div>
	
				 
	
				  <!-- Submit button -->
				  <button type="submit" class="btn btn-block mb-0 px-5" style="border-radius: 50px; background-color: #008374">
					Login
				  </button>
	
				  <!-- Register buttons -->

				</form>
			  </div>
			</div>
		  </div>
	
		  <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
			<img src="https://tse1.mm.bing.net/th?id=OIP.VZJXcuTxsbgguYYfAK088QHaEK&pid=Api&P=0" class="rounded-4 shadow-4" style="width: 600px;"
			  alt="" />
		  </div>
		</div>
	  </div>
	  <!-- Jumbotron -->
	</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src=" {{url('assets/js/main.js')}} "></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>