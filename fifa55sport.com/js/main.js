jQuery(window).resize(function(){jQuery.sidr('close','sidr-main');});$(document).ready(function(){$('#responsive-menu-button').sidr({name:'sidr-main',source:'#navigation-only'});$('#sidr-id-closebtn').click(function(){$.sidr('close','sidr-main');});$('.toggle-btn').click(function(e){e.preventDefault();$(this).closest('li').find('.toggle-content').not(':animated').slideToggle();});$(".toggle-btn").click(function(){$(this).toggleClass("active");});$(window).stellar()});