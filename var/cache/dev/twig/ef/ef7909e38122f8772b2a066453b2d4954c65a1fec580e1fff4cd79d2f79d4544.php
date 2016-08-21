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
        $__internal_118db1c91191a9698124767052c303fc575f6d247ba96644c67158683179baec = $this->env->getExtension("native_profiler");
        $__internal_118db1c91191a9698124767052c303fc575f6d247ba96644c67158683179baec->enter($__internal_118db1c91191a9698124767052c303fc575f6d247ba96644c67158683179baec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118db1c91191a9698124767052c303fc575f6d247ba96644c67158683179baec->leave($__internal_118db1c91191a9698124767052c303fc575f6d247ba96644c67158683179baec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3875a010fc65d11c8edf7e9be124e336ae66835c69bdba74006a65294d4e46c1 = $this->env->getExtension("native_profiler");
        $__internal_3875a010fc65d11c8edf7e9be124e336ae66835c69bdba74006a65294d4e46c1->enter($__internal_3875a010fc65d11c8edf7e9be124e336ae66835c69bdba74006a65294d4e46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>login</h1>
";
        
        $__internal_3875a010fc65d11c8edf7e9be124e336ae66835c69bdba74006a65294d4e46c1->leave($__internal_3875a010fc65d11c8edf7e9be124e336ae66835c69bdba74006a65294d4e46c1_prof);

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
/* {% endblock %}*/
/* */
