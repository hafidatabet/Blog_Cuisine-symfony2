<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_6c0e9b6f36cae8a07ddacbb9ed3c3256285b4e706452df1883d9a39c43485a40 extends Twig_Template
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
        $__internal_0382fc7f80b46dfaa45630d02637c30b5aa2dbbe9aa88af037ea566023493cae = $this->env->getExtension("native_profiler");
        $__internal_0382fc7f80b46dfaa45630d02637c30b5aa2dbbe9aa88af037ea566023493cae->enter($__internal_0382fc7f80b46dfaa45630d02637c30b5aa2dbbe9aa88af037ea566023493cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0382fc7f80b46dfaa45630d02637c30b5aa2dbbe9aa88af037ea566023493cae->leave($__internal_0382fc7f80b46dfaa45630d02637c30b5aa2dbbe9aa88af037ea566023493cae_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1300a6680223e2f04cdfb5cffdc4a426153be9369b5c1fea360df584509dd7 = $this->env->getExtension("native_profiler");
        $__internal_8a1300a6680223e2f04cdfb5cffdc4a426153be9369b5c1fea360df584509dd7->enter($__internal_8a1300a6680223e2f04cdfb5cffdc4a426153be9369b5c1fea360df584509dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a1300a6680223e2f04cdfb5cffdc4a426153be9369b5c1fea360df584509dd7->leave($__internal_8a1300a6680223e2f04cdfb5cffdc4a426153be9369b5c1fea360df584509dd7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cdb43fff51fb2ea0469eefe7f0bae0cfe69bf1175269ddbfa04c11c0e581117 = $this->env->getExtension("native_profiler");
        $__internal_2cdb43fff51fb2ea0469eefe7f0bae0cfe69bf1175269ddbfa04c11c0e581117->enter($__internal_2cdb43fff51fb2ea0469eefe7f0bae0cfe69bf1175269ddbfa04c11c0e581117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cdb43fff51fb2ea0469eefe7f0bae0cfe69bf1175269ddbfa04c11c0e581117->leave($__internal_2cdb43fff51fb2ea0469eefe7f0bae0cfe69bf1175269ddbfa04c11c0e581117_prof);

    }

    // line 19
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_d223e94ec63d926b4c47bc68664ae09f28ad525eb5ec1da37b0dd5a1d11ce886 = $this->env->getExtension("native_profiler");
        $__internal_d223e94ec63d926b4c47bc68664ae09f28ad525eb5ec1da37b0dd5a1d11ce886->enter($__internal_d223e94ec63d926b4c47bc68664ae09f28ad525eb5ec1da37b0dd5a1d11ce886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 20
        echo "    ";
        
        $__internal_d223e94ec63d926b4c47bc68664ae09f28ad525eb5ec1da37b0dd5a1d11ce886->leave($__internal_d223e94ec63d926b4c47bc68664ae09f28ad525eb5ec1da37b0dd5a1d11ce886_prof);

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
        return array (  85 => 20,  79 => 19,  71 => 21,  68 => 19,  61 => 13,  58 => 11,  52 => 10,  42 => 7,  36 => 6,  11 => 4,);
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
