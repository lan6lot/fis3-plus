module.exports = {
	
	repeat:function(str,num){
		if(typeof(str) !== 'string'){
			console.log('only accept string!')
			return false;
		}
		return str.repeat(num);
	}

}