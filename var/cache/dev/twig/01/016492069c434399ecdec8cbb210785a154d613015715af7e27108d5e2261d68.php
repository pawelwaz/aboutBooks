<?php

/* default/writers.html.twig */
class __TwigTemplate_4cc4dc8d9f2f980a9331993dbbb7eff54ff80accf270efdb675633bc62379539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/writers.html.twig", 1);
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
        $__internal_8f3bfd5b095dabba6df42082404479cd54bb5114f35d11bb5292e4c99d9b4931 = $this->env->getExtension("native_profiler");
        $__internal_8f3bfd5b095dabba6df42082404479cd54bb5114f35d11bb5292e4c99d9b4931->enter($__internal_8f3bfd5b095dabba6df42082404479cd54bb5114f35d11bb5292e4c99d9b4931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/writers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3bfd5b095dabba6df42082404479cd54bb5114f35d11bb5292e4c99d9b4931->leave($__internal_8f3bfd5b095dabba6df42082404479cd54bb5114f35d11bb5292e4c99d9b4931_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fb04b34e0f0c247d848ac7f8c99613451a7dd66174d8808b6be0a28beeef3b7 = $this->env->getExtension("native_profiler");
        $__internal_5fb04b34e0f0c247d848ac7f8c99613451a7dd66174d8808b6be0a28beeef3b7->enter($__internal_5fb04b34e0f0c247d848ac7f8c99613451a7dd66174d8808b6be0a28beeef3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<a href=\"/writer\" class=\"btn btn-primary\" style=\"margin: 5px auto;\">dodaj pisarza</a>
\t<div class=\"well\">
\t\t<h5 style=\"display: inline\">wyszukaj</h5>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "name", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "imię", "style" => "display:inline; max-width: 200px;")));
        echo "
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "surname", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nazwisko", "style" => "display:inline; max-width: 200px")));
        echo "
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary", "style" => "display:inline;")));
        echo "
\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_end', array("render_rest" => false));
        echo "
\t</div>
\t";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["writers"]) ? $context["writers"] : $this->getContext($context, "writers"))) > 0)) {
            // line 15
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["writers"]) ? $context["writers"] : $this->getContext($context, "writers")));
            foreach ($context['_seq'] as $context["_key"] => $context["writer"]) {
                // line 16
                echo "\t\t\t\t<div class=\"well\" style=\"max-width: 300px; margin: 0px auto\">
\t\t\t\t\t<a href=\"/writerdetails/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["writer"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["writer"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["writer"], "surname", array()), "html", null, true);
                echo "</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['writer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t";
        } else {
            // line 21
            echo "\t\t<div class=\"well\">
\t\t\t<h5>brak autorów spełniających podane kryteria</h5>
\t\t</div>
\t";
        }
        
        $__internal_5fb04b34e0f0c247d848ac7f8c99613451a7dd66174d8808b6be0a28beeef3b7->leave($__internal_5fb04b34e0f0c247d848ac7f8c99613451a7dd66174d8808b6be0a28beeef3b7_prof);

    }

    public function getTemplateName()
    {
        return "default/writers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  92 => 20,  79 => 17,  76 => 16,  71 => 15,  69 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<a href="/writer" class="btn btn-primary" style="margin: 5px auto;">dodaj pisarza</a>*/
/* 	<div class="well">*/
/* 		<h5 style="display: inline">wyszukaj</h5>*/
/* 		{{ form_start(searchForm,  { attr: {novalidate: 'novalidate'} } ) }}*/
/* 		{{ form_widget(searchForm.name, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'imię', 'style' : 'display:inline; max-width: 200px;' } }) }}*/
/* 		{{ form_widget(searchForm.surname, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nazwisko', 'style' : 'display:inline; max-width: 200px' } }) }}*/
/* 		{{ form_widget(searchForm.ok, { 'attr': { 'class': 'form-element btn btn-primary', 'style' : 'display:inline;' } }) }}*/
/* 		{{ form_end(searchForm, { 'render_rest' : false }) }}*/
/* 	</div>*/
/* 	{% if writers|length > 0 %}*/
/* 			{% for writer in writers %}*/
/* 				<div class="well" style="max-width: 300px; margin: 0px auto">*/
/* 					<a href="/writerdetails/{{ writer.id }}">{{ writer.name }} {{ writer.surname }}</a>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 	{% else %}*/
/* 		<div class="well">*/
/* 			<h5>brak autorów spełniających podane kryteria</h5>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
