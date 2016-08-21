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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d26faf44408233a373f038da695cdf142449d46dd0733f1a96a4d27502614e34 = $this->env->getExtension("native_profiler");
        $__internal_d26faf44408233a373f038da695cdf142449d46dd0733f1a96a4d27502614e34->enter($__internal_d26faf44408233a373f038da695cdf142449d46dd0733f1a96a4d27502614e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <div id=\"toppanel\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" /></div>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_d26faf44408233a373f038da695cdf142449d46dd0733f1a96a4d27502614e34->leave($__internal_d26faf44408233a373f038da695cdf142449d46dd0733f1a96a4d27502614e34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3767728503f4858e2c0a2c7105ee7b3fc769841c6e10be6308acc533bfc728b = $this->env->getExtension("native_profiler");
        $__internal_a3767728503f4858e2c0a2c7105ee7b3fc769841c6e10be6308acc533bfc728b->enter($__internal_a3767728503f4858e2c0a2c7105ee7b3fc769841c6e10be6308acc533bfc728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "aboutBooks";
        
        $__internal_a3767728503f4858e2c0a2c7105ee7b3fc769841c6e10be6308acc533bfc728b->leave($__internal_a3767728503f4858e2c0a2c7105ee7b3fc769841c6e10be6308acc533bfc728b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64f3a5b2c2920e3fcbfc9c355c825cdc50155d9d4d07970beae155a14da538f9 = $this->env->getExtension("native_profiler");
        $__internal_64f3a5b2c2920e3fcbfc9c355c825cdc50155d9d4d07970beae155a14da538f9->enter($__internal_64f3a5b2c2920e3fcbfc9c355c825cdc50155d9d4d07970beae155a14da538f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "                ";
        
        $__internal_64f3a5b2c2920e3fcbfc9c355c825cdc50155d9d4d07970beae155a14da538f9->leave($__internal_64f3a5b2c2920e3fcbfc9c355c825cdc50155d9d4d07970beae155a14da538f9_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ff26f0f774b888ad35c2a85e8ed65a52cd06e7bf958f055c9712cf0dbab2288 = $this->env->getExtension("native_profiler");
        $__internal_4ff26f0f774b888ad35c2a85e8ed65a52cd06e7bf958f055c9712cf0dbab2288->enter($__internal_4ff26f0f774b888ad35c2a85e8ed65a52cd06e7bf958f055c9712cf0dbab2288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ff26f0f774b888ad35c2a85e8ed65a52cd06e7bf958f055c9712cf0dbab2288->leave($__internal_4ff26f0f774b888ad35c2a85e8ed65a52cd06e7bf958f055c9712cf0dbab2288_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bdcd8f65a7a11512378fa35ab001a8cceecd86fe90264f6c001b8aaf99165c5 = $this->env->getExtension("native_profiler");
        $__internal_5bdcd8f65a7a11512378fa35ab001a8cceecd86fe90264f6c001b8aaf99165c5->enter($__internal_5bdcd8f65a7a11512378fa35ab001a8cceecd86fe90264f6c001b8aaf99165c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5bdcd8f65a7a11512378fa35ab001a8cceecd86fe90264f6c001b8aaf99165c5->leave($__internal_5bdcd8f65a7a11512378fa35ab001a8cceecd86fe90264f6c001b8aaf99165c5_prof);

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
        return array (  126 => 31,  120 => 30,  109 => 29,  102 => 9,  96 => 8,  84 => 5,  75 => 33,  72 => 30,  70 => 29,  66 => 28,  60 => 25,  43 => 10,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <div id="toppanel"><img src="{{ asset('logo.png') }}" /></div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
