<?php

/* C:\xampp\htdocs\adajobs/themes/zanor-zanor-mdb-loaded/layouts/homepage.htm */
class __TwigTemplate_4ae4e046c36e3ae26893faf37b9668e0f0a5a1afa0227f4cb49407356d4367b5 extends Twig_Template
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
<section>
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_homepageIntro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</section>

<div class=\"container py-5\">

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Featured Jobs</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Job Title</h4>
                    <p class=\"card-text\">Salary: 100 - 500</p>
                    <p class=\"card-text\">Location: Johor</p>
                    <a href=\"#!\" class=\"btn red z-depth-0 py-2\">View Job</a>
                </div>
                <div class=\"card-footer d-flex justify-content-center\">
                    <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jobs");
        echo "\" class=\"red-text\">View All Jobs</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Featured Company</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Company Name</h4>
                    <p class=\"card-text\">Location: Johor</p>
                    <a href=\"#!\" class=\"btn red z-depth-0 py-2\">View Jobs</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Browse by Category</div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Choose City or Region</div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 118
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 119
        echo "
</div>

";
        // line 122
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/layouts/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 122,  158 => 119,  156 => 118,  56 => 21,  39 => 6,  35 => 5,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<section>
    {% partial '_homepageIntro' %}
</section>

<div class=\"container py-5\">

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Featured Jobs</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Job Title</h4>
                    <p class=\"card-text\">Salary: 100 - 500</p>
                    <p class=\"card-text\">Location: Johor</p>
                    <a href=\"#!\" class=\"btn red z-depth-0 py-2\">View Job</a>
                </div>
                <div class=\"card-footer d-flex justify-content-center\">
                    <a href=\"{{ 'jobs'|page }}\" class=\"red-text\">View All Jobs</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Featured Company</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Company Name</h4>
                    <p class=\"card-text\">Location: Johor</p>
                    <a href=\"#!\" class=\"btn red z-depth-0 py-2\">View Jobs</a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Browse by Category</div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Public Service</li>
                                <li>Training</li>
                                <li>Security & Safety</li>
                                <li>Banking</li>
                                <li>Financial Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header red white-text\">Choose City or Region</div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul>
                                <li>Kota Bharu</li>
                                <li>Kuala Lumpur</li>
                                <li>Klang</li>
                                <li>Kampung Baru Subang</li>
                                <li>Johor Bahru</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% page %}

</div>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\adajobs/themes/zanor-zanor-mdb-loaded/layouts/homepage.htm", "");
    }
}
