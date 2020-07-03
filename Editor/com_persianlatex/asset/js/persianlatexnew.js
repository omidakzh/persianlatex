/*POLNET.IR*/
function setTabs(){
    $('#tt').tabs({
        plain: $('#plain').is(':checked'),
        narrow: $('#narrow').is(':checked'),
        pill: $('#pill').is(':checked'),
        justified: $('#justified').is(':checked')
    })
}

var index = 0;
function addPanel(ptitle){
    closeNav();
    pclosepanel('east');
    $('#imgwait').show();
    index++;
    $('#tt').tabs('add',{
        title: ptitle+index,
        content: '<span id="imgwait" style="display: block"><img  src="components/Site/com_persianlatex/asset/images/wait.gif"></span>',
        closable: true
    });
}
function pclosepanel(pl){
//    $.messager.alert('شکیبا باشید!','بارگیری'+pl,'info');
      //  pmsgcenter('title',pl);
      pmsgprogress('شکیبا باشید',pl);
     // defaultpreview();
//     if ($('#cc').layout('panel','east').panel('options').collapsed){
//  $('#cc').layout('expand','east');
//}
    $('#pppreview').panel('open');
//    $("#pppreview").layout('collapse', 'east');
//    $("#pppreview").layout('resize');
}
function defaultpreview(){
    $('#pppreview').layout('resize', {
    width:'80%',
    height:300
})
}
function nameofproject(){
    $.messager.prompt('نام سند', 'لطفا نام سند را وارد کنید:', function(r){
        if (r){
            $('#nameofproject').val(r);
        }
    });
}
function pmsgcenter(ptt,pmsg,ptype='fade'){
    $.messager.show({
        title:ptt,
        msg:pmsg,
        showType:ptype,
        style:{
            right:'',
            bottom:''
        }
    });
}
function pmsgprogress(ptt,pmsg){
    var win = $.messager.progress({
        title:ptt,
        msg:'Loading data...'+pmsg
    });
    setTimeout(function(){
        $.messager.progress('close');
    },5000)
}
function removePanel(){
    var tab = $('#tt').tabs('getSelected');
    if (tab){
        var index = $('#tt').tabs('getTabIndex', tab);
        $('#tt').tabs('close', index);
    }
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function getCompletions(token, context) {
  var found = [], start = token.string;
  function maybeAdd(str) {
    if (str.indexOf(start) == 0) found.push(str);
  }
  function gatherCompletions(obj) {
    if (typeof obj == "string") forEach(stringProps, maybeAdd);
    else if (obj instanceof Array) forEach(arrayProps, maybeAdd);
    else if (obj instanceof Function) forEach(funcProps, maybeAdd);
    for (var name in obj) maybeAdd(name);
  }

  if (context) {
    // If this is a property, see if it belongs to some object we can
    // find in the current environment.
    var obj = context.pop(), base;
    if (obj.className == "js-variable")
      base = window[obj.string];
    else if (obj.className == "js-string")
      base = "";
    else if (obj.className == "js-atom")
      base = 1;
    while (base != null && context.length)
      base = base[context.pop().string];
    if (base != null) gatherCompletions(base);
  }
  else {
    // If not, just look in the window object and any local scope
    // (reading into JS mode internals to get at the local variables)
    for (var v = token.state.localVars; v; v = v.next) maybeAdd(v.name);
    gatherCompletions(window);
    forEach(keywords, maybeAdd);
  }
  return found;
}
$( document ).ready(function() {
         
       
        $('.lfooterDrawer .open').on('click', function() {

            $('.lfooterDrawer .content').slideToggle();

      });
    
        $('#preview').on({
            'mouseenter':function(){
                $('#priviewtitle').slideDown();
            },
            'mouseleave':function(){
               $('#priviewtitle').slideUp(); 
            }
           
        });
        $("#buttonpost").on("click", function(){
             if($('#plswitch1').prop("checked") == false){
                tinyMCE.triggerSave();
             }
            var lvalue = $("textarea#pleditor").val();
            if(lvalue != ''){
                if(confirm("ایا محتوا پردازش  شود؟")) {
                    $('#imgwait').show();
                    $.post('?option=persianlatex&task=compilelatex', 
                    {
                        latexcontent:lvalue
                    }
                    ,function(data)
                    {
                        $('#imgwait').hide();
                        $("#display-post").html(data);
                    }); 
                }
            }
          
            return false;
        });
        
        $("#plswitch").change(function(){
            tinyMCE.triggerSave();
            if($(this).prop("checked") == true){ 
               //run code
               $('#imgwait').show();
               window.location = '?option=persianlatex&controller=persianlatexnew&pls=1#component';
              
            }else{
               //run code
               $('#imgwait').show();
               window.location = '?option=persianlatex&controller=persianlatexnew&pls=0#component';
;
            }
        });
        $("#plswitch1").change(function(){
            if($(this).prop("checked") == true){ 
               //run code
               $('#imgwait').show();
               window.location = '?option=persianlatex&controller=persianlatexnew&pls=2#component';
            }else{
               //run code
               $('#imgwait').show();
               window.location = '?option=persianlatex&controller=persianlatexnew&pls=0#component';
            }
        });
        var editor = CodeMirror.fromTextArea(document.getElementById("pleditor"), 
        {
            lineNumbers: true,
            extraKeys: {"Ctrl-Space": "autocomplete"},
           mode: {name: "stex", globalVars: true}
        });
         editor.setOption("theme", 'mdn-like');
         $('#themez').on("click",function(){
            var theme = $('#themez').val(); 
            editor.setOption("theme", theme); 
         });
    
});
 
 