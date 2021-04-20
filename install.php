<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database installation

$db = array('table_list' => array(
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
    'uploads' => 15,
    'users' => 11,
    'views' => 5,
    'xoops_shop_languages' => 7,
),
    'structure' => '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',
    'contents' => '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',
    'database' => 'nts_projects',
);


//Settings
$settings = array();
$settings['execute'] = '';

?>
    <style>
        html {
            background: #336699;
        }

        body {
            padding: 10px;
            background: #fff;
            font: 12px "Lucida Grande";
            color: #333;
        }

        #title {
            font-size: 18px;
        }

        #layout {
            width: 500px;
            border: 1px solid #ccc;
            border-bottom: 0px;
            background: #eee;
            margin-top: 10px;
        }

        #layout .title {
            background: #ff9900;
            color: #fff;
            font-size: 16px;
        }

        #layout div {
            padding: 10px;
            border: 1px solid #fff;
            border-bottom: 1px solid #ccc;
            min-height: 20px;
        }

        #layout span {
            width: 200px;
            display: block;
            float: left;
        }

        #doc {
            float: right;
            margin-right: 30px;
            width: 300px;
            border: 1px solid #ccc;
            background: #eee;
            padding: 10px;
            color: #999;
        }

        #list {
            background: #fff;
            border: 1px solid #ccc;
        }

        #list th {
            background: #ff9900;
            color: #fff;
            font-size: 13px;
        }

        #list td {
            background: #eee;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-left: 1px solid #fff;
            padding: 5px;
            font-size: 11px;
        }

        #copyright {
            margin-top: 20px;
            font-size: 11px;
        }

        fieldset {
            margin-top: 20px;
            border: 0px;
            padding: 0px;
            border: 1px solid #999;
            background: #ddd;
        }

        input[type='text'],
        textarea {
            border: 1px solid #aaa;
            margin: 1px;
            padding: 5px;
            font-family: Helvetica;
            font-size: 14px;
            width: 250px;
            color: #333;
        }

        input[type='text']:focus,
        textarea:focus {
            border: 1px solid #6699cc;
        }

        button {
            display: block;
            margin: 0 7px 0 0;
            background-color: #f5f5f5;
            border: 1px solid #d3d3d3;
            border-top: 1px solid #e9e9e9;
            border-left: 1px solid #e9e9e9;
            font-family: "Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
            font-size: 100%;
            line-height: 130%;
            text-decoration: none;
            font-weight: bold;
            color: #565656;
            cursor: pointer;
            padding: 5px 10px 6px 7px;
        }

        button:hover {
            border: 1px solid #ccc;
            color: #ff6600;
            background: white;
        }

        .error {
            border: 1px solid #990000;
            background: #ffeeee;
            padding: 5px;
            margin: 5px;
        }
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

            $moodlefile = $_SERVER["DOCUMENT_ROOT"] . $moodleroot . "config.php";

            $content = file_get_contents($moodlefile);

            $line = "require_once(__DIR__ . '/lib/setup.php');";

            $replace = "\n" . "require_once(\$_SERVER['DOCUMENT_ROOT'] .'" . $webroot . "Boot.php');" . "\n";
            $replace .= "\n" . "\$CFG->dbhost    = Boot::DBHOST;";
            $replace .= "\n" . "\$CFG->dbname    = Boot::DBNAME;";
            $replace .= "\n" . "\$CFG->dbuser    = Boot::DBUSER;";
            $replace .= "\n" . "\$CFG->dbpass    = Boot::DBPASS;" . "\n";
            $replace .= "\n" . "\$CFG->wwwroot   = 'http://'. \$_SERVER['HTTP_HOST'] .'" . rtrim($moodleroot, "/ ") . "';" . "\n";
            $replace .= "\n\n" . "require_once(__DIR__ . '/lib/setup.php');";
            $content = str_replace($line, $replace, $content);
            file_put_contents($moodlefile, $content);

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
            <div class="title">Installation</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir"
                       value="http://<?php echo $_SERVER['HTTP_HOST'] . pathinfo($_SERVER['REQUEST_URI'])['dirname']; ?>">
            </div>
            <input type="hidden" name="db" value="1">
            <div>
                <span>Moodle path</span>
                <input type="text" name="moodle" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/moodle">
            </div>
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
            <div>
                <input type="checkbox" name="install" id="install"> <label for="install">Confirm installation.</label>
            </div>
            <div>
                <button>INSTALL</button>
            </div>
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
        foreach ($db['table_list'] as $table => $n)
            echo "<tr><td>$table</td><td>{$n}</td></tr>";
        ?>
    </table>
    </body>
    <?php
}
?>