/**
 * 
 */

var lang = "DAN";
var page = "home";

var eng = {'Produkter':'Products',
		'Toiletter':'Toilets'
//			'Muldtoilet',
//			'SeparettVilla',
//			'SeparettWeekend',
//			'SeparettResqueCamping',
//			'SeparettTilbehoer',
//			'ToerDas',
//			'Sanitoa',
//			'Flame',
//			'BarneToilet',
//			'BarneSkammel',
//			'EcoDry',
//			'ESMP',
//			'EcoDryBoks',
//			'Separationstoilet',
//			'Vakuumtoilet',
//			'Kompost',
//			'Rapporter'
			
}
var deu = {};
var dan = {};

	

$(document).ready(function(){
	loadPage();
	switchMenuDan();
	attachClickHandlers();
	

	
});

function attachClickHandlers(){
	$('li.linked, ul.linked li').click(function(event) {
		$('li.linked, .linked li ').removeClass("active");
		if (this.id !='Produkter'){
			$(this).addClass("active");
		}
		page = this.id;
		loadPage();
		
	});
	$('li.collapsed').click(function(){
		$(this).toggleClass("active");
		
	});
	
	$('#languages li').click(function(event){
		lang = this.id;
		page = 'home';
		if (lang=='ENG') {switchMenuEng()};
		if (lang=='DEU') {switchMenuDeu()};
		if (lang=='DAN') {switchMenuDan()};
		
		$('#languages li').removeClass("active");
		$(this).addClass("active");
		
	});
	$('.brand').click(function(){
		page= 'home';
		loadPage();
	});
}

function loadPage(){
	
	$('#maincontainer').load('pages' + lang + "/" + page + ".html");
	
}

function switchMenuEng(){
	$('#nav-side-menu').load('sidemenuENG.html', function(){
		attachClickHandlers();
	});
	loadPage();
}

function switchMenuDeu(){
	$('#nav-side-menu').load('sidemenuDEU.html', function(){
		attachClickHandlers();
	});
	loadPage();
}
function switchMenuDan(){
	$('#nav-side-menu').load('sidemenuDAN.html', function(){
		attachClickHandlers();
	});
	loadPage();
}
function switchLangDan(){
	lang='DAN';
	page='home';
	switchMenuDan();
}
function switchLangEng(){
	lang='ENG';
	page='home';
	switchMenuEng();
}
function switchLangDeu(){
	lang='DEU';
	page='home';
	switchMenuDeu();
}
