<?php
// no direct access
defined('_PEXEC') or die('Restricted access');
?>
{load_components_object filename="site_persianlatex" assign="obj"}{config_load file="site.conf"}
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/persianlatex.css');{/php}" />

<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/3024-day.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/3024-night.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/ambiance.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/base16-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/base16-light.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/blackboard.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/cobalt.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/eclipse.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/elegant.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/mbo.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/mdn-like.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/midnight.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/monokai.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/neat.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/neo.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/night.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/paraiso-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/paraiso-light.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/pastel-on-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/solarized.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/the-matrix.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/twilight.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/vibrant-ink.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/theme/xq-light.css">

<link rel="stylesheet" href="components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/addon/hint/show-hint.css">







<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/addon/hint/javascript-hint.js');{/php}"></script>
<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/addon/hint/show-hint.js');{/php}"></script>
<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/tinymce/plugins/codemirror/mode/javascript/javascript.js');{/php}"></script>

<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/persianlatex.js');{/php}"></script>
 
<!--Content of----------------------------------------------------- pages here-->
<div id="baseapp">
    <div id="lleft">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#component">تنظیمات</a>
                {$obj->themez}
          <a href="#component">Services</a>
          <a href="#component">Clients</a>
          <a href="#component">Contact</a>
        </div>
    </div>
    <div id="lright"> 
        <div id="ltoobar" class="ltoobar">
            <div id="main" >
                  
                <label class="switch" style="margin: 16px -70px;position: absolute;" title="مفسر زبان ها/ویرایشگر ساده">
                  <input type="checkbox" id="plswitch" value="1"{$obj->chk1}>
                  <span class="slider round"></span>
                </label>
                <label class="switch" style="margin: 16px -138px;position: absolute;" title="ویرایشگر لاتک">
                  <input type="checkbox" id="plswitch1" value="0" {$obj->chk}>
                  <span class="slider round"></span>
                </label>
               

              <input type="button" id="buttonpost" value="اجرا"  />
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">پرشین لاتِک&#9776;</span>
              
            </div>
        </div>
        <div id="lpanels" class="ltoobar">
            <div  id="editor"> 
                 <div class="texteditor-container">
                     <textarea name="pleditor" id="pleditor">{$obj->sample}</textarea> 
                 </div>
            </div>
            <div id="preview">
                    <div id="priviewtitle">پیش نمایش</div>
                    <div id="display-post"  width:100%;background-color: black;" >
        
                    {$obj->sample}
              
                    </div> 
                    <span id="imgwait" style="display: none"><img  src="{php} echo Link::Build("components/Site/com_persianlatex/asset/images/wait.gif");{/php}"></span>
            </div>
        </div>
    </div>
</div>

    

<!--Content of----------------------------------------------------- pages here END-->