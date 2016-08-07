<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbe801d51ba84f5a13660a098a3b5fa73267e4c28230347b61d9fe9bf588f6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a641c44601214b94f08e7991cdcf6214792b6daad0b1a6285ebb3f1f6c7b28a6 = $this->env->getExtension("native_profiler");
        $__internal_a641c44601214b94f08e7991cdcf6214792b6daad0b1a6285ebb3f1f6c7b28a6->enter($__internal_a641c44601214b94f08e7991cdcf6214792b6daad0b1a6285ebb3f1f6c7b28a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a641c44601214b94f08e7991cdcf6214792b6daad0b1a6285ebb3f1f6c7b28a6->leave($__internal_a641c44601214b94f08e7991cdcf6214792b6daad0b1a6285ebb3f1f6c7b28a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ee98192d5a63401638c136af367f5a19e9bf2c363612f86f79adda5f6ed5dcd = $this->env->getExtension("native_profiler");
        $__internal_1ee98192d5a63401638c136af367f5a19e9bf2c363612f86f79adda5f6ed5dcd->enter($__internal_1ee98192d5a63401638c136af367f5a19e9bf2c363612f86f79adda5f6ed5dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ee98192d5a63401638c136af367f5a19e9bf2c363612f86f79adda5f6ed5dcd->leave($__internal_1ee98192d5a63401638c136af367f5a19e9bf2c363612f86f79adda5f6ed5dcd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_592700d333584ec670f51abcda48f0950b1711579808a98fc623bccc4b7e7b70 = $this->env->getExtension("native_profiler");
        $__internal_592700d333584ec670f51abcda48f0950b1711579808a98fc623bccc4b7e7b70->enter($__internal_592700d333584ec670f51abcda48f0950b1711579808a98fc623bccc4b7e7b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_592700d333584ec670f51abcda48f0950b1711579808a98fc623bccc4b7e7b70->leave($__internal_592700d333584ec670f51abcda48f0950b1711579808a98fc623bccc4b7e7b70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4f02e098de3975a71fecc2bc173710d3fd41266f8f49ffba49296f04f81579 = $this->env->getExtension("native_profiler");
        $__internal_1c4f02e098de3975a71fecc2bc173710d3fd41266f8f49ffba49296f04f81579->enter($__internal_1c4f02e098de3975a71fecc2bc173710d3fd41266f8f49ffba49296f04f81579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1c4f02e098de3975a71fecc2bc173710d3fd41266f8f49ffba49296f04f81579->leave($__internal_1c4f02e098de3975a71fecc2bc173710d3fd41266f8f49ffba49296f04f81579_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
