<?php
 // no direct access
defined('_PEXEC') or die('Restricted access');

class persianlatexModelsite_persianlatex
  {

      public $sample;
      public $scriptz;

      
      public function __construct()
      {
          PCOnfig::$title =" سامانه لاتک پارسی";
          if(isset($_GET['pls'])){
             $_GET['pls']?self::plswitch(1):self::plswitch(0);
          }else{
              self::plswitch(0);
          }
      }
      public function compilelatex($latexcontent)
      {
          echo $latexcontent;
          return false;
      }
      public function plswitch($s)
      {
          if($s){  
              $this->scriptz = ' 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="components/Site/com_persianlatex/asset/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: "textarea#pleditor",
  height: 500,
  plugins: "codesample code",
  codesample_languages: [
    {text: "HTML/XML", value:"markup"},
    {text: "JavaScript", value: "javascript"},
    {text: "CSS", value: "css"},
    {text: "PHP", value: "php"},
    {text: "Ruby", value: "ruby"},
    {text: "Python", value: "python"},
    {text: "Java", value: "java"},
    {text: "C", value: "c"},
    {text: "C#", value: "csharp"},
    {text: "C++", value:"cpp"}
  ],
  toolbar: "codesample code",
  content_css: "//www.tiny.cloud/css/codepen.min.css"
});    
</script>';
          }else{
              $this->scriptz = ' 
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
          }
          PCOnfig::$headscripts =$this->scriptz;
//          header('location: index.php?option=persianlatex#component');
          return $this;
      }
 
  }
?>