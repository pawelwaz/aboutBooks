<?php

/* default/login.html.twig */
class __TwigTemplate_815b75e92ea2efee365a469bcc2671350b719308cc0bc1e193579aa39f069101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efcb66fb88717627490f2837251c3bfc30124705101feeac961e710ff8bd9710 = $this->env->getExtension("native_profiler");
        $__internal_efcb66fb88717627490f2837251c3bfc30124705101feeac961e710ff8bd9710->enter($__internal_efcb66fb88717627490f2837251c3bfc30124705101feeac961e710ff8bd9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efcb66fb88717627490f2837251c3bfc30124705101feeac961e710ff8bd9710->leave($__internal_efcb66fb88717627490f2837251c3bfc30124705101feeac961e710ff8bd9710_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_730811fd5e81ca59314be9f1ea25694a3cacc131be7490149356422e451fafba = $this->env->getExtension("native_profiler");
        $__internal_730811fd5e81ca59314be9f1ea25694a3cacc131be7490149356422e451fafba->enter($__internal_730811fd5e81ca59314be9f1ea25694a3cacc131be7490149356422e451fafba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t.big-well {
\t\tmargin: 5px;
\t\ttext-align: center;
\t\tmin-width: 300px;
\t}
";
        
        $__internal_730811fd5e81ca59314be9f1ea25694a3cacc131be7490149356422e451fafba->leave($__internal_730811fd5e81ca59314be9f1ea25694a3cacc131be7490149356422e451fafba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6efa574d2aa9f562501dbd4d4dbc63e127076eb90a9cb1ceee814097d99dcb16 = $this->env->getExtension("native_profiler");
        $__internal_6efa574d2aa9f562501dbd4d4dbc63e127076eb90a9cb1ceee814097d99dcb16->enter($__internal_6efa574d2aa9f562501dbd4d4dbc63e127076eb90a9cb1ceee814097d99dcb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<table style=\"border: 0px; margin: 0px auto;\">
\t<tr>
\t\t<td valign=\"top\">
\t\t\t<div class=\"well big-well\">
\t\t\t\t<h5>logowanie</h5>
\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_start');
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "login")));
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "password", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "hasło")));
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "zaloguj", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t\t\t";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_end');
        echo "
\t\t\t</div>
\t\t</td>
\t\t<td valign=\"top\">
\t\t\t<div class=\"well big-well\">
\t\t\t\t<h5>tworzenie konta</h5>
\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_start');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "login")));
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "password", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "hasło")));
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "retype", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "powtórz hasło")));
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "zarejestruj", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["regError"]) ? $context["regError"] : $this->getContext($context, "regError")), "html", null, true);
        echo "</div>
\t\t</td>
\t</tr>
</table>
";
        
        $__internal_6efa574d2aa9f562501dbd4d4dbc63e127076eb90a9cb1ceee814097d99dcb16->leave($__internal_6efa574d2aa9f562501dbd4d4dbc63e127076eb90a9cb1ceee814097d99dcb16_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	.big-well {*/
/* 		margin: 5px;*/
/* 		text-align: center;*/
/* 		min-width: 300px;*/
/* 	}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <table style="border: 0px; margin: 0px auto;">*/
/* 	<tr>*/
/* 		<td valign="top">*/
/* 			<div class="well big-well">*/
/* 				<h5>logowanie</h5>*/
/* 				{{ form_start(loginForm) }}*/
/* 				{{ form_widget(loginForm.login, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'login' } }) }}*/
/* 				{{ form_widget(loginForm.password, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'hasło' } }) }}*/
/* 				{{ form_widget(loginForm.zaloguj, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 				{{ form_end(loginForm) }}*/
/* 			</div>*/
/* 		</td>*/
/* 		<td valign="top">*/
/* 			<div class="well big-well">*/
/* 				<h5>tworzenie konta</h5>*/
/* 				{{ form_start(registerForm) }}*/
/* 				{{ form_widget(registerForm.login, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'login' } }) }}*/
/* 				{{ form_widget(registerForm.password, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'hasło' } }) }}*/
/* 				{{ form_widget(registerForm.retype, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'powtórz hasło' } }) }}*/
/* 				{{ form_widget(registerForm.zarejestruj, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 				{{ form_end(registerForm) }}*/
/* 			</div>*/
/* 			<div class="alert alert-danger" role="alert">{{ regError }}</div>*/
/* 		</td>*/
/* 	</tr>*/
/* </table>*/
/* {% endblock %}*/
/* */
