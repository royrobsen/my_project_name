<?php

/* adminbase.html.twig */
class __TwigTemplate_702f4dd74a73e863a51675fdd517d7b2716efbacad2bee51a9bdedcff862424e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeadmin/css/style-admin.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src=\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeadmin/js/jquery.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/angular.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/controller.js"), "html", null, true);
        echo " \"></script>
        <script>
            \$(document).ready(function() {
                tinymce.init({selector:'textarea', skin:'light', menubar: false, plugins: \"link wordcount\", language : 'de', height : 300});
\t\t
                \$(\".menulink\").click(function() {
\t\t\tvar div = \$(this).attr(\"id\").split(\"-\");
\t\t\tvar divno = \"#div-\"+div[1];
\t\t\tif(\$(divno).css('display') == 'none') {
\t\t\t\$(divno).slideDown();
\t\t\t}
\t\t\telse {
\t\t\t\$(divno).slideUp();
\t\t\t}\t
\t\t});

            });
        </script>
    </head>
    <body ng-app=\"MyApp\">
        <div id='upper-div'>
            <h2>Administrationsbereich - <a href='/'>VfL Lohbrügge 3. Herren</a></h2>
        </div>
        <div id='leftmenu'>
            <h4><a>Dashboard</a></h4>
            <h4><a class='menulink' id='link-1'>Beiträge</a></h4>
        <div class='menudiv' id='div-1' style='background: #333; padding: 10px; display: none;'>
            <ul>
                <li><a href='edit.php'>Alle anzeigen</a></li>
                <li><a href='new-article.php'>Neu Erstellen</a></li>
\t\t<li><a>Kategorien</a></li>
\t\t<li><a>Papierkorb</a></li>
            </ul>
        </div>
            <h4><a class='menulink' id='link-2'>Termine</a></h4>
        <div  class='menudiv' id='div-2' style='background: #333; padding: 10px; display: none;'>
            <ul>
                <li><a>Alle anzeigen</a></li>
                <li><a>Neu Erstellen</a></li>
\t\t<li><a>Kategorien</a></li>
            </ul>
\t</div>
            <h4><a class='menulink' id='link-3'>Spieler</a></h4>
        <div  class='menudiv' id='div-3' style='background: #333; padding: 10px; display: none;'>
            <ul>
                <li><a>Alle anzeigen</a></li>
                <li><a>Neu Erstellen</a></li>
            </ul>
        </div>
            <h4><a class='menulink' id='link-4'>Benutzer</a></h4>
        <div  class='menudiv' id='div-4' style='background: #333; padding: 10px; display: none;'>
            <ul>
                <li><a>Alle anzeigen</a></li>
                <li><a>Neu Erstellen</a></li>
\t\t<li><a>Dein Profil</a></li>
            </ul>
        </div>
            <h4><a class='menulink' id='link-4'>Medien</a></h4>
        <div  class='menudiv' id='div-4' style='background: #333; padding: 10px; display: none;'>
            <ul>
                <li><a>Medienübersicht</a></li>
                <li><a>Datei hinzufügen</a></li>
            </ul>
        </div>
        </div>
        <div id='content'>
           ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        </div>
    </body>
    
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "VfL Lohbrügge 3. Herren";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 75,  121 => 4,  114 => 76,  112 => 75,  43 => 9,  39 => 8,  35 => 7,  30 => 5,  26 => 4,  21 => 1,);
    }
}
