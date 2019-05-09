$(document).ready(function(){
    //$(".navHightlight").on("mouseenter",navbarHighlight);
    //$(".navHightlight").on("mouseleave",navbarHighlightDispear)
    $("#btnProject2048").on("click",display2048)
    $("#btnProjectSapin").on("click",displaySapin)
    $("#btnProjectAlloCine").on("click",displayAlloCine)
    $("#btnProjectCV").on("click",displayCV)
    $("#btnProjectEboutique").on("click",displayEboutique)
})

function display2048(e){
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" })
  $("#sliderProject2048").show(1, "linear",function(){
        $(".btnJavascript, .btnJquery, .btnCss, .btnHtml ").css({"background-color":" #daf7a6","color":"black"})
    })
}

function displaySapin(e){
  $(".project-skill").hide(1, "linear")
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" })
  $("#sliderProjectSapin").show(1, "linear",function(){
        $(".btnC").css({"background-color":" #daf7a6","color":"black"})
    })
}

function displayEboutique(e){
  $(".project-skill").hide(1, "linear")
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" })
  $("#sliderProjectEboutique").show(1, "linear",function(){
        $(".btnHtml, .btnCss, .btnMaterialize, .btnJquery").css({"background-color":" #daf7a6","color":"black"})
    })
}

function displayAlloCine(e){
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" })
   $("#sliderProjectAlloCine").show(1, "linear",
    function(){
       $(".btnHtml, .btnCss, .btnTwig, .btnMysql, .btnSymfony, .btnPhp").css({"background-color":" #daf7a6","color":"black"})
     }
   )
}

function displayCV(e) {
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" })
   $("#projetCV").show(1, "linear",
    function(){
       $(".btnHtml, .btnCss, .btnBootstrap, .btnJquery, .btnJavascript").css({"background-color":" #daf7a6","color":"black"})
     }
   )
}
