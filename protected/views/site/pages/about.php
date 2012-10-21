<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
/*$this->breadcrumbs=array(
	'About',
);*/
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jqcloud.css" rel="stylesheet">
<div class="row-fluid">
    <div class="span4">
        <img class="pull-left img-polaroid" src="<?php echo Yii::app()->request->baseUrl; ?>/images/placeholder.png" />
    </div>
    <div class="span8">
        <div class="clearfix">
                <h1 class="pull-left">Evandro Sviercowski <br /><small>Analista, Desenvolvedor de Sistemas</small></h1>
        </div>
            Brasileriro, <?php echo SwkUtils::calculaIdade('1986-04-07') ?> anos, casado. Bacharel em Informática pela Universidade Estadual de Ponta Grossa - UEPG.
            Apaixonado por tecnologia, e pela minha linda esposa Ana Maria.
    </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <ul class="nav nav-list" id="sideMenu">
            <li id="li_habilidade" class="active"><a onclick="hideContent('habilidade')"><i class="icon-tags"></i> Habilidade</a></li>
            <li id="li_esperiencia"><a onclick="hideContent('esperiencia')"><i class="icon-list-alt"></i> Esperiência</a></li>
            <li id="li_formacao"><a onclick="hideContent('formacao')"><i class="icon-certificate"></i> Formação</a></li>
            <li id="li_tagCloud"><a onclick="hideContent('tagCloud')"><i class="icon-tags"></i> Tag</a></li>
        </ul>
        <!--<div class="btn-group" align="center">
            <button class="btn" onclick="hideContent('habilidade')"><i class="icon-tags"></i> Habilidade</button>
            <button class="btn" onclick="hideContent('esperiencia')"><i class="icon-list-alt"></i> Esperiência</button>
            <button class="btn" onclick="hideContent('formacao')"><i class="icon-certificate"></i> Formação</button>
			<button class="btn" onclick="hideContent('tagCloud')"><i class="icon-tags"></i> Tag</button>
        </div>-->
    </div>
</div>
<div class="row-fluid">
    <div id="habilidade" class="span12 swkDinamic">
        <h3>Habilidades</h3>
        <div class="span4">
            PHP
            <div class="progress">
                <div class="bar" style="width: 90%;"></div>
            </div>
            HTML/CSS
            <div class="progress">
                <div class="bar" style="width: 75%;"></div>
            </div>
            Javascript/JQuery
            <div class="progress">
                <div class="bar" style="width: 85%;"></div>
            </div>
        </div>
        <div class="span4">
            PL/SQL
            <div class="progress">
                <div class="bar" style="width: 90%;"></div>
            </div>
            MySql
            <div class="progress">
                <div class="bar" style="width: 85%;"></div>
            </div>
            Apache
            <div class="progress">
                <div class="bar" style="width: 75%;"></div>
            </div>
        </div>
        <div class="span4">
            MVC
            <div class="progress">
                <div class="bar" style="width: 80%;"></div>
            </div>
            Yii Framawork
            <div class="progress">
                <div class="bar" style="width: 85%;"></div>
            </div>
            C#/.Net
            <div class="progress">
                <div class="bar" style="width: 45%;"></div>
            </div>
            Java
            <div class="progress">
                <div class="bar" style="width: 40%;"></div>
            </div>
        </div>
    </div>
    <div id="formacao" class="span12 swkDinamic" style="display: none;">
        <h3>Formação</h3>
        jsa lhlfshjlhfkshjfh
    </div>
    <div id="esperiencia" class="span12 swkDinamic" style="display: none;">
        <h3>Esperiência</h3>
        amlkas jshjhfkjhjshfkjh
    </div>
	<div id="tagCloud" class="span12 swkDinamic" style="height: 350px; border: 1px solid #ccc; margin: auto;">
    </div>
</div>
<script type="text/javascript">
    function hideContent(id){
        $(".swkDinamic:visible").slideUp(500,function() {
            $("#sideMenu li").removeClass("active");
            $("#li_"+id).addClass("active");
            $("#"+id).slideDown(500);
        });
    }
</script>
<script type="text/javascript">
      var word_list = [
        {text: "MVC", weight: 8},
        {text: "PHP", weight: 10},
        {text: "MySQL", weight: 9},
        {text: "jQuery", weight: 8},
        {text: "SQL", weight: 10},
        {text: "C#", weight: 6},
        {text: ".Net", weight: 6},
        {text: "JAVA", weight: 6},
        {text: "Yii Framework", weight: 8},
        {text: "Javascript", weight: 9},
        {text: "Linux", weight: 9},
        {text: "HTML", weight: 9},
        {text: "CSS", weight: 7},
        {text: "Apache", weight: 7},
		{text: "Scrum", weight: 7},
        {text: "Web Service", weight: 6},
        {text: "SOAP", weight: 6},
		{text: "Windows", weight: 7},
		{text: "GIT", weight: 6},
		{text: "SVN", weight: 8},
		{text: "UML", weight: 8},
		{text: "C/C++", weight: 8},
        {text: "BI", weight: 8},
        {text: "BXBMaster", weight: 8},
        {text: "FPDF", weight: 6},
        {text: "TCPDF", weight: 6},
        {text: "MongoDB", weight: 6},
        {text: "NoSQL", weight: 6},
        {text: "Asterisk", weight: 6}
        
      ];
      $(function() {
        $("#tagCloud").jQCloud(word_list, {shape: "rectangular"});
      });
    </script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqcloud-1.0.1.min.js"></script>