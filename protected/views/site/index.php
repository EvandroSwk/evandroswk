<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
/*$this->breadcrumbs=array(
	'About',
);*/
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jqcloud.css" rel="stylesheet">
<div class="row-fluid">
    <div class="span12">
        <div class="pull-left" style="padding: 15px;">
            <img class="img-polaroid" src="<?php echo Yii::app()->request->baseUrl; ?>/images/foto2.jpg" height="100px" />
        </div>
        <div style="padding: 15px;">
            <h1>Evandro Sviercowski <br /><small>Analista e Desenvolvedor de Sistemas</small></h1><br />
            <div>
                Brasileriro, <?php echo SwkUtils::calculaIdade('1986-04-07') ?> anos, casado e apaixonado pela minha linda esposa Ana Maria.
                Louco por tecnologia e viciado em aprender.
            </div>
        </div>
    </div>
</div>
</div>
<div class="row-fluid">
    <div class="span12">
        <p align="center" style="text-align: center;">
            <ul class="nav nav-pills" id="sideMenu" style="text-align: center;">
                <li id="li_habilidade" class="active"><a onclick="hideContent('habilidade')"><i class="icon-tags"></i> Habilidade</a></li>
                <li id="li_esperiencia"><a onclick="hideContent('esperiencia')"><i class="icon-road"></i> Esperiência</a></li>
                <li id="li_formacao"><a onclick="hideContent('formacao')"><i class="icon-certificate"></i> Formação</a></li>
                <li id="li_idioma"><a onclick="hideContent('idioma')"><i class="icon-bullhorn"></i> Idiomas</a></li>
            </ul>
        </p>
    </div>
</div>
<div class="row-fluid">
    <div id="habilidade" class="span12 swkDinamic" style="height: 550px; width: 800px; border: none; margin: auto;">
    </div>
    <div id="formacao" class="span12 swkDinamic" style="display: none;">
        <h3>Formação</h3>
        <dl>
            <dt>MBA em Gestão de Projetos de Software (conclusão 2014)</dt>
            <dd>
                Pontifícia Universidade Católica do Paraná - PUC<br /><br />
            </dd>
            <dt>Bacharelado em Informática (2008)</dt>
            <dd>
                Universidade Estadual de Ponta Grossa - UEPG
            </dd>
        </dl>

    </div>
    <div id="esperiencia" class="span12 swkDinamic" style="display: none;">
        <h3>Esperiência</h3>
        <dl>
            <dt>2008 - Atual Daysoft Serviços de Tecnologia</dt>
            <dd>
                Análise, desenvolvimento, implantação e suporte de sistemas:
                <ul>
                    <li>
                        Gestão ambulatorial com cerca de 1.300.000 beneficiarios, 1.500.00 de busca de vagas e 120.000
                        agendamentos realizados por mês
                    </li>
                    <li>
                        Monitoramento de pacientes crônicos.
                    </li>
                    <li>
                        Recadastramento de aposentados e pencionistas
                    </li>
                </ul>

            </dd>
        </dl>
    </div>
    <div id="idioma" class="span12 swkDinamic" style="display: none;">
        <h3>Idiomas</h3>
        <dl>
            <dt>Português</dt>
            <dd>Nativo</dd>
            <dt>Inglês</dt>
            <dd>Avançado</dd>
        </dl>
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
        $("#habilidade").jQCloud(word_list, {shape: "rectangular"});
    });
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqcloud-1.0.1.min.js"></script>