jQuery(function() {
	//jquery here
});

function br__loading_ON(plugin_url) { 
	document.getElementById('br__processes_stats_container').innerHTML = '<img src="'+plugin_url+'/views/assets/img/loading.gif">'; 
}
function br__loading_OFF() { 
	document.getElementById('br__processes_stats_container').innerHTML = ""; 
}

function br__failed(msg) {
	document.getElementById('br__processes_stats_container').innerHTML = '<div class="alert alert-danger" role="alert">'+msg+'</div>'; 
}
function br__failed2(msg) {
	document.getElementById('br__processes_stats_container2').innerHTML = '<div class="alert alert-danger" role="alert">'+msg+'</div>'; 
}
function br__failed3(msg) {
	document.getElementById('br__processes_stats_container3').innerHTML = '<div class="alert alert-danger" role="alert">'+msg+'</div>'; 
}
function br__failed4(msg) {
	document.getElementById('br__processes_stats_container4').innerHTML = '<div class="alert alert-danger" role="alert">'+msg+'</div>'; 
}


function br__success(msg) {
	document.getElementById('br__processes_stats_container').innerHTML = '<div class="alert alert-success" role="alert">'+msg+'</div>'; 
}
function br__success2(msg) {
	document.getElementById('br__processes_stats_container2').innerHTML = '<div class="alert alert-success" role="alert">'+msg+'</div>'; 
}
function br__success3(msg) {
	document.getElementById('br__processes_stats_container3').innerHTML = '<div class="alert alert-success" role="alert">'+msg+'</div>'; 
}
function br__success4(msg) {
	document.getElementById('br__processes_stats_container4').innerHTML = '<div class="alert alert-success" role="alert">'+msg+'</div>'; 
}


/* helpers
var plugin_url = $("#br__plugin_url").val();
var plugin_url = $("#br__ajax_url").val();

br__loading_ON(plugin_url);
br__loading_OFF();

br__failed('test here');
br__failed2('test here');
br__failed3('test here');
br__failed4('test here');

br__success('test here');
br__success2('test here');
br__success3('test here');
br__success4('test here');
*/