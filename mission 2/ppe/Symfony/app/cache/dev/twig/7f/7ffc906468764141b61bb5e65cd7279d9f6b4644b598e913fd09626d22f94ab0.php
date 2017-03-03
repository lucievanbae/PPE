<?php

/* ::base.html.twig */
class __TwigTemplate_6bb1c104ff513dd6b26634d0fd34966ac63a687cfd26be8f153f308aad94ff43 extends Twig_Template
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
        $__internal_4e59a4e60b10bd21e8012971323ad353adaa45bbc3d14974c63771f3a3903205 = $this->env->getExtension("native_profiler");
        $__internal_4e59a4e60b10bd21e8012971323ad353adaa45bbc3d14974c63771f3a3903205->enter($__internal_4e59a4e60b10bd21e8012971323ad353adaa45bbc3d14974c63771f3a3903205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "    </head>
    <body>
\t\t<h1>Gestion des séjours</h1>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4e59a4e60b10bd21e8012971323ad353adaa45bbc3d14974c63771f3a3903205->leave($__internal_4e59a4e60b10bd21e8012971323ad353adaa45bbc3d14974c63771f3a3903205_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a829737e943fdce152bab82787b4846e2a408a007f6e44cd9511d5db6a0ea33 = $this->env->getExtension("native_profiler");
        $__internal_3a829737e943fdce152bab82787b4846e2a408a007f6e44cd9511d5db6a0ea33->enter($__internal_3a829737e943fdce152bab82787b4846e2a408a007f6e44cd9511d5db6a0ea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " PPE Hôpital";
        
        $__internal_3a829737e943fdce152bab82787b4846e2a408a007f6e44cd9511d5db6a0ea33->leave($__internal_3a829737e943fdce152bab82787b4846e2a408a007f6e44cd9511d5db6a0ea33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1657ec93158a17b845f4150d1f0f26406a2bb4310c81c0f90db1c0654301b4a0 = $this->env->getExtension("native_profiler");
        $__internal_1657ec93158a17b845f4150d1f0f26406a2bb4310c81c0f90db1c0654301b4a0->enter($__internal_1657ec93158a17b845f4150d1f0f26406a2bb4310c81c0f90db1c0654301b4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1657ec93158a17b845f4150d1f0f26406a2bb4310c81c0f90db1c0654301b4a0->leave($__internal_1657ec93158a17b845f4150d1f0f26406a2bb4310c81c0f90db1c0654301b4a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_43f05d55e3491bf5dc8319603297e0550c2ebbc338af8bc2a6b6f35db0ee6a42 = $this->env->getExtension("native_profiler");
        $__internal_43f05d55e3491bf5dc8319603297e0550c2ebbc338af8bc2a6b6f35db0ee6a42->enter($__internal_43f05d55e3491bf5dc8319603297e0550c2ebbc338af8bc2a6b6f35db0ee6a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43f05d55e3491bf5dc8319603297e0550c2ebbc338af8bc2a6b6f35db0ee6a42->leave($__internal_43f05d55e3491bf5dc8319603297e0550c2ebbc338af8bc2a6b6f35db0ee6a42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_985c2bfc80f0b7fa3273b5251237c8a59c6b419faf2849b003f85ee61bfa39cc = $this->env->getExtension("native_profiler");
        $__internal_985c2bfc80f0b7fa3273b5251237c8a59c6b419faf2849b003f85ee61bfa39cc->enter($__internal_985c2bfc80f0b7fa3273b5251237c8a59c6b419faf2849b003f85ee61bfa39cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_985c2bfc80f0b7fa3273b5251237c8a59c6b419faf2849b003f85ee61bfa39cc->leave($__internal_985c2bfc80f0b7fa3273b5251237c8a59c6b419faf2849b003f85ee61bfa39cc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 11,  80 => 10,  69 => 6,  57 => 5,  48 => 12,  45 => 11,  43 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %} PPE Hôpital{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* 		<h1>Gestion des séjours</h1>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
