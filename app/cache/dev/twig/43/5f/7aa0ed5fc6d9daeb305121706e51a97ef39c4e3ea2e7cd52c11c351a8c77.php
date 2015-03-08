<?php

/* AcmeBlogBundle:Default:news.html.twig */
class __TwigTemplate_435f7aa0ed5fc6d9daeb305121706e51a97ef39c4e3ea2e7cd52c11c351a8c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id='fullcontent' ng-controller='PaginationCtrl'>
        <h1>Neueste Beiträge</h1>
            <div ng-repeat=\"item in items | offset: currentPage*itemsPerPage | limitTo: itemsPerPage\">
                <h3><a href=\"article/[[ item.alias ]]\"> [[item.headline]]</a></h3>
              
            </div>                        
            <div id=\"prev-page\" class=\"nav-btn\" ng-class=\"prevPageDisabled()\">
                <button id=\"prev-btn\" ng-click=\"prevPage()\">Vorherige Seite</button>
            </div>
            <div id=\"next-page\" class=\"nav-btn\" ng-class=\"nextPageDisabled()\">
                <button id=\"next-btn\" ng-click=\"nextPage()\">Nächste Seite</button>
            </div>
    </div>
    <div id='right_sector'>
        <div class='rechtespalte'><h1>Nicht angemeldet</h1>
            <table>
                <tr>
                    <td><a href='login'>Jetzt Einloggen</></td>
                </tr> 
            </table>
        </div>    
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
