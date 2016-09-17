<?php

/* baseMenu.html.twig */
class __TwigTemplate_ef908a8d052d59c06923730bc5dd8e61aa38ea18ed790e94023aa1d5b168d161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "baseMenu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89eda0afdea60cf9e9613e429461eb9da701986c9a0ce511e0abdd55cf1e1b25 = $this->env->getExtension("native_profiler");
        $__internal_89eda0afdea60cf9e9613e429461eb9da701986c9a0ce511e0abdd55cf1e1b25->enter($__internal_89eda0afdea60cf9e9613e429461eb9da701986c9a0ce511e0abdd55cf1e1b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89eda0afdea60cf9e9613e429461eb9da701986c9a0ce511e0abdd55cf1e1b25->leave($__internal_89eda0afdea60cf9e9613e429461eb9da701986c9a0ce511e0abdd55cf1e1b25_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0401d0080e8a9e39b92b890d8c54a07d9fc71ee07c8f078f2780141b511c1776 = $this->env->getExtension("native_profiler");
        $__internal_0401d0080e8a9e39b92b890d8c54a07d9fc71ee07c8f078f2780141b511c1776->enter($__internal_0401d0080e8a9e39b92b890d8c54a07d9fc71ee07c8f078f2780141b511c1776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "\t<div class=\"well\">
\t\t<a href=\"/books\" class=\"btn btn-default btn-lg\">książki</a>
\t\t";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 1)) {
            // line 7
            echo "\t\t\t<a href=\"/genres\" class=\"btn btn-default btn-lg\">gatunki</a>
\t\t";
        }
        // line 9
        echo "\t\t<a href=\"/writers\" class=\"btn btn-default btn-lg\">pisarze</a>
\t\t<a href=\"/settings\" class=\"btn btn-default btn-lg\">ustawienia</a>
\t\t";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 1)) {
            // line 12
            echo "\t\t\t<a href=\"/users\" class=\"btn btn-default btn-lg\">użytkownicy</a>
\t\t";
        }
        // line 14
        echo "\t\t<a href=\"/login\" class=\"btn btn-default btn-lg\">wyloguj (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "html", null, true);
        echo ")</a>
\t</div>
";
        
        $__internal_0401d0080e8a9e39b92b890d8c54a07d9fc71ee07c8f078f2780141b511c1776->leave($__internal_0401d0080e8a9e39b92b890d8c54a07d9fc71ee07c8f078f2780141b511c1776_prof);

    }

    public function getTemplateName()
    {
        return "baseMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 12,  54 => 11,  50 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block menu %}*/
/* 	<div class="well">*/
/* 		<a href="/books" class="btn btn-default btn-lg">książki</a>*/
/* 		{% if app.session.get('creds') == 1 %}*/
/* 			<a href="/genres" class="btn btn-default btn-lg">gatunki</a>*/
/* 		{% endif %}*/
/* 		<a href="/writers" class="btn btn-default btn-lg">pisarze</a>*/
/* 		<a href="/settings" class="btn btn-default btn-lg">ustawienia</a>*/
/* 		{% if app.session.get('creds') == 1 %}*/
/* 			<a href="/users" class="btn btn-default btn-lg">użytkownicy</a>*/
/* 		{% endif %}*/
/* 		<a href="/login" class="btn btn-default btn-lg">wyloguj ({{ app.session.get('login') }})</a>*/
/* 	</div>*/
/* {% endblock %}*/
