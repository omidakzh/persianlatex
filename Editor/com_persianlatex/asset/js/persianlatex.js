function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


$( document ).ready(function() {
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
               window.location = 'index.php?option=persianlatex&pls=1#component';
              
            }else{
               //run code
               $('#imgwait').show();
               window.location = 'index.php?option=persianlatex&pls=0#component';
;
            }
        });
        $("#plswitch1").change(function(){
            if($(this).prop("checked") == true){ 
               //run code
               $('#imgwait').show();
               window.location = 'index.php?option=persianlatex&pls=2#component';
            }else{
               //run code
               $('#imgwait').show();
               window.location = 'index.php?option=persianlatex&pls=0#component';
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