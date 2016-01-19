<?php

/* EsieaBlogBundle:Advert:add.html.twig */
class __TwigTemplate_60d2ecb7e3aa8a6cdd578587d028e844b924cb76d69d0bb2fa0c1dc0f500a18d extends Twig_Template
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
        $__internal_4814abb2c78b5100c511f1040c99cc4f10876b425ca0bb2ee21c97845af6c748 = $this->env->getExtension("native_profiler");
        $__internal_4814abb2c78b5100c511f1040c99cc4f10876b425ca0bb2ee21c97845af6c748->enter($__internal_4814abb2c78b5100c511f1040c99cc4f10876b425ca0bb2ee21c97845af6c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4814abb2c78b5100c511f1040c99cc4f10876b425ca0bb2ee21c97845af6c748->leave($__internal_4814abb2c78b5100c511f1040c99cc4f10876b425ca0bb2ee21c97845af6c748_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ff0d39138caf5b2348c86ab6bce32971688dcb9c2bc80f414529b81ca6d47d7 = $this->env->getExtension("native_profiler");
        $__internal_6ff0d39138caf5b2348c86ab6bce32971688dcb9c2bc80f414529b81ca6d47d7->enter($__internal_6ff0d39138caf5b2348c86ab6bce32971688dcb9c2bc80f414529b81ca6d47d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_6ff0d39138caf5b2348c86ab6bce32971688dcb9c2bc80f414529b81ca6d47d7->leave($__internal_6ff0d39138caf5b2348c86ab6bce32971688dcb9c2bc80f414529b81ca6d47d7_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_2f8b222a59683c574c0433e4617ff96768c5e449e2c8518c79cf9664763c7227 = $this->env->getExtension("native_profiler");
        $__internal_2f8b222a59683c574c0433e4617ff96768c5e449e2c8518c79cf9664763c7227->enter($__internal_2f8b222a59683c574c0433e4617ff96768c5e449e2c8518c79cf9664763c7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_2f8b222a59683c574c0433e4617ff96768c5e449e2c8518c79cf9664763c7227->leave($__internal_2f8b222a59683c574c0433e4617ff96768c5e449e2c8518c79cf9664763c7227_prof);

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
        return array (  66 => 18,  59 => 14,  53 => 10,  47 => 9,  35 => 7,  11 => 4,);
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
