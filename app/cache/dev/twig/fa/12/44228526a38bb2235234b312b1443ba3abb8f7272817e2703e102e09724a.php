<?php

/* AcmeBlogBundle:Default:index.html.twig */
class __TwigTemplate_fa1244228526a38bb2235234b312b1443ba3abb8f7272817e2703e102e09724a extends Twig_Template
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
        echo "                    <div id=\"leftsection\">
                        <div id='newsblock' ng-controller='PaginationCtrl'>
                            <h1>Aktuelle Neuigkeiten</h1>
                                    <div ng-repeat=\"item in items | offset: currentPage*itemsPerPage | limitTo: itemsPerPage\">
                                        <h3><a href=\"article/[[ item.alias ]]\"> [[item.headline]]</a></h3>
                                        [[item.articleContent | limitTo : 300 : 0 | htmlToPlaintext ]]...
                                    </div>                        
                                    <div id=\"prev-page\" class=\"nav-btn\" ng-class=\"prevPageDisabled()\">
                                        <button id=\"prev-btn\" ng-click=\"prevPage()\">Vorherige Seite</button>
                                    </div>
                                    <div id=\"next-page\" class=\"nav-btn\" ng-class=\"nextPageDisabled()\">
                                        <button id=\"next-btn\" ng-click=\"nextPage()\">Nächste Seite</button>
                                    </div>
                        </div>
                    </div>
                    <div id='rightsection'>
                        <div class=\"rechtekolumne\">
                            <h1>Login</h1>
                                <form action='logincheck.php' method='post'>
                                    <table>
                                        <tr>
                                            <td>Benutzername</td>
                                            <td>Passwort</td>
                                        </tr> 
                                        <tr>
                                            <td><input name='username' required='required'/></td>
                                            <td><input name='password' type='password' required='required'/></td>
                                        </tr>
                                        <tr>
                                            <td><input type='submit' value='Login'/></td>
                                        </tr>  
                                    </table>
                                </form>
                        </div>
                        <div class=\"rechtekolumne\">
                            <h1>N&auml;chste Termine</h1>
                                <table id='termintabelle' cellpadding=\"10px\">
                                    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 42
            echo "                                    <tr>
                                        <td colspan='2' class='erstezelle'>
                                            <a href='termine/ ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "alias", array()), "html", null, true);
            echo " '> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
            echo " </a>
                                        </td>
                                        <td class='zweitezelle'>
                                            Wann: ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "next", array()), "d.m.y"), "html", null, true);
            echo " um ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "next", array()), "H:i"), "html", null, true);
            echo " Uhr <br />
                                            Wo: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "address", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "zipcode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "city", array()), "html", null, true);
            echo " 
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                </table>
                        </div>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  100 => 48,  94 => 47,  86 => 44,  82 => 42,  78 => 41,  39 => 4,  36 => 3,  11 => 1,);
    }
}
