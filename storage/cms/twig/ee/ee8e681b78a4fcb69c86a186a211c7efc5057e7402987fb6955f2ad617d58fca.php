<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/default.htm */
class __TwigTemplate_fa1f1cd71195de77dcc55560ff94f8f3c32a5ff3aa4aa31d22fc0f28063dec96 extends Twig_Template
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
        $context["filters"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "filters", array());
        $context["init_values"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "init_values", array());
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            echo "<div class=\"card grey lighten-4 mb-3 z-depth-0 filter-block\">    <h5 class=\"card-header mb-2 filter-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
            echo "</h5>    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['filter'] = $context["filter"]            ;
            $context['__cms_partial_params']['init_values'] = ($context["init_values"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::_filter")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<div data-filter-handler=\"employFilter::onFilter\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set filters = __SELF__.filters %}{% set init_values = __SELF__.init_values %}{% for filter in filters %}<div class=\"card grey lighten-4 mb-3 z-depth-0 filter-block\">    <h5 class=\"card-header mb-2 filter-title\">{{ filter.name }}</h5>    {% partial __SELF__~'::_filter' filter=filter init_values=init_values %}</div>{% endfor %}<div data-filter-handler=\"employFilter::onFilter\"></div>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/default.htm", "");
    }
}
