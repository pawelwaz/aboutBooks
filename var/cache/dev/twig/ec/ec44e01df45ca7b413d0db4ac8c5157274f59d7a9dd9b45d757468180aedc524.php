<?php

/* default/book.details.html.twig */
class __TwigTemplate_d4c0d978d5ce681911afe23d93e32be206b9c29130b735ddf83ba8431be6802b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/book.details.html.twig", 1);
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
        $__internal_bc6f85fd4b266db8412ece13648599eeca16b5ab4ebff15b1eff645bbe3db683 = $this->env->getExtension("native_profiler");
        $__internal_bc6f85fd4b266db8412ece13648599eeca16b5ab4ebff15b1eff645bbe3db683->enter($__internal_bc6f85fd4b266db8412ece13648599eeca16b5ab4ebff15b1eff645bbe3db683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/book.details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6f85fd4b266db8412ece13648599eeca16b5ab4ebff15b1eff645bbe3db683->leave($__internal_bc6f85fd4b266db8412ece13648599eeca16b5ab4ebff15b1eff645bbe3db683_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7394ffbdb7d16cb827feee918315f6d7c25b03cb74ade5c39a169afe378b7d37 = $this->env->getExtension("native_profiler");
        $__internal_7394ffbdb7d16cb827feee918315f6d7c25b03cb74ade5c39a169afe378b7d37->enter($__internal_7394ffbdb7d16cb827feee918315f6d7c25b03cb74ade5c39a169afe378b7d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</h2>
\t<h5>Autor: <a href=\"/writerdetails/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "surname", array()), "html", null, true);
        echo "</a></h5>
\t<h5>Gatunek: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "name", array()), "html", null, true);
        echo "</h5>
\t";
        // line 8
        if ((($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "moder", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "userId"), "method")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 1))) {
            // line 9
            echo "\t\t<a href=\"/bookedit/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin: 2px auto;\">edytuj</a>
\t";
        }
        // line 11
        echo "\t<div class=\"well\">
\t\t<h5>opis:</h5>
\t\t";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array())) > 0)) {
            // line 14
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array()), "html", null, true);
            echo "
\t\t";
        } else {
            // line 16
            echo "\t\t\tksiążka nie ma jeszcze opisu
\t\t";
        }
        // line 18
        echo "\t</div>
\t<div class=\"well\" style=\"max-width: 400px; margin: 0px auto;\">
\t\t<h5>napisz komentarz</h5>
\t\t";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_start');
        echo "
\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "content", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "treść komentarza")));
        echo "
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary", "style" => "display:inline;")));
        echo "
\t\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_end');
        echo "
\t</div>
\t<h5>Komentarze</h5>
\t";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 28
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 29
                echo "\t\t\t<div class=\"well\" style=\"text-align: left; max-width: 400px; margin: 2px auto;\">
\t\t\t\t<h5>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "login", array()), "html", null, true);
                echo "</h5>
\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t";
        } else {
            // line 35
            echo "\t\t(jeszcze nikt nie skomentował tej książki)
\t";
        }
        
        $__internal_7394ffbdb7d16cb827feee918315f6d7c25b03cb74ade5c39a169afe378b7d37->leave($__internal_7394ffbdb7d16cb827feee918315f6d7c25b03cb74ade5c39a169afe378b7d37_prof);

    }

    public function getTemplateName()
    {
        return "default/book.details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  131 => 34,  122 => 31,  118 => 30,  115 => 29,  110 => 28,  108 => 27,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  85 => 18,  81 => 16,  75 => 14,  73 => 13,  69 => 11,  63 => 9,  61 => 8,  57 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<h2>{{ book.title }}</h2>*/
/* 	<h5>Autor: <a href="/writerdetails/{{ writer.id }}">{{ writer.name }} {{ writer.surname }}</a></h5>*/
/* 	<h5>Gatunek: {{ genre.name }}</h5>*/
/* 	{% if (book.moder == app.session.get('userId') or app.session.get('creds') == 1) %}*/
/* 		<a href="/bookedit/{{ book.id }}" class="btn btn-primary" style="margin: 2px auto;">edytuj</a>*/
/* 	{% endif %}*/
/* 	<div class="well">*/
/* 		<h5>opis:</h5>*/
/* 		{% if book.description|length > 0 %}*/
/* 			{{ book.description }}*/
/* 		{% else %}*/
/* 			książka nie ma jeszcze opisu*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="well" style="max-width: 400px; margin: 0px auto;">*/
/* 		<h5>napisz komentarz</h5>*/
/* 		{{ form_start(commentForm) }}*/
/* 		{{ form_widget(commentForm.content, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'treść komentarza' } }) }}*/
/* 		{{ form_widget(commentForm.ok, { 'attr': { 'class': 'form-element btn btn-primary', 'style' : 'display:inline;' } }) }}*/
/* 		{{ form_end(commentForm) }}*/
/* 	</div>*/
/* 	<h5>Komentarze</h5>*/
/* 	{% if comments|length > 0 %}*/
/* 		{% for comment in comments %}*/
/* 			<div class="well" style="text-align: left; max-width: 400px; margin: 2px auto;">*/
/* 				<h5>{{ comment.login }}</h5>*/
/* 				{{ comment.content }}*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% else %}*/
/* 		(jeszcze nikt nie skomentował tej książki)*/
/* 	{% endif %}*/
/* {% endblock %}*/
