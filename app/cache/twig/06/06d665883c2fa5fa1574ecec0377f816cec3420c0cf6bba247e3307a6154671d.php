<?php

/* homepageform.html.twig */
class __TwigTemplate_009a3b79c14373be7cd697a52f404eccaa2583f154329dd71d2a94d5fc6a3f3f extends Twig_Template
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
                <legend>Temperature Conversion</legend>
                <br>
                <label for=\"username\">Enter a temperature:</label>
                <input id=\"username\" name=\"temperature\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"10\" maxlength=\"50\">
                <br><br>
                <label for=\"fromunit\">Select the unit to convert FROM:</label>

                <select id=\"fromunit\" name=\"fromunit\" required>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["temp_units"] ?? null));
        foreach ($context['_seq'] as $context["unit"] => $context["name"]) {
            // line 17
            echo "                        <option value = \"";
            echo twig_escape_filter($this->env, $context["unit"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['unit'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </select>
                <label for=\"tounit\">Select the unit to convert TO:</label>
                <select id=\"tounit\" name=\"tounit\" required>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["temp_units"] ?? null));
        foreach ($context['_seq'] as $context["unit"] => $context["name"]) {
            // line 23
            echo "                        <option value = \"";
            echo twig_escape_filter($this->env, $context["unit"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['unit'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </select>
                <br><br>
                <h3>";
        // line 27
        echo twig_escape_filter($this->env, ($context["page_heading_3"] ?? null), "html", null, true);
        echo "</h3>
                <br><br>
                <input type=\"submit\" value=\"Convert the temperature >>>\">
            </fieldset>
        </form>
        <p class=\"curr_page\"><a href=\"";
        // line 32
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
        return array (  107 => 32,  99 => 27,  95 => 25,  84 => 23,  80 => 22,  75 => 19,  64 => 17,  60 => 16,  52 => 11,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/p3t/phpappfolder/includes/temperature_conversion/app/templates/homepageform.html.twig");
    }
}
