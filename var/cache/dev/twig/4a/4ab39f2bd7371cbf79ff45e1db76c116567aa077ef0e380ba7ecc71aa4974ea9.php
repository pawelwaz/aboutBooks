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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e97e2fea2b8c371ca136a71bb46501da8c08a38f8e80cf01b6d94b6fcbe4b70 = $this->env->getExtension("native_profiler");
        $__internal_9e97e2fea2b8c371ca136a71bb46501da8c08a38f8e80cf01b6d94b6fcbe4b70->enter($__internal_9e97e2fea2b8c371ca136a71bb46501da8c08a38f8e80cf01b6d94b6fcbe4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e97e2fea2b8c371ca136a71bb46501da8c08a38f8e80cf01b6d94b6fcbe4b70->leave($__internal_9e97e2fea2b8c371ca136a71bb46501da8c08a38f8e80cf01b6d94b6fcbe4b70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46bd013dd57dabf7b058756ae86471439391267fb7b7e4fbcb2668646f811916 = $this->env->getExtension("native_profiler");
        $__internal_46bd013dd57dabf7b058756ae86471439391267fb7b7e4fbcb2668646f811916->enter($__internal_46bd013dd57dabf7b058756ae86471439391267fb7b7e4fbcb2668646f811916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>test</h1>
<button type=\"button\" class=\"btn btn-primary\">Primary</button>
";
        
        $__internal_46bd013dd57dabf7b058756ae86471439391267fb7b7e4fbcb2668646f811916->leave($__internal_46bd013dd57dabf7b058756ae86471439391267fb7b7e4fbcb2668646f811916_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>test</h1>*/
/* <button type="button" class="btn btn-primary">Primary</button>*/
/* {% endblock %}*/
