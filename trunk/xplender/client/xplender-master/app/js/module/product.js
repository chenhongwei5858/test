

define(function(require){
	var $ = require('jquery'),
		common = require('common'),
		slider = require('slider');

	// product show
	$('.photo_show').slider({
		auto: false,
		createControl: false
	});

	// set amount
	common.setAmount($('.pur_num'));

});