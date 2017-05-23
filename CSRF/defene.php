<? php
session_start();
function token_start(){
	$_session['token']=md5(rand(1,10000));
}
function token_check(){
	$return=$_request['token']===$_session['token']?true:false;
	token_start();
	return $return;
}
if(!isset($_session['token'])||$_session['token']==''){
	token_start();
}

if (isset($_post['user'])||isset($_post['desc'])){
	if(token_check()){
	echo "you have no rank";
	}
	else{
	echo "you are admin";
	}

}
?>