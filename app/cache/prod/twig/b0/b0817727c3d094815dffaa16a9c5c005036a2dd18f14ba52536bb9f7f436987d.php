<?php

/* EsieaBlogBundle:Advert:view.html.twig */
class __TwigTemplate_3c5e440b1d913a01bc9330663b9be2a2d1379d8bf6f866058bdc946e15267fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'une recette - ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "titre", array()), "html", null, true);
        echo "</h2>
  <i1>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i1>


  <div class=\"well\">

   <i2> Les ingrédients : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "ingredients", array()), "html", null, true);
        echo " </i2>
  </div>

  <div class=\"well\">

   <i3> La préparation : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "preparation", array()), "html", null, true);
        echo " </i3>
  </div>


  <p>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des recettes
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la recette
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la recette
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  82 => 31,  75 => 27,  67 => 22,  59 => 17,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }
}
/* {# src/esiea/BlogBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block titre %}*/
/*   Lecture d'une recette - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*   <h2>{{ advert.titre }}</h2>*/
/*   <i1>Par {{ advert.auteur }}, le {{ advert.date|date('d/m/Y') }}</i1>*/
/* */
/* */
/*   <div class="well">*/
/* */
/*    <i2> Les ingrédients : {{ advert.ingredients }} </i2>*/
/*   </div>*/
/* */
/*   <div class="well">*/
/* */
/*    <i3> La préparation : {{ advert.preparation }} </i3>*/
/*   </div>*/
/* */
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste des recettes*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier la recette*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer la recette*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
