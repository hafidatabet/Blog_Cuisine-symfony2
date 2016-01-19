<?php

/* EsieaBlogBundle:Advert:index.html.twig */
class __TwigTemplate_c958479f423938efb07a06d38c278b1cfb0d7b48b5e80457d629ce3ab46781d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:index.html.twig", 4);
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
        $__internal_2661afe767c0e74ac67204f98720498149f0f138a81ddf999e42392c419548ec = $this->env->getExtension("native_profiler");
        $__internal_2661afe767c0e74ac67204f98720498149f0f138a81ddf999e42392c419548ec->enter($__internal_2661afe767c0e74ac67204f98720498149f0f138a81ddf999e42392c419548ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2661afe767c0e74ac67204f98720498149f0f138a81ddf999e42392c419548ec->leave($__internal_2661afe767c0e74ac67204f98720498149f0f138a81ddf999e42392c419548ec_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_60604f70440489712403a3d103054c2bcd071ab11bb254e4481f247cb91d723a = $this->env->getExtension("native_profiler");
        $__internal_60604f70440489712403a3d103054c2bcd071ab11bb254e4481f247cb91d723a->enter($__internal_60604f70440489712403a3d103054c2bcd071ab11bb254e4481f247cb91d723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_60604f70440489712403a3d103054c2bcd071ab11bb254e4481f247cb91d723a->leave($__internal_60604f70440489712403a3d103054c2bcd071ab11bb254e4481f247cb91d723a_prof);

    }

    // line 8
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_16ad400b99cb2a59fa48a659f9399f94f5b5b2fd1d980278aba06ef7b365268e = $this->env->getExtension("native_profiler");
        $__internal_16ad400b99cb2a59fa48a659f9399f94f5b5b2fd1d980278aba06ef7b365268e->enter($__internal_16ad400b99cb2a59fa48a659f9399f94f5b5b2fd1d980278aba06ef7b365268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 9
        echo "
    <h2>Liste des recettes</h2>

    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "            <li>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "auteur", array()), "html", null, true);
            echo ",
                le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            <li>Aucune annonce de recette</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>



";
        
        $__internal_16ad400b99cb2a59fa48a659f9399f94f5b5b2fd1d980278aba06ef7b365268e->leave($__internal_16ad400b99cb2a59fa48a659f9399f94f5b5b2fd1d980278aba06ef7b365268e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  90 => 22,  82 => 19,  78 => 18,  73 => 16,  69 => 15,  66 => 14,  61 => 13,  55 => 9,  49 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Accueil {{ parent() }} {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*     <h2>Liste des recettes</h2>*/
/* */
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*             <li>*/
/*                 <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}">*/
/*                     {{ advert.titre }}*/
/*                 </a>*/
/*                 par {{ advert.auteur }},*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Aucune annonce de recette</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/
