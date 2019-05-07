$(document).ready(function(){
    //$(".navHightlight").on("mouseenter",navbarHighlight);
    $(".navHightlight").on("mouseleave",navbarHighlightDispear);
    $("#btnDefaultSkillContent").on("click",refreshDefaultSkillsContent);
    $("#skillHtml").on("click",changeSkillsHtlmContent);
    $("#skillJavascript").on("click",changeSkillsJsContent);
    $("#skillSql").on("click",changeSkillsSqlContent);
    $("#skillPhp").on("click",changeSkillsPhpContent);
    $("#skillElse").on("click",changeSkillsElseContent);
    $(".projectContent").hide();
    $("#projectBootstrap").on("click",bootstrapContentChange);
    $("#projectJquery").on("click",jqueryContentChange);
    $("#projectAngular").on("click",angularContentChange);
    $("#projectSymfony").on("click",symfonyContentChange);
    $("#btnProjectSapin").on("click",displaySapin);
    $("#btnProjectPUBG").on("click",displayPUBG);
    $("#btnProjecCV").on("click",displayCV);
});

function refreshDefaultSkillsContent(e){
    console.log("button connected");
    $(".skillElements").toggle();
    $("#htmlPresentation").hide();
    $("#jsPresentation").hide();
    $("#sqlPresentation").hide();
    $("#phpPresentation").hide();
    $("#otherSkillsPresentation").hide();
    $("#btnDefaultSkillContent").toggle();
}

function changeSkillsHtlmContent(e) {
    console.log("connected");
    $(".skillElements").toggle();
    $("#htmlPresentation").toggle();
    $("#btnDefaultSkillContent").toggle();
}

function changeSkillsJsContent(e) {
    console.log("JsSkillConnected");
    $(".skillElements").toggle();
    $("#jsPresentation").toggle();
    $("#btnDefaultSkillContent").toggle();
}

function changeSkillsSqlContent(e) {
    console.log("SqlSkillConnected");
    $(".skillElements").toggle();
    $("#sqlPresentation").toggle();
    $("#btnDefaultSkillContent").toggle();
}

function changeSkillsPhpContent(e) {
    console.log("phpSkillConnected");
    $(".skillElements").toggle();
    $("#phpPresentation").toggle();
    $("#btnDefaultSkillContent").toggle();
}

function changeSkillsElseContent(e) {
    console.log("otherSkillConnected");
    $(".skillElements").toggle();
    $("#otherSkillsPresentation").toggle();
    $("#btnDefaultSkillContent").toggle();
}

function navbarHighlight(e){
         console.log("navbar connect");
         $(this).css({"background-color":"yellow", "color":"black"});
}
function navbarHighlightDispear(e){
    console.log("navbar disconnect");
    $(this).css({"background-color":"#343a40", "color":"white"});
}



function bootstrapContentChange(e){
    $("#projectDefaultContent,.projectContent").html("<div id='bootstrapContent' class='projectContent text-center'> <p> test test this the test of bootstrap</p></div>  ")
}

function jqueryContentChange(e){
  $("#projectDefaultContent,.projectContent").html("<div id='jqueryContent' class='projectContent text-center'> <p> test test this the test of jquey</p></div>");
}

function angularContentChange(e){
    $("#projectDefaultContent, .projectContent").html("<div id='angularContent' class='projectContent text-center' > <p> test test this the test of angular</p></div> ");
}

function symfonyContentChange(e){
    $("#projectDefaultContent, .projectContent").html("<div id='symfonyContent' class='projectContent text-center' > <p> test test this the test of symfony</p></div> ");
}

function displaySapin(e){
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" });
  $("#sliderProjectSapin").show(1, "linear",function(){
        $(".btnC").css({"background-color":" #daf7a6","color":"black"})
    });
}

function displayPUBG(e){
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4" });
   $("#sliderProjectPUBG").show(1, "linear",
    function(){
       $(".btnHtml, .btnCss, .btnTwig, .btnMysql, .btnLaravel, .btnPhp").css({"background-color":" #daf7a6","color":"black"})
     }
   );
}
function displayCV(e) {
  $(".project-skill").hide(1, "linear");
  $(".btnsSkills").css({"background-color":"","color":" #c5c5c4 " });
   $("#projetCV").show(1, "linear",
    function(){
       $(".btnHtml, .btnCss, .btnBootstrap, .btnJquery, .btnJavascript").css({"background-color":" #daf7a6","color":"black"})
     }
   );
}
