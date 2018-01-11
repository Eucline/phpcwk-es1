<?php

/* homepageform.html.twig */
class __TwigTemplate_360db4c1e879f101b9c965c724858addc0a767b4b58e5dd6cac49ca93286c792 extends Twig_Template
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
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h2>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo ">
            <fieldset>
                <legend>Retrieve messages form</legend>
                <br>
                <label for=\"username\">Username:</label>
                <input id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"10\" maxlength=\"50\">
                <br><br>

                <label for=\"password\">Password:</label>
                <input id=\"password\" name=\"password\" type=\"password\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"10\" maxlength=\"50\">

                <label for=\"mnumber\">Number of messages to be read:</label>
                <input id=\"mnumber\" name=\"mnumber\" type=\"number\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"10\" maxlength=\"50\">


                <br><br>
                <h3>";
        // line 22
        echo twig_escape_filter($this->env, ($context["page_heading_3"] ?? null), "html", null, true);
        echo "</h3>
                <br><br>
                <input type=\"submit\" value=\"Retrieve messages >>>\">
            </fieldset>
        </form>
        <p class=\"curr_page\"><a href=\"";
        // line 27
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
        return array (  80 => 27,  72 => 22,  65 => 18,  59 => 15,  52 => 11,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "H:\\p3t\\phpappfolder\\includes\\phpcwk\\app\\templates\\homepageform.html.twig");
    }
}
