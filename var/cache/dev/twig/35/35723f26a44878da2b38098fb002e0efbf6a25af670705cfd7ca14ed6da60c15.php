<?php

/* default/writer.html.twig */
class __TwigTemplate_d1815e8fbe5cc69e92ae5ad2ac37fa6bfa17bfe1799c7d8e69d5b6c8b57b5ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/writer.html.twig", 1);
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
        $__internal_d5dfa0647331551215f0918553f16ab187c7dc9720faa4d5067f3696abc33315 = $this->env->getExtension("native_profiler");
        $__internal_d5dfa0647331551215f0918553f16ab187c7dc9720faa4d5067f3696abc33315->enter($__internal_d5dfa0647331551215f0918553f16ab187c7dc9720faa4d5067f3696abc33315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/writer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5dfa0647331551215f0918553f16ab187c7dc9720faa4d5067f3696abc33315->leave($__internal_d5dfa0647331551215f0918553f16ab187c7dc9720faa4d5067f3696abc33315_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9949c7c7b3014046683fe87cd77c19767a76ba0cf7046726e042f9f7ffbed27 = $this->env->getExtension("native_profiler");
        $__internal_a9949c7c7b3014046683fe87cd77c19767a76ba0cf7046726e042f9f7ffbed27->enter($__internal_a9949c7c7b3014046683fe87cd77c19767a76ba0cf7046726e042f9f7ffbed27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<div class=\"alert alert-danger\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["saveError"]) ? $context["saveError"] : $this->getContext($context, "saveError")), "html", null, true);
        echo "</div>
\t<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t\t<h5>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "</h5>
\t\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), 'form_start');
        echo "
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), "name", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "imię")));
        echo "
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), "surname", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nazwisko")));
        echo "
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), "bio", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "opis")));
        echo "
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["writerForm"]) ? $context["writerForm"] : $this->getContext($context, "writerForm")), 'form_end');
        echo "
\t</div>
\t<a href=\"/writers\" class=\"btn btn-primary\">powrót</a>
";
        
        $__internal_a9949c7c7b3014046683fe87cd77c19767a76ba0cf7046726e042f9f7ffbed27->leave($__internal_a9949c7c7b3014046683fe87cd77c19767a76ba0cf7046726e042f9f7ffbed27_prof);

    }

    public function getTemplateName()
    {
        return "default/writer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<div class="alert alert-danger" role="alert" style="max-width: 300px; margin: auto;">{{ saveError }}</div>*/
/* 	<div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 		<h5>{{ header }}</h5>*/
/* 			{{ form_start(writerForm) }}*/
/* 			{{ form_widget(writerForm.name, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'imię' } }) }}*/
/* 			{{ form_widget(writerForm.surname, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nazwisko' } }) }}*/
/* 			{{ form_widget(writerForm.bio, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'opis' } }) }}*/
/* 			{{ form_widget(writerForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 			{{ form_end(writerForm) }}*/
/* 	</div>*/
/* 	<a href="/writers" class="btn btn-primary">powrót</a>*/
/* {% endblock %}*/
/* */
