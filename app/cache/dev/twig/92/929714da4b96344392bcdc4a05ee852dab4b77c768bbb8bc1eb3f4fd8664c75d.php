<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b34b328619c1cc836588187ffcb9e1679f83c2e1c0d6e6eff2671242d0162450 extends Twig_Template
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
        $__internal_e4970128f1ff989ec6e3355a3dc4b111d8da405c80c019527de6b0b0dec3c39f = $this->env->getExtension("native_profiler");
        $__internal_e4970128f1ff989ec6e3355a3dc4b111d8da405c80c019527de6b0b0dec3c39f->enter($__internal_e4970128f1ff989ec6e3355a3dc4b111d8da405c80c019527de6b0b0dec3c39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4970128f1ff989ec6e3355a3dc4b111d8da405c80c019527de6b0b0dec3c39f->leave($__internal_e4970128f1ff989ec6e3355a3dc4b111d8da405c80c019527de6b0b0dec3c39f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1be12ff09d6e6591b9901d3f0660b659f076d6fd7a8f7a679f6040bb7cdfa661 = $this->env->getExtension("native_profiler");
        $__internal_1be12ff09d6e6591b9901d3f0660b659f076d6fd7a8f7a679f6040bb7cdfa661->enter($__internal_1be12ff09d6e6591b9901d3f0660b659f076d6fd7a8f7a679f6040bb7cdfa661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1be12ff09d6e6591b9901d3f0660b659f076d6fd7a8f7a679f6040bb7cdfa661->leave($__internal_1be12ff09d6e6591b9901d3f0660b659f076d6fd7a8f7a679f6040bb7cdfa661_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b22bd6d5847a1143af1549fbea8b9338ddbcfb99b6429bfe35b30452fb3eeaf = $this->env->getExtension("native_profiler");
        $__internal_7b22bd6d5847a1143af1549fbea8b9338ddbcfb99b6429bfe35b30452fb3eeaf->enter($__internal_7b22bd6d5847a1143af1549fbea8b9338ddbcfb99b6429bfe35b30452fb3eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b22bd6d5847a1143af1549fbea8b9338ddbcfb99b6429bfe35b30452fb3eeaf->leave($__internal_7b22bd6d5847a1143af1549fbea8b9338ddbcfb99b6429bfe35b30452fb3eeaf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6340869106c5dfda1baed2a6f801d455ac3e957410dcd6bc373326c4159afb55 = $this->env->getExtension("native_profiler");
        $__internal_6340869106c5dfda1baed2a6f801d455ac3e957410dcd6bc373326c4159afb55->enter($__internal_6340869106c5dfda1baed2a6f801d455ac3e957410dcd6bc373326c4159afb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6340869106c5dfda1baed2a6f801d455ac3e957410dcd6bc373326c4159afb55->leave($__internal_6340869106c5dfda1baed2a6f801d455ac3e957410dcd6bc373326c4159afb55_prof);

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
