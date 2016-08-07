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
        $__internal_a57277f150d50d4f36eeb837a7dfd5fecc4824870e1101e1a9fffb08e2631b5a = $this->env->getExtension("native_profiler");
        $__internal_a57277f150d50d4f36eeb837a7dfd5fecc4824870e1101e1a9fffb08e2631b5a->enter($__internal_a57277f150d50d4f36eeb837a7dfd5fecc4824870e1101e1a9fffb08e2631b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <script src=\"../bootstrap/js/bootstrap.min.js\"></script>
    </body>
</html>
";
        
        $__internal_a57277f150d50d4f36eeb837a7dfd5fecc4824870e1101e1a9fffb08e2631b5a->leave($__internal_a57277f150d50d4f36eeb837a7dfd5fecc4824870e1101e1a9fffb08e2631b5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37725985f3ca453aac5d5423ce582987a088bb343b235cd2db1853b06d85f6a2 = $this->env->getExtension("native_profiler");
        $__internal_37725985f3ca453aac5d5423ce582987a088bb343b235cd2db1853b06d85f6a2->enter($__internal_37725985f3ca453aac5d5423ce582987a088bb343b235cd2db1853b06d85f6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "aboutBooks";
        
        $__internal_37725985f3ca453aac5d5423ce582987a088bb343b235cd2db1853b06d85f6a2->leave($__internal_37725985f3ca453aac5d5423ce582987a088bb343b235cd2db1853b06d85f6a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26cc344bb893583b366b895c633d961ff4e837de588b737655a6564e4c40a3ca = $this->env->getExtension("native_profiler");
        $__internal_26cc344bb893583b366b895c633d961ff4e837de588b737655a6564e4c40a3ca->enter($__internal_26cc344bb893583b366b895c633d961ff4e837de588b737655a6564e4c40a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26cc344bb893583b366b895c633d961ff4e837de588b737655a6564e4c40a3ca->leave($__internal_26cc344bb893583b366b895c633d961ff4e837de588b737655a6564e4c40a3ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f6b4fb80f381d0680ab9794c1cdc78522f71e225a6bd9bf7029313ebe8ab24 = $this->env->getExtension("native_profiler");
        $__internal_57f6b4fb80f381d0680ab9794c1cdc78522f71e225a6bd9bf7029313ebe8ab24->enter($__internal_57f6b4fb80f381d0680ab9794c1cdc78522f71e225a6bd9bf7029313ebe8ab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57f6b4fb80f381d0680ab9794c1cdc78522f71e225a6bd9bf7029313ebe8ab24->leave($__internal_57f6b4fb80f381d0680ab9794c1cdc78522f71e225a6bd9bf7029313ebe8ab24_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75c9f95c0d5e5ec893d290052fda6f3fa7d1c274d7df8c1fbec9046c11a1d7e7 = $this->env->getExtension("native_profiler");
        $__internal_75c9f95c0d5e5ec893d290052fda6f3fa7d1c274d7df8c1fbec9046c11a1d7e7->enter($__internal_75c9f95c0d5e5ec893d290052fda6f3fa7d1c274d7df8c1fbec9046c11a1d7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75c9f95c0d5e5ec893d290052fda6f3fa7d1c274d7df8c1fbec9046c11a1d7e7->leave($__internal_75c9f95c0d5e5ec893d290052fda6f3fa7d1c274d7df8c1fbec9046c11a1d7e7_prof);

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
        return array (  95 => 12,  84 => 11,  73 => 6,  61 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}aboutBooks{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="../bootstrap/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
