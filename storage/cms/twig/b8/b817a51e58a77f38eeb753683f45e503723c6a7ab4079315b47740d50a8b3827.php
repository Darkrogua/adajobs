<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/pages/jobs.htm */
class __TwigTemplate_fb203f65195a3700379c77cac981752031d99ac7b1ee06d4aa8249dc9f29bb4a extends Twig_Template
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
        echo "<div>
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("employSearch"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>

<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"job-list\">
            ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("employJobs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "        </div>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("employFilter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/pages/jobs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  41 => 9,  37 => 8,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% component 'employSearch' %}
</div>

<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"job-list\">
            {% component 'employJobs' %}
        </div>
    </div>
    <div class=\"col-md-4\">
        {% component 'employFilter' %}
    </div>
</div>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/pages/jobs.htm", "");
    }
}
