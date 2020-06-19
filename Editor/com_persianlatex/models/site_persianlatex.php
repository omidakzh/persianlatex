<?php
 // no direct access
defined('_PEXEC') or die('Restricted access');

class persianlatexModelsite_persianlatex
  {

      public $sample;
      public $chk;
      public $chk1;
      public $scriptz;
      public $themez;
      

      
      public function __construct()
      {
          PCOnfig::$title =" سامانه لاتک پارسی";
          if(isset($_GET['pls'])){ 
              if($_GET['pls']==2)
              {
                  self::plswitch(2);
              }else{
                  $_GET['pls']?self::plswitch(0):self::plswitch(1);    
              }
             
          }else{
              self::plswitch(1);
          }
          $this->themez = scandir(COMPONENTS_DIR.'Site'.DS.'com_persianlatex/asset/js/tinymce/plugins/codemirror/theme');
          foreach($this->themez  as $idx =>$item)
          {
              if($item[$idx] !='.' ){
                $thems[] =array('name'=>(substr($item,0,strlen($item)-4))) ; 
              }
          }
          $this->themez=HtmlHandler::gComboBoxWithArray($thems,'name','name',"themez");
          
      }
      public function compilelatex($latexcontent)
      {
          echo $latexcontent;
          return false;
      }
      public function plswitch($s)
      {
          if($s==0){  
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
              $this->sample='<p style="text-align: center;"><strong>.ویرایشگر زبان های برنامه نویسی</strong></p>'; 
              $this->chk1 = "checked='checked'";
          }elseif($s==1){
              $this->scriptz = ' 
<script type="text/javascript" src="components/Site/com_persianlatex/asset/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: "textarea#pleditor",  //Change this value according to your HTML
      auto_focus: "element1",
      width: "100%",
      height: "415px"
    });
    
</script>';
              $this->sample="ویرایشگر معمولی";
          }elseif($s==2){
              $this->scriptz = '
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async
          src="components/Site/com_persianlatex/asset/js/es5/tex-mml-chtml.js">
  </script>  
<link rel="stylesheet"
  href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/lib/codemirror.css">
</link>
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/mdn-like.css">

<script type="text/javascript"
  src="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/lib/codemirror.js">
</script>
<script src="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/mode/stex/stex.js"></script>

'; 
              $this->sample= file_get_contents("components/Site/com_persianlatex/models/samplelatex1.txt");
              $this->chk = "checked='checked'";
          }
          PCOnfig::$headscripts =$this->scriptz;
//          header('location: index.php?option=persianlatex#component');
          return $this;
      }
 
  }
?>