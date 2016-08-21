<?php

/* base.html.twig */
class __TwigTemplate_1ba3142144ce8fbc0f55a9846fcc5a2e22ef8c4069dc21e20ef4d45ea7dc02dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc089e96e4abedf5a30dcd4fd0b2235b7e0acef03df978c95ca0bf42b07e4e03 = $this->env->getExtension("native_profiler");
        $__internal_cc089e96e4abedf5a30dcd4fd0b2235b7e0acef03df978c95ca0bf42b07e4e03->enter($__internal_cc089e96e4abedf5a30dcd4fd0b2235b7e0acef03df978c95ca0bf42b07e4e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <style>
                ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "                #toppanel {
                    background-color: #000000;
                    width: 100%;
                }
                .form-element {
                    margin-top: 5px;
                    margin-bottom: 5px;
                }
                h5 {
                    font-weight: bold;
                }
                div:empty {
                    display: none;
                }
            </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"toppanel\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" />
            ";
        // line 30
        $this->displayBlock('menu', $context, $blocks);
        // line 31
        echo "        </div>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_cc089e96e4abedf5a30dcd4fd0b2235b7e0acef03df978c95ca0bf42b07e4e03->leave($__internal_cc089e96e4abedf5a30dcd4fd0b2235b7e0acef03df978c95ca0bf42b07e4e03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eba00a746bad6811441d627de93ed164a4ccea7de84fa2a9ceeec9c2b63c4913 = $this->env->getExtension("native_profiler");
        $__internal_eba00a746bad6811441d627de93ed164a4ccea7de84fa2a9ceeec9c2b63c4913->enter($__internal_eba00a746bad6811441d627de93ed164a4ccea7de84fa2a9ceeec9c2b63c4913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "aboutBooks";
        
        $__internal_eba00a746bad6811441d627de93ed164a4ccea7de84fa2a9ceeec9c2b63c4913->leave($__internal_eba00a746bad6811441d627de93ed164a4ccea7de84fa2a9ceeec9c2b63c4913_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc4d7f60d42b0669f2a96cc34928b536d64bbe47dcdfa4c57edf89eeff41d9f2 = $this->env->getExtension("native_profiler");
        $__internal_fc4d7f60d42b0669f2a96cc34928b536d64bbe47dcdfa4c57edf89eeff41d9f2->enter($__internal_fc4d7f60d42b0669f2a96cc34928b536d64bbe47dcdfa4c57edf89eeff41d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "                ";
        
        $__internal_fc4d7f60d42b0669f2a96cc34928b536d64bbe47dcdfa4c57edf89eeff41d9f2->leave($__internal_fc4d7f60d42b0669f2a96cc34928b536d64bbe47dcdfa4c57edf89eeff41d9f2_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3967d17bfcd2285405504135a59ca2a48a7e67562e7dfd9de70faa538d95f05 = $this->env->getExtension("native_profiler");
        $__internal_c3967d17bfcd2285405504135a59ca2a48a7e67562e7dfd9de70faa538d95f05->enter($__internal_c3967d17bfcd2285405504135a59ca2a48a7e67562e7dfd9de70faa538d95f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_c3967d17bfcd2285405504135a59ca2a48a7e67562e7dfd9de70faa538d95f05->leave($__internal_c3967d17bfcd2285405504135a59ca2a48a7e67562e7dfd9de70faa538d95f05_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_19470fa36bdeadc6ceca475a36914e9045a433ec007274d983836026cd610428 = $this->env->getExtension("native_profiler");
        $__internal_19470fa36bdeadc6ceca475a36914e9045a433ec007274d983836026cd610428->enter($__internal_19470fa36bdeadc6ceca475a36914e9045a433ec007274d983836026cd610428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19470fa36bdeadc6ceca475a36914e9045a433ec007274d983836026cd610428->leave($__internal_19470fa36bdeadc6ceca475a36914e9045a433ec007274d983836026cd610428_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49a458f6332df774ca0688e0448592f748803c06bd67737ecaba432017dd73d0 = $this->env->getExtension("native_profiler");
        $__internal_49a458f6332df774ca0688e0448592f748803c06bd67737ecaba432017dd73d0->enter($__internal_49a458f6332df774ca0688e0448592f748803c06bd67737ecaba432017dd73d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_49a458f6332df774ca0688e0448592f748803c06bd67737ecaba432017dd73d0->leave($__internal_49a458f6332df774ca0688e0448592f748803c06bd67737ecaba432017dd73d0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 34,  138 => 33,  127 => 32,  116 => 30,  109 => 9,  103 => 8,  91 => 5,  82 => 36,  79 => 33,  77 => 32,  74 => 31,  72 => 30,  68 => 29,  61 => 25,  44 => 10,  42 => 8,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}aboutBooks{% endblock %}</title>*/
/*             <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />*/
/*             <style>*/
/*                 {% block stylesheets %}*/
/*                 {% endblock %}*/
/*                 #toppanel {*/
/*                     background-color: #000000;*/
/*                     width: 100%;*/
/*                 }*/
/*                 .form-element {*/
/*                     margin-top: 5px;*/
/*                     margin-bottom: 5px;*/
/*                 }*/
/*                 h5 {*/
/*                     font-weight: bold;*/
/*                 }*/
/*                 div:empty {*/
/*                     display: none;*/
/*                 }*/
/*             </style>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div id="toppanel">*/
/*             <img src="{{ asset('logo.png') }}" />*/
/*             {% block menu %}{% endblock %}*/
/*         </div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
