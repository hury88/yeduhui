/**设置cookie
 * @param c_name
 * @param value
 * @param expiredays
 */
function setCookie(c_name,value,expiredays)
{
	var exdate=new Date()
	exdate.setDate(exdate.getDate()+expiredays)
	document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+";path=/;domain=.yeduhui.cn"
}

/**获取cookie
 * @param c_name
 * @returns
 */
function getCookie(c_name)
{
	if (document.cookie.length>0)
	  {
	  c_start=document.cookie.indexOf(c_name + "=")
	  if (c_start!=-1)
	    { 
	    c_start=c_start + c_name.length+1 
	    c_end=document.cookie.indexOf(";",c_start)
	    if (c_end==-1) c_end=document.cookie.length
	    return unescape(document.cookie.substring(c_start,c_end))
	    } 
	  }
	return ""
}

/**验证密码     请填写6到16位任意字符！
 * @param text
 * @returns {Boolean}
 */
function validInputPassword(text){
	 //^.{3}$
	 //^[A-Za-z0-9]\w{5,17}$
	 var reg = new RegExp("^.{6,16}$");
	 if(!reg.test(text)){
	    return false;
	 }else{
		 return true;
	 }
}

/**判断两个字符串是否相等
 * @param str1
 * @param str2
 * @returns {Boolean}
 */
function StrEquals(str1,str2){
	if(str1==str2){
		return true;
	}else{
		return false;
	}
}

/**验证手机号码
 * @param text
 * @returns {Boolean}
 */
function isPhone(text){
	 var reg = new RegExp("^1[3|4|5|6|7|8|9][0-9]{1}[0-9]{8}$");
	 if(!reg.test(text)){
	    return false;
	 }else{
		 return true;
	 }
}

/**验证邮箱
 * @param text
 * @returns {Boolean}
 */
function isEmail(text){
	 var reg = new RegExp("^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$");
	 if(!reg.test(text)){
	    return false;
	 }else{
		 return true;
	 }
}


/**验证用户名
 * @param text
 * @returns {Boolean}
 */
function isName(text){
	 var reg = new RegExp("^.{1,16}$");
	 if(!reg.test(text)){
	    return false;
	 }else{
		 return true;
	 }
}


/**验证汉字
 * @param text
 * @returns {Boolean}
 */
function noHanzi(text){
	 var reg = new RegExp("^[^\u4e00-\u9fa5]{0,}$");
	 if(!reg.test(text)){
	      return false;
	 }else{
		 return true;
	 }
}


/**
*验证联系人
*@param text
*@returns {Boolean}
*/
function isContacts(text){
    if(!noHanzi(text) && text.length<=5){
	    return true;
	}else if(isEnglishCharacter(text) && text.length<=10){
	     return true;
	}else{
	   return false;
	}
}


/**
*验证英文字符
* @param text
* @returns {Boolean}
*/
function isEnglishCharacter(text){
   var reg=new RegExp("^[A-Za-z]+$");
   if(reg.test(text)){
	    return true;
   }else{
	   return false;
   }
}

