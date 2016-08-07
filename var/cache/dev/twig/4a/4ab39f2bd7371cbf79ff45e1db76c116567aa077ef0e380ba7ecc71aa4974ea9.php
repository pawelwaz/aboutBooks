<?php

/* default/index.html.twig */
class __TwigTemplate_ff3d5deb8bafbf62b537e4a061cb444c5c531f684a6ce7a1159cd9814149406c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b40ae329d844a8c07829dc43d87a897facf58c677eb3b9b71044ee15a6b303c = $this->env->getExtension("native_profiler");
        $__internal_0b40ae329d844a8c07829dc43d87a897facf58c677eb3b9b71044ee15a6b303c->enter($__internal_0b40ae329d844a8c07829dc43d87a897facf58c677eb3b9b71044ee15a6b303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b40ae329d844a8c07829dc43d87a897facf58c677eb3b9b71044ee15a6b303c->leave($__internal_0b40ae329d844a8c07829dc43d87a897facf58c677eb3b9b71044ee15a6b303c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8211eed456cb7355e05068fd9d838938a3b90b2c111b0a5042d4ca9fc39a3e6d = $this->env->getExtension("native_profiler");
        $__internal_8211eed456cb7355e05068fd9d838938a3b90b2c111b0a5042d4ca9fc39a3e6d->enter($__internal_8211eed456cb7355e05068fd9d838938a3b90b2c111b0a5042d4ca9fc39a3e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>test</h1>
";
        
        $__internal_8211eed456cb7355e05068fd9d838938a3b90b2c111b0a5042d4ca9fc39a3e6d->leave($__internal_8211eed456cb7355e05068fd9d838938a3b90b2c111b0a5042d4ca9fc39a3e6d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f9fc7daae4dbff5137d328bfda15bed1a92326b3331e4c61afca34b29b721f7 = $this->env->getExtension("native_profiler");
        $__internal_9f9fc7daae4dbff5137d328bfda15bed1a92326b3331e4c61afca34b29b721f7->enter($__internal_9f9fc7daae4dbff5137d328bfda15bed1a92326b3331e4c61afca34b29b721f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>
</style>
";
        
        $__internal_9f9fc7daae4dbff5137d328bfda15bed1a92326b3331e4c61afca34b29b721f7->leave($__internal_9f9fc7daae4dbff5137d328bfda15bed1a92326b3331e4c61afca34b29b721f7_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>test</h1>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* </style>*/
/* {% endblock %}*/
/* */
