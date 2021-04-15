<?php

require 'auth.php';

/**
 *
 * TODO change in installer later
 */
if (!file_exists('Boot.php')) {
    header("Location: " . WEBURL .'/'. basename(dirname(__FILE__)) . "/install.php");
    exit;
}


if (!isset($_SESSION['USER'])) {
    header("location: login.php");
}

$session = unserialize($_SESSION['USER']);


$user = $session->getBOUser();

$eid = $user->getTraineeId();
$username = $user->getAttendent();

?>
<!DOCTYPE html>
<html>
<head>
    <title>NTS Programs</title>

    <?php
    CSSPackage::DHTMLX();
    JSPackage::DHTMLX();
    JSPackage::JQUERY();

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

            myLayout.cells("a").attachURL("<?= WEBURL . Boot::WWWROOT ?>nts-project/index.php?eid=<?= $eid ?>");
        }

        function showView(id) {

            if (id === 'logout') {

                $.get('logout.php', function (response){
                    if(response.success)
                        window.location.reload()
                }, 'json');
                return;
            }

            const firstShow = myLayout.cells("a").showView(id);

            // view became visible first time, loading content
            if (firstShow) {

                if (id == "videos") {
                    myLayout.cells("a").attachURL("<?= WEBURL . Boot::WWWROOT?>nts-video/home.php?eid=<?= $eid ?>");
                }

                if (id == "doc_extract") {
                    myLayout.cells("a").attachURL("<?= WEBURL . Boot::WWWROOT ?>docs-extract/?eid=<?= $eid ?>");
                }


            }
        }

    </script>
</head>
<body onload="doOnLoad();">
</body>

</html>
