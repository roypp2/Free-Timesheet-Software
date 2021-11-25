<?php $temp = $data['result_data']; ?>
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
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
						<br clear="all" />
						<div id="client-card">

						<table class="table table-bordered invoice-hist">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>ADDRESS</th>
                                    <th>CITY</th>
                                    <th>STATE</th>
                                    <th>PHONE</th>
                                    <th>EMAIL</th>
                                    <th>CARD TYPE</th>
                                    <th>CARD NUMBER</th>
                                    <th>CARD EXP DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                           
							<?php for ($x = 0; $x< count($temp); $x++) { ?>
                                <tr>
                                    <td class="col-md-2">
                                        <p><?php echo $temp[$x]['id']; ?></p>
                                    </td>                                
                                    <td class="col-md-2">
                                        <p><?php echo $temp[$x]['first_name']; ?></p>
                                    </td>
                                    <td class="col-md-2">
                                        <p><?php echo $temp[$x]['last_name']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['address']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['city']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['state']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['phone']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['email']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['card_type']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['card_number']; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $temp[$x]['card_exp_date']; ?></p>
                                    </td>
                                </tr>
							<?php } ?>                                
                            </tbody>
                        </table>                         </div>                                
                        <?php include("common.processes_container.php"); ?>
                        <div class="row" id="next"></div>          
      </div>
    </div>

	<hr class="featurette-divider">
    
  </div><!-- /.container -->

	<?php include("footer.php"); ?>
	</main>
  </body>
</html>
