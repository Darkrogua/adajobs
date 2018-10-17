<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm */
class __TwigTemplate_5c899addf49b594ec88dd3a53a3a977a4ac0a48253f2fb6b8fb1926f424c48a7 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/headerTop"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "


<section class=\"red\">

    <!--Navbar-->

    <nav class=\"container navbar navbar-expand-lg navbar-dark red z-depth-0\">



        <!-- Navbar brand -->

        ";
        // line 16
        echo "


        <!-- Collapse button -->

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"

                aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>



        <!-- Collapsible content -->

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 32
            echo "
            ";
            // line 33
            $context["items"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array());
            // line 34
            echo "
            <!-- Links -->

            <ul class=\"navbar-nav mr-auto\">

                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "
                    <li class=\"nav-item ";
                // line 41
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array()))) ? ("active") : (""));
                echo "

                    ";
                // line 43
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown btn-group") : (""));
                echo "\"

                    >

                        <a class=\"nav-link ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo "'dropdown-toggle' ";
                }
                echo "\"

                                ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo " id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                // line 50
                echo "
                           href=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\"

                        >

                            ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "



                            ";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo "<span class=\"sr-only\">(current)</span>";
                }
                // line 60
                echo "
                        </a>



                        ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 66
                    echo "
                            <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu";
                    // line 67
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\">

                                ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 70
                        echo "
                                    <a class=\"dropdown-item\" href=\"";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", array()), "html", null, true);
                        echo "</a>

                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "
                            </div>

                        ";
                }
                // line 78
                echo "
                    </li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
                ";
        }
        // line 84
        echo "
            </ul>

            <!-- Links -->



            <!-- Search form -->

            <form class=\"form-inline\">

                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">

            </form>

        </div>

        <!-- Collapsible content -->



    </nav>

    <!--/.Navbar-->

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 84,  176 => 82,  167 => 78,  161 => 74,  150 => 71,  147 => 70,  143 => 69,  138 => 67,  135 => 66,  133 => 65,  126 => 60,  122 => 59,  115 => 55,  108 => 51,  105 => 50,  99 => 49,  92 => 47,  85 => 43,  80 => 41,  77 => 40,  73 => 39,  66 => 34,  64 => 33,  61 => 32,  59 => 31,  42 => 16,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/headerTop' %}



<section class=\"red\">

    <!--Navbar-->

    <nav class=\"container navbar navbar-expand-lg navbar-dark red z-depth-0\">



        <!-- Navbar brand -->

        {#<a class=\"navbar-brand\" href=\"{{ '/'|app }}\">Navbar</a>#}



        <!-- Collapse button -->

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"

                aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>



        <!-- Collapsible content -->

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            {% if staticMenu.menuItems %}

            {% set items = staticMenu.menuItems %}

            <!-- Links -->

            <ul class=\"navbar-nav mr-auto\">

                {% for item in items %}

                    <li class=\"nav-item {{ item.isActive or item.isChildActive ? 'active' : '' }}

                    {{ item.items ? 'dropdown btn-group' : '' }}\"

                    >

                        <a class=\"nav-link {% if item.items %}'dropdown-toggle' {% endif %}\"

                                {% if item.items %} id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}

                           href=\"{{ item.url }}\"

                        >

                            {{ item.title }}



                            {% if item.items %}<span class=\"sr-only\">(current)</span>{% endif %}

                        </a>



                        {% if item.items %}

                            <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">

                                {% for child in item.items %}

                                    <a class=\"dropdown-item\" href=\"{{ child.url }}\">{{ child.title }}</a>

                                {% endfor %}

                            </div>

                        {% endif %}

                    </li>

                {% endfor %}

                {% endif %}

            </ul>

            <!-- Links -->



            <!-- Search form -->

            <form class=\"form-inline\">

                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">

            </form>

        </div>

        <!-- Collapsible content -->



    </nav>

    <!--/.Navbar-->

</section>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm", "");
    }
}
