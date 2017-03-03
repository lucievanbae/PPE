<?php

/* SejoursPatientsBundle:default:base.html.twig */
class __TwigTemplate_53736d4335a87e3bc437abcaaeb0ba5b4e4c470f34a37b9cc8ec3109c1bae86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SejoursPatientsBundle:default:base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_818b6a2afd71a4124c116cefd6f29714dec864212ca4e8eb5ea9103d2eb60e04 = $this->env->getExtension("native_profiler");
        $__internal_818b6a2afd71a4124c116cefd6f29714dec864212ca4e8eb5ea9103d2eb60e04->enter($__internal_818b6a2afd71a4124c116cefd6f29714dec864212ca4e8eb5ea9103d2eb60e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SejoursPatientsBundle:default:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818b6a2afd71a4124c116cefd6f29714dec864212ca4e8eb5ea9103d2eb60e04->leave($__internal_818b6a2afd71a4124c116cefd6f29714dec864212ca4e8eb5ea9103d2eb60e04_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d28626536fc14f08b78c58d99e76e6a8b998eda37b388966460d835480fda87e = $this->env->getExtension("native_profiler");
        $__internal_d28626536fc14f08b78c58d99e76e6a8b998eda37b388966460d835480fda87e->enter($__internal_d28626536fc14f08b78c58d99e76e6a8b998eda37b388966460d835480fda87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2>Les séjours</h2>
<div id=\"menu\">
\t<ul>
\t\t<li>Accueil</li>
\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("sejours_patients_ajout_Patient", array());
        echo "\">Ajout d'un patient</a></li>
\t\t<li>Modifier patient</li>
\t\t<li>Arrivée d'un patient</li>
\t\t<li>Sortie d'un patient</li>
\t\t<li>Données du patient</li>
\t</ul>
</div>
<div id=\"corps\">
";
        // line 15
        $this->displayBlock('corps', $context, $blocks);
        // line 18
        echo "</div>
";
        
        $__internal_d28626536fc14f08b78c58d99e76e6a8b998eda37b388966460d835480fda87e->leave($__internal_d28626536fc14f08b78c58d99e76e6a8b998eda37b388966460d835480fda87e_prof);

    }

    // line 15
    public function block_corps($context, array $blocks = array())
    {
        $__internal_63e42539f9d5ad2400dd6f894b63ad93afd1c9e9fb988700eb1cd7a2599aa4fb = $this->env->getExtension("native_profiler");
        $__internal_63e42539f9d5ad2400dd6f894b63ad93afd1c9e9fb988700eb1cd7a2599aa4fb->enter($__internal_63e42539f9d5ad2400dd6f894b63ad93afd1c9e9fb988700eb1cd7a2599aa4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 16
        echo "<p>Page d'accueil</p>
";
        
        $__internal_63e42539f9d5ad2400dd6f894b63ad93afd1c9e9fb988700eb1cd7a2599aa4fb->leave($__internal_63e42539f9d5ad2400dd6f894b63ad93afd1c9e9fb988700eb1cd7a2599aa4fb_prof);

    }

    public function getTemplateName()
    {
        return "SejoursPatientsBundle:default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 15,  60 => 18,  58 => 15,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends'::base.html.twig' %}*/
/* {% block body %}*/
/* <h2>Les séjours</h2>*/
/* <div id="menu">*/
/* 	<ul>*/
/* 		<li>Accueil</li>*/
/* 		<li><a href="{{path('sejours_patients_ajout_Patient',{})}}">Ajout d'un patient</a></li>*/
/* 		<li>Modifier patient</li>*/
/* 		<li>Arrivée d'un patient</li>*/
/* 		<li>Sortie d'un patient</li>*/
/* 		<li>Données du patient</li>*/
/* 	</ul>*/
/* </div>*/
/* <div id="corps">*/
/* {% block corps %}*/
/* <p>Page d'accueil</p>*/
/* {%endblock %}*/
/* </div>*/
/* {% endblock %}*/
