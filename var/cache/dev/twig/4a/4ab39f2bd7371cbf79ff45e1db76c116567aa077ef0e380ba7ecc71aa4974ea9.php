<?php

/* default/index.html.twig */
class __TwigTemplate_ff3d5deb8bafbf62b537e4a061cb444c5c531f684a6ce7a1159cd9814149406c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseMenu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e345a00a5028ab0ccf3aa35efd613aa20a546d5ff3260e27041291b09c3cc31c = $this->env->getExtension("native_profiler");
        $__internal_e345a00a5028ab0ccf3aa35efd613aa20a546d5ff3260e27041291b09c3cc31c->enter($__internal_e345a00a5028ab0ccf3aa35efd613aa20a546d5ff3260e27041291b09c3cc31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e345a00a5028ab0ccf3aa35efd613aa20a546d5ff3260e27041291b09c3cc31c->leave($__internal_e345a00a5028ab0ccf3aa35efd613aa20a546d5ff3260e27041291b09c3cc31c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b22ea90cc3379f6ace1bab897dad190a586fb466b99eb165bd521dbff675c884 = $this->env->getExtension("native_profiler");
        $__internal_b22ea90cc3379f6ace1bab897dad190a586fb466b99eb165bd521dbff675c884->enter($__internal_b22ea90cc3379f6ace1bab897dad190a586fb466b99eb165bd521dbff675c884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b22ea90cc3379f6ace1bab897dad190a586fb466b99eb165bd521dbff675c884->leave($__internal_b22ea90cc3379f6ace1bab897dad190a586fb466b99eb165bd521dbff675c884_prof);

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
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
