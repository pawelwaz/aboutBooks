<?php

/* default/settings.html.twig */
class __TwigTemplate_8c0ae5b0ed137381145f7be670a4763b39f16c032aa9d1bdecc9bbced1e1ada5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/settings.html.twig", 1);
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
        $__internal_a983822ec3c2f4d085c675f0d479b6b5a804826d90907a05a4016abe512f9028 = $this->env->getExtension("native_profiler");
        $__internal_a983822ec3c2f4d085c675f0d479b6b5a804826d90907a05a4016abe512f9028->enter($__internal_a983822ec3c2f4d085c675f0d479b6b5a804826d90907a05a4016abe512f9028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a983822ec3c2f4d085c675f0d479b6b5a804826d90907a05a4016abe512f9028->leave($__internal_a983822ec3c2f4d085c675f0d479b6b5a804826d90907a05a4016abe512f9028_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d1d033ee067b0c567fee3d28b128bb327876763927675bbcdb733bcc2ba397 = $this->env->getExtension("native_profiler");
        $__internal_44d1d033ee067b0c567fee3d28b128bb327876763927675bbcdb733bcc2ba397->enter($__internal_44d1d033ee067b0c567fee3d28b128bb327876763927675bbcdb733bcc2ba397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t<h5>zmiana loginu</h5>
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginChangeForm"]) ? $context["loginChangeForm"] : $this->getContext($context, "loginChangeForm")), 'form_start');
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginChangeForm"]) ? $context["loginChangeForm"] : $this->getContext($context, "loginChangeForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nowy login")));
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginChangeForm"]) ? $context["loginChangeForm"] : $this->getContext($context, "loginChangeForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginChangeForm"]) ? $context["loginChangeForm"] : $this->getContext($context, "loginChangeForm")), 'form_end');
        echo "
</div>
<div class=\"alert alert-danger\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["loginChangeError"]) ? $context["loginChangeError"] : $this->getContext($context, "loginChangeError")), "html", null, true);
        echo "</div>
<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["loginChangeSuccess"]) ? $context["loginChangeSuccess"] : $this->getContext($context, "loginChangeSuccess")), "html", null, true);
        echo "</div>
<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t<h5>zmiana hasła</h5>
\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), 'form_start');
        echo "
\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), "old", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "stare hasło")));
        echo "
\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), "new", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nowe hasło")));
        echo "
\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), "retype", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "powtórz nowe hasło")));
        echo "
\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["passwordChangeForm"]) ? $context["passwordChangeForm"] : $this->getContext($context, "passwordChangeForm")), 'form_end');
        echo "
</div>
<div class=\"alert alert-danger\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["passwordChangeError"]) ? $context["passwordChangeError"] : $this->getContext($context, "passwordChangeError")), "html", null, true);
        echo "</div>
<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: auto;\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["passwordChangeSuccess"]) ? $context["passwordChangeSuccess"] : $this->getContext($context, "passwordChangeSuccess")), "html", null, true);
        echo "</div>
<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 1)) {
            // line 26
            echo "\t\ttyp konta: administrator
\t";
        }
        // line 28
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "creds"), "method") == 0)) {
            // line 29
            echo "\t\ttyp konta: użytkownik
\t";
        }
        // line 31
        echo "</div>
";
        
        $__internal_44d1d033ee067b0c567fee3d28b128bb327876763927675bbcdb733bcc2ba397->leave($__internal_44d1d033ee067b0c567fee3d28b128bb327876763927675bbcdb733bcc2ba397_prof);

    }

    public function getTemplateName()
    {
        return "default/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  114 => 29,  111 => 28,  107 => 26,  105 => 25,  100 => 23,  96 => 22,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  65 => 12,  61 => 11,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 	<h5>zmiana loginu</h5>*/
/* 	{{ form_start(loginChangeForm) }}*/
/* 	{{ form_widget(loginChangeForm.login, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nowy login' } }) }}*/
/* 	{{ form_widget(loginChangeForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 	{{ form_end(loginChangeForm) }}*/
/* </div>*/
/* <div class="alert alert-danger" role="alert" style="max-width: 300px; margin: auto;">{{ loginChangeError }}</div>*/
/* <div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ loginChangeSuccess }}</div>*/
/* <div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 	<h5>zmiana hasła</h5>*/
/* 	{{ form_start(passwordChangeForm) }}*/
/* 	{{ form_widget(passwordChangeForm.old, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'stare hasło' } }) }}*/
/* 	{{ form_widget(passwordChangeForm.new, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nowe hasło' } }) }}*/
/* 	{{ form_widget(passwordChangeForm.retype, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'powtórz nowe hasło' } }) }}*/
/* 	{{ form_widget(passwordChangeForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 	{{ form_end(passwordChangeForm) }}*/
/* </div>*/
/* <div class="alert alert-danger" role="alert" style="max-width: 300px; margin: auto;">{{ passwordChangeError }}</div>*/
/* <div class="alert alert-success" role="alert" style="max-width: 300px; margin: auto;">{{ passwordChangeSuccess }}</div>*/
/* <div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 	{% if app.session.get('creds') == 1 %}*/
/* 		typ konta: administrator*/
/* 	{% endif %}*/
/* 	{% if app.session.get('creds') == 0 %}*/
/* 		typ konta: użytkownik*/
/* 	{% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
