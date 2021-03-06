<?php

if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);
  
// ------------   identitas --------------------
$confStructure_core = array();
$confStructure_core['name']	= 'Sistem Monitoring Komunitas -';
$confStructure_core['ver'] 	= '2014'; 
$confStructure_core['build'] 	= 'Versi 1'; 
$confStructure_core['release'] 	= '8 Agustus 2014';
$confStructure_core['coding']   = 'Codeigniter 2.1.0';
$confStructure_core['year']     = date('Y');
$confStructure_core['domain'] 	= "http://{\$_SERVER['SERVER_NAME']}";

$site_options_1 = array(
    'site_logo' => 'Logo.png',
    'site_template' => ''
);

$aConf = array();

$aConf['db_file'] 	= '../application/config/database.php';

$aConf['dbTempl'] 	= <<<EOS
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The \$active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The \$active_record variables lets you determine whether or not to load
| the active record class
*/

\$active_group = 'default';
\$active_record = TRUE;

\$db['default']['hostname'] = '%db_host%';
\$db['default']['username'] = '%db_user%';
\$db['default']['password'] = '%db_password%';
\$db['default']['database'] = '%db_name%';
\$db['default']['dbdriver'] = 'mysql';
\$db['default']['dbprefix'] = '';
\$db['default']['pconnect'] = TRUE;
\$db['default']['db_debug'] = TRUE;
\$db['default']['cache_on'] = FALSE;
\$db['default']['cachedir'] = '';
\$db['default']['char_set'] = 'utf8';
\$db['default']['dbcollat'] = 'utf8_general_ci';
\$db['default']['swap_pre'] = '';
\$db['default']['autoinit'] = TRUE;
\$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */
EOS;
//
	$confFirst = array();
	$confFirst['site_url'] = array(
		'name' => "Site URL",
		'ex' => "http://localhost/folder/",
		'desc' => "Url situs anda (Ingat, beri backslash dibelakang url '/')",
		'def' => "http://",
	    'def_exp' => '
			$str = "http://".$_SERVER[\'HTTP_HOST\'].$_SERVER[\'PHP_SELF\'];
		    return preg_replace("/install\/(index\.php$)/","",$str);',
		'check' => 'return strlen($arg0) >= 10 ? true : false;'
	);
	$confFirst['dir_root'] = array(
		'name' => "Directory root",
		'ex' => "/var/www/http/folder/",
		'desc' => "Directory dimana Aplikasi anda diletakan.",
	    'def_exp' => '
			$str = rtrim($_SERVER[\'DOCUMENT_ROOT\'], \'/\').$_SERVER[\'PHP_SELF\'];
		    return preg_replace("/install\/(index\.php$)/","",$str);',
		'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	

	$confDB = array();
	$confDB['sql_file'] = array(
	    'name' => "File database",
	    'ex' => "/var/www/html/folder/install/sql/data.sql",
	    'desc' => "Lokasi file sql, akan terisi secara otomatis",
		'def' => "sql/data.sql",
		'def_exp' => '
			if ( !( $dir = opendir( "sql/" ) ) )
		        return "";
			while (false !== ($file = readdir($dir)))
		        {
			    if ( substr($file,-3) != \'sql\' ) continue;
				closedir( $dir );
				return "sql/$file";
			}
			closedir( $dir );
			return "";',
		'check' => 'return strlen($arg0) >= 4 ? true : false;'
	);
	 $confDB['db_host'] = array(
		'name' => "Database host name",
		'ex' => "localhost",
		'desc' => "Nama host tempat aplikasi.",
		'def' => "localhost",
		'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	$confDB['db_name'] = array(
	    'name' => "Nama Database",
	    'ex' => "db_pekka",
	    'desc' => "sesuaikan dengan database yang telah dibuat.",
	    'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	$confDB['db_user'] = array(
		'name' => "Pengguna Database",
		'ex' => "namapengguna",
		'desc' => "Isikan dengan nama pengguna database.",
		'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	$confDB['db_password'] = array(
		'name' => "Password Database",
		'ex' => "passwordanda",
		'desc' => "Letakkan password database.",
		'check' => 'return strlen($arg0) >= 0 ? true : false;'
	);

	$confGeneral = array();
	$confGeneral['site_title'] = array(
		'name' => "Nama Organisasi",
		'ex' => "Komunitas A",
		'desc' => "Isi dengan nama organisasi",
		'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	$confGeneral['site_desc'] = array(
		'name' => "Alamat",
		'ex' => "Jl. Seindah pandangan mata No Kec. Kota.",
		'desc' => "Lokasi organisasi",
		'check' => 'return strlen($arg0) >= 1 ? true : false;'
	);
	$confGeneral['site_admin'] = array(
		'name' => "Nama Administrator",
		'ex' => "admin",
		'desc' => "Isikan dengan nama Admin.",
		'check' => 'return strlen($arg0) > 0 ? true : false;'
	);
        $confGeneral['admin_hp'] = array(
		'name' => "No Handphone",
		'ex' => "08987654321",
		'desc' => "Isikan dengan no handphone Admin.",
		'check' => 'return strlen($arg0) > 0 ? true : false;'
	);
	$confGeneral['admin_password'] = array(
		name => "Password",
		ex => "adminpassword",
		desc => "ISI dan INGAT password anda!",
		check => 'return strlen($arg0) >= 1 ? true : false;'
	);
        // cek writable unit
	$aTemporalityWritableFile = array(
		
                '../application/config/database.php',
             
			 //  writable //  
			  
	);

/*----------Variabel----------------*/
/*------------------------------*/

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
$error = '';

// --------------------------------------------

$InstallPageContent = InstallPageContent( $error );

mb_internal_encoding('UTF-8');

echo PageHeader( $action, $error );
echo $InstallPageContent;
echo PageFooter( $action );

function InstallPageContent(&$error) {
	global $aConf, $confFirst, $confDB, $confGeneral;
        $action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
	$ret = '';

	switch ($action) {

		case 'step5':
			$ret .= genMainPage();
		break;

		case 'step4':
			$errorMessage = checkConfigArray($confGeneral, $error);
			$ret .= (strlen($errorMessage)) ? genSiteGeneralConfig($errorMessage) : genInstallationProcessPage();
		break;

		case 'step3':
			$errorMessage = checkConfigArray($confDB, $error);
			$errorMessage .= CheckSQLParams();

			$ret .=  (strlen($errorMessage)) ? genDatabaseConfig($errorMessage) : genSiteGeneralConfig();
		break;

		case 'step2':
			$errorMessage = checkConfigArray($confFirst, $error);
			$ret .= (strlen($errorMessage)) ? genPathCheckingConfig($errorMessage) : genDatabaseConfig();
		break;

		case 'step1':
			$ret .= genPathCheckingConfig();
		break;
                
                case 'preInstall':
			$ret .= genPreInstallPermissionTable();
		break;
            
		default:
			$ret .= StartInstall();
		break;
	}

	return $ret;
}

// Urutan Installasi

function PageHeader($action = '', $error = '') {
	global $aConf;

	$actions = array(
		"startInstall" => "Mulai Proses Installasi",
        	"preInstall" => "File Permission",
		"step1" => "Paths",
		"step2" => "Database",
		"step3" => "Config",
		"step4" => "Installation",
		"step5" => "Halaman Muka",
	);

	if( !strlen( $action ) )
		$action = "startInstall";

	$activeStyle = ($action == "step5") ? 'Active' : 'Inactive';

	$iCounterCurrent = 1;
	$iCounterActive	 = 1;

	foreach ($actions as $actionKey => $actionValue) {
		if ($action != $actionKey) {
			$iCounterActive++;
		} else
			break;
	}

	if (strlen($error))
		$iCounterActive--;

	$subActions = '';
	foreach ($actions as $actionKey => $actionValue) {
		if ($iCounterActive == $iCounterCurrent) {
			$subActions .= '<div id="topActive">' . $actionValue . '</div>';
		} elseif (($iCounterActive - $iCounterCurrent) == -1) {
			$subActions .= '<div id="topInactive">' . $actionValue . '</div>';
		} elseif (($iCounterActive - $iCounterCurrent) == 1) {
			$subActions .= '<div id="topInactive">' . $actionValue . '</div>';
		} else {
			$subActions .= '<div id="topInactive">' . $actionValue . '</div>';
			if ($actionKey != "step6")
				$subActions .= '';
		}
		$iCounterCurrent++;
	}
/*----------header----------------*/
	return <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
		<head>
			<title>Installation Script</title>
			<link href="css/general.css" rel="stylesheet" type="text/css" />
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<!--[if lt IE 7.]>
			<script defer type="text/javascript" src="../templates/js/pngfix.js"></script>
			<![endif]-->
		</head>
		<body>
			<div>
				
			<div id="header">
				</div>
			<div>
			
			<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pemasangan Sistem</h3>
						 </div>
                    <div class="panel-body">
			
EOF;
}

/*----------footer----------------*/

function PageFooter($action) {
	$tambahan = '';

	return <<<EOF
	
	 </div>
                </div>
            </div>
        </div>
    </div>
	
			</div>
		{$tambahan}
		</div>
	</body>
</html>
EOF;
}

// pre install
function genPreInstallPermissionTable($sErrorMessage = '') {
    global $aTemporalityWritableFile;

	$sCurPage = $_SERVER['PHP_SELF'];
	$sErrorMessage .= (ini_get('safe_mode') == 1 || ini_get('safe_mode') == 'On') ? "Please turn off <b>safe_mode</b> in your php.ini file configuration" : '';
	$sError = printInstallError($sErrorMessage);

	$sPermTable = showFilePermissions($aTemporalityWritableFile);

	return <<<EOF
<div class="position">Permisi file</div>
{$sError}
<div class="LeftRirght">
	<div class="clearBoth"></div>
	<div class="left">
	Aplikasi memerlukan otoritas khusus, ubah <span style="font-weight:bold;color:green;">Writable (755)</span> pada file berikut, bila anda menemukan <span style="font-weight:bold;color:red;">Not Writable</span> silahkan disesuaikan.<br />
	</div>
	<div class="clear_both"></div>
	<div class="right">
	<script src="../plugins/jquery/jquery-1.6.1.min.js" type="text/javascript" language="javascript"></script>
	{$sPermTable}
	<div class="formKeeper">
	<div class="button_area_1">
	<form action="{$sCurPage}" method="post">
	<button id="button" type="submit" placeholder="Nama" class="btn btn-warning"> Cek 
	<input type="hidden" name="action" value="preInstall" />
	</button>
	</form>
	</div>
	<div class="button_area_2">
	<form action="{$sCurPage}" method="post">
	<button id="button" type="submit" placeholder="Nama" class="btn btn-info"> Lanjutkan
	<input type="hidden" name="action" value="step1" />
	</button>
	</form>
	</div>
	<div class="clearBoth"></div>
	</div>
	</div>
</div>
EOF;
}

// langkah 1

function StartInstall() {
	global $confStructure_core;

	return <<<EOF
				
<div class="insta">
	 {$confStructure_core['name']} {$confStructure_core['ver']} {$confStructure_core['build']}
</div>

<div class="form-group" align="center">
<br />
	Selamat datang pada halaman pemasangan aplikasi, 
 <br />
	Tekan tombol mulai untuk menjalankan pemasangan.
</div>

<div class="formKeeper">
	<form action="{$_SERVER['PHP_SELF']}" method="post">
	<button id="button" type="submit" class="btn btn-info"> Mulai 
	<input type="hidden" name="action" value="preInstall" />
	</button>
	</form>
</div>



EOF;
}

// langkah 2

function genPathCheckingConfig($errorMessage = '') {
	global  $aConf, $confFirst;

	$currentPage = $_SERVER['PHP_SELF'];

	$error = printInstallError( $errorMessage );
	$pathsTable = createTable($confFirst);

	return <<<EOF
<div class="position">Cek lokasi aplikasi</div>
{$error}
<div class="form-group">
	<div class="clearBoth"></div>
	<div>
		Cek tempat meletakkan aplikasi, letak aplikasi akan terdeteksi secara otomatis.
	</div>
	<div>
		<form action="{$currentPage}" method="post">
			<table class="table">
				<tr class="head">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				{$pathsTable}
			</table>
			
			<div class="formKeeper">
			<button id="button" type="submit" class="btn btn-info"> Lanjutkan 
			<input type="hidden" name="action" value="step2" />
			</button>
			</div>
		</form>
	</div>
	<div class="clearBoth"></div>
</div>
EOF;
}

// langkah 3

function genDatabaseConfig($errorMessage = '') {
	global $confDB;

	$currentPage = $_SERVER['PHP_SELF'];
	$DbParamsTable = createTable($confDB);

	$errors = '';
	if (strlen($errorMessage)) {
		$errors = printInstallError($errorMessage);
		unset($_POST['db_name']);
		unset($_POST['db_user']);
		unset($_POST['db_password']);
	}

	$oldDataParams = '';
	foreach($_POST as $postKey => $postValue) {
		$oldDataParams .= ('action' == $postKey || isset($confDB[$postKey])) ? '' : '<input type="hidden" name="' . $postKey . '" value="' . $postValue . '" />';
	}

	return <<<EOF
<div class="position">Input Database</div>
{$errors}
<div class="LeftRirght">
	<div class="clearBoth"></div>
	<div class="left">
	</div>
	<div class="right">
		<form action="{$currentPage}" method="post">
			<table class="table">
				<tr class="head">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				{$DbParamsTable}
			</table>
			<div class="formKeeper">
				<button id="button" type="submit" class="btn btn-info"> Lanjutkan
				<input type="hidden" name="action" value="step3" />
				</button>
				{$oldDataParams}
			</div>
		</form>
	</div>
	<div class="clearBoth"></div>
</div>
EOF;
}

// langkah 4

function genSiteGeneralConfig($errorMessage = '') {
	global $confGeneral;

	$currentPage = $_SERVER['PHP_SELF'];
	$paramsTable = createTable($confGeneral);

	$errors = '';
	if (strlen($errorMessage)) {
		$errors = printInstallError($errorMessage);
		unset($_POST['site_title']);
		unset($_POST['site_admin']);
		unset($_POST['admin_hp']);
		unset($_POST['notify_email']);
		unset($_POST['bug_report_email']);
	}

	$oldDataParams = '';
	foreach($_POST as $postKey => $postValue) {
		$oldDataParams .= ('action' == $postKey || isset($confGeneral[$postKey])) ? '' : '<input type="hidden" name="' . $postKey . '" value="' . $postValue . '" />';
	}

	return <<<EOF
<div class="position">Configuration</div>
{$errors}
<div class="LeftRirght">
	<div class="clearBoth"></div>
	<div class="left"></div>
	<div class="right">
		<form action="{$currentPage}" method="post">
			<table cellpadding="0" cellspacing="1" width="100%" border="0" style="background-color:silver;">
				<tr class="head">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				{$paramsTable}
			</table>
			<div class="formKeeper">
                               
				<button id="button" type="submit" class="btn btn-info"> Lanjutkan
				<input type="hidden" name="action" value="step4" /></button>
				{$oldDataParams}
			</div>
		</form>
	</div>
	<div class="clearBoth"></div>
</div>
EOF;
}

// langkah 5

function genInstallationProcessPage($errorMessage = '') {
	global $confStructure_core, $aConf, $confFirst, $confDB, $confGeneral;
	
	$sAdminPassword = get_magic_quotes_gpc() ? stripslashes($_REQUEST['admin_password']) : $_REQUEST['admin_password'];
	$resRunSQL = RunSQL( $sAdminPassword );

	$sForm = '';
	
	if ('done' ==  $resRunSQL) {
		$sForm = '
		<div class="formKeeper">
			<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				<button id="button" type="submit" class="btn btn-success"> Finish and Take Me to dashboard Now
				
				<input type="hidden" name="action" value="step5" />
				</button>
			</form>
		</div>
		<div class="clearBoth"></div>';
	} else {
		$sForm = $resRunSQL . '
		<div class="formKeeper">
			<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				<input type="image" src="images/back.gif" />';
		foreach ($_POST as $sKey => $sValue) {
			if ($sKey != "action")
				$sForm .= '<input type="hidden" name="' . $sKey . '" value="' . $sValue . '" />';
		}
		$sForm .= '<input type="hidden" name="action" value="step2" />
			</form>
		</div>
		<div class="clearBoth"></div>';
		return $sForm;
	}
       
	foreach ($confDB as $key => $val) {
		$aConf['dbTempl'] = str_replace ("%$key%", $_POST[$key], $aConf['dbTempl']);
	}
	

	$innerCode = '';
        
        $fp = fopen($aConf['db_file'], 'w');
	if ($fp) {
		fputs($fp, $aConf['dbTempl']);
		fclose($fp);
		chmod($aConf['db_file'], 0666);
		
	} else {
		$text = 'Warning!!! can not get write access to config file ' . $aConf['db_file'] . '. Here is config file</font><br>';
		$innerCode .= printInstallError($text);
		$trans = get_html_translation_table(HTML_ENTITIES);
		$templ = strtr($aConf['dbTempl'], $trans);
		$sInnerCode .= '<textarea cols="20" rows="10" class="headerTextarea">' . $aConf['dbTempl'] . '</textarea>';
	}
	return <<<EOF
<div class="position"> Pemasangan Berhasil</div>

<div class="LeftRirght">
	{$sForm}
</div>
EOF;
}

// langkah 6

function checkConfigArray($checkedArray, &$error) {

	$errorMessage = '';

	foreach ($checkedArray as $key => $value) {
		if (! strlen($value['check'])) continue;

		$funcbody = $value['check'];
		$func = create_function('$arg0', $funcbody);

		if (! $func($_POST[$key])) {
			$fieldErr = $value['name'];
			$errorMessage .= "Data <b>{$fieldErr}</b> belum di isi :( <br />";
			$error_arr[$key] = 1;
			unset($_POST[$key]);
		} else
			$error_arr[$key] = 0;

		//$config_arr[$sKey]['def'] = $_POST[$sKey];
	}

	if (strlen($errorMessage)) {
		$error = 'error';
	}

	return $errorMessage;
}

function genMainPage() {
	return <<<EOF
<script type="text/javascript">
	window.location = "../index.php";
</script>
EOF;
}

// langkah 6

function printInstallError($text) {
	$ret = (strlen($text)) ? '<div class="error">' . $text . '</div>' : '';
	return $ret;
}

function createTable($arr) {
	$ret = '';
	$i = '';
        $error_arr = array();
	foreach($arr as $key => $value) {
		$sStyleAdd = (($i%2) == 0) ? 'background-color:#ede9e9;' : 'background-color:#fff;';

		$def_exp_text = "";
		if (strlen($value['def_exp'])) {
		    $funcbody = $value['def_exp'];
		    $func = create_function("", $funcbody);
		    $def_exp = $func();
			if (strlen($def_exp)) {
				$def_exp_text = "&nbsp;<font color=green>OK</font>";
				$value['def'] = $def_exp;
			} else {
				$def_exp_text = "&nbsp;<font color=red>tidak OK</font>";
			}
		}

		$st_err = ($error_arr[$key] == 1) ? ' style="background-color:#000;" ' : '';

		$ret .= <<<EOF
	<tr class="cont" style="{$sStyleAdd}">
		<td>
			<div>{$value['name']}</div>
			<div>Penjelasan:</div>
			<div>Contoh:</div>
		</td>
		<td>
			<div><input {$st_err} size="30" name="{$key}" value="{$value['def']}" /> {$def_exp_text}</div>
			<div>{$value['desc']}</div>
			<div style="font-style:italic;">{$value['ex']}</div>
		</td>
	</tr>
EOF;
		$i ++;
	}

	return $ret;
}

function rewriteFile($code, $replace, $file) {
	$ret = '';
	$fs = filesize($file);
	$fp = fopen($file, 'r');
	if ($fp) {
		$fcontent = fread($fp, $fs);
		$fcontent = str_replace($code, $replace, $fcontent);
		fclose($fp);
		$fp = fopen($file, 'w');
		if ($fp) {
			if (fputs($fp, $fcontent)) {
				$ret .= true;
			} else {
				$ret .= false;
			}
			fclose ( $fp );
		} else {
			$ret .= false;
		}
	} else {
		$ret .= false;
	}
	return $ret;
}

function RunSQL($sAdminPassword) {
        global $site_options_1;
        global $confStructure_core;
        
    	$siteAdmin = DbEscape($_POST['site_admin']);
	$adminHp = DbEscape($_POST['admin_hp']);
	$siteTitle = DbEscape($_POST['site_title']);
	$siteDesc = DbEscape($_POST['site_desc']);
    	$siteUrl = DbEscape($_POST['site_url']);
    	$dirRoot = DbEscape($_POST['dir_root']);
        
	$confDB['host']   = $_POST['db_host'];
	$confDB['sock']   = $_POST['db_sock'];
	$confDB['port']   = $_POST['db_port'];
	$confDB['user']   = $_POST['db_user'];
	$confDB['passwd'] = $_POST['db_password'];
	$confDB['db']     = $_POST['db_name'];
     

	$confDB['host'] .= ( $confDB['port'] ? ":{$confDB['port']}" : '' ) . ( $confDB['sock'] ? ":{$confDB['sock']}" : '' );

	$pass = true;
	$errorMes = '';
	$filename = $_POST['sql_file'];

	$vLink = @mysql_connect($confDB['host'], $confDB['user'], $confDB['passwd']);

	if( !$vLink )
		return printInstallError( mysql_error() );

	if (!mysql_select_db ($confDB['db'], $vLink))
		return printInstallError( $confDB['db'] . ': ' . mysql_error() );

    mysql_query ("SET sql_mode = ''", $vLink);

    if (! ($f = fopen ( $filename, "r" )))
    	return printInstallError( 'Could not open file with sql instructions:' . $filename  );

	//Begin SQL script executing
	$s_sql = "";
	while ($s = fgets ( $f, 10240)) {
		$s = trim( $s ); //Utf with BOM only

                $s = str_replace("_table_prefix_", $confDB['table_prefix'], $s);
                $s = str_replace("_site_url_", $siteUrl, $s);
                
		if (! strlen($s)) continue;
		if (mb_substr($s, 0, 1) == '#') continue; //pass comments
		if (mb_substr($s, 0, 2) == '--') continue;
		if (substr($s, 0, 5) == "\xEF\xBB\xBF\x2D\x2D") continue;

		$s_sql .= $s;

		if (mb_substr($s, -1) != ';') continue;

		$res = mysql_query($s_sql, $vLink);
		if (!$res)
			$errorMes .= 'Error while executing: ' . $s_sql . '<br />' . mysql_error() . '<hr />';

		$s_sql = '';
	}

    $sSiteAdmin = DbEscape($_POST['site_admin']);
    $sAdminHp = DbEscape($_POST['admin_hp']);
    //
    //admin encryption 
    $sSaltDB = genRndSalt();
    $sAdminPasswordDB = encryptUserPwd($sAdminPassword, $sSaltDB); // encryptUserPwd
    $sAdminQuery = "
        INSERT INTO `{$confDB['table_prefix']}user`
            (`no_hp`, `password`, `username`, `nama`, `active`, `id_grup`)
        VALUES
            ('{$sAdminHp}', '{$sAdminPasswordDB}','{$sSiteAdmin}', 'Administration', 1, 1 )
    ";
    mysql_query($sAdminQuery, $vLink);
    
	if (!$res)
		$errorMes .= 'Error while executing: ' . $s_sql  . '<br />' . mysql_error() . '<hr />';

    fclose($f);

    
	if ($siteEmail != '' && $siteTitle != '') {
            
		$sConfigQuery = "
        INSERT INTO `{$confDB['table_prefix']}config`(`nama_komunitas`, `alamat`) VALUES ('{$siteTitle}', '{$siteDesc}') ";
    mysql_query($sConfigQuery, $vLink);
			    
	}
        
    // ok ok

    mysql_close($vLink);

    $errorMes .= $ret;

    if (strlen($errorMes)) {
    	return printInstallError($errorMes);
    } else {
    	return 'done';
    }
//    return $ret."Truncating tables finished.<br>";
}

function DbEscape($s, $isDetectMagixQuotes = true) {
    if (get_magic_quotes_gpc() && $isDetectMagixQuotes)
        $s = stripslashes ($s);
    //return mysql_real_escape_string($s);
    return $s;
}

function CheckSQLParams() {
	$confDB['host']   = $_POST['db_host'];
	$confDB['sock']   = $_POST['db_sock'];
	$confDB['port']   = $_POST['db_port'];
	$confDB['user']   = $_POST['db_user'];
	$confDB['passwd'] = $_POST['db_password'];
	$confDB['db']     = $_POST['db_name'];

	$confDB['host'] .= ( $confDB['port'] ? ":{$confDB['port']}" : '' ) . ( $confDB['sock'] ? ":{$confDB['sock']}" : '' );

	$vLink = @mysql_connect($confDB['host'], $confDB['user'], $confDB['passwd']);

	if (!$vLink)
		return printInstallError(mysql_error());

	if (!mysql_select_db ($confDB['db'], $vLink))
		return printInstallError($confDB['db'] . ': ' . mysql_error());

	mysql_close($vLink);
}

// encrypsinya pakai manual
// Generate Random Digit
function genRndDgt($length = 8, $specialCharacters = true) {
    $digits = '';	
    $chars = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789";

    if($specialCharacters === true)
            $chars .= "!?=/&+,.";


    for($i = 0; $i < $length; $i++) {
            $x = mt_rand(0, strlen($chars) -1);
            $digits .= $chars{$x};
    }

    return $digits;
}

// Generate Random Salt for Password encryption
function genRndSalt() {
        return genRndDgt(8, true);
}

// Encrypt User Password
function encryptUserPwd($pwd) {
        return sha1($pwd);
}

/*
fungsi untuk membuat cache file
cache file akan disimpan pada folder cache
*/

function create_cache_file($cache_filename, $cache_array, $name_array){
    $ret = '';
    $ret .='<?php';
     $ret .="\r\n$".$name_array." = array(";
    //
    foreach($cache_array as $cache_key => $cache_value){
        $ret .="\r\n\t\"".$cache_key."\"=> \"".$cache_value."\",";
    }
    //
    $ret .="\r\n);\r\n";
    $ret .='?>';
    
    // buat filenya
    $fp = fopen($cache_filename, 'w');
    if ($fp) {
            fputs($fp, $ret);
            fclose($fp);
            chmod($cache_filename, 0666);
           
    }
}

function isMetuWritable($file_or_folder){
    clearstatcache();
    return (is_writable($file_or_folder));
}

function showFilePermissions($array_file){
    $ret = '';
    foreach($array_file as $item_file){
        if( isMetuWritable($item_file))
            $ret .= $item_file .'<span style="color:green;font-weight:bold;"> Writeable</span><br/>';
        else
            $ret .= $item_file .'<span style="color:red;font-weight:bold;"> Not Writeable</span><br/>';
    }
    
    return $ret;
    
}

?>
