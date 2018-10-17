<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm */
class __TwigTemplate_8a0b78ac7d13e9c9382e209aea8066660d3521c314324bc4b30456c7c5753e39 extends Twig_Template
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
        echo "<!--Footer-->
<footer class=\"page-footer center-on-small-only elegant-color\">

    <!--Footer links-->
    <div class=\"container-fluid\">
        <div class=\"row mt-3\">
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">
                ";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "            </div>
            <!--/.First column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Second column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "            </div>
            <!--/.Second column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Third column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 22
        echo "            </div>
            <!--/.Third column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Fourth column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    ";
        // line 36
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/CTA.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 37
        echo "
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright: AdaJobs.com

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  84 => 37,  80 => 36,  70 => 28,  66 => 27,  59 => 22,  55 => 21,  48 => 16,  44 => 15,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Footer-->
<footer class=\"page-footer center-on-small-only elegant-color\">

    <!--Footer links-->
    <div class=\"container-fluid\">
        <div class=\"row mt-3\">
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">
                {% content 'footer/column1.htm' %}
            </div>
            <!--/.First column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Second column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column2.htm' %}
            </div>
            <!--/.Second column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Third column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column3.htm' %}
            </div>
            <!--/.Third column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Fourth column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column4.htm' %}
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    {% content 'footer/CTA.htm' %}

    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © {{ 'now'|date('Y') }} Copyright: AdaJobs.com

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm", "");
    }
}
