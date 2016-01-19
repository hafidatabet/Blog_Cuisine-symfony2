<?php

/* EsieaBlogBundle:Advert:formulaire.html.twig */
class __TwigTemplate_1b5bf52572075a0ed3e25193f7d019aa30f8cb0b5588c6e9589eb9064d62b1a7 extends Twig_Template
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
        // line 2
        echo "
<h3>Formulaire</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

  ";
        // line 12
        echo "

    <div class=\"form-group\">
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de mise en ligne"));
        echo "
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("attr" => array("class" => "form-row")));
        echo "
      </div>
    </div>


    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de la recette"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

        <div class=\"form-group\">
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur de la recette"));
        echo "
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>


    <div class=\"form-group\">
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ingredients", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ingrédients de la recette"));
        echo "
      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preparation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Préparation de la recette"));
        echo "
      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preparation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>


<div class=\"form-group\">
  ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-deuxieme")));
        echo "
  </div>

  <p3> Attention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire. </p3>

  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
  
  ";
        // line 66
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
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
        return array (  142 => 66,  137 => 63,  129 => 58,  120 => 52,  115 => 50,  111 => 49,  103 => 44,  98 => 42,  94 => 41,  85 => 35,  80 => 33,  76 => 32,  68 => 27,  63 => 25,  59 => 24,  50 => 18,  45 => 16,  41 => 15,  36 => 12,  30 => 9,  25 => 6,  19 => 2,);
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
