function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

$( document ).ready(function() {
    
        $("#buttonpost").on("click", function(){
            tinyMCE.triggerSave();
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
    
});