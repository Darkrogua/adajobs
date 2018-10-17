<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/employsearch/default.htm */
class __TwigTemplate_34ea5dbc6fd91027215914ff4953281bc0bc50257c4027ed38e01bd9d40f0c68 extends Twig_Template
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
        echo "<form data-request=\"employSearch::onFilter\" data-request-success=\"updateHistory(data)\">    <div class=\"row\">        <div class=\"col-sm-3\">            <input name=\"title\" placeholder=\"Enter job title or employer name\" class=\"form-control pl-2 white\">        </div>        <div class=\"col-sm-3 white-text\">            <input name=\"location\" placeholder=\"All locations\" class=\"form-control pl-2 white\">        </div>        <div class=\"col-sm-3\">            <select name=\"category_id\" style=\"width: 100%;  padding: 11px; margin-top: 2px;\">                <option value=\"\">- Not chosen -</option>                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</option>                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "            </select>        </div>        <div class=\"col-sm-3\">            <button class=\"btn btn-amber btn-block z-depth-0\">Search</button>        </div>    </div></form><script>    function updateHistory(data) {        console.log('data', data)    }</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employsearch/default.htm";
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
        return new Twig_Source("<form data-request=\"employSearch::onFilter\" data-request-success=\"updateHistory(data)\">    <div class=\"row\">        <div class=\"col-sm-3\">            <input name=\"title\" placeholder=\"Enter job title or employer name\" class=\"form-control pl-2 white\">        </div>        <div class=\"col-sm-3 white-text\">            <input name=\"location\" placeholder=\"All locations\" class=\"form-control pl-2 white\">        </div>        <div class=\"col-sm-3\">            <select name=\"category_id\" style=\"width: 100%;  padding: 11px; margin-top: 2px;\">                <option value=\"\">- Not chosen -</option>                {% for category in __SELF__.categories %}                <option value=\"{{ category.id }}\">{{ category.name }}</option>                {% endfor %}            </select>        </div>        <div class=\"col-sm-3\">            <button class=\"btn btn-amber btn-block z-depth-0\">Search</button>        </div>    </div></form><script>    function updateHistory(data) {        console.log('data', data)    }</script>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/employsearch/default.htm", "");
    }
}
