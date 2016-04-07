define(function(require, exports, module){
	// common func
	var $ = require('jquery'),
		layer = require('layer');

	// login layer
	// exports.base = function(){
	// 	$('#login').on('click', function(){
	// 		layer.open({
	// 			type: 1,
	// 			title: 'login',
	// 			content: 'login form'
	// 		});
	// 	});
	// };	

	exports.setAmount = function(element){

		// reduce
		element.on('click', '.num_sub', function(){
			var amount_input = $(this).parent().find('input'),
				amount = parseInt(amount_input.val());
			if(amount > 0){
				amount_input.val(amount - 1);
			}
		});

		// add
		element.on('click', '.num_add', function(){
			var amount_input = $(this).parent().find('input'),
				amount = parseInt(amount_input.val());
			
			amount_input.val(amount + 1);
		});
	};

});