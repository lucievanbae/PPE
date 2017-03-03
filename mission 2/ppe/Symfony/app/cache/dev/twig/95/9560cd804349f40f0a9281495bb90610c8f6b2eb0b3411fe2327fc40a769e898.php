<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9b209473067983c33ba08a92d8bb4892a9816354170410880bcc32be59e6a289 extends Twig_Template
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
        $__internal_10e6378bb67643ab9e3e8a3935190fa6c5d2bbeef1acd3c65c62552ada64043b = $this->env->getExtension("native_profiler");
        $__internal_10e6378bb67643ab9e3e8a3935190fa6c5d2bbeef1acd3c65c62552ada64043b->enter($__internal_10e6378bb67643ab9e3e8a3935190fa6c5d2bbeef1acd3c65c62552ada64043b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e6378bb67643ab9e3e8a3935190fa6c5d2bbeef1acd3c65c62552ada64043b->leave($__internal_10e6378bb67643ab9e3e8a3935190fa6c5d2bbeef1acd3c65c62552ada64043b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a641e8a19de2e11cfe846fcd1f169b6eccf78acfc0ac7534c34787dea64ba33 = $this->env->getExtension("native_profiler");
        $__internal_6a641e8a19de2e11cfe846fcd1f169b6eccf78acfc0ac7534c34787dea64ba33->enter($__internal_6a641e8a19de2e11cfe846fcd1f169b6eccf78acfc0ac7534c34787dea64ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a641e8a19de2e11cfe846fcd1f169b6eccf78acfc0ac7534c34787dea64ba33->leave($__internal_6a641e8a19de2e11cfe846fcd1f169b6eccf78acfc0ac7534c34787dea64ba33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8863cd74b140ab0b299720e8b5529d543db3635fdb23219a438bc4a9e280f76 = $this->env->getExtension("native_profiler");
        $__internal_a8863cd74b140ab0b299720e8b5529d543db3635fdb23219a438bc4a9e280f76->enter($__internal_a8863cd74b140ab0b299720e8b5529d543db3635fdb23219a438bc4a9e280f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8863cd74b140ab0b299720e8b5529d543db3635fdb23219a438bc4a9e280f76->leave($__internal_a8863cd74b140ab0b299720e8b5529d543db3635fdb23219a438bc4a9e280f76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff1c43e69abb806382f36d77c037cc4bdaf0a24f59844bc0484375e48edd5571 = $this->env->getExtension("native_profiler");
        $__internal_ff1c43e69abb806382f36d77c037cc4bdaf0a24f59844bc0484375e48edd5571->enter($__internal_ff1c43e69abb806382f36d77c037cc4bdaf0a24f59844bc0484375e48edd5571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff1c43e69abb806382f36d77c037cc4bdaf0a24f59844bc0484375e48edd5571->leave($__internal_ff1c43e69abb806382f36d77c037cc4bdaf0a24f59844bc0484375e48edd5571_prof);

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
