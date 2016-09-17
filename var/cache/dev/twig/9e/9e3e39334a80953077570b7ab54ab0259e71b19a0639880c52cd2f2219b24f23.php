<?php

/* default/users.html.twig */
class __TwigTemplate_08b8991c173bed1bdeddbcd2731f8f2f3749a734751d607403b0b72f8770cb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/users.html.twig", 1);
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
        $__internal_3f918c5f7fe5ca7d4b8370e81673cbf0e3822b8f70776985c8cb01306841816b = $this->env->getExtension("native_profiler");
        $__internal_3f918c5f7fe5ca7d4b8370e81673cbf0e3822b8f70776985c8cb01306841816b->enter($__internal_3f918c5f7fe5ca7d4b8370e81673cbf0e3822b8f70776985c8cb01306841816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f918c5f7fe5ca7d4b8370e81673cbf0e3822b8f70776985c8cb01306841816b->leave($__internal_3f918c5f7fe5ca7d4b8370e81673cbf0e3822b8f70776985c8cb01306841816b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dd6c0df1f870e6c93e8aab3f0eb87bbeef4042ba4725fa1dac80ecabf2c5c3 = $this->env->getExtension("native_profiler");
        $__internal_86dd6c0df1f870e6c93e8aab3f0eb87bbeef4042ba4725fa1dac80ecabf2c5c3->enter($__internal_86dd6c0df1f870e6c93e8aab3f0eb87bbeef4042ba4725fa1dac80ecabf2c5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table class=\"table-bordered\" style=\"margin: 5px auto;\">
\t<thead>
\t\t<tr>
\t\t\t<td>id</td>
\t\t\t<td>login</td>
\t\t\t<td>typ konta</td>
\t\t\t<td>opcje</td>
\t\t</tr>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 17
            if (($this->getAttribute($context["user"], "creds", array()) == 1)) {
                // line 18
                echo "\t\t\t\t\t\tadministrator
\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\tużytkownik
\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"/useredit/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">edytuj</a></td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</thead>
\t</table>
";
        
        $__internal_86dd6c0df1f870e6c93e8aab3f0eb87bbeef4042ba4725fa1dac80ecabf2c5c3->leave($__internal_86dd6c0df1f870e6c93e8aab3f0eb87bbeef4042ba4725fa1dac80ecabf2c5c3_prof);

    }

    public function getTemplateName()
    {
        return "default/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  79 => 23,  76 => 22,  72 => 20,  68 => 18,  66 => 17,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<table class="table-bordered" style="margin: 5px auto;">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td>id</td>*/
/* 			<td>login</td>*/
/* 			<td>typ konta</td>*/
/* 			<td>opcje</td>*/
/* 		</tr>*/
/* 		{% for user in users %}*/
/* 			<tr>*/
/* 				<td>{{ user.id }}</td>*/
/* 				<td>{{ user.login }}</td>*/
/* 				<td>*/
/* 					{% if user.creds == 1 %}*/
/* 						administrator*/
/* 					{% else %}*/
/* 						użytkownik*/
/* 					{% endif %}*/
/* 				</td>*/
/* 				<td><a href="/useredit/{{ user.id }}">edytuj</a></td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 	</thead>*/
/* 	</table>*/
/* {% endblock %}*/
