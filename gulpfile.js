var gulp = require('gulp');
var Elixir = require('laravel-elixir');

Elixir.config.production = true;
Elixir.config.sourcemaps = true;
Elixir.config.assetsPath = './assets';
Elixir.config.publicPath = './assets';
Elixir.config.cssOutput = 'assets/css/test.css';
Elixir.config.jsOutput = 'assets/js';
Elixir.config.viewPath = './';

Elixir.config.css.sass.folder = 'scss';
Elixir.config.css.sass.pluginOptions.precision = 10;

Elixir( function(mix) {
	var styles = [
		'./assets/scss/main.scss'
	];
	
	var scripts = [
		'./assets/vendor/bootstrap-sass/assets/javascripts/bootstrap-sprockets.js',
		'./assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.js',
		'./assets/js/main.js'
	];
	
	mix.sass(styles, 'assets/css/app.css')
		.scripts(scripts, 'assets/js/app.js');
});
