<?php


abstract class Packages
{

    const DHTMLX4PATH = 'packages/lib/dhtmlxSuite4/';
    const DHTMLX5PATH = 'lib/dhtmlxSuite5/';

    abstract static function DHTMLX();

    abstract static function JQUERY();

    abstract static function BOOTSTRAP();

    abstract static function VIDEOJS();

    abstract static function TINYMCE();

}