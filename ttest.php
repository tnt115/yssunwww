<?php
header("content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
error_reporting(0);
ob_end_flush();
 
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
    <html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
    <meta http-equiv="Pragma" content="No-cache" />  
    <meta http-equiv="Expires" content="0" />  
    <meta http-equiv="cache-control" content="private" />  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />//[color=red]������䣬�����ܲ��ܽ��linux����ʾ��������⣿[/color]  
    <title>PHP ̽�� v1.0</title>  
    <style type="text/css">  
    <!--  
    body{text-align:center;margin-top:20px;background-color:#a9b674;}  
      
    #overview{width:700px;margin:0 auto;text-align:left;}  
    a{text-decoration:underline;color:#992700;}  
    .strong{color:#992700;}  
    .basew{width:300px;}  
    -->  
    </style>  
    </head>  
      
    <body>  
    <div id="overview">  
    <div id="copyright">��Ȩ��Ϣ  
    <a href="hello.php?typ=baseinfo">[������Ϣ]</a> <a href="hello.php?typ=superinfo">[�߼���Ϣ]</a>  
    <?php  
    if (function_exists("phpinfo")){  
        echo'<a href="hello.php?typ=phpinfo">[phpinfo]</a>';}  
      
    echo'<br />php̽��v1.0 by MKDuse(blueidea-id)<br /><br />�˳�����룬�����ʹ�ã�������������ҵ��;����ȫת�ػ�ʹ�ô˴��룬�뱣����Ȩ��Ϣ��<br />��ӭָ�������Ὠ�飬QQ��122712355</div>';  
      
    if (empty($_GET['typ'])){  
        baseinfo();}  
    else{  
    switch ($_GET['typ']){  
    case 'phpinfo':  
    phpinfoview();  
    break;  
    case 'superinfo':  
    superinfo();  
    break;  
    case 'baseinfo':  
    baseinfo();  
    break;  
    default:  
    baseinfo();}  
    }  
      
    function getime()  
    {  
      $t = gettimeofday();  
      return (float)($t['sec'] + $t['usec']/1000000);  
    }  
      
	  
	  
	  
      
    function baseinfo(){  
    echo '<h1>������Ϣ</h1>';  
    $arr[]=array("Current PHP version:",phpversion());  
    $arr[]=array("Zend engine version:",zend_version());  
    $arr[]=array("�������汾",$_SERVER['SERVER_SOFTWARE']);  
    $arr[]=array("ip��ַ",$_SERVER['REMOTE_HOST']);//ip  
    $arr[]=array("����",$_SERVER['HTTP_HOST']);  
    $arr[]=array("Э��˿�",$_SERVER['SERVER_PROTOCOL'].'  '.$_SERVER['SERVER_PORT']);  
    $arr[]=array("վ���Ŀ¼",$_SERVER['PATH_TRANSLATED']);  
    $arr[]=array("������ʱ��",date('Y��m��d��,H:i:s,D'));  
    $arr[]=array("��ǰ�û�",get_current_user());  
    $arr[]=array("����ϵͳ",php_uname('s').php_uname('r').php_uname('v'));  
    $arr[]=array("include_path",ini_get('include_path'));  
    $arr[]=array("Server API",php_sapi_name());  
      
    $arr[]=array("error_reporting level",ini_get("display_errors"));  
    $arr[]=array("POST�ύ����",ini_get('post_max_size'));  
    $arr[]=array("upload_max_filesize",ini_get('upload_max_filesize'));  
    $arr[]=array("�ű���ʱʱ��",ini_get('max_execution_time').'��');  
      
    if (ini_get("safe_mode")==0){  
    $arr[]=array("PHP��ȫģʽ(Safe_mode)",'off');}  
    else{  
    $arr[]=array("PHP��ȫģʽ(Safe_mode)",'on');}  
      
    if (function_exists('memory_get_usage')){  
    $arr[]=array("memory_get_usage",ini_get('memory_get_usage'));}  
      
    //$arr[]=array("���ÿռ�",intval(diskfreespace('/')/(1024 * 1024))."M");  
    echo'<table>';  
    for($i=0;$i<count($arr);$i++)  
    {  
        $overview='<tr><td class="basew">'.$arr[$i][0].'</td><td>'.$arr[$i][1].'</td></tr>';  
        echo $overview;  
    }  
    echo'</table>';  
    echo '<h2>���������ܲ���</h2>';  
    echo'<table><tr><td>������</td><td>��������<br />50��μӷ�(1+1)</td><td>��������<br />50���ƽ����(3.14����)</td></tr>';  
    echo'<tr><td>MKDuse�Ļ���(P4 1.5G 256DDR winxp sp2)</td><td>465.08ms</td><td>466.66ms</td></tr>';  
    $time_start=getime();  
    for($i=0;$i<=500000;$i++);  
    {$count=1+1;}  
    $timea=round((getime()-$time_start)*1000,2);  
    echo '<tr class="strong"><td>��ǰ������</td><td>'.$timea.'ms</td>';  
      
    $time_start=getime();  
    for($i=0;$i<=500000;$i++);  
    {sqrt(3.14);}  
    $timea=round((getime()-$time_start)*1000,2);  
    echo '<td>'.$timea.'ms</td></tr></table>';  
      
      
    ?>  
    <script language="javascript" type="text/javascript">  
    function gettime()  
    {    
      var time;    
      time=new Date();  
      return time.getTime();    
    }  
    start_time=gettime();  
    </script>  
    <?php  
    echo '<h2>�������</h2>';  
    for ($i=0;$i<100;$i++){  
    print "<!--1234567890#########0#########0#########0#########0#########0#########0#########0#########012345-->";}  
      
    ?>  
    <p id="dk"></p>  
    <script language="javascript" type='text/javascript'>  
    var timea;  
    var netspeed;  
    timea=gettime()-start_time;  
    netspeed=Math.round(10/timea*1000);  
    document.getElementByIdx("dk").innerHTML="��ͻ��˷���10KB���ݣ���ʱ"+timea+"ms<br />����˷������������ٶ�Ϊ"+netspeed+"kb/s";  
    </script>  
      
    <?php  
      
    echo'<h2>�Ѽ��ص���չ��(enable)</h2><div>';  
    $arr =get_loaded_extensions();  
    foreach($arr as $value){  
        echo $value.'<br />';}  
      
    echo'</div><h2>���õĺ���</h2><p>';  
    $disfun=ini_get('disable_functions');  
    if (empty($disfun)){  
        echo'û�н���</p>';}  
    else{  
    echo ini_get('disable_functions').'</p>';}  
      
    }//�ر�  
      
      
      
    function superinfo(){  
    echo'<h1>�߼���Ϣ</h1><p>PHP_INI_USER 1 ����ѡ��������û��� PHP �ű���Windows ע�����<br> PHP_INI_PERDIR 2 ����ѡ����� php.ini, .htaccess �� httpd.conf ������ <br>PHP_INI_SYSTEM 4 ����ѡ����� php.ini or httpd.conf ������ <br>PHP_INI_ALL 7 ����ѡ����ڸ�������</p>';  
      
    $arr1=ini_get_all();  
    for ($i=0;$i<count($arr1);$i++)  
        {  
    $arr2=array_slice($arr1,$i,1);  
    print_r($arr2);  
    echo '<br />';  
    }  
      
    }  
      
    function phpinfoview(){  
        phpinfo();  
    }  
    ?>  
    </div>  
    </body>  
    </html>  
