<?php

/* SejoursPatientsBundle:Default:index.html.twig */
class __TwigTemplate_6b44c1d0cb83e334f34f544bf3d5b09cc5ad36ba151ea874d409182d30de273a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SejoursPatientsBundle:default:base.html.twig", "SejoursPatientsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SejoursPatientsBundle:default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e592eed3b473518998cf8ef2b855271b6ade30cfe36f056507a966290e7ee8b = $this->env->getExtension("native_profiler");
        $__internal_3e592eed3b473518998cf8ef2b855271b6ade30cfe36f056507a966290e7ee8b->enter($__internal_3e592eed3b473518998cf8ef2b855271b6ade30cfe36f056507a966290e7ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SejoursPatientsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e592eed3b473518998cf8ef2b855271b6ade30cfe36f056507a966290e7ee8b->leave($__internal_3e592eed3b473518998cf8ef2b855271b6ade30cfe36f056507a966290e7ee8b_prof);

    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        $__internal_07ac92d9318c041cb64b3cfbb1295786dfd983e845b4735c8d5cbc67c51e3adf = $this->env->getExtension("native_profiler");
        $__internal_07ac92d9318c041cb64b3cfbb1295786dfd983e845b4735c8d5cbc67c51e3adf->enter($__internal_07ac92d9318c041cb64b3cfbb1295786dfd983e845b4735c8d5cbc67c51e3adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 3
        echo "<p>Page d'accueil</p>
";
        
        $__internal_07ac92d9318c041cb64b3cfbb1295786dfd983e845b4735c8d5cbc67c51e3adf->leave($__internal_07ac92d9318c041cb64b3cfbb1295786dfd983e845b4735c8d5cbc67c51e3adf_prof);

    }

    public function getTemplateName()
    {
        return "SejoursPatientsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends'SejoursPatientsBundle:default:base.html.twig' %}*/
/* {% block corps %}*/
/* <p>Page d'accueil</p>*/
/* {%endblock %}*/
/* */
/* */
/* */
