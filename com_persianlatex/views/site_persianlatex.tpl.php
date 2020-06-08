<?php
// no direct access
defined('_PEXEC') or die('Restricted access');
?>
{load_components_object filename="site_persianlatex" assign="obj"}{config_load file="site.conf"}
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/persianlatex.css');{/php}" />
<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/persianlatex.js');{/php}"></script>
 
<!--Content of----------------------------------------------------- pages here-->
<div id="baseapp">
    <div id="lleft">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a>
        </div>
    </div>
    <div id="lright"> 
        <div id="ltoobar" class="ltoobar">
            <div id="main" >
              <input type="button" id="buttonpost" value="اجرا"  />
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">پرشین لاتِک&#9776;</span>
              
            </div>
        </div>
        <div id="lpanels" class="ltoobar">
            <div  id="editor"> 
                 <div class="texteditor-container">
                     <textarea name="pleditor" id="pleditor"></textarea> 
                 </div>
            </div>
            <div id="preview">
                    <div id="display-post"  width:100%;background-color: black;" >پیش نمایش</div> 
                    <span id="imgwait" style="display: none"><img  src="{php} echo Link::Build("components/Site/com_persianlatex/asset/images/wait.gif");{/php}"></span>
            </div>
        </div>
    </div>
</div>

    

<!--Content of----------------------------------------------------- pages here END-->