<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/default.htm */
class __TwigTemplate_64add2389c26bbddce4c6c06bbcc53e83fbc7ca6b8ef9b2373c4651eb3059b37 extends Twig_Template
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
        if ((($context["models"] ?? null) == null)) {
            echo "    ";
            $context["models"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "models", array());
        }
        echo "<div class=\"row\">    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["models"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            echo "        <div id=\"job-block-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "id", array()), "html", null, true);
            echo "\" class=\"col-12 mb-2\">            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['model'] = $context["model"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::_item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "        </div>    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "        <div>            No results found        </div>    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/default.htm";
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
        return new Twig_Source("{% if models == null %}    {% set models = __SELF__.models %}{% endif %}<div class=\"row\">    {% for model in models %}        <div id=\"job-block-{{ model.id }}\" class=\"col-12 mb-2\">            {% partial __SELF__~'::_item' model=model %}        </div>    {% else %}        <div>            No results found        </div>    {% endfor %}</div>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/default.htm", "");
    }
}
