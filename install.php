<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database

$db = array( 	'table_list' => array (
  'archive_documents' => 6,
  'archived_toc' => 26,
  'branch' => 31,
  'captivate' => 6,
  'course_choices' => 10,
  'course_question' => 7,
  'course_question_to_page' => 6,
  'course_server' => 4,
  'course_versions' => 5,
  'document' => 12,
  'document_questions' => 7,
  'document_to_branch' => 3,
  'document_toc' => 10,
  'document_toc_content' => 2,
  'document_toc_history' => 5,
  'document_toc_plan' => 4,
  'documents_comments' => 5,
  'events' => 56,
  'failed_jobs' => 6,
  'google_docs' => 10,
  'institutions' => 11,
  'issues' => 6,
  'jobs' => 7,
  'lookuptable' => 9,
  'migrations' => 3,
  'modules' => 9,
  'modules_copy' => 9,
  'moodle_content' => 5,
  'moodle_documents' => 9,
  'moodle_servers' => 6,
  'moodle_toc' => 7,
  'oauth_access_tokens' => 9,
  'oauth_auth_codes' => 6,
  'oauth_clients' => 10,
  'oauth_personal_access_clients' => 4,
  'oauth_refresh_tokens' => 4,
  'password_resets' => 3,
  'playback_statistics' => 10,
  'profiles' => 12,
  'project_course_choices' => 10,
  'project_course_question' => 6,
  'project_course_question_to_page' => 6,
  'project_data' => 6,
  'project_data_items' => 4,
  'project_map_privileges' => 7,
  'project_privileges' => 10,
  'project_properties' => 7,
  'project_specification' => 4,
  'project_to_branch' => 3,
  'project_to_relation' => 3,
  'project_to_spreadsheet' => 3,
  'project_to_user' => 6,
  'project_type' => 3,
  'project_user_privileges' => 24,
  'projects_dir' => 13,
  'projects_dir_translation' => 4,
  'projects_monitoring' => 18,
  'projects_object_translation' => 6,
  'projects_objects' => 19,
  'projects_planning' => 3,
  'projects_to_documents' => 6,
  'projects_to_procedures' => 3,
  'projects_uploads' => 11,
  'projects_uploads_to_branch' => 3,
  'question_responces' => 11,
  'relation' => 34,
  'relation_address' => 20,
  'relation_contact' => 58,
  'saved_items' => 5,
  'server' => 8,
  'st_audio_file' => 10,
  'st_audio_language' => 3,
  'st_audiomovie' => 5,
  'st_captiontime' => 4,
  'st_course' => 6,
  'st_media' => 11,
  'st_media_copy' => 10,
  'st_module' => 8,
  'st_procedures' => 2,
  'st_scripts' => 5,
  'st_subject' => 5,
  'st_subtitle_properties' => 7,
  'st_text_files' => 5,
  'st_translations' => 4,
  'st_user_preview_stat' => 7,
  'status' => 3,
  'subjects' => 8,
  'subtitles' => 6,
  'tasks_to_planning' => 3,
  'tasks_to_projects' => 3,
  'tbdocuments' => 22,
  'tbdocuments_history' => 16,
  'tbdocuments_privileges' => 21,
  'toc' => 25,
  'tradestar_report_frequency' => 2,
  'tradestar_reports' => 26,
  'tradestar_reports_archive' => 8,
  'tradestar_reports_category' => 2,
  'tradestar_reports_to_employees' => 2,
  'trainees' => 27,
  'trays' => 8,
  'trs_metadata' => 12,
  'types' => 2,
  'upload_comments' => 5,
  'upload_timeline_information' => 5,
  'uploads' => 16,
  'users' => 11,
  'views' => 5,
  'xoops_shop_languages' => 7,
), 
'structure' =>'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', 
'contents' =>'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', 
'database' =>'nts_projects', 
); 



//Settings
$settings=array();
$settings['execute'] = '';

?>
<style>
	html			{ background: #336699; }
	body			{ padding: 10px; background: #fff; font: 12px "Lucida Grande"; color: #333; }
	#title			{ font-size: 18px; }
	#layout			{ width: 500px; border: 1px solid #ccc; border-bottom: 0px; background: #eee; margin-top: 10px; }
	#layout .title	{ background: #ff9900; color: #fff; font-size: 16px; }
	#layout div		{ padding: 10px;  border: 1px solid #fff; border-bottom: 1px solid #ccc; min-height: 20px; }
	#layout span	{ width: 200px; display: block; float: left; }
	
	#doc			{ float: right; margin-right: 30px; width: 300px; border: 1px solid #ccc; background: #eee; padding: 10px; color: #999; }
	
	#list			{ background: #fff; border: 1px solid #ccc; }
	#list th		{ background: #ff9900; color: #fff; font-size: 13px; }
	#list td		{ background: #eee; border-top: 1px solid #fff; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;  border-left: 1px solid #fff; padding: 5px; font-size: 11px; }
	#copyright		{ margin-top: 20px; font-size: 11px; }
	
	fieldset		{ margin-top: 20px; border: 0px; padding: 0px; border:1px solid #999; background:#ddd; }
	input[type='text'], 
	textarea	{ border: 1px solid #aaa; margin:1px; padding: 5px; font-family: Helvetica; font-size: 14px; width: 250px; color: #333; }
	input[type='text']:focus,
	textarea:focus	{ border: 1px solid #6699cc; }
	
	button			{ display:block; margin:0 7px 0 0; background-color:#f5f5f5; border:1px solid #d3d3d3; border-top:1px solid #e9e9e9; border-left:1px solid #e9e9e9; font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif; font-size:100%; line-height:130%; text-decoration:none; font-weight:bold; color:#565656; cursor:pointer; padding:5px 10px 6px 7px; }
	button:hover	{ border: 1px solid #ccc; color: #ff6600; background: white; }
	
	.error			{ border: 1px solid #990000; background: #ffeeee; padding: 5px; margin: 5px; }
</style>
<?php
set_time_limit(300); // 5 minutes
ob_start();

$GLOBALS['HTTP_VARS'] = $_GET + $_POST;

function get($key)
{
    if (isset($GLOBALS['HTTP_VARS'][$key]))
        return $GLOBALS['HTTP_VARS'][$key];
}

function byte($size)
{
    $unim = array("B", "KB", "MB", "GB", "TB", "PB");
    $i = 0;
    while ($size >= 1024) {
        $i++;
        $size = $size / 1024;
    }
    return number_format($size, ($i ? 2 : 0), ",", ".") . " " . $unim[$i];
}

function myFlush()
{
    ob_end_flush();
    ob_flush();
    flush();
    ob_start();
}

if (get('dump') && isset($db)) {

    $structure = base64_decode($db['structure']);
    $structure = gzuncompress($structure);

    $sql = base64_decode($db['contents']);
    $sql = gzuncompress($sql);
    echo "Dump database <b>{$db['database']}</b><br/></br><textarea style=\"width:100%;padding:10px;\" rows=\"30\">$structure\n$sql</textarea>";
    exit;
}

$dir = get('dir');
$moodle = get('moodle');
$overwrite = get('overwrite');
$install = get('install');

//se install
if ($install) {

    if (empty($dir)) {
        $dir = '/';
    } else {
        if (substr($dir, -1) != '/')
            $dir .= '/';
    }

    $execute = isset($settings['execute']) ? $dir . $settings['execute'] : $dir;


//    if ($dir != "" && substr($dir, strlen($dir) - 1, 1) != "/")
//        $dir .= "/";
//
//    if ($dir != '' && !file_exists($dir))
//        mkdir($dir);


    if (get('db')) {

        $db_hostname = get('db_hostname');
        $db_username = get('db_username');
        $db_password = get('db_password');
        $db_database = get('db_database');

        $moodle_db_hostname = get('moodle_db_hostname');
        $moodle_db_username = get('moodle_db_username');
        $moodle_db_password = get('moodle_db_password');
        $moodle_db_database = get('moodle_db_database');

        $dbc = mysqli_connect($db_hostname, $db_username, $db_password);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // create database if not exist
        mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS {$db_database}") or die(mysqli_error($dbc));

        // Change db to provided db
        mysqli_select_db($dbc, $db_database) or die(mysqli_error($dbc));

        $db_installed = false;
        $error = false;

        $sql = base64_decode($db['structure']);
        $sql = gzuncompress($sql);
        $query = explode(";\r", $sql);

        echo "<br/><br/><h3>DATABASE: CREATE STRUCTURE</h3>";

        for ($i = 0; $i < count($query); $i++) {
            list($table, $rows) = each($db['table_list']);
            echo "<div>$table ($rows rows)";
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font>' . mysqli_error($dbc);
                } else
                    echo " - OK";
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";
        $error = false;

        $sql = base64_decode($db['contents']);
        $sql = gzuncompress($sql);
        $query = explode(";\n", $sql);

        echo "<br/><br/><hr><h3>DATABASE: INSERT CONTENT</h3>";
        for ($i = 0; $i < count($query); $i++) {
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font> ' . mysqli_error($dbc) . " <div class=\"error\">" . $query[$i] . "</div>";
                }
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";

        mysqli_close($dbc);
        $db_installed = true;

        if ($db_installed) {

            echo "Database Installed";

            $moodleroot = parse_url(trim($moodle))['path'];

            if (empty($moodleroot)) {
                $moodleroot = '/';
            } else {
                if (substr($moodleroot, -1) != '/')
                    $moodleroot .= '/';
            }

            $webroot = parse_url(trim($dir))['path'];

            if (empty($webroot)) {
                $webroot = '/';
            } else {
                if (substr($webroot, -1) != '/')
                    $webroot .= '/';
            }

//            $moodlefile = $_SERVER["DOCUMENT_ROOT"] . $moodleroot . "config.php";
//
//            $content = file_get_contents($moodlefile);
//
//            $line = "require_once(__DIR__ . '/lib/setup.php');";
//
//            $replace = "\n" . "require_once(\$_SERVER['DOCUMENT_ROOT'] .'" . $webroot . "Boot.php');" . "\n";
//            $replace .= "\n" . "\$CFG->dbhost    = Boot::MOODLE_DBHOST;";
//            $replace .= "\n" . "\$CFG->dbname    = Boot::MOODLE_DBNAME;";
//            $replace .= "\n" . "\$CFG->dbuser    = Boot::MOODLE_DBUSER;";
//            $replace .= "\n" . "\$CFG->dbpass    = Boot::MOODLE_DBPASS;" . "\n";
//            $replace .= "\n" . "\$CFG->wwwroot   = 'http://'. \$_SERVER['HTTP_HOST'] .'" . rtrim($moodleroot, "/ ") . "';" . "\n";
//            $replace .= "\n\n" . "require_once(__DIR__ . '/lib/setup.php');";
//            $content = str_replace($line, $replace, $content);
//            file_put_contents($moodlefile, $content);

            //------------------------------------------
            // Open config file
            //------------------------------------------
            $fp = fopen("Boot.php", "w");
            $settings_file = "<?php" . "\n";
            $settings_file .= "\n" . "//Settings" . "\n";

            $settings_file .= "\n" . "class Boot {";
            $settings_file .= "\n" . " const DBHOST = '$db_hostname';";
            $settings_file .= "\n" . " const DBUSER =  '$db_username';";
            $settings_file .= "\n" . " const DBPASS = '$db_password';";
            $settings_file .= "\n" . " const DBNAME = '$db_database';";
            $settings_file .= "\n" . " const WWWROOT = '$webroot'; ";

            $settings_file .= "\n" . " const MOODLE_DBHOST = '$moodle_db_hostname';";
            $settings_file .= "\n" . " const MOODLE_DBUSER =  '$moodle_db_username';";
            $settings_file .= "\n" . " const MOODLE_DBPASS = '$moodle_db_password';";
            $settings_file .= "\n" . " const MOODLE_DBNAME = '$moodle_db_database';";

            $settings_file .= "\n" . "}";

            fwrite($fp, $settings_file, strlen($settings_file));
            fclose($fp);
            chmod($settings_file, 0777);

            $fp_env = fopen("nts-video-api/.env", "w");
            $env_file = "APP_NAME=Video" . "\n";
            $env_file .= "APP_KEY=base64:ZoDFmAT6ev1keCiVRo+O4yHkQg940mEBk3zp+ABM5cs=" . "\n";
            $env_file .= "APP_URL=$dir/nts-video-api/public";
            $env_file .= "\n\n" . "LOG_CHANNEL=stack";
            $env_file .= "\n\n" . "DB_CONNECTION=mysql";
            $env_file .= "\n" . "DB_HOST=$db_hostname";
            $env_file .= "\n" . "DB_PORT=3306";
            $env_file .= "\n" . "DB_USERNAME=$db_username";
            $env_file .= "\n" . "DB_PASSWORD=$db_password";
            $env_file .= "\n" . "DB_DATABASE=$db_database";
            $env_file .= "\n" . "QUEUE_CONNECTION=database";
            fwrite($fp_env, $env_file, strlen($env_file));
            fclose($fp_env);
            myFlush();
        }
    }

    echo " <br><hr><h1>Installation Complete!";

    if ($execute)
        echo "<a href=\"{$execute}\">Click here to go {$execute}</a>.";
} else {
    ?>
    <body>
    <!-- created with PHP Installer -->
    <div id="title">NTS Programs</div>

    <div id="layout">
        <form action="" method="POST">
            <div class="title">NTS Programs Configuration</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir" value="http://<?php echo $_SERVER['HTTP_HOST'] . pathinfo($_SERVER['REQUEST_URI'])['dirname']; ?>">
            </div>
            <input type="hidden" name="db" value="1">
            <div>
                Database settings
                <fieldset id="db_fieldset">
                    <div><span>Database Hostname</span>
                        <input type="text" name="db_hostname" value="">
                    </div>
                    <div><span>Database Username</span>
                        <input type="text" name="db_username" value="">
                    </div>
                    <div><span>Database Password</span>
                        <input type="text" name="db_password" value="">
                    </div>
                    <div><span>Database Name</span>
                        <input type="text" name="db_database" value="<?php echo $db['database']; ?>">
                    </div>
                    <div>
                        <a href="?dump=1" target="_blank">Click here to download the database for manual installing.</a>
                    </div>
                </fieldset>
            </div>
            <div class="title">Moodle Configuration</div>
            <div>
                <span>Moodle Intallation path</span>
                <input type="text" name="moodle" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/moodle">
            </div>
            <div>
                Moodle settings
                <fieldset id="moodle_db_fieldset">
                    <div><span>Moodle Database Hostname</span>
                        <input type="text" name="moodle_db_hostname" value="">
                    </div>
                    <div><span>Moodle Database Username</span>
                        <input type="text" name="moodle_db_username" value="">
                    </div>
                    <div><span>Moodle Database Password</span>
                        <input type="text" name="moodle_db_password" value="">
                    </div>
                    <div><span>Moodle Database Name</span>
                        <input type="text" name="moodle_db_database" value="moodle">
                    </div>
                </fieldset>
            </div>
            <div>
                <input type="checkbox" name="install" id="install"> <label for="install">Confirm installation.</label>
            </div>
            <div><button>INSTALL</button></div>
        </form>
    </div>
    <br/>
    Database in the package
    <table cellspacing="0" cellpadding="5" id="list">
        <thead>
        <th>Table</th>
        <th>Rows</th>
    </thead>
    <?php
    foreach( $db['table_list'] as $table => $n )
    echo "<tr><td>$table</td><td>{$n}</td></tr>";
    ?>
</table>
</body>
    <?php
}
?>