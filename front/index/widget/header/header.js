
var tpl = __inline('tpl.ejs');

$(function(){
	console.log(__uri('../../static/image/1.jpg'));
	console.log(tpl({name:'kenny'}));
})