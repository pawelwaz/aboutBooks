<?php

/* default/genres.html.twig */
class __TwigTemplate_b0863a12c784860d127558f2bce36a2037d126a8d8050a11324ec4ed5b825661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/genres.html.twig", 1);
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
        $__internal_32c93168bced3623fea39d5225d81f894c5173da9a54a0edabaf5ccde78c15ae = $this->env->getExtension("native_profiler");
        $__internal_32c93168bced3623fea39d5225d81f894c5173da9a54a0edabaf5ccde78c15ae->enter($__internal_32c93168bced3623fea39d5225d81f894c5173da9a54a0edabaf5ccde78c15ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/genres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c93168bced3623fea39d5225d81f894c5173da9a54a0edabaf5ccde78c15ae->leave($__internal_32c93168bced3623fea39d5225d81f894c5173da9a54a0edabaf5ccde78c15ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eebe477940fd114d3e41a0b254caba48800ff6f2055ae57d34dc82dbf56460e2 = $this->env->getExtension("native_profiler");
        $__internal_eebe477940fd114d3e41a0b254caba48800ff6f2055ae57d34dc82dbf56460e2->enter($__internal_eebe477940fd114d3e41a0b254caba48800ff6f2055ae57d34dc82dbf56460e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<div class=\"alert alert-danger\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["saveError"]) ? $context["saveError"] : $this->getContext($context, "saveError")), "html", null, true);
        echo "</div>
\t<div class=\"well\" style=\"max-width: 200px; margin: 5px auto;\">
\t\t<h5 style=\"display: inline\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "</h5>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genreForm"]) ? $context["genreForm"] : $this->getContext($context, "genreForm")), 'form_start');
        echo "
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genreForm"]) ? $context["genreForm"] : $this->getContext($context, "genreForm")), "name", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nazwa", "style" => "max-width: 200px;")));
        echo "
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genreForm"]) ? $context["genreForm"] : $this->getContext($context, "genreForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genreForm"]) ? $context["genreForm"] : $this->getContext($context, "genreForm")), 'form_end');
        echo "
\t</div>
\t";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres"))) > 0)) {
            // line 14
            echo "\t\t<table class=\"table-bordered\" style=\"margin: 5px auto;\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>gatunki</td>
\t\t\t\t\t<td>opcje</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 22
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/genres/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "id", array()), "html", null, true);
                echo "\">edytuj</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</table>
\t";
        } else {
            // line 31
            echo "\t\t<div class=\"well\">
\t\t\t<h5>brak gatunków w bazie</h5>
\t\t</div>
\t";
        }
        
        $__internal_eebe477940fd114d3e41a0b254caba48800ff6f2055ae57d34dc82dbf56460e2->leave($__internal_eebe477940fd114d3e41a0b254caba48800ff6f2055ae57d34dc82dbf56460e2_prof);

    }

    public function getTemplateName()
    {
        return "default/genres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  104 => 29,  94 => 25,  89 => 23,  86 => 22,  82 => 21,  73 => 14,  71 => 13,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<div class="alert alert-danger" role="alert" style="max-width: 300px; margin: auto;">{{ saveError }}</div>*/
/* 	<div class="well" style="max-width: 200px; margin: 5px auto;">*/
/* 		<h5 style="display: inline">{{ header }}</h5>*/
/* 		{{ form_start(genreForm) }}*/
/* 		{{ form_widget(genreForm.name, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nazwa', 'style' : 'max-width: 200px;' } }) }}*/
/* 		{{ form_widget(genreForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 		{{ form_end(genreForm) }}*/
/* 	</div>*/
/* 	{% if genres|length > 0 %}*/
/* 		<table class="table-bordered" style="margin: 5px auto;">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>gatunki</td>*/
/* 					<td>opcje</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			{% for genre in genres %}*/
/* 				<tr>*/
/* 					<td>{{ genre.name }}</td>*/
/* 					<td>*/
/* 						<a href="/genres/{{ genre.id }}">edytuj</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</table>*/
/* 	{% else %}*/
/* 		<div class="well">*/
/* 			<h5>brak gatunków w bazie</h5>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
