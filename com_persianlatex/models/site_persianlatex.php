<?php
 // no direct access
defined('_PEXEC') or die('Restricted access');

class persianlatexModelsite_persianlatex
  {

      public $sample;

      
      public function __construct()
      {
          PCOnfig::$title =" سامانه لاتک پارسی";
          $script = '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="components/Site/com_persianlatex/asset/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: "textarea#pleditor",  //Change this value according to your HTML
      auto_focus: "element1",
      width: "100%",
      height: "415px"
    });
    
</script>';
          PCOnfig::$headscripts =$script;
      }
      public function compilelatex($latexcontent)
      {
          echo $latexcontent;
          return false;
      }
 
  }
?>