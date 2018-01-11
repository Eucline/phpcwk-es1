<?php

/* homepageform.html.twig */
class __TwigTemplate_5bbc3176b76af229a6749531aea394ded9a356da3583d1859ced289195feef5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "homepageform.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "banner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"page-content-div\">
        <h2>Select an option from the menu above</h2>
        <ul>
            <li>Download Stock Data: allows you to enter a stock company identifier</li>
            <li>Review Stored Stock Data: allows you to select a stock company identifier and display all currently-stored data for that company</li>
        </ul>
        <p class=\"curr_page\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Home</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "homepageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/p3t/phpappfolder/includes/stockquotes/app/templates/homepageform.html.twig");
    }
}
