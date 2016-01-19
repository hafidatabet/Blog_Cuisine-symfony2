<?php

/* ::layout.html.twig */
class __TwigTemplate_34e453d23aa08d094d41d9b020ed9e03d7e09dbeca990828e7f81ac03fc0160b extends Twig_Template
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
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Le blog de Cuisine de Myriam et hafida";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/originalite.css\">
    ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
            ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
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
        return array (  130 => 60,  127 => 59,  122 => 47,  119 => 46,  113 => 13,  111 => 12,  108 => 11,  102 => 9,  96 => 63,  94 => 59,  82 => 49,  80 => 46,  73 => 42,  66 => 38,  62 => 37,  39 => 16,  37 => 11,  32 => 9,  23 => 2,);
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
