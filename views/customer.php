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
        <h2 class="featurette-heading">SIGNUP <span class="text-muted">Create an Account</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
						<br clear="all" />
						<div id="client-card">
							<div class="b-client">
                                <p><input id="br__first_name" value="" placeholder="First Name" type="text" /></p>
                                <p><input id="br__last_name" value="" placeholder="Last Name" type="text" /></p>
                                <p><input id="br__address" value="" placeholder="Address" type="text" /></p>
                                <p><input id="br__city" value="" placeholder="City" type="text" /></p>
                                <p>
                                <select id="br__state">
                                    <option value="">Select State</option>
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
                                </p>
                                <p><input id="br__phone" value="" placeholder="Phone" type="text" /></p>
                                <p><input id="br__email" value="" placeholder="Email" type="text" /></p>
                                <p><input id="br__password" value="" placeholder="Password" type="password" /></p>
                                <p><input id="br__submit" value="Submit" type="button" /></p>
							</div>
                        </div>                                
                        <?php include("common.processes_container.php"); ?>
                        <div class="row" id="next"></div>          
      </div>
    </div>

	<hr class="featurette-divider">
    
  </div><!-- /.container -->


	<?php include("footer.php"); ?>
</main>

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      
  </body>
</html>