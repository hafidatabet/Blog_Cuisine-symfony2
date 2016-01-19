<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9811ab563f419172df094f76e04f73e4b730859d749469573ff012c93d4f88f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dadb6bfb0c3f0916e7e68ffef52697522e6759a84bf78f63129d62f4e79f4227 = $this->env->getExtension("native_profiler");
        $__internal_dadb6bfb0c3f0916e7e68ffef52697522e6759a84bf78f63129d62f4e79f4227->enter($__internal_dadb6bfb0c3f0916e7e68ffef52697522e6759a84bf78f63129d62f4e79f4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dadb6bfb0c3f0916e7e68ffef52697522e6759a84bf78f63129d62f4e79f4227->leave($__internal_dadb6bfb0c3f0916e7e68ffef52697522e6759a84bf78f63129d62f4e79f4227_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2488f55dc79487cb8a8a5fb98fd0d77f08508242506abf2474109dbe959bee7a = $this->env->getExtension("native_profiler");
        $__internal_2488f55dc79487cb8a8a5fb98fd0d77f08508242506abf2474109dbe959bee7a->enter($__internal_2488f55dc79487cb8a8a5fb98fd0d77f08508242506abf2474109dbe959bee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2488f55dc79487cb8a8a5fb98fd0d77f08508242506abf2474109dbe959bee7a->leave($__internal_2488f55dc79487cb8a8a5fb98fd0d77f08508242506abf2474109dbe959bee7a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73eb33361ad8f58bfcd80ed50ebaba5861fac649d7c1e508723c1163aca0b7f2 = $this->env->getExtension("native_profiler");
        $__internal_73eb33361ad8f58bfcd80ed50ebaba5861fac649d7c1e508723c1163aca0b7f2->enter($__internal_73eb33361ad8f58bfcd80ed50ebaba5861fac649d7c1e508723c1163aca0b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73eb33361ad8f58bfcd80ed50ebaba5861fac649d7c1e508723c1163aca0b7f2->leave($__internal_73eb33361ad8f58bfcd80ed50ebaba5861fac649d7c1e508723c1163aca0b7f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4254c3e572f0542422ffd4804e5553f7d9ac902ab337c58525bbe6bb5bea0c1e = $this->env->getExtension("native_profiler");
        $__internal_4254c3e572f0542422ffd4804e5553f7d9ac902ab337c58525bbe6bb5bea0c1e->enter($__internal_4254c3e572f0542422ffd4804e5553f7d9ac902ab337c58525bbe6bb5bea0c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4254c3e572f0542422ffd4804e5553f7d9ac902ab337c58525bbe6bb5bea0c1e->leave($__internal_4254c3e572f0542422ffd4804e5553f7d9ac902ab337c58525bbe6bb5bea0c1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
