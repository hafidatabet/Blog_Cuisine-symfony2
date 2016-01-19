<?php

/* EsieaBlogBundle:Advert:menu.html.twig */
class __TwigTemplate_fb211483d31e948b3b03937d14183104e45ac51365558510802d9eea46197bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50c4d1ea1f9cf5530087b308bea560ca82a1653a63c844d1ce82a7b199781db7 = $this->env->getExtension("native_profiler");
        $__internal_50c4d1ea1f9cf5530087b308bea560ca82a1653a63c844d1ce82a7b199781db7->enter($__internal_50c4d1ea1f9cf5530087b308bea560ca82a1653a63c844d1ce82a7b199781db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_50c4d1ea1f9cf5530087b308bea560ca82a1653a63c844d1ce82a7b199781db7->leave($__internal_50c4d1ea1f9cf5530087b308bea560ca82a1653a63c844d1ce82a7b199781db7_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*     {% for advert in listAdverts %}*/
/*         <li>*/
/*             <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}">*/
/*                 {{ advert.titre }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
