"use strict";

$.ajaxSetup({
	async: false,
});

var images;

$.get('/api/segundo-grado/singular-y-plural', function(data) {
	images = data;
},'json');

$.each(images, function(index, val) {
	var img = '<div data-type="'+val.sorp+'" class="imagen grid grid_2 center dnd"> <img data-type="'+val.sorp+'" src="'+val.path+'" id="figura" class="el"> </div>';
	$("#imagenes").append(img);
});

/* DRAG AND DROP */