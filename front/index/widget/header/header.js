
var tpl = __inline('tpl.ejs');
var util = require('common/widget/util/util.js');

$(function(){
	console.log(__uri('../../static/image/1.jpg'));
	console.log(tpl({name:'kenny'}));
	util.excute();
})