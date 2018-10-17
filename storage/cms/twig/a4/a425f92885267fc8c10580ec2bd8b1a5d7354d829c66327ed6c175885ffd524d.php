<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/_item.htm */
class __TwigTemplate_91bf8478214f67f9a41b2776a3f8a0a03c241ce82fe7049573dd9874cd9ae406 extends Twig_Template
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
        echo "<div class=\"card\">    <div class=\"card-body pb-0\">        <h4 class=\"card-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()), "html", null, true);
        echo "</h4>        <p class=\"card-text\">Salary: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "salary_min", array()), "html", null, true);
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "salary_max", array())) ? ((" - " . twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "salary_max", array()))) : ("")), "html", null, true);
        echo "</p>        <p class=\"card-text\">Type: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "type", array()), "name", array()), "html", null, true);
        echo "</p>        <p class=\"card-text\">Categories: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "categories", array()), "pluck", array(0 => "name"), "method"), "implode", array(0 => ", "), "method"), "html", null, true);
        echo "</p>        <p class=\"card-text\">";
        if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "location", array())) {
            echo "Location: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "location", array()), "html", null, true);
        }
        echo "</p>        <p class=\"card-text\">Posted: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "created_at", array()), "j M Y"), "html", null, true);
        echo "</p>    </div>    <div class=\"card-footer\">        <a href=\"#!\">            <i class=\"fa fa-info-circle\" aria-hidden=\"true\" title=\"View Details\"></i>        </a>        &nbsp;        <a href=\"javascript:void(0);\" data-request=\"onFav\" data-request-data=\"job_id: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "id", array()), "html", null, true);
        echo "\">            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "favers", array()), "contains", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["UserData"] ?? null), "get", array()), "id", array())), "method")) {
            echo "                <i class=\"fa fa-heart red-text\" aria-hidden=\"true\" title=\"Remove Favourite\"></i>            ";
        } else {
            echo "                <i class=\"fa fa-heart-o red-text\" aria-hidden=\"true\" title=\"Add Favourite\"></i>            ";
        }
        echo "        </a>        &nbsp;        <a href=\"javascript:void(0);\" data-request=\"onApply\" data-request-data=\"job_id: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "id", array()), "html", null, true);
        echo "\">            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "applications", array()), "contains", array(0 => "user_id", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["UserData"] ?? null), "get", array()), "id", array())), "method")) {
            echo "                <i class=\"fa fa-minus-square-o red-text\" aria-hidden=\"true\" title=\"Cancel Application\"></i> <small>Cancel application</small>            ";
        } else {
            echo "                <i class=\"fa fa-check-square-o green-text\" aria-hidden=\"true\" title=\"Apply for this job\"></i> <small>Apply</small>            ";
        }
        echo "        </a>    </div></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/_item.htm";
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
        return new Twig_Source("<div class=\"card\">    <div class=\"card-body pb-0\">        <h4 class=\"card-title\">{{ model.name }}</h4>        <p class=\"card-text\">Salary: {{ model.salary_min }}{{ model.salary_max ? ' - '~model.salary_max : '' }}</p>        <p class=\"card-text\">Type: {{ model.type.name }}</p>        <p class=\"card-text\">Categories: {{ model.categories.pluck('name').implode(', ') }}</p>        <p class=\"card-text\">{% if model.location %}Location: {{ model.location }}{% endif %}</p>        <p class=\"card-text\">Posted: {{ model.created_at|date('j M Y') }}</p>    </div>    <div class=\"card-footer\">        <a href=\"#!\">            <i class=\"fa fa-info-circle\" aria-hidden=\"true\" title=\"View Details\"></i>        </a>        &nbsp;        <a href=\"javascript:void(0);\" data-request=\"onFav\" data-request-data=\"job_id: {{ model.id }}\">            {% if model.favers.contains(UserData.get.id) %}                <i class=\"fa fa-heart red-text\" aria-hidden=\"true\" title=\"Remove Favourite\"></i>            {% else %}                <i class=\"fa fa-heart-o red-text\" aria-hidden=\"true\" title=\"Add Favourite\"></i>            {% endif %}        </a>        &nbsp;        <a href=\"javascript:void(0);\" data-request=\"onApply\" data-request-data=\"job_id: {{ model.id }}\">            {% if model.applications.contains('user_id', UserData.get.id) %}                <i class=\"fa fa-minus-square-o red-text\" aria-hidden=\"true\" title=\"Cancel Application\"></i> <small>Cancel application</small>            {% else %}                <i class=\"fa fa-check-square-o green-text\" aria-hidden=\"true\" title=\"Apply for this job\"></i> <small>Apply</small>            {% endif %}        </a>    </div></div>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employjobs/_item.htm", "");
    }
}
