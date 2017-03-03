<?php

/* base.html.twig */
class __TwigTemplate_abbaa281a1545204d694098efaae5533b42103075ddc2d2b6a9813efb5b59206 extends Twig_Template
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
        $__internal_e0a0d930ae5af53a6ea6481d3c6f27ca75b5e356d0f54aac2e43632b5f4e1755 = $this->env->getExtension("native_profiler");
        $__internal_e0a0d930ae5af53a6ea6481d3c6f27ca75b5e356d0f54aac2e43632b5f4e1755->enter($__internal_e0a0d930ae5af53a6ea6481d3c6f27ca75b5e356d0f54aac2e43632b5f4e1755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
\t\t<h1>Gestion des séjours</h1>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_e0a0d930ae5af53a6ea6481d3c6f27ca75b5e356d0f54aac2e43632b5f4e1755->leave($__internal_e0a0d930ae5af53a6ea6481d3c6f27ca75b5e356d0f54aac2e43632b5f4e1755_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88d4bff283a104b70be53342bf329dcc086d07394f8ade822583aa169346dc6a = $this->env->getExtension("native_profiler");
        $__internal_88d4bff283a104b70be53342bf329dcc086d07394f8ade822583aa169346dc6a->enter($__internal_88d4bff283a104b70be53342bf329dcc086d07394f8ade822583aa169346dc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " PPE Hôpital";
        
        $__internal_88d4bff283a104b70be53342bf329dcc086d07394f8ade822583aa169346dc6a->leave($__internal_88d4bff283a104b70be53342bf329dcc086d07394f8ade822583aa169346dc6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1c430a7c56ca856b81dd041542c1fa03b688d9c11fc9e7d20a7bc140ddebd44 = $this->env->getExtension("native_profiler");
        $__internal_b1c430a7c56ca856b81dd041542c1fa03b688d9c11fc9e7d20a7bc140ddebd44->enter($__internal_b1c430a7c56ca856b81dd041542c1fa03b688d9c11fc9e7d20a7bc140ddebd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b1c430a7c56ca856b81dd041542c1fa03b688d9c11fc9e7d20a7bc140ddebd44->leave($__internal_b1c430a7c56ca856b81dd041542c1fa03b688d9c11fc9e7d20a7bc140ddebd44_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72e8435b739225ef1d7c1bbfb2998f0b91d750cdaa8dc96e1b7ad70762ea0f84 = $this->env->getExtension("native_profiler");
        $__internal_72e8435b739225ef1d7c1bbfb2998f0b91d750cdaa8dc96e1b7ad70762ea0f84->enter($__internal_72e8435b739225ef1d7c1bbfb2998f0b91d750cdaa8dc96e1b7ad70762ea0f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72e8435b739225ef1d7c1bbfb2998f0b91d750cdaa8dc96e1b7ad70762ea0f84->leave($__internal_72e8435b739225ef1d7c1bbfb2998f0b91d750cdaa8dc96e1b7ad70762ea0f84_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc290038914324023dadc55d92ef4018d2bbe3e70b0d1e4319dd428093c532cc = $this->env->getExtension("native_profiler");
        $__internal_fc290038914324023dadc55d92ef4018d2bbe3e70b0d1e4319dd428093c532cc->enter($__internal_fc290038914324023dadc55d92ef4018d2bbe3e70b0d1e4319dd428093c532cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc290038914324023dadc55d92ef4018d2bbe3e70b0d1e4319dd428093c532cc->leave($__internal_fc290038914324023dadc55d92ef4018d2bbe3e70b0d1e4319dd428093c532cc_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %} PPE Hôpital{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* 		<h1>Gestion des séjours</h1>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
