// JavaScript Document
var $ = jQuery;
$(document).ready(function(e) {
	$(".menu-item-has-children").on('mouseover', function(e) {
		var id = $(this).attr('id');
		$("#"+id+" .sub-menu").show();
	});
});