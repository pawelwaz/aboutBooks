<?php

/* default/bookedit.html.twig */
class __TwigTemplate_837e3a0799692660afcc83cb5ab244f3bd78fee778ee7e4068af39d706547ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/bookedit.html.twig", 1);
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
        $__internal_9488d83082babff5c2a899e1e0b672b8436037b3ada527b8ae642cdad94d41df = $this->env->getExtension("native_profiler");
        $__internal_9488d83082babff5c2a899e1e0b672b8436037b3ada527b8ae642cdad94d41df->enter($__internal_9488d83082babff5c2a899e1e0b672b8436037b3ada527b8ae642cdad94d41df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bookedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9488d83082babff5c2a899e1e0b672b8436037b3ada527b8ae642cdad94d41df->leave($__internal_9488d83082babff5c2a899e1e0b672b8436037b3ada527b8ae642cdad94d41df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a47cf74966e39b98fb2ec8beb2c3cb107cba2ce0b7e36956e93be88129e70e6 = $this->env->getExtension("native_profiler");
        $__internal_7a47cf74966e39b98fb2ec8beb2c3cb107cba2ce0b7e36956e93be88129e70e6->enter($__internal_7a47cf74966e39b98fb2ec8beb2c3cb107cba2ce0b7e36956e93be88129e70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"well big-well\" style=\"max-width: 300px\">
\t\t<h5>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "</h5>
\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), 'form_start');
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), "title", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "tytuł")));
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), "description", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "opis")));
        echo "
\t\t<h5>Autor:</h5>
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), "writer", array()), 'widget', array("attr" => array("class" => "form-element form-control")));
        echo "
\t\t<h5>Gatunek:</h5>
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), "genre", array()), 'widget', array("attr" => array("class" => "form-element form-control")));
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["bookForm"]) ? $context["bookForm"] : $this->getContext($context, "bookForm")), 'form_end');
        echo "
\t\t<a href=\"/books\" class=\"btn btn-primary\">powrót</a>
\t</div>
";
        
        $__internal_7a47cf74966e39b98fb2ec8beb2c3cb107cba2ce0b7e36956e93be88129e70e6->leave($__internal_7a47cf74966e39b98fb2ec8beb2c3cb107cba2ce0b7e36956e93be88129e70e6_prof);

    }

    public function getTemplateName()
    {
        return "default/bookedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  65 => 12,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="well big-well" style="max-width: 300px">*/
/* 		<h5>{{ header }}</h5>*/
/* 		{{ form_start(bookForm) }}*/
/* 		{{ form_widget(bookForm.title, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'tytuł' } }) }}*/
/* 		{{ form_widget(bookForm.description, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'opis' } }) }}*/
/* 		<h5>Autor:</h5>*/
/* 		{{ form_widget(bookForm.writer, { 'attr': { 'class': 'form-element form-control' } }) }}*/
/* 		<h5>Gatunek:</h5>*/
/* 		{{ form_widget(bookForm.genre, { 'attr': { 'class': 'form-element form-control' } }) }}*/
/* 		{{ form_widget(bookForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 		{{ form_end(bookForm) }}*/
/* 		<a href="/books" class="btn btn-primary">powrót</a>*/
/* 	</div>*/
/* {% endblock %}*/
