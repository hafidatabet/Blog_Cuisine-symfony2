<?php

/* EsieaBlogBundle:Advert:add.html.twig */
class __TwigTemplate_0812b55db44f6104fe7caa43da18c7dc0b4c2aa9023e538bfc0bbe959a2604a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:add.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Ajouter une nouvelle annonce ";
    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        // line 10
        echo "

    <h2>Ajouter une annonce</h2>

    ";
        // line 14
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "

    <p>

        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

    </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  44 => 14,  38 => 10,  35 => 9,  29 => 7,  11 => 4,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %} Ajouter une nouvelle annonce {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/* */
/*     <h2>Ajouter une annonce</h2>*/
/* */
/*     {{ include("EsieaBlogBundle:Advert:formulaire.html.twig") }}*/
/* */
/*     <p>*/
/* */
/*         <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste des annonces*/
/*         </a>*/
/* */
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
