<?php

/* default/smallform.html.twig */
class __TwigTemplate_c4e0dd92ec57e9eb1b80f247f3c7e2dfd2df5d8bc49503ae7fc8e30f351822c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/smallform.html.twig", 1);
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
        $__internal_bce6d94ea203d4f4bd10db9454b85be08f5b53f15804fd8955a6fd9d2db1465b = $this->env->getExtension("native_profiler");
        $__internal_bce6d94ea203d4f4bd10db9454b85be08f5b53f15804fd8955a6fd9d2db1465b->enter($__internal_bce6d94ea203d4f4bd10db9454b85be08f5b53f15804fd8955a6fd9d2db1465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/smallform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce6d94ea203d4f4bd10db9454b85be08f5b53f15804fd8955a6fd9d2db1465b->leave($__internal_bce6d94ea203d4f4bd10db9454b85be08f5b53f15804fd8955a6fd9d2db1465b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30c254a4c2cf40bd6d9e856fb9451f23b227250b96538a46d5fba917324dcf38 = $this->env->getExtension("native_profiler");
        $__internal_30c254a4c2cf40bd6d9e856fb9451f23b227250b96538a46d5fba917324dcf38->enter($__internal_30c254a4c2cf40bd6d9e856fb9451f23b227250b96538a46d5fba917324dcf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>login</h1>
";
        
        $__internal_30c254a4c2cf40bd6d9e856fb9451f23b227250b96538a46d5fba917324dcf38->leave($__internal_30c254a4c2cf40bd6d9e856fb9451f23b227250b96538a46d5fba917324dcf38_prof);

    }

    public function getTemplateName()
    {
        return "default/smallform.html.twig";
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
