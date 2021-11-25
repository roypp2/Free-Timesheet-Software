$(document).ready(function(){

	
	$(function(){
		var cid = '';			   
		br__customer_delete_form_confirmed = function()
		{
					$('#save_all_changes_loader').html('<div class="form-floating mb-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
					var data = {
						'cid': cid
					};					
					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=br__customer_delete_confirmed_selected_account',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#save_all_changes_loader').html('');
								$('#br__customers_delete_container').html('<div class="alert alert-success" role="alert">'+data.response_message+'</div>');
								$('#tr_id'+cid).hide();
							}
							else 
							{
								$('#br__customers_delete_container_loader').html('<div class="alert alert-danger" role="alert">'+data.response_message+'</div>');
							}						   
					   }
				   });
		}
		
		br__customer_delete_form = function(id)
		{
					cid = id;
					$('#save_all_changes_loader').html('<div class="form-floating mb-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
					var data = {
						'cid': id
					};					
					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=br__customer_delete_selected_account',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#save_all_changes_loader').html('');
								$('#br__customers_delete_container').html(data.response_message);
							}
							else 
							{
								$('#br__customers_delete_container_loader').html('<div class="alert alert-danger" role="alert">'+data.response_message+'</div>');
							}						   
					   }
				   });
		}
		
		br__customer_edit_form = function(id)
		{
					$('#save_all_changes_loader').html('<div class="form-floating mb-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
					var data = {
						'cid': id
					};					
					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=br__customer_selected_account',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#save_all_changes_loader').html('');
								$('#br__customers_update_container').html(data.response_message);
							}
							else 
							{
								$('#save_all_changes_loader').html('<div class="alert alert-danger" role="alert">'+data.response_message+'</div>');
							}						   
					   }
				   });
		}
		
		br__customer_edit_form_save = function(a)
		{
					$('#br__customers_update_container_loader').html('<div class="form-floating mb-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
					$.ajax({
					   type: 'post',
					   data: $("#br__customer_edit_form").serialize(),
					   url: 'index.php?page=br__customer_page&action=br__customer_selected_account_save',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#br__customers_update_container_loader').html('<div class="alert alert-success" role="alert">'+data.response_message+'</div>');
							}
							else 
							{
								$('#br__customers_update_container_loader').html('<div class="alert alert-danger" role="alert">'+data.response_message+'</div>');
							}
					   }
				   });
		}
		
		
		
		admin_update__save_all_changes = function(a)
		{
					$('#save_all_changes_loader').html('<div class="form-floating mb-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
					$.ajax({
					   type: 'post',
					   data: $("#customer_manager_update_form").serialize(),
					   url: 'index.php?page=br__customer_page&action=answers_update__save_all_changes&a='+a,
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#save_all_changes_loader').html('<div class="alert alert-success" role="alert">'+data.response_message+'</div>');
							}
							else 
							{
								$('#save_all_changes_loader').html('<div class="alert alert-danger" role="alert">'+data.response_message+'</div>');
							}						   
							$('#br__answers_container'+sel_id).html(data.response_message);	
							window.location = "?page=br__customer_page&action=report";
					   }
				   });
		}
	})
	
	$('#br__admin_submit').click(
        function (e) {
			var validate = true;
					e.preventDefault();
					$('#customer_manager_save_form_loader_div').html('<img src="views/assets/img/loading.gif" style="height:80px;" align=center>');					
					$.ajax({
					   type: 'post',
					   data: $("#customer_manager_save_form").serialize(),
					   url: 'index.php?page=br__customer_page&action=customer_manager_save',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								$('#customer_manager_save_form_loader_div').html(data.response_message);
								$('#client-card').html('');
								window.location = "?page=br__customer_page&action=report";
							}
							else 
							{
								$('#customer_manager_save_form_loader_div').html(data.response_message);
							}
						   
					   }
				   });
        });
	
	$('#br__submit').click(
        function (e) {
			var validate = true;
			if(validate)
			{
					e.preventDefault();
					
					var br__first_name = $('#br__first_name').val();
					var br__last_name = $('#br__last_name').val();
					var br__address = $('#br__address').val();
					var br__city = $('#br__city').val();
					var br__state = $('#br__state').val();
					var br__phone = $('#br__phone').val();
					var br__email = $('#br__email').val();
					var br__password = $('#br__password').val();

					var data = {
						'br__first_name': br__first_name,
						'br__last_name': br__last_name,
						'br__address': br__address,
						'br__city': br__city,
						'br__state': br__state,
						'br__phone': br__phone,
						'br__email': br__email,
						'br__password': br__password
					};

					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=save',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								br__success(data.response_message);
								$('#client-card').html('');
								window.location = "?page=br__lead_page";
								$('#next').html('<br /><a href="?page=br__lead_page">Add New Lead</a>');
							}
							else 
							{
								br__failed(data.response_message);
							}
						   
					   }
				   });
			}
			else
			{
				br__failed('failed..');
			}
        });


	$('#br__save_account').click(
        function (e) {
			var validate = true;
			if(validate)
			{
					e.preventDefault();
					
					var br__first_name = $('#br__first_name').val();
					var br__last_name = $('#br__last_name').val();
					var br__address = $('#br__address').val();
					var br__city = $('#br__city').val();
					var br__state = $('#br__state').val();
					var br__phone = $('#br__phone').val();
					var br__email = $('#br__email').val();

					var data = {
						'br__first_name': br__first_name,
						'br__last_name': br__last_name,
						'br__address': br__address,
						'br__city': br__city,
						'br__state': br__state,
						'br__phone': br__phone,
						'br__email': br__email
					};

					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=myaccount_save',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								br__success(data.response_message);
							}
							else 
							{
								br__failed(data.response_message);
							}
						   
					   }
				   });
			}
			else
			{
				br__failed('failed..');
			}
        });


	$('#br__login').click(
        function (e) {
			var validate = true;
			if(validate)
			{
					e.preventDefault();
					var br__email = $('#br__email').val();
					var br__password = $('#br__password').val();
					
					var data = {
						'br__email': br__email,
						'br__password': br__password
					};

					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=login',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								br__success(data.response_message);
								window.location = data.redirect;
							}
							else
							{
								br__failed(data.response_message);
							}
						   
					   }
				   });
			}
			else
			{
				br__failed('failed..');
			}
        });
	
	$('#br__resetpass').click(
        function (e) {
			var validate = true;
			if(validate)
			{
					e.preventDefault();
					var br__email = $('#br__email').val();
					var data = {
						'br__email': br__email
					};

					$.ajax({
					   type: 'post',
					   data: data,
					   url: 'index.php?page=br__customer_page&action=resetpass_submit',
					   dataType: 'json',
					   success: function (data) 
					   {
							if (data.response === true) 
							{
								br__success(data.response_message);
								//window.location = "?page=br__customer_page&action=resetpass_submit";
							}
							else
							{
								br__failed(data.response_message);
							}
						   
					   }
				   });
			}
			else
			{
				br__failed('failed..');
			}
        });	
	
	$('#br__resetpass_form').click(
        function (e) {
			var validate = true;
			if(validate)
			{
					e.preventDefault();
					var br__email = $('#br__email').val();
					var br__scode = $('#br__scode').val();
					var br__password = $('#br__password').val();
					var br__password2 = $('#br__password2').val();
					if(br__password != br__password2)
					{
						br__failed('Password not matched!');
					}
					else
					{
						var data = {
							'br__email': br__email,
							'br__scode': br__scode,
							'br__password': br__password
						};
	
						$.ajax({
						   type: 'post',
						   data: data,
						   url: 'index.php?page=br__customer_page&action=resetpass_form_save',
						   dataType: 'json',
						   success: function (data) 
						   {
								if (data.response === true) 
								{
									br__success(data.response_message);
									//window.location = "?page=br__customer_page&action=resetpass_submit";
								}
								else
								{
									br__failed(data.response_message);
								}
							   
						   }
					   });
					}
			}
			else
			{
				br__failed('failed..');
			}
        });		
	

});

