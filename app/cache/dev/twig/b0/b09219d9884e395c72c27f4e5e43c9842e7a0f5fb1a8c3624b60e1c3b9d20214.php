<?php

/* EsieaBlogBundle:Advert:formulaire.html.twig */
class __TwigTemplate_2d444963dd4fb96cc9bf467b4c3e8d43a38abb7813e92d76d224bfc1e7a0bdda extends Twig_Template
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
        $__internal_fb7fcfb6d2eef3d4c719a5548c96995c8b26c6233d81726f01f79732a3886646 = $this->env->getExtension("native_profiler");
        $__internal_fb7fcfb6d2eef3d4c719a5548c96995c8b26c6233d81726f01f79732a3886646->enter($__internal_fb7fcfb6d2eef3d4c719a5548c96995c8b26c6233d81726f01f79732a3886646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:formulaire.html.twig"));

        // line 2
        echo "
<h3>Formulaire</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 12
        echo "

    <div class=\"form-group\">
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de mise en ligne"));
        echo "
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-row")));
        echo "
      </div>
    </div>


    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de la recette"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

        <div class=\"form-group\">
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur de la recette"));
        echo "
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>


    <div class=\"form-group\">
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ingrédients de la recette"));
        echo "
      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Préparation de la recette"));
        echo "
      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>


<div class=\"form-group\">
  ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-deuxieme")));
        echo "
  </div>

  <p3> Attention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire. </p3>

  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 66
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_fb7fcfb6d2eef3d4c719a5548c96995c8b26c6233d81726f01f79732a3886646->leave($__internal_fb7fcfb6d2eef3d4c719a5548c96995c8b26c6233d81726f01f79732a3886646_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 66,  140 => 63,  132 => 58,  123 => 52,  118 => 50,  114 => 49,  106 => 44,  101 => 42,  97 => 41,  88 => 35,  83 => 33,  79 => 32,  71 => 27,  66 => 25,  62 => 24,  53 => 18,  48 => 16,  44 => 15,  39 => 12,  33 => 9,  28 => 6,  22 => 2,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/formulaire.html.twig #}*/
/* */
/* <h3>Formulaire</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/* */
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.date, "Date de mise en ligne", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.date) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.date, {'attr': {'class': 'form-row'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.titre, "Titre de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.titre) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*         <div class="form-group">*/
/*       {{ form_label(form.auteur, "Auteur de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.auteur) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.auteur, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.ingredients, "Ingrédients de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.titre) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.ingredients, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.preparation, "Préparation de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.titre) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.preparation, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/* <div class="form-group">*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-deuxieme'}}) }}*/
/*   </div>*/
/* */
/*   <p3> Attention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire. </p3>*/
/* */
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
