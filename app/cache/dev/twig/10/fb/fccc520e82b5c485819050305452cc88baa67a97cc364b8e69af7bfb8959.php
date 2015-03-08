<?php

/* AcmeBlogBundle:Default:article.html.twig */
class __TwigTemplate_10fbfccc520e82b5c485819050305452cc88baa67a97cc364b8e69af7bfb8959 extends Twig_Template
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
        echo "    <div id='fullcontent'>
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "headline", array()), "html", null, true);
        echo "</h1>
        <ul class='list'>
            <li style=\"list-style-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/images/date.png"), "html", null, true);
        echo "');\" title='Veröffentlicht'> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "createdDate", array()), "d.m.y"), "html", null, true);
        echo "</li>
            <li style=\"list-style-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/images/author.png"), "html", null, true);
        echo "')\" title='Autor'>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "author", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "author", array()), "name", array()), "html", null, true);
        echo "</li>
            <li style=\"list-style-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/images/categorie.png"), "html", null, true);
        echo "')\" title='Kategorie'>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "category", array()), "catName", array()), "html", null, true);
        echo "</li>
        </ul>
        ";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "articleContent", array());
        echo "
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
        return "AcmeBlogBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  61 => 9,  53 => 8,  47 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
