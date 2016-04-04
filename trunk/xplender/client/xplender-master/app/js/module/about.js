

define(function(require){

	var $ = require('jquery'),
		tab = require('tab'),
		validate = require('validate');

	// contact us
	$('#message_form').validate();

	// terms
	$('.tabs_term').tab();

});