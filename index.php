<?php
$min  = 1;
$max  = 300;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap Form With a Simple Math Quiz As Spam Protection</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<style>
			body {
				background: #fafbfb;
			}
		</style>
	</head>
	<body class="my-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<h1 class="mb-3">Contact Us</h1>
					<form>
						<div class="row g-3">
							<div class="col-md-6">
								<label for="your-name" class="form-label">Your Name</label>
								<input type="text" class="form-control" id="your-name" name="your-name" required>
							</div>
							<div class="col-md-6">
								<label for="your-surname" class="form-label">Your Surname</label>
								<input type="text" class="form-control" id="your-surname" name="your-surname" required>
							</div>
							<div class="col-md-6">
								<label for="your-email" class="form-label">Your Email</label>
								<input type="email" class="form-control" id="your-email" name="your-email" required>
							</div>
							<div class="col-md-6">
								<label for="your-subject" class="form-label">Your Subject</label>
								<input type="text" class="form-control" id="your-subject" name="your-subject">
							</div>
							<div class="col-12">
								<label for="your-message" class="form-label">Your Message</label>
								<textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
							</div>
							<div class="col-12">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<label for="quiz" class="col-sm-3 col-form-label">
												<?php echo $num1 . '+' . $num2; ?>?
											</label>
											<div class="col-sm-9">
												<input type="text" class="form-control quiz-control" id="quiz">
											</div>
										</div>
									</div>
									<div class="col-md-6 text-end">
										<button type="reset" class="btn btn-link link-dark">Reset</button>
									</div>
								</div>
							</div> 
							<div class="col-12">
								<div class="row">
									<div class="col-md-6">
										<button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100 fw-bold" disabled>Send</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>    

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script>
			const submitButton = document.querySelector('[type="submit"]');
			const quizInput = document.querySelector(".quiz-control");
			quizInput.addEventListener("input", function(e) {
				const res = submitButton.getAttribute("data-res");
				if ( this.value == res ) {
					submitButton.removeAttribute("disabled");
				} else {
					submitButton.setAttribute("disabled", "");
				}
			});
		</script>
	</body>
</html>
