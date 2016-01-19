<?php

/* EsieaBlogBundle:Advert:delete.html.twig */
class __TwigTemplate_ce4a299452348e24e2d56d7397f51dc2fbc5e831613256221323eb5e0935fdf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:delete.html.twig", 3);
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>Supprimer votre annonce</h2>

    <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "titre", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

    <p>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>

        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 33
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
  </form>


    </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  69 => 26,  61 => 21,  54 => 18,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*     <h2>Supprimer votre annonce</h2>*/
/* */
/*     <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.titre }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('esiea_blog_delete', {'id': advert.id}) }}" method="post">*/
/* */
/*     <p>*/
/*         <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste des annonces*/
/*         </a>*/
/* */
/*         <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à l'annonce*/
/*         </a>*/
/* */
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* */
/*     </p>*/
/* */
/* {% endblock %}*/
