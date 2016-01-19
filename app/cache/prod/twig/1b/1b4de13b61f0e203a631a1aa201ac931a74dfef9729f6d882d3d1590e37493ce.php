<?php

/* EsieaBlogBundle:Advert:index.html.twig */
class __TwigTemplate_e702da3f20bc716bdb8fe21334733787752f390b0e3308898cc50abb7165230a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 8
    public function block_esieablog_body($context, array $blocks = array())
    {
        // line 9
        echo "
    <h2>Liste des recettes</h2>

    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : null));
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
        return array (  82 => 24,  75 => 22,  67 => 19,  63 => 18,  58 => 16,  54 => 15,  51 => 14,  46 => 13,  40 => 9,  37 => 8,  29 => 6,  11 => 4,);
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
