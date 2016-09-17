<?php

/* default/writer.details.html.twig */
class __TwigTemplate_546689175debfffa7c4c93afe09d8808090c074a96f21f2590703387273cf164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/writer.details.html.twig", 1);
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
        $__internal_f2fcc33691a7e410caac1579b029ef2fbcb6385e2b674a82bc5fde8b09e332ed = $this->env->getExtension("native_profiler");
        $__internal_f2fcc33691a7e410caac1579b029ef2fbcb6385e2b674a82bc5fde8b09e332ed->enter($__internal_f2fcc33691a7e410caac1579b029ef2fbcb6385e2b674a82bc5fde8b09e332ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/writer.details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2fcc33691a7e410caac1579b029ef2fbcb6385e2b674a82bc5fde8b09e332ed->leave($__internal_f2fcc33691a7e410caac1579b029ef2fbcb6385e2b674a82bc5fde8b09e332ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb2927349f652cf0cb227488d91ad1ca5529f02fe6cc37739c15b08d27ea176 = $this->env->getExtension("native_profiler");
        $__internal_6cb2927349f652cf0cb227488d91ad1ca5529f02fe6cc37739c15b08d27ea176->enter($__internal_6cb2927349f652cf0cb227488d91ad1ca5529f02fe6cc37739c15b08d27ea176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        echo twig_escape_filter($this->env, (isset($context["saveSuccess"]) ? $context["saveSuccess"] : $this->getContext($context, "saveSuccess")), "html", null, true);
        echo "</div>
\t<h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "surname", array()), "html", null, true);
        echo "</h4>
\t";
        // line 6
        if ((($this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "moder", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "userId"), "method")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 1))) {
            // line 7
            echo "\t\t<a href=\"/writer/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin: 2px auto;\">edytuj</a>
\t";
        }
        // line 9
        echo "\t<div class=\"well\">
\t\t<h5>opis autora</h5>
\t\t";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "bio", array())) > 0)) {
            // line 12
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : $this->getContext($context, "writer")), "bio", array()), "html", null, true);
            echo "
\t\t";
        } else {
            // line 14
            echo "\t\t\tten pisarz nie posiada jeszcze opisu w bazie
\t\t";
        }
        // line 16
        echo "\t\t<h5>książki autora w bazie</h5>
\t\t";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["books"]) ? $context["books"] : $this->getContext($context, "books"))) > 0)) {
            // line 18
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 19
                echo "\t\t\t\t<a href=\"/bookdetails/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
                echo "</a><br/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t(autor nie posiada jeszcze książek w bazie)
\t\t";
        }
        // line 24
        echo "\t</div>
\t<div class=\"well\" style=\"max-width: 400px; margin: 0px auto;\">
\t\t<h5>napisz komentarz</h5>
\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_start');
        echo "
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "content", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "treść komentarza")));
        echo "
\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary", "style" => "display:inline;")));
        echo "
\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_end');
        echo "
\t</div>
\t<h5>Komentarze</h5>
\t";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 34
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 35
                echo "\t\t\t<div class=\"well\" style=\"text-align: left; max-width: 400px; margin: 2px auto;\">
\t\t\t\t<h5>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "login", array()), "html", null, true);
                echo "</h5>
\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t";
        } else {
            // line 41
            echo "\t\t(jeszcze nikt nie skomentował tego autora)
\t";
        }
        
        $__internal_6cb2927349f652cf0cb227488d91ad1ca5529f02fe6cc37739c15b08d27ea176->leave($__internal_6cb2927349f652cf0cb227488d91ad1ca5529f02fe6cc37739c15b08d27ea176_prof);

    }

    public function getTemplateName()
    {
        return "default/writer.details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  149 => 40,  140 => 37,  136 => 36,  133 => 35,  128 => 34,  126 => 33,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  103 => 24,  99 => 22,  96 => 21,  85 => 19,  80 => 18,  78 => 17,  75 => 16,  71 => 14,  65 => 12,  63 => 11,  59 => 9,  53 => 7,  51 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ saveSuccess }}</div>*/
/* 	<h4>{{ writer.name }} {{ writer.surname }}</h4>*/
/* 	{% if (writer.moder == app.session.get('userId') or app.session.get('creds') == 1) %}*/
/* 		<a href="/writer/{{ writer.id }}" class="btn btn-primary" style="margin: 2px auto;">edytuj</a>*/
/* 	{% endif %}*/
/* 	<div class="well">*/
/* 		<h5>opis autora</h5>*/
/* 		{% if writer.bio|length > 0 %}*/
/* 			{{ writer.bio }}*/
/* 		{% else %}*/
/* 			ten pisarz nie posiada jeszcze opisu w bazie*/
/* 		{% endif %}*/
/* 		<h5>książki autora w bazie</h5>*/
/* 		{% if books|length > 0 %}*/
/* 			{% for book in books %}*/
/* 				<a href="/bookdetails/{{ book.id }}">{{ book.title }}</a><br/>*/
/* 			{% endfor %}*/
/* 		{% else %}*/
/* 			(autor nie posiada jeszcze książek w bazie)*/
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
/* 		(jeszcze nikt nie skomentował tego autora)*/
/* 	{% endif %}*/
/* {% endblock %}*/
