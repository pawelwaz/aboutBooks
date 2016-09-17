<?php

/* default/useredit.html.twig */
class __TwigTemplate_f5cc27352e43d6397c2b8b7ff46ce492d4c5c395542468058f097b5acac20fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseMenu.html.twig", "default/useredit.html.twig", 1);
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
        $__internal_004345ad6965222c9d498dd8255dda9646ed2fe2a61b070a9909ee34bd75fc20 = $this->env->getExtension("native_profiler");
        $__internal_004345ad6965222c9d498dd8255dda9646ed2fe2a61b070a9909ee34bd75fc20->enter($__internal_004345ad6965222c9d498dd8255dda9646ed2fe2a61b070a9909ee34bd75fc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/useredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004345ad6965222c9d498dd8255dda9646ed2fe2a61b070a9909ee34bd75fc20->leave($__internal_004345ad6965222c9d498dd8255dda9646ed2fe2a61b070a9909ee34bd75fc20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32acc4638fd6dddcc860911976c756153988b23fef4ee58a1e402d79f6eaedcd = $this->env->getExtension("native_profiler");
        $__internal_32acc4638fd6dddcc860911976c756153988b23fef4ee58a1e402d79f6eaedcd->enter($__internal_32acc4638fd6dddcc860911976c756153988b23fef4ee58a1e402d79f6eaedcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"alert alert-success\" role=\"alert\" style=\"max-width: 300px; margin: 5px auto;\">";
        echo twig_escape_filter($this->env, (isset($context["editSuccess"]) ? $context["editSuccess"] : $this->getContext($context, "editSuccess")), "html", null, true);
        echo "</div>
<div class=\"alert alert-danger\" role=\"alert\" style=\"max-width: 300px; margin: 5px auto;\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["editError"]) ? $context["editError"] : $this->getContext($context, "editError")), "html", null, true);
        echo "</div>
<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t<h5>nazwa i typ konta</h5>
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["UserEditForm"]) ? $context["UserEditForm"] : $this->getContext($context, "UserEditForm")), 'form_start');
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["UserEditForm"]) ? $context["UserEditForm"] : $this->getContext($context, "UserEditForm")), "login", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "login")));
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["UserEditForm"]) ? $context["UserEditForm"] : $this->getContext($context, "UserEditForm")), "creds", array()), 'widget', array("attr" => array("class" => "form-element form-control")));
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["UserEditForm"]) ? $context["UserEditForm"] : $this->getContext($context, "UserEditForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["UserEditForm"]) ? $context["UserEditForm"] : $this->getContext($context, "UserEditForm")), 'form_end');
        echo "
</div>
<div class=\"well big-well\" style=\"max-width: 300px; margin: 5px auto;\">
\t<h5>reset hasła</h5>
\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["PasswordChangeForm"]) ? $context["PasswordChangeForm"] : $this->getContext($context, "PasswordChangeForm")), 'form_start');
        echo "
\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["PasswordChangeForm"]) ? $context["PasswordChangeForm"] : $this->getContext($context, "PasswordChangeForm")), "new", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "nowe hasło")));
        echo "
\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["PasswordChangeForm"]) ? $context["PasswordChangeForm"] : $this->getContext($context, "PasswordChangeForm")), "retype", array()), 'widget', array("attr" => array("class" => "form-element form-control", "placeholder" => "powtórz hasło")));
        echo "
\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["PasswordChangeForm"]) ? $context["PasswordChangeForm"] : $this->getContext($context, "PasswordChangeForm")), "ok", array()), 'widget', array("attr" => array("class" => "form-element btn btn-primary")));
        echo "
\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["PasswordChangeForm"]) ? $context["PasswordChangeForm"] : $this->getContext($context, "PasswordChangeForm")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_32acc4638fd6dddcc860911976c756153988b23fef4ee58a1e402d79f6eaedcd->leave($__internal_32acc4638fd6dddcc860911976c756153988b23fef4ee58a1e402d79f6eaedcd_prof);

    }

    public function getTemplateName()
    {
        return "default/useredit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'baseMenu.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="alert alert-success" role="alert" style="max-width: 300px; margin: 5px auto;">{{ editSuccess }}</div>*/
/* <div class="alert alert-danger" role="alert" style="max-width: 300px; margin: 5px auto;">{{ editError }}</div>*/
/* <div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 	<h5>nazwa i typ konta</h5>*/
/* 	{{ form_start(UserEditForm) }}*/
/* 	{{ form_widget(UserEditForm.login, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'login' } }) }}*/
/* 	{{ form_widget(UserEditForm.creds, { 'attr': { 'class': 'form-element form-control' } }) }}*/
/* 	{{ form_widget(UserEditForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 	{{ form_end(UserEditForm) }}*/
/* </div>*/
/* <div class="well big-well" style="max-width: 300px; margin: 5px auto;">*/
/* 	<h5>reset hasła</h5>*/
/* 	{{ form_start(PasswordChangeForm) }}*/
/* 	{{ form_widget(PasswordChangeForm.new, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'nowe hasło' } }) }}*/
/* 	{{ form_widget(PasswordChangeForm.retype, { 'attr': { 'class': 'form-element form-control', 'placeholder': 'powtórz hasło' } }) }}*/
/* 	{{ form_widget(PasswordChangeForm.ok, { 'attr': { 'class': 'form-element btn btn-primary' } }) }}*/
/* 	{{ form_end(PasswordChangeForm, { 'render_rest' : false }) }}*/
/* </div>*/
/* {% endblock %}*/
