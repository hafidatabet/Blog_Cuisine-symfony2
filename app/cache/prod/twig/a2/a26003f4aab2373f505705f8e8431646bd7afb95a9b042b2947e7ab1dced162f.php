<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_322dd6d8400e2330371fcb02e63ed38b033f546f92a748f77220385e9601023e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout.html.twig", "EsieaBlogBundle::layout.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Cuisine d'ici et d'ailleurs</h1>

    <hr>
 

    ";
        // line 19
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 19
    public function block_esieablog_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  56 => 21,  53 => 19,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlocBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# sous-titre commun à toutes les pages #}*/
/*     <h1>Cuisine d'ici et d'ailleurs</h1>*/
/* */
/*     <hr>*/
/*  */
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
