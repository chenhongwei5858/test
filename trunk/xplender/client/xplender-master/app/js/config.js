

;(function(){

	seajs.config({

		// 基础路径
		base: './',

		// 变量设置
		vars: {
			'plugin': 'js/plugin/',
			'module': 'js/module/'
		},

		// 设置别名
		alias: {
			'jquery': '{plugin}jquery.js',
			'slider': '{plugin}slider.js',
			'tab': '{plugin}tab.js',
			'validate': '{plugin}validate/jquery.validate.js',
			'addMethod': '{plugin}validate/additional-methods.js',

			'common': 'js/common.js',
			'index': '{module}index.js',
			'product': '{module}product.js',
			'cart': '{module}cart.js',
			'order': '{module}order.js',
			'about': '{module}about.js'
		},

		preload: ['jquery']

	});

})();