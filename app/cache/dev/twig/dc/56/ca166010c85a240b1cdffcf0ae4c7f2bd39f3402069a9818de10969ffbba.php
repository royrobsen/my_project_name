<?php

/* base.html.twig */
class __TwigTemplate_dc56ca166010c85a240b1cdffcf0ae4c7f2bd39f3402069a9818de10969ffbba extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/css/style.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
        <script src=\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/angular.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/controller.js"), "html", null, true);
        echo " \"></script>
    </head>
    <body ng-app=\"MyApp\">
        <div id=\"wrapper\">
            <div id=\"menu\">
                <ul>
                    <li class=\"menu_link\">
                        <a href=\"/\" >Home</a>
                    </li>
                    <li class=\"menu-link\">
                        <a href=\"/mannschaft\" >Mannschaft</a>    
                            <ul>
                                <li>
                                    <a href='/spieler'>Spieler</a>
                                </li>
                            </ul>
                    </li>
                    <li class=\"menu-link\">
                        <a href=\"/news\">News</a>
                    </li>
                    <li class=\"menu-link\">
                        <a href=\"/news\">Galerie</a>
                    </li>
                    <li class=\"menu-link\">
                        <a href=\"/impressum\">Impressum</a>
                    </li>
                </ul>
            </div>
            <div id='content'>
                <div id='body'>
                    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "                </div>
            </div>
           <div id='footer'></div>
        </div>
    </body>
    
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "VfL Lohbrügge 3. Herren";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  84 => 4,  74 => 39,  72 => 38,  39 => 8,  35 => 7,  30 => 5,  26 => 4,  21 => 1,);
    }
}
