<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm */
class __TwigTemplate_cd0c2e7eb4adadd8a47da79b0f87943e427794b8a2622d9b4306aa2c8359178f extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"container py-5\">
    
    ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 7
        echo "    
</div>

";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  38 => 7,  36 => 6,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container py-5\">
    
    {% page %}
    
</div>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm", "");
    }
}
