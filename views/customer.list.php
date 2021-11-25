<?php 
	$temp = $data['result_data']; 
	$counter = 1;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Test</title>

    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" media="all" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" title="win2k-1" />
    <link rel="stylesheet" type="text/css" media="all" href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" title="win2k-1" />
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">    
    <!--ended - bootstrap -->  
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="views/assets/js/customer.js"></script>
    <script type="text/javascript" src="views/assets/js/common.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="views/assets/css/bootstrap-4.5.3-dist/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<?php include("nav.php"); ?>

<main>

  <div class="container marketing">

    <div class="row featurette">
      <div class="col-md-12">
        <h2 class="featurette-heading">CUSTOMER <span class="text-muted">manager customers</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
						<br clear="all" />
						<div id="client-card">

							<form id="customer_manager_save_form">
							<div class="b-client">
                        
								<div class="row justify-content-start">
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__first_name" name="br__first_name" value="" type="text" class="form-control" />
                                            <label for="floatingInput">First Name</label>
										</div>                                            
                                    </div>
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__last_name" name="br__last_name" value="" type="text" class="form-control" />
                                            <label for="floatingInput">Last Name</label>
										</div>                                            
                                    </div>                                    
								</div> 
								<div class="row justify-content-start">
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__address" name="br__address" value="" type="text" class="form-control" />
                                            <label for="floatingInput">Address</label>
										</div>                                            
                                    </div>
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <select id="br__state" name="br__state" class="form-control">
                                                <option value=""></option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>                                
                                            <label for="floatingInput">State</label>
										</div>                                            
                                    </div>                                    
								</div> 
								<div class="row justify-content-start">
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__city" name="br__city" value="" class="form-control" type="text" />
                                            <label for="floatingInput">City</label>
										</div>                                            
                                    </div>
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__phone" name="br__phone" value="" class="form-control" type="text" />
                                            <label for="floatingInput">Phone</label>
										</div>                                            
                                    </div>                                    
								</div>                                 
								<div class="row justify-content-start">
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <input id="br__email" name="br__email" value="" class="form-control" type="text" />
                                            <label for="floatingInput">Email</label>
										</div>                                            
                                    </div>
									<div class="col-6">
                                    	<div class="form-floating mb-3">
                                            <select id="br__type" name="br__type" class="form-control">
                                                <option value=""></option>
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="CUSTOMER">CUSTOMER</option>
                                            </select>                                
                                            <label for="floatingInput">Type</label>
										</div>                                            
                                    </div>                                    
								</div> 
								<div class="row justify-content-start">
                                    <div class="col-10">
                                    	<div id="customer_manager_save_form_loader_div"></div>
                                    </div>
									<div class="col-2">
                                    	<p align="right"><input id="br__admin_submit" class="btn btn-lg btn-primary" value="Add" type="button" /></p>
                                    </div>
								</div>                                
							</div>
                            <div class="row" id="next"></div>      
							</form>
                            
							<br /><br />
                        	
                            <?php if(count($temp) > 0) { ?>
                            <form id="customer_manager_update_form">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-primary" onClick="javascript: window.location = '?page=br__customer_page&action=report&p=0'">Previous</button>
                                  <button type="button" class="btn btn-primary" onClick="javascript: window.location = '?page=br__customer_page&action=report&p=1'">Next</button>
                            </div>                            
                            <br /><br />
                            <table class="table table-bordered invoice-hist">
                                <thead class="table-dark">
                                    <tr>
                                    	<th></th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>ADDRESS</th>
                                        <th>CITY</th>
                                        <th>PHONE</th>
                                        <th>EMAIL</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?php for ($x = 0; $x< count($temp); $x++) { ?>
                                <tr id="tr_id<?php echo $temp[$x]['id']; ?>">
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="1" id="br__delete<?php echo $temp[$x]['id']; ?>" name="br__delete<?php echo $temp[$x]['id']; ?>">
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['first_name']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['last_name']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['address']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['city']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['phone']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['email']; ?></p>
                                    </td>
                                    <td>
                                       <table>
                                       		<tr>
                                            	<td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#br__customer_delete_modal" onClick="javascript: br__customer_delete_form(<?php echo $temp[$x]['id']; ?>); ">Delete</button></td>
                                            	<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#br__customer_edit_modal" onClick="javascript: br__customer_edit_form(<?php echo $temp[$x]['id']; ?>); ">Edit</button></td>
                                            	<td><button type="button" class="btn btn-primary" onClick="window.location.href='?page=br__lead_page&action=report&cid=<?php echo $temp[$x]['id']; ?>'">Leads</button></td>
                                            	<td><button type="button" class="btn btn-primary" onClick="window.location.href='?page=br__quote_page&action=report&cid=<?php echo $temp[$x]['id']; ?>'">Quotes</button></td>
											</tr>
										</table>                                                                                            
                                    </td>                                    
                                </tr>                                  	
								<?php $counter++; } ?>
                                                                    
								</tbody>
							</table>
                            
                            <br />
                            <div class="row justify-content-start">
                            	<div class="col-12">
                            		<div id="save_all_changes_loader"></div>
								</div>
							</div>                                                                    
								                                
								<div class="row justify-content-start">
									<div class="col-12">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                  <button type="button" class="btn btn-primary" onClick="javascript: window.location = '?page=br__customer_page&action=report&p=0'">Previous</button>
                                                  <button type="button" class="btn btn-primary" onClick="javascript: window.location = '?page=br__customer_page&action=report&p=1'">Next</button>
                                            </div>                            
                                    </div>
								</div>                            
                            </form>
                        	<?php } ?>
                        
						</div>                                
                        <?php include("common.processes_container.php"); ?>
                        <div class="row" id="next"></div>  
                        
                      <div class="modal-footer">
                      	<div id="br__result_status"></div>
                      </div>  
                                                    
      </div>
    </div>

	<hr class="featurette-divider">
    
  </div><!-- /.container -->

	<?php include("footer.php"); ?>
</main>


	<form id="br__customer_edit_form">
    <div class="modal fade" id="br__customer_edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          		<div id="br__customers_update_container">
                </div>
          		<div id="br__customers_update_container_loader"></div>                
          </div>
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onClick="javascript: br__customer_edit_form_save(); ">Save</button>
          </div>
        </div>
      </div>
    </div>
    </form> 
    
	<form id="br__customer_delete_form">
    <div class="modal fade" id="br__customer_delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          		<div id="br__customers_delete_container">
                </div>
          		<div id="br__customers_delete_container_loader"></div>                
          </div>
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-danger" onClick="javascript: br__customer_delete_form_confirmed(); ">Delete</button>
          </div>
        </div>
      </div>
    </div>
    </form>    
    
  </body>
</html>
