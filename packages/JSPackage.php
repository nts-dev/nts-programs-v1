<?php


class JSPackage
{


    static function DHTMLX()
    {
        echo '<script src="'.Boot::WWWROOT.'packages/lib/dhtmlxSuite5/codebase/dhtmlx.js"></script>';
    }

    static function DHTMLX4()
    {
        echo '<script src="'.Boot::WWWROOT.'packages/lib/dhtmlxSuite4/codebase/dhtmlx.js"></script>';
    }

    static function JQUERY()
    {
        echo '<script src="'.Boot::WWWROOT.'packages/lib/jquery/jquery2.1.3.min.js"></script>';
        echo '<script src="'.Boot::WWWROOT.'packages/lib/jquery/jquery-ui.min.js"></script>';
    }

    static function BOOTSTRAP()
    {
        echo '<script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/bootstrap/dist/js/bootstrap.min.js"></script>';
    }

    static function VIDEOJS()
    {
        echo '<script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/video-js/video.min.js"></script>';
    }

    static function FONTAWESOME() {
        echo '<script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/fontawesome/fontawesome.min.js"></script>
                <script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/fontawesome/solid.min.js"></script>';
    }
    static function TINYMCE()
    {
        echo '<script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/tinymce/tinymce.min.js"></script>';
    }

    static function NUEVO()
    {
        echo '<script type="text/javascript" src="'.Boot::WWWROOT.'packages/lib/nuevo/nuevo.min.js"></script>';
    }
}