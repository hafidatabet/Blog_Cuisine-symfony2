<?php

/* base.html.twig */
class __TwigTemplate_7d85742144724db5c35350461ea987967628189bffaff0c444b100529b607576 extends Twig_Template
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
        $__internal_755df6b3efbd1a5cc73e5826429da97bba0535d927c5203d834ba60403b75b2b = $this->env->getExtension("native_profiler");
        $__internal_755df6b3efbd1a5cc73e5826429da97bba0535d927c5203d834ba60403b75b2b->enter($__internal_755df6b3efbd1a5cc73e5826429da97bba0535d927c5203d834ba60403b75b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " -Le Blog de Myriam et Hafida</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_755df6b3efbd1a5cc73e5826429da97bba0535d927c5203d834ba60403b75b2b->leave($__internal_755df6b3efbd1a5cc73e5826429da97bba0535d927c5203d834ba60403b75b2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba39595f3114500764a8209c3b7d4e22dde4079afe200db62756af0f9595da52 = $this->env->getExtension("native_profiler");
        $__internal_ba39595f3114500764a8209c3b7d4e22dde4079afe200db62756af0f9595da52->enter($__internal_ba39595f3114500764a8209c3b7d4e22dde4079afe200db62756af0f9595da52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba39595f3114500764a8209c3b7d4e22dde4079afe200db62756af0f9595da52->leave($__internal_ba39595f3114500764a8209c3b7d4e22dde4079afe200db62756af0f9595da52_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9908bfdd699f9e824331d8f42104b53e901766d2f5e484baa4c7eec4ef32c396 = $this->env->getExtension("native_profiler");
        $__internal_9908bfdd699f9e824331d8f42104b53e901766d2f5e484baa4c7eec4ef32c396->enter($__internal_9908bfdd699f9e824331d8f42104b53e901766d2f5e484baa4c7eec4ef32c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9908bfdd699f9e824331d8f42104b53e901766d2f5e484baa4c7eec4ef32c396->leave($__internal_9908bfdd699f9e824331d8f42104b53e901766d2f5e484baa4c7eec4ef32c396_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b61f2e72118237ffbf651e716352f49a33c8b0a3a836936f209e4ed05e627770 = $this->env->getExtension("native_profiler");
        $__internal_b61f2e72118237ffbf651e716352f49a33c8b0a3a836936f209e4ed05e627770->enter($__internal_b61f2e72118237ffbf651e716352f49a33c8b0a3a836936f209e4ed05e627770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b61f2e72118237ffbf651e716352f49a33c8b0a3a836936f209e4ed05e627770->leave($__internal_b61f2e72118237ffbf651e716352f49a33c8b0a3a836936f209e4ed05e627770_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6196ae3a19b3e0ac3d6273a0ff885cf14a236f13bf3b33ee53a7f76f2411f057 = $this->env->getExtension("native_profiler");
        $__internal_6196ae3a19b3e0ac3d6273a0ff885cf14a236f13bf3b33ee53a7f76f2411f057->enter($__internal_6196ae3a19b3e0ac3d6273a0ff885cf14a236f13bf3b33ee53a7f76f2411f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6196ae3a19b3e0ac3d6273a0ff885cf14a236f13bf3b33ee53a7f76f2411f057->leave($__internal_6196ae3a19b3e0ac3d6273a0ff885cf14a236f13bf3b33ee53a7f76f2411f057_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  86 => 12,  75 => 8,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %} -Le Blog de Myriam et Hafida</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
