@extends('layouts.master')

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
	
		<div class="container">
			<div class="row">
				<div class="col-md-14">
					<div class="card p-4">
						<form class="form" action="contact" method="POST">							{{ csrf_field() }}
							
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@else
								<h1>Contact</h1>
								<img src="/img/ncs dept.jpg", height="500", width="700" style="float:right"></img>
								<div class="form-group">
									<label for="name">Name</label>
									<input class="form-control" type="text" id="name" required placeholder="Enter your name..." name="name">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control" type="email" id="email" required placeholder="Enter your email..." name="email">
								</div>
								<div class="form-group">
									<label for="message">Message</label><br>
									<textarea name="message" id="message" class="form-control" rows="10"></textarea>
								</div>
								<button class="btn-btn primary" type=submit">Send</button>

							@endif
						</form>
					</div>
				</div>
			</div>
		</div>  
		
    </div>
  </div>

<!-- END MAIN -->

</div>