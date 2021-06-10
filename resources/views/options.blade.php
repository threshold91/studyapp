

<div class="container-fluid">
  <div class="row">

    <div class="min-vh-100 col-sm-12 col-md-12 col-lg-12 col-xl-12 srednji">
		<div class="container">		
			<div class="row">
				<!-- vijedi isto sve ko prije samo za drugi div, središnji sadržaj je promijenjen no ovdje je postavljena širina na col-8 jer je inače prerastegnuto-->
						
				<div class="col-8 mx-auto">
					<h2>Profile settings</h2>
						
					<div style="padding-top: 30px;">
						<div class="form-group">				
							<label for="pphoto">Chenge your profile picture: </label><br>
							<input type="file" accept="image/jpg,image/gif" class="input-text" name="pphoto"/> 
						</div>
						
						<br><br><br>
						
						
						
						<div class="form-group">
								<label for="user">What college do you attend?</label>
							  <select class="custom-select" id="category1" name="category1">
								<option selected>Choose...</option>
								<option value="tvz">TVZ</option>               
								<option value="pmf">PMF</option> 
								<option value="fer">FER</option> 
								<option value="kif">KIF</option> 
						  </select>
							
							</div>
						
						
						<div class="form-group">				
							<label for="user">What music do you like?</label>
							  <select class="custom-select" id="category2" name="category2">
								<option selected>Choose...</option>
								<option value="lofi">Lo-fi</option>               
								<option value="medi">Medieval fantasy</option> 
								<option value="instr">Instrumental</option> 
								<option value="ambi">Ambiental</option> 
						  </select>
							</div>
							<br>
							
							
							<div class="form-group">
								<label for="pass">Change your password:</label>
								  <input type="password" class="form-control" placeholder="Enter password" name="pass">				
							
							</div><br><br>
							
							
							<div class="form-group">
							
								<label class="form-check-label" for="breaks">
									Do you need breaks?
								  </label>
							  <input class="form-check-input" type="checkbox" value="" id="breaks" checked>
							  
							
						</div>
						
						<div class="form-group">
							
								<label class="form-check-label" for="advice">
									Do you want advice?
								  </label>
							  <input class="form-check-input" type="checkbox" value="" id="advice" checked>
							  
							
						</div>
						
						<div class="form-group" style="padding-top: 50px;">
							<button onclick="document.location='naslovnica.html'" type="submit" class="btn mt-3 mr-3" style="background-color: #a2d0c1;"><b>Save changes</b></button>
							
							<button onclick="document.location='naslovnica.html'" type="button" class="btn btn-light mt-3 mr-3"><b>Cancel</b></button>
						</div>
					</div>				
					
				</div>
			</div>
		</div>					
	</div>
	


