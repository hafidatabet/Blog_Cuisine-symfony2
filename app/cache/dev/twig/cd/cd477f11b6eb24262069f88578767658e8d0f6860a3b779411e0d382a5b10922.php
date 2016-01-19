<?php

/* ::layout.html.twig */
class __TwigTemplate_3d71d3da159933a85c3f3364466bba8057127a0e5139d478f07e27da93f922be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea71a533d922d99a99c4cbe1232b04c95443b963134eb6e26c504b1b307730fb = $this->env->getExtension("native_profiler");
        $__internal_ea71a533d922d99a99c4cbe1232b04c95443b963134eb6e26c504b1b307730fb->enter($__internal_ea71a533d922d99a99c4cbe1232b04c95443b963134eb6e26c504b1b307730fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Blog de Cuisine M&H</h1>
        <p1>
            La vraie cuisine est une forme d’art, un cadeau à partager.
        </p1>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://www.facebook.com/groups/1669608549949358/\">
                Go sur notre page facebook -->
            </a>
        </p>
    </div>


    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-4\">
            <h3>Menu principal</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("esiea_blog_add");
        echo "\">Ajouter une nouvelle recette</a></li>
            </ul>

            <h4>Les dernières recettes</h4>
            ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EsieaBlogBundle:Advert:menu", array("limit" => 4)));
        echo "
        </div>

        <div id=\"preparation\" class=\"col-md-8\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p2>            Copyright: Chesnais Myriam et Tabet Hafida</p2>
    </footer>
</div>

";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
        
        $__internal_ea71a533d922d99a99c4cbe1232b04c95443b963134eb6e26c504b1b307730fb->leave($__internal_ea71a533d922d99a99c4cbe1232b04c95443b963134eb6e26c504b1b307730fb_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c101ab5764900cb0b1e69b87692019820504a3455f9c892181373f27e63fa8bf = $this->env->getExtension("native_profiler");
        $__internal_c101ab5764900cb0b1e69b87692019820504a3455f9c892181373f27e63fa8bf->enter($__internal_c101ab5764900cb0b1e69b87692019820504a3455f9c892181373f27e63fa8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le blog de Cuisine de Myriam et hafida";
        
        $__internal_c101ab5764900cb0b1e69b87692019820504a3455f9c892181373f27e63fa8bf->leave($__internal_c101ab5764900cb0b1e69b87692019820504a3455f9c892181373f27e63fa8bf_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93f2c2aea981e78d3541013da9f4952ffa06c8a860587eb48c6311c3ca22b7f3 = $this->env->getExtension("native_profiler");
        $__internal_93f2c2aea981e78d3541013da9f4952ffa06c8a860587eb48c6311c3ca22b7f3->enter($__internal_93f2c2aea981e78d3541013da9f4952ffa06c8a860587eb48c6311c3ca22b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/originalite.css\">
    ";
        
        $__internal_93f2c2aea981e78d3541013da9f4952ffa06c8a860587eb48c6311c3ca22b7f3->leave($__internal_93f2c2aea981e78d3541013da9f4952ffa06c8a860587eb48c6311c3ca22b7f3_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_f419654c9cfd00cf6027dd14b4e824048b311a290739b81102303f8b2efeb079 = $this->env->getExtension("native_profiler");
        $__internal_f419654c9cfd00cf6027dd14b4e824048b311a290739b81102303f8b2efeb079->enter($__internal_f419654c9cfd00cf6027dd14b4e824048b311a290739b81102303f8b2efeb079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
            ";
        
        $__internal_f419654c9cfd00cf6027dd14b4e824048b311a290739b81102303f8b2efeb079->leave($__internal_f419654c9cfd00cf6027dd14b4e824048b311a290739b81102303f8b2efeb079_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1ad48255e08b03833bee7a5594cb78aafcda4b5eedbc73d9542e35bbb213936 = $this->env->getExtension("native_profiler");
        $__internal_e1ad48255e08b03833bee7a5594cb78aafcda4b5eedbc73d9542e35bbb213936->enter($__internal_e1ad48255e08b03833bee7a5594cb78aafcda4b5eedbc73d9542e35bbb213936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_e1ad48255e08b03833bee7a5594cb78aafcda4b5eedbc73d9542e35bbb213936->leave($__internal_e1ad48255e08b03833bee7a5594cb78aafcda4b5eedbc73d9542e35bbb213936_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  151 => 59,  143 => 47,  137 => 46,  128 => 13,  126 => 12,  120 => 11,  108 => 9,  99 => 63,  97 => 59,  85 => 49,  83 => 46,  76 => 42,  69 => 38,  65 => 37,  42 => 16,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}Le blog de Cuisine de Myriam et hafida{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         {# On charge le CSS de bootstrap depuis le site directement #}*/
/*         <link rel="stylesheet" href="/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="/css/originalite.css">*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*         <h1>Blog de Cuisine M&H</h1>*/
/*         <p1>*/
/*             La vraie cuisine est une forme d’art, un cadeau à partager.*/
/*         </p1>*/
/*         <p>*/
/*             <a class="btn btn-primary btn-lg" href="https://www.facebook.com/groups/1669608549949358/">*/
/*                 Go sur notre page facebook -->*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/* */
/*     <div class="row">*/
/*         <div id="menu" class="col-md-4">*/
/*             <h3>Menu principal</h3>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li><a href="{{ path('esiea_blog_home') }}">Accueil</a></li>*/
/*                 <li><a href="{{ path('esiea_blog_add') }}">Ajouter une nouvelle recette</a></li>*/
/*             </ul>*/
/* */
/*             <h4>Les dernières recettes</h4>*/
/*             {{ render(controller("EsieaBlogBundle:Advert:menu", {'limit': 4})) }}*/
/*         </div>*/
/* */
/*         <div id="preparation" class="col-md-8">*/
/*             {% block body %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*         <p2>            Copyright: Chesnais Myriam et Tabet Hafida</p2>*/
/*     </footer>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
