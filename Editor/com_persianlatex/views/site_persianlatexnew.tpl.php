<?php
// no direct access
defined('_PEXEC') or die('Restricted access');
?>
{load_components_object filename="site_persianlatexnew" assign="obj"}{config_load file="site.conf"}
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/persianlatex.css');{/php}" />
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/persianlatexnew.css');{/php}" />

<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/themes/gray/easyui.css');{/php}" />
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/themes/icon.css');{/php}" />
<link rel="stylesheet" type="text/css" href="{php} echo Link::Build('components/Site/com_persianlatex/asset/css/themes/demo.css');{/php}" />





<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/jquery.min.js');{/php}"></script>
<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/jquery.easyui.min.js');{/php}"></script>

<script type="text/javascript" src="{php} echo Link::Build('components/Site/com_persianlatex/asset/js/persianlatexnew.js');{/php}"></script>

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




 
<!--Content of----------------------------------------------------- pages here-->
<div style="margin:20px 0;"></div>
<div id="baseapp">
    <div id="lleft">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#component" onclick="addPanel('درباره ما')">درباره ما</a>
          <a href="#component" onclick="addPanel('خدمات ما')">خدمات ما</a>
          <a href="#component" onclick="addPanel('ارتباط باما')">ارتباط باما</a>
        </div>
    </div>
    <div id="lright"> 
    <div class="easyui-layout" style="width:100%;height:100%;border: 3px solid;">
        <div data-options="region:'north'" style="height:70px;border-bottom: 3px solid;">
            <div id="main" >
                </span>  
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
        <div data-options="region:'south',split:true,hideCollapsedContent:false,collapsed:'true'" title="[صفحه کیلید]" style="height:200px;">
            <div class="panel-header">
                <div class="panel-title panel-with-icon"style="margin:5px">Keyboard</div>
                <div class="panel-icon icon-terminal"></div>
                <div class="panel-tool">
                        <a href="javascript:;" class="panel-tool-collapse" ></a>
                </div>
            </div>
            <div class="easyui-tabs tabs-container easyui-fluid" data-options="fit:true,border:false,plain:true,tabPosition:'bottom'">
                {include file="tab1.tpl"}
                {include file="tab2.tpl"}
            </div>
 
        </div>
        <div id="pppreview" data-options="region:'east',split:true,hideCollapsedContent:false,collapsed:false" title="[پیش نمایش]" style="width:50%;">
            <div id="preview">
                        <div id="priviewtitle">پیش نمایش</div>
                        <div id="display-post">
                            {$obj->sample}
                            <span id="imgwait" style="display: none"><img  src="{php} echo Link::Build("components/Site/com_persianlatex/asset/images/wait.gif");{/php}"></span>
                        </div> 
             </div>
        </div>
        <div data-options="region:'west',split:true,hideCollapsedContent:false,collapsed:'true'" title="[پیکربندی]" style="width:300px;">
            <div class="easyui-accordion" data-options="fit:true,border:false">
                <div title="شخصی سازی" style="padding:10px;">
                 {include file="settings.tpl"}
                </div>
                <div title="نمای درختی فایل ها" data-options="selected:true" style="padding:10px;">
                    <ul class="easyui-tree" data-options="url:'components/Site/com_persianlatex/views/tree_data1.json',method:'get',animate:true,dnd:true"></ul>
                </div>
                <div title="Title3" style="padding:10px">
                    content3
                </div>
            </div>
        </div>
        <div data-options="region:'center'">
            <div class="panel-icon icon-result"></div>
            <div id="tt" class="easyui-tabs tabs-container easyui-fluid" data-options="fit:true,border:false,plain:true,closable:false">    
                <div title="ویرایشگر" id="editorframe" style="z-index: 0;position: relative;direction: ltr;overflow: hidden;"> 
                     <div class="texteditor-container">
                         <textarea name="pleditor" id="pleditor">{$obj->sample}</textarea> 
                     </div>
                </div>
<!--                <div id="tab-tools"> 
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-add'" onclick="addPanel()"></a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-remove'" onclick="removePanel()"></a>
                </div> -->
                <div title="سندهای من" style="padding:5px">
                    <table class="easyui-datagrid"
                            data-options="url:'components/Site/com_persianlatex/views/datagrid_data1.json',method:'get',singleSelect:true,fit:true,fitColumns:true">
                        <thead>
                            <tr>
                                <th data-options="field:'itemid'" width="80">Item ID</th>
                                <th data-options="field:'productid'" width="100">Product ID</th>
                                <th data-options="field:'listprice',align:'right'" width="80">List Price</th>
                                <th data-options="field:'unitcost',align:'right'" width="80">Unit Cost</th>
                                <th data-options="field:'attr1'" width="150">Attribute</th>
                                <th data-options="field:'status',align:'center'" width="50">Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    </div>
 </div>

<!--Content of----------------------------------------------------- pages here END-->