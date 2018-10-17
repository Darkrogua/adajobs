<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/_filter.htm */
class __TwigTemplate_dc7c854becfcd0a10ecbc6af3ef03ca73edd0c89e538011eeb38bc7eb2fbe66f extends Twig_Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", array()) == "options") || (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", array()) == "class"))) {
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                echo "        <div class=\"px-3\">            <label>                <input type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "input", array()), "html", null, true);
                echo "\"                       class=\"filter-input filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "input", array()), "html", null, true);
                echo "\"                       name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array()), "html", null, true);
                echo "\"                       value=\"";
                echo twig_escape_filter($this->env, $context["option_id"], "html", null, true);
                echo "\"                    ";
                echo ((((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["init_values"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array())] ?? null) : null) && twig_in_filter($context["option_id"], (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["init_values"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array())] ?? null) : null)))) ? ("checked") : (""));
                echo "                > ";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "            </label>        </div>    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", array()) == "range")) {
            echo "<div class=\"px-3 filter-range\">    <label style=\"width: 48%;\">        <input name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min", array()), "html", null, true);
            echo "\" data-code=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["init_values"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array())] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[0] ?? null) : null), "html", null, true);
            echo "\" class=\"form-control pl-2 white\" placeholder=\"Salary Min\">    </label>    <label style=\"width: 48%;\">        <input name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max", array()), "html", null, true);
            echo "\" data-code=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["init_values"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "code", array())] ?? null) : null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[1] ?? null) : null), "html", null, true);
            echo "\" class=\"form-control pl-2 white\" placeholder=\"Salary Max\">    </label></div>";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/_filter.htm";
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
        return new Twig_Source("{% if filter.type == 'options' or filter.type == 'class' %}    {% for option_id, option in filter.options %}        <div class=\"px-3\">            <label>                <input type=\"{{ filter.input }}\"                       class=\"filter-input filter-{{ filter.input }}\"                       name=\"{{ filter.code }}\"                       value=\"{{ option_id }}\"                    {{ init_values[filter.code] and option_id in init_values[filter.code] ? 'checked' : '' }}                > {{ option }}            </label>        </div>    {% endfor %}{% endif %}{% if filter.type == 'range' %}<div class=\"px-3 filter-range\">    <label style=\"width: 48%;\">        <input name=\"{{ filter.min }}\" data-code=\"{{ filter.code }}\" value=\"{{ init_values[filter.code][0] }}\" class=\"form-control pl-2 white\" placeholder=\"Salary Min\">    </label>    <label style=\"width: 48%;\">        <input name=\"{{ filter.max }}\" data-code=\"{{ filter.code }}\" value=\"{{ init_values[filter.code][1] }}\" class=\"form-control pl-2 white\" placeholder=\"Salary Max\">    </label></div>{% endif %}", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employfilter/_filter.htm", "");
    }
}
