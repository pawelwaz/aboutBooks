<?php

/* login/login.html.twig */
class __TwigTemplate_482560f47e0faf1b198204ce42b0a4a995c3f64e884822e3a95ef7a2f2743ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80179b8553d66ffe315dbfc4a1fc980c5470f814f986131a4da28837c575de92 = $this->env->getExtension("native_profiler");
        $__internal_80179b8553d66ffe315dbfc4a1fc980c5470f814f986131a4da28837c575de92->enter($__internal_80179b8553d66ffe315dbfc4a1fc980c5470f814f986131a4da28837c575de92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80179b8553d66ffe315dbfc4a1fc980c5470f814f986131a4da28837c575de92->leave($__internal_80179b8553d66ffe315dbfc4a1fc980c5470f814f986131a4da28837c575de92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a4db254eef2c0dee6893a386802da4fd32758872f139669d9b137523dc8a042 = $this->env->getExtension("native_profiler");
        $__internal_3a4db254eef2c0dee6893a386802da4fd32758872f139669d9b137523dc8a042->enter($__internal_3a4db254eef2c0dee6893a386802da4fd32758872f139669d9b137523dc8a042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>login</h1>
<button type=\"button\" class=\"btn btn-primary\">Primary</button>
";
        
        $__internal_3a4db254eef2c0dee6893a386802da4fd32758872f139669d9b137523dc8a042->leave($__internal_3a4db254eef2c0dee6893a386802da4fd32758872f139669d9b137523dc8a042_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>login</h1>*/
/* <button type="button" class="btn btn-primary">Primary</button>*/
/* {% endblock %}*/
/* */
