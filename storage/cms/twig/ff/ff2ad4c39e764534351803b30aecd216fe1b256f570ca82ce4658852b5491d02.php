<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/_homepageIntro.htm */
class __TwigTemplate_352e756fe193412158f12132a1cc5e6e163ddd9a698875a5c2b94c103a37a3a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Card -->
<div class=\"card card-cascade wider reverse\">

    <!-- Card image -->
    <div class=\"view view-cascade overlay\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_carousel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>

    <!-- Card content -->
    <div class=\"card-body card-body-cascade text-center red\">
        ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("employSearch"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "    </div>

</div>
<!-- Card -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/_homepageIntro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  40 => 11,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Card -->
<div class=\"card card-cascade wider reverse\">

    <!-- Card image -->
    <div class=\"view view-cascade overlay\">
        {% partial '_carousel' %}
    </div>

    <!-- Card content -->
    <div class=\"card-body card-body-cascade text-center red\">
        {% component 'employSearch' %}
    </div>

</div>
<!-- Card -->", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/_homepageIntro.htm", "");
    }
}
