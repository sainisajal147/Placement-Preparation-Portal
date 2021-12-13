
<style>
#accordion
{
	padding-top:15px;
}
.card-link{
	color: black;
    background-color: #fff;
	cursor:pointer;
}
.card-header{
	background-color: #fff;
}
</style>
	<body>
		<div class="col-lg-2">
			<!-- <div class="card">
				<div class="card-header">
					FILTERS
				</div>
			</div> -->
			<div id="accordion">
				<div class="card">
			    	<div class="card-header">
			    		<div class="card-link" data-toggle="collapse" href="#collapseOne">
			        		Discipline
			      		</div>
			    	</div>
				    <div id="collapseOne" class="collapse show" data-parent="#accordion">
				      	<div class="card-body">
				        	<div class="form-check">
							<input class="form-check-input" type="checkbox" id="cse">
							<label class="form-check-label" for="cse">C.S.E.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="ee">
							<label class="form-check-label" for="ee">E.E.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="me">
							<label class="form-check-label" for="me">M.E.</label>
						</div>
				      	</div>
				    </div>
	  			</div>
			  	<div class="card">
				    <div class="card-header">
					    <div class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					        Type
					    </div>
				    </div>
				    <div id="collapseTwo" class="collapse" data-parent="#accordion">
				      	<div class="card-body">
			        		<div class="form-check">
								<input class="form-check-input" type="checkbox" id="coding">
								<label class="form-check-label" for="coding">Coding</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="technical">
								<label class="form-check-label" for="technical">Technical</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="aptitude">
								<label class="form-check-label" for="aptitude">Aptitude</label>
							</div>
				      	</div>
				    </div>
			  	</div>
			  	<div class="card">
			    	<div class="card-header">
			      		<div class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
			        		Year
			      		</div>
			    	</div>
			    	<div id="collapseThree" class="collapse" data-parent="#accordion">
			      		<div class="card-body">
			        		<div class="dropdown">
	  							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    							YEAR
	  							</button>
	  							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">2019</a>
								    <a class="dropdown-item" href="#">2020</a>
							  	</div>
							</div>
			      		</div>
			    	</div>
			  	</div>
			  	<div class="card">
			    	<div class="card-header">
			    		<div class="card-link" data-toggle="collapse" href="#collapseFour">
			        		Opportunity
			      		</div>
			    	</div>
				    <div id="collapseFour" class="collapse" data-parent="#accordion">
				      	<div class="card-body">
				        	<div class="form-check">
								<input class="form-check-input" type="checkbox" id="placement">
								<label class="form-check-label" for="placement">Placement</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="internship">
								<label class="form-check-label" for="internship">Internship</label>
							</div>
				      	</div>
				    </div>
			  	</div>
			  	<div class="card">
			    	<div class="card-header">
			    		<div class="card-link" data-toggle="collapse" href="#collapseFive">
			        		Company
			      		</div>
			    	</div>
				    <div id="collapseFive" class="collapse" data-parent="#accordion">
				      	<div class="card-body">
				        	<div class="form-check">
								<input class="form-check-input" type="checkbox" id="google">
								<label class="form-check-label" for="google">Google</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="microsoft">
								<label class="form-check-label" for="microsoft">Microsoft</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="apple">
								<label class="form-check-label" for="apple">Apple</label>
							</div>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								more >>
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  	<div class="modal-dialog" role="document">
							    	<div class="modal-content">
							      		<div class="modal-header">
							        		<h5 class="modal-title" id="exampleModalLabel">Select Company</h5>
							        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          			<span aria-hidden="true">&times;</span>
							        		</button>
							      		</div>
							      		<div class="modal-body">
							        		<div class="container">
							        			<div class="row">
								        			<div class="col">
							        					<div class="form-check">
															<input class="form-check-input" type="checkbox" id="amazon">
															<label class="form-check-label" for="amazon">Amazon</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" id="flipkart">
															<label class="form-check-label" for="flipkart">Flipkart</label>
														</div>
								        			</div>
								        			<div class="col">
							        					<div class="form-check">
															<input class="form-check-input" type="checkbox" id="netflix">
															<label class="form-check-label" for="netflix">Netflix</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" id="hotstar">
															<label class="form-check-label" for="hotstar">Hotstar</label>
														</div>
								        			</div>
								        			<div class="col">
							        					<div class="form-check">
															<input class="form-check-input" type="checkbox" id="myntra">
															<label class="form-check-label" for="myntra">Myntra</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" id="dell">
															<label class="form-check-label" for="dell">Dell</label>
														</div>
								        			</div>
								        			<div class="col">
							        					<div class="form-check">
															<input class="form-check-input" type="checkbox" id="acer">
															<label class="form-check-label" for="acer">Acer</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" id="lenovo">
															<label class="form-check-label" for="lenovo">Lenovo</label>
														</div>
								        			</div>
								        		</div>
							        		</div>
							      		</div>
							      		<!-- <div class="modal-footer">
							        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        		<button type="button" class="btn btn-primary">Save changes</button>
							      		</div> -->
							    	</div>
							  	</div>
							</div>
				      	</div>
				    </div>
			  	</div>
			</div>
		</div>

		</body>