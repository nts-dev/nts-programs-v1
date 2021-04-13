<?php

require 'includes.php';

/**
 *
 * TODO change in installer later
 */
if (!file_exists('Boot.php')) {
    header("Location: " .WEBURL. basename(dirname(__FILE__)) . "/install.php");
    exit;
}

$eid = filter_input(INPUT_GET, 'eid', FILTER_SANITIZE_NUMBER_INT);
if (!$eid) {
    header("location: login.php");
}

// Make the connection:
$dbc = mysqli_connect(Boot::DBHOST, Boot::DBUSER, Boot::DBPASS, Boot::DBNAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

session_start();
$query_check_credentials = "SELECT contact_attendent,contact_id,contact_language_id,branch_id FROM relation_contact JOIN trainees ON trainees.IntranetID = relation_contact.contact_id WHERE contact_id = '" . $eid . "'";
$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
if (!$result_check_credentials) {//If the QUery Failed
    echo 'Query Failed ';
}
if (@mysqli_num_rows($result_check_credentials) == 1) {//if Query is successfull  // A match was made.
    $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC); //Assign the result of this query to SESSION Global Variable
}
$username = $_SESSION['contact_attendent'];
$language = $_SESSION['contact_language_id'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>NTS Programs</title>

    <?php
    CSSPackage::DHTMLX();
    JSPackage::DHTMLX();

    ?>

    <style>

        html, body {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .dhxlayout_base_dhx_web div.dhx_cell_layout div.dhx_cell_cont_layout {
            /*border: none;*/
            padding: 0px !important;
        }
    </style>
    <script>

        let myLayout;
        let myToolbar;

        function doOnLoad() {

            myLayout = new dhtmlXLayoutObject(document.body, "1C");
            myLayout.cells("a").hideHeader();

            const myToolbar = myLayout.attachToolbar();
            // myToolbar.setIconset("awesome");
            myToolbar.addButton('def', 0, 'Projects', '', '');
            myToolbar.addSeparator('button_separator_1', 1);
            myToolbar.addButton('videos', 2, 'Videos', '', '');
            myToolbar.addSeparator('button_separator_2', 3);
            myToolbar.addButton('doc_extract', 4, 'Goodle Doc Extract', '', '');
            myToolbar.addSeparator('button_separator_3', 5);
            myToolbar.addText('welcomeText', 6, "<?= $username ?>");
            myToolbar.addSeparator('button_separator_4', 7)
            myToolbar.addButton('logout', 8, "Sign out");
            myToolbar.addSpacer("button_separator_3");
            myToolbar.attachEvent("onClick", showView);

            // by the default "def" view used, when layout is loaded
            // this view also loaded, so just init

            myLayout.cells("a").attachURL("<?= Boot::WWWROOT ?>/nts-project/index.php?eid=<?= $eid ?>");
        }

        function showView(id) {

            const firstShow = myLayout.cells("a").showView(id);

            // view became visible first time, loading content
            if (firstShow) {

                if (id == "videos") {
                    myLayout.cells("a").attachURL("<?= Boot::WWWROOT ?>/nts-video/home.php?eid=<?= $eid ?>");
                }

                if (id == "doc_extract") {
                    myLayout.cells("a").attachURL("<?= Boot::WWWROOT ?>/docs-extract/?eid=<?= $eid ?>");
                }
            }
        }

    </script>
</head>
<body onload="doOnLoad();">
</body>

</html>
