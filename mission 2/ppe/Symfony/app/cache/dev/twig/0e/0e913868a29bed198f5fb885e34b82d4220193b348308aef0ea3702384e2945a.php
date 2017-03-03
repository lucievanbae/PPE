<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0c0a00c2df8e74e74214d3196f47eb615a686448931d48066cb5d19ca40bab01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc263ee923e81bb2de3e59fa965537251d89f1825b24f6fd77e8c3dbd89ce080 = $this->env->getExtension("native_profiler");
        $__internal_fc263ee923e81bb2de3e59fa965537251d89f1825b24f6fd77e8c3dbd89ce080->enter($__internal_fc263ee923e81bb2de3e59fa965537251d89f1825b24f6fd77e8c3dbd89ce080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc263ee923e81bb2de3e59fa965537251d89f1825b24f6fd77e8c3dbd89ce080->leave($__internal_fc263ee923e81bb2de3e59fa965537251d89f1825b24f6fd77e8c3dbd89ce080_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11d5dfd5436cb4da68deb2e09fce3a23e943e4a31f4999554fb781cc69027b1a = $this->env->getExtension("native_profiler");
        $__internal_11d5dfd5436cb4da68deb2e09fce3a23e943e4a31f4999554fb781cc69027b1a->enter($__internal_11d5dfd5436cb4da68deb2e09fce3a23e943e4a31f4999554fb781cc69027b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11d5dfd5436cb4da68deb2e09fce3a23e943e4a31f4999554fb781cc69027b1a->leave($__internal_11d5dfd5436cb4da68deb2e09fce3a23e943e4a31f4999554fb781cc69027b1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2fcc949ce769a60eed9e986ea2d08533b38b65f28a7cbcaaeba3060897c67fb = $this->env->getExtension("native_profiler");
        $__internal_f2fcc949ce769a60eed9e986ea2d08533b38b65f28a7cbcaaeba3060897c67fb->enter($__internal_f2fcc949ce769a60eed9e986ea2d08533b38b65f28a7cbcaaeba3060897c67fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f2fcc949ce769a60eed9e986ea2d08533b38b65f28a7cbcaaeba3060897c67fb->leave($__internal_f2fcc949ce769a60eed9e986ea2d08533b38b65f28a7cbcaaeba3060897c67fb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b718bc71383784ee82bdfed45f35ebbe2d4ba74538de9135b68797795d688e17 = $this->env->getExtension("native_profiler");
        $__internal_b718bc71383784ee82bdfed45f35ebbe2d4ba74538de9135b68797795d688e17->enter($__internal_b718bc71383784ee82bdfed45f35ebbe2d4ba74538de9135b68797795d688e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b718bc71383784ee82bdfed45f35ebbe2d4ba74538de9135b68797795d688e17->leave($__internal_b718bc71383784ee82bdfed45f35ebbe2d4ba74538de9135b68797795d688e17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
