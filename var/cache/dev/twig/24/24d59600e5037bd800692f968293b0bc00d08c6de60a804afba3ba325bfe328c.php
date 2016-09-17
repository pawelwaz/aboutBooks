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
        $__internal_59e831c21780cf60c26f9bb1b34f26d5573c2fd0d8fc0b5123b24709d1f3165b = $this->env->getExtension("native_profiler");
        $__internal_59e831c21780cf60c26f9bb1b34f26d5573c2fd0d8fc0b5123b24709d1f3165b->enter($__internal_59e831c21780cf60c26f9bb1b34f26d5573c2fd0d8fc0b5123b24709d1f3165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    font-size: 18px;
                    font-weight: bold;
                }
                #toppanel a {
                    color: #FFFFFF;
                    text-decoration: none;
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
                .menuButton {
                    background-color: #000000;
                    color: #FFFFFF;
                    padding: 10px;
                    margin: 0px left;
                    font-size: 16px;
                    font-weight: bold;
                    font-family: Verdana;
                }
                .big-well {
                    margin: 5px auto;
                    text-align: center;
                    min-width: 300px;
                }
                td {
                    padding: 10px;
                }
            </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body style=\"margin: 0px auto; text-align: center;\">
        <div id=\"toppanel\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_59e831c21780cf60c26f9bb1b34f26d5573c2fd0d8fc0b5123b24709d1f3165b->leave($__internal_59e831c21780cf60c26f9bb1b34f26d5573c2fd0d8fc0b5123b24709d1f3165b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c94bad372b6b7bf20607e9d355d382ae6f2f0253dea9617878db55ea6e0fa0d = $this->env->getExtension("native_profiler");
        $__internal_8c94bad372b6b7bf20607e9d355d382ae6f2f0253dea9617878db55ea6e0fa0d->enter($__internal_8c94bad372b6b7bf20607e9d355d382ae6f2f0253dea9617878db55ea6e0fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "aboutBooks";
        
        $__internal_8c94bad372b6b7bf20607e9d355d382ae6f2f0253dea9617878db55ea6e0fa0d->leave($__internal_8c94bad372b6b7bf20607e9d355d382ae6f2f0253dea9617878db55ea6e0fa0d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6e286ac4b2ac729f8493c7351486374e6f29dadcd44b118c95ca48c19975a9d = $this->env->getExtension("native_profiler");
        $__internal_a6e286ac4b2ac729f8493c7351486374e6f29dadcd44b118c95ca48c19975a9d->enter($__internal_a6e286ac4b2ac729f8493c7351486374e6f29dadcd44b118c95ca48c19975a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "                ";
        
        $__internal_a6e286ac4b2ac729f8493c7351486374e6f29dadcd44b118c95ca48c19975a9d->leave($__internal_a6e286ac4b2ac729f8493c7351486374e6f29dadcd44b118c95ca48c19975a9d_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f0c574844384ab168c09adb1b2d62457f45c4a5aed9981b80ccbf633d73e4d9 = $this->env->getExtension("native_profiler");
        $__internal_2f0c574844384ab168c09adb1b2d62457f45c4a5aed9981b80ccbf633d73e4d9->enter($__internal_2f0c574844384ab168c09adb1b2d62457f45c4a5aed9981b80ccbf633d73e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_2f0c574844384ab168c09adb1b2d62457f45c4a5aed9981b80ccbf633d73e4d9->leave($__internal_2f0c574844384ab168c09adb1b2d62457f45c4a5aed9981b80ccbf633d73e4d9_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a26879d59e7257cc0d53a13f6f7adc92562dd67b05ab9a06188a4f6769fb92 = $this->env->getExtension("native_profiler");
        $__internal_93a26879d59e7257cc0d53a13f6f7adc92562dd67b05ab9a06188a4f6769fb92->enter($__internal_93a26879d59e7257cc0d53a13f6f7adc92562dd67b05ab9a06188a4f6769fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93a26879d59e7257cc0d53a13f6f7adc92562dd67b05ab9a06188a4f6769fb92->leave($__internal_93a26879d59e7257cc0d53a13f6f7adc92562dd67b05ab9a06188a4f6769fb92_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b35002eab97c9c5c746fd831fa6576f23688eb5449dafac455346e4e2d63a123 = $this->env->getExtension("native_profiler");
        $__internal_b35002eab97c9c5c746fd831fa6576f23688eb5449dafac455346e4e2d63a123->enter($__internal_b35002eab97c9c5c746fd831fa6576f23688eb5449dafac455346e4e2d63a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("menuButtons.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b35002eab97c9c5c746fd831fa6576f23688eb5449dafac455346e4e2d63a123->leave($__internal_b35002eab97c9c5c746fd831fa6576f23688eb5449dafac455346e4e2d63a123_prof);

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
        return array (  171 => 58,  166 => 57,  160 => 56,  149 => 55,  138 => 54,  131 => 9,  125 => 8,  113 => 5,  104 => 60,  101 => 56,  98 => 55,  96 => 54,  91 => 52,  84 => 48,  44 => 10,  42 => 8,  37 => 6,  33 => 5,  27 => 1,);
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
/*                     font-size: 18px;*/
/*                     font-weight: bold;*/
/*                 }*/
/*                 #toppanel a {*/
/*                     color: #FFFFFF;*/
/*                     text-decoration: none;*/
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
/*                 .menuButton {*/
/*                     background-color: #000000;*/
/*                     color: #FFFFFF;*/
/*                     padding: 10px;*/
/*                     margin: 0px left;*/
/*                     font-size: 16px;*/
/*                     font-weight: bold;*/
/*                     font-family: Verdana;*/
/*                 }*/
/*                 .big-well {*/
/*                     margin: 5px auto;*/
/*                     text-align: center;*/
/*                     min-width: 300px;*/
/*                 }*/
/*                 td {*/
/*                     padding: 10px;*/
/*                 }*/
/*             </style>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body style="margin: 0px auto; text-align: center;">*/
/*         <div id="toppanel">*/
/*             <img src="{{ asset('logo.png') }}" />*/
/*         </div>*/
/*         {% block menu %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('menuButtons.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
