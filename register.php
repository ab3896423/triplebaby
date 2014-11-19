<?php session_start(); ?>
<!--上方語法為啟用session，要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>會員註冊</title> 

<form name="form2" method="post" action="reg_new_save.php"> 
<table width="485" height="310" border="1" align="center"> 
<tr> 
<td colspan="2" align="center">會員註冊</td> 
</tr> 
<tr> 
<td width="141" align="center">用戶名</td> 
<td width="320"><label> 
<input name="user_id" type="text" id="user_id"> 
</label> 
</td> 
</tr> 
<tr> 
<td align="center">密碼</td> 
<td><input name="user_psd" type="password" id="user_psd"></td> 
</tr> 
<tr> 
<td align="center">確認密碼</td> 
<td><input name="user_psd2" type="password" id="user_psd2"></td> 
</tr> 
<tr> 
<td align="center">性別</td> 
<td><label> 
<input name="sex" type="radio" value="m" checked="checked"> 
male 
<input type="radio" name="sex" value="f" /> 
female 
</label></td> 
</tr> 
<tr> 
<td align="center">郵箱</td> 
<td><input name="email" type="text" id="email"></td> 
</tr> 
<tr> 
<td align="center">&nbsp;</td> 
<td><label> 
<input type="submit" name="Submit" value="我要註冊"> 
</label> 
<label></label></td> 
</tr> 
</table> 
</form> 