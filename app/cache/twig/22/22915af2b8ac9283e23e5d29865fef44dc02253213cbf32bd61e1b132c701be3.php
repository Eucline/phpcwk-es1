<?php

/* homepageform.html.twig */
class __TwigTemplate_5b75bfc747f0985485f8fa693e1f113d7e7fa5628e4762e48df704b4004802da extends Twig_Template
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
                <br>
                <table>
                  <tr>
                    <td><label for=\"username\">Username:</label></td>
                    <td><input id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"50\"></td>
                  </tr>
                  <tr>
                    <td><label for=\"password\">Password:</label></td>
                    <td><input id=\"password\" name=\"password\" type=\"password\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"50\"></td>
                  </tr>
                  <tr>
                    <td><label for=\"mnumber\">Messages count:</label></td>
                    <td><input id=\"mnumber\" name=\"mnumber\" type=\"number\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"5\" maxlength=\"5\"></td>
                  </tr>
                </table>
                <input type=\"submit\" value=\"Retrieve messages >>>\">
                <br><br>
                <p>";
        // line 25
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</p>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, ($context["result2"] ?? null), "html", null, true);
        echo "</p>
            </fieldset>
        </form>
        <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["action2"] ?? null), "html", null, true);
        echo "\" method=";
        echo twig_escape_filter($this->env, ($context["method2"] ?? null), "html", null, true);
        echo ">
            <fieldset>
            <input type=\"submit\" value=\"Display messages >>>\">
            </fieldset>
        </form>
        <p class=\"curr_page\"><a href=\"";
        // line 34
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
        return array (  95 => 34,  85 => 29,  79 => 26,  75 => 25,  67 => 20,  60 => 16,  53 => 12,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/home/p15241925/phpappfolder/includes/phpcwk/app/templates/homepageform.html.twig");
    }
}
