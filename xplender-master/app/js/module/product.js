

define(function(require){
	var $ = require('jquery'),
		common = require('common'),
		tab = require('tab'),
		slider = require('slider'),
		validate = require('validate');

	// product show
	$('.photo_show').slider({
		auto: false,
		createControl: false
	});

	// collection 
	$('.info_item_pur .collection').on('click', function(){
		$(this).toggleClass('active');
	});

	// set amount
	common.setAmount($('.pur_num'));

	$('.product_des').tab();

	// add star
	function showStar(index, state){
		$('.add_star li').removeClass(state);
		for(var i=0; i<=index; i++){
			$('.add_star li').eq(i).addClass(state);
		}
	}

	$('.add_star').on('mouseenter', 'li', function(){
		var index = $(this).index();
		showStar(index, 'active');
	});

	$('.add_star').on('mouseleave', function(){
		$('.add_star li').removeClass('active');
	});

	$('.add_star').on('click', 'li', function(){
		var index = $(this).index();
		showStar(index, 'current');
		$('#review_star').val(index + 1);
	});

	// add review
	$('.customer_review_form').validate({
		rules: {
			review_star: 'required',
			text_info: 'required'
		},
		messages: {
			review_star: 'Please star',
			text_info: 'Please review'
		},
		debug: true,
		ignore: '',
		submitHandler: function(form){
			form.submit();
		}
	});


});