<?php

/* AcmeBlogBundle:Admin:admin.html.twig */
class __TwigTemplate_8093c69ef09652a6f0f7158c4820ffadbef2838c31b7494114a804655825ca47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 5
        echo "               ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "                    Test
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Admin:admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  30 => 3,  26 => 5,  24 => 3,  20 => 1,);
    }
}
