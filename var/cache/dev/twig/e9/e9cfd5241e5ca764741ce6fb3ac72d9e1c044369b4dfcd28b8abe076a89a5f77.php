<?php

/* default/books.html.twig */
class __TwigTemplate_3503ac3e8be5a8240d2ec442d736f0e0cf4ef2be42f8fe7751579511653a1d23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/books.html.twig", 1);
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
        $__internal_bd7e5815a430ffa75817804fc6b4533baa83d3c9a6f452e1ead60921bdda56bd = $this->env->getExtension("native_profiler");
        $__internal_bd7e5815a430ffa75817804fc6b4533baa83d3c9a6f452e1ead60921bdda56bd->enter($__internal_bd7e5815a430ffa75817804fc6b4533baa83d3c9a6f452e1ead60921bdda56bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/books.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7e5815a430ffa75817804fc6b4533baa83d3c9a6f452e1ead60921bdda56bd->leave($__internal_bd7e5815a430ffa75817804fc6b4533baa83d3c9a6f452e1ead60921bdda56bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37e816fbb36ab89e178946a56ed9f064848fb2ab500d3428230ae94ff9ab1f19 = $this->env->getExtension("native_profiler");
        $__internal_37e816fbb36ab89e178946a56ed9f064848fb2ab500d3428230ae94ff9ab1f19->enter($__internal_37e816fbb36ab89e178946a56ed9f064848fb2ab500d3428230ae94ff9ab1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"well\">
\t\t<h5 style=\"display: inline\">wyszukaj</h5>
\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "title", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "tytuł", "style" => "display:inline; max-width: 200px;")));
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "writername", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "imię autora", "style" => "display:inline; max-width: 200px")));
        echo "
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "writersurname", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nazwisko autora", "style" => "display:inline; max-width: 200px")));
        echo "
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "genre", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "gatunek", "style" => "display:inline; max-width: 200px")));
        echo "
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary", "style" => "display:inline;")));
        echo "
\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_end');
        echo "
\t</div>
\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<a href=\"/bookedit\" class=\"btn btn-primary\" style=\"margin: 5px auto;\">dodaj książkę</a>
\t<h3>Lista książek</h3>
\t";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["books"]) ? $context["books"] : $this->getContext($context, "books"))) > 0)) {
            // line 18
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 19
                echo "\t\t\t<div class=\"well big-well\" style=\"max-width: 400px; text-align: left;\">
\t\t\t\t<a href=\"/bookdetails/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
                echo "\">Tytuł: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
                echo "<br />autor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "writername", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "surname", array()), "html", null, true);
                echo "<br />gatunek: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "genrename", array()), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t";
        } else {
            // line 24
            echo "\t\t<h3>brak książek spełniających zadane kryteria</h3>
\t";
        }
        
        $__internal_37e816fbb36ab89e178946a56ed9f064848fb2ab500d3428230ae94ff9ab1f19->leave($__internal_37e816fbb36ab89e178946a56ed9f064848fb2ab500d3428230ae94ff9ab1f19_prof);

    }

    public function getTemplateName()
    {
        return "default/books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  106 => 23,  89 => 20,  86 => 19,  81 => 18,  79 => 17,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="well">*/
/* 		<h5 style="display: inline">wyszukaj</h5>*/
/* 		{{ form_start(searchForm,  { attr: {novalidate: 'novalidate'} } ) }}*/
/* 		{{ form_widget(searchForm.title, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'tytuł', 'style' : 'display:inline; max-width: 200px;' } }) }}*/
/* 		{{ form_widget(searchForm.writername, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'imię autora', 'style' : 'display:inline; max-width: 200px' } }) }}*/
/* 		{{ form_widget(searchForm.writersurname, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nazwisko autora', 'style' : 'display:inline; max-width: 200px' } }) }}*/
/* 		{{ form_widget(searchForm.genre, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'gatunek', 'style' : 'display:inline; max-width: 200px' } }) }}*/
/* 		{{ form_widget(searchForm.ok, { 'attr': { 'class': 'form-element btn btn-primary', 'style' : 'display:inline;' } }) }}*/
/* 		{{ form_end(searchForm) }}*/
/* 	</div>*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<a href="/bookedit" class="btn btn-primary" style="margin: 5px auto;">dodaj książkę</a>*/
/* 	<h3>Lista książek</h3>*/
/* 	{% if books|length > 0 %}*/
/* 		{% for book in books %}*/
/* 			<div class="well big-well" style="max-width: 400px; text-align: left;">*/
/* 				<a href="/bookdetails/{{ book.id }}">Tytuł: {{ book.title }}<br />autor: {{ book.writername }} {{ book.surname }}<br />gatunek: {{ book.genrename }}</a>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% else %}*/
/* 		<h3>brak książek spełniających zadane kryteria</h3>*/
/* 	{% endif %}*/
/* {% endblock %}*/
