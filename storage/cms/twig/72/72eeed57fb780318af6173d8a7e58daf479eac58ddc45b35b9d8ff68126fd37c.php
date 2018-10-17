<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/headerTop.htm */
class __TwigTemplate_625673c08dd77cc9541e1f76f8848b399dc937626ed68c0dbb601794773edd8a extends Twig_Template
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
        echo "<div class=\"container py-3\">

    <div class=\"row\">

        <div class=\"col-md-6 justify-content-sm-center justify-content-md-start\">

            <a href=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("site/logo.jpg");
        echo "\" alt=\"\"></a>

        </div>

        <div class=\"col-md-6 d-flex justify-content-sm-center justify-content-md-end\">

            ";
        // line 13
        $context["obUser"] = twig_get_attribute($this->env, $this->source, ($context["UserData"] ?? null), "get", array());
        // line 14
        echo "
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["obUser"] ?? null), "isNotEmpty", array())) {
            // line 16
            echo "
                <a href=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("profile");
            echo "\" class=\"btn btn-sm red z-depth-0\">My Profile</a>
                <a href=\"";
            // line 18
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("logout");
            echo "\" class=\"btn btn-sm red z-depth-0\">Logout</a>

            ";
        } else {
            // line 21
            echo "
                <a href=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\" class=\"btn btn-sm red z-depth-0\">Login</a>
                <a href=\"";
            // line 23
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\" class=\"btn btn-sm red z-depth-0\">Register</a>

            ";
        }
        // line 26
        echo "
        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/headerTop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 23,  65 => 22,  62 => 21,  56 => 18,  52 => 17,  49 => 16,  47 => 15,  44 => 14,  42 => 13,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container py-3\">

    <div class=\"row\">

        <div class=\"col-md-6 justify-content-sm-center justify-content-md-start\">

            <a href=\"{{ '/'|app }}\"><img src=\"{{ 'site/logo.jpg'|media }}\" alt=\"\"></a>

        </div>

        <div class=\"col-md-6 d-flex justify-content-sm-center justify-content-md-end\">

            {% set obUser = UserData.get %}

            {% if obUser.isNotEmpty %}

                <a href=\"{{ 'profile'|page }}\" class=\"btn btn-sm red z-depth-0\">My Profile</a>
                <a href=\"{{ 'logout'|page }}\" class=\"btn btn-sm red z-depth-0\">Logout</a>

            {% else %}

                <a href=\"{{ 'login'|page }}\" class=\"btn btn-sm red z-depth-0\">Login</a>
                <a href=\"{{ 'register'|page }}\" class=\"btn btn-sm red z-depth-0\">Register</a>

            {% endif %}

        </div>

    </div>

</div>", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/site/headerTop.htm", "");
    }
}
