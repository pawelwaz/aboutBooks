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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778cc2301e4ef7a89ce3ca519ed9ae5593d077c5d6ff64f796cd8583858713a0 = $this->env->getExtension("native_profiler");
        $__internal_778cc2301e4ef7a89ce3ca519ed9ae5593d077c5d6ff64f796cd8583858713a0->enter($__internal_778cc2301e4ef7a89ce3ca519ed9ae5593d077c5d6ff64f796cd8583858713a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778cc2301e4ef7a89ce3ca519ed9ae5593d077c5d6ff64f796cd8583858713a0->leave($__internal_778cc2301e4ef7a89ce3ca519ed9ae5593d077c5d6ff64f796cd8583858713a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78acb1ae86396950a7c2b7ca413a58c87f4ba675c7608c41807c2d9f7cddcf1d = $this->env->getExtension("native_profiler");
        $__internal_78acb1ae86396950a7c2b7ca413a58c87f4ba675c7608c41807c2d9f7cddcf1d->enter($__internal_78acb1ae86396950a7c2b7ca413a58c87f4ba675c7608c41807c2d9f7cddcf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<table style=\"border: 0px; margin: 0px auto;\">
\t<tr>
\t\t<td valign=\"top\">
\t\t\t<div class=\"well big-well\">
\t\t\t\t<h5>logowanie</h5>
\t\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_start');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "login")));
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "password", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "hasło")));
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), "zaloguj", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["loginError"]) ? $context["loginError"] : $this->getContext($context, "loginError")), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td valign=\"top\">
\t\t\t<div class=\"well big-well\">
\t\t\t\t<h5>tworzenie konta</h5>
\t\t\t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_start');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "login")));
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "password", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "hasło")));
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "retype", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "powtórz hasło")));
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "zarejestruj", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div class=\"alert alert-success\" role=\"alert\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["regSuccess"]) ? $context["regSuccess"] : $this->getContext($context, "regSuccess")), "html", null, true);
        echo "</div>
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["regError"]) ? $context["regError"] : $this->getContext($context, "regError")), "html", null, true);
        echo "</div>
\t\t</td>
\t</tr>
</table>
";
        
        $__internal_78acb1ae86396950a7c2b7ca413a58c87f4ba675c7608c41807c2d9f7cddcf1d->leave($__internal_78acb1ae86396950a7c2b7ca413a58c87f4ba675c7608c41807c2d9f7cddcf1d_prof);

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
        return array (  105 => 28,  101 => 27,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
/* 			<div class="alert alert-danger" role="alert">{{ loginError }}</div>*/
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
/* 			<div class="alert alert-success" role="alert">{{ regSuccess }}</div>*/
/* 			<div class="alert alert-danger" role="alert">{{ regError }}</div>*/
/* 		</td>*/
/* 	</tr>*/
/* </table>*/
/* {% endblock %}*/
/* */
