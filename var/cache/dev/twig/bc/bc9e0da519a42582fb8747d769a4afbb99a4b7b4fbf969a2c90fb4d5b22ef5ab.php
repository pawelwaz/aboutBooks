<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f14204fff09ddcc260fc699f36431c30b6f689229d9aa6f1507f12e8d3e1fd50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb32591d6189a40bd2d3e4c913c3a09a2445493b23b68ac4940759588149fd1 = $this->env->getExtension("native_profiler");
        $__internal_1eb32591d6189a40bd2d3e4c913c3a09a2445493b23b68ac4940759588149fd1->enter($__internal_1eb32591d6189a40bd2d3e4c913c3a09a2445493b23b68ac4940759588149fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb32591d6189a40bd2d3e4c913c3a09a2445493b23b68ac4940759588149fd1->leave($__internal_1eb32591d6189a40bd2d3e4c913c3a09a2445493b23b68ac4940759588149fd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c711f8a1bee1c5f25b86fb826eaeb926157e5c8b8e8fb76c020b2eee0f651207 = $this->env->getExtension("native_profiler");
        $__internal_c711f8a1bee1c5f25b86fb826eaeb926157e5c8b8e8fb76c020b2eee0f651207->enter($__internal_c711f8a1bee1c5f25b86fb826eaeb926157e5c8b8e8fb76c020b2eee0f651207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c711f8a1bee1c5f25b86fb826eaeb926157e5c8b8e8fb76c020b2eee0f651207->leave($__internal_c711f8a1bee1c5f25b86fb826eaeb926157e5c8b8e8fb76c020b2eee0f651207_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d17fb1d11af374010a33316f039f91f51891ece6f5ab0dadf89b4ea75d4435a1 = $this->env->getExtension("native_profiler");
        $__internal_d17fb1d11af374010a33316f039f91f51891ece6f5ab0dadf89b4ea75d4435a1->enter($__internal_d17fb1d11af374010a33316f039f91f51891ece6f5ab0dadf89b4ea75d4435a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d17fb1d11af374010a33316f039f91f51891ece6f5ab0dadf89b4ea75d4435a1->leave($__internal_d17fb1d11af374010a33316f039f91f51891ece6f5ab0dadf89b4ea75d4435a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d36c41c9bc1f3caee64272328a502b0958851a1dbe79a385ac1493e408b3d85f = $this->env->getExtension("native_profiler");
        $__internal_d36c41c9bc1f3caee64272328a502b0958851a1dbe79a385ac1493e408b3d85f->enter($__internal_d36c41c9bc1f3caee64272328a502b0958851a1dbe79a385ac1493e408b3d85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d36c41c9bc1f3caee64272328a502b0958851a1dbe79a385ac1493e408b3d85f->leave($__internal_d36c41c9bc1f3caee64272328a502b0958851a1dbe79a385ac1493e408b3d85f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
