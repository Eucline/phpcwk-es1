<?php

/* select_company_form.html.twig */
class __TwigTemplate_42995124fc6861d26f37f63f55a82a6a7cc3e1a8a1525b92f25ba7c0bedfd5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "select_company_form.html.twig", 1);
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
        echo "  <div id=\"lg-form-container\">
  <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h2>
  <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
  <form method=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\">
    <p><label for=\"company-symbol\">Company symbol:&nbsp;</label>
      <input name=\"company-symbol\" type=\"text\" id=\"company-symbol\" size=\"5\" value=\"\" maxsize=\"3\"/></td>
    </p>
    <p><input type=\"submit\" /></p>
  </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "select_company_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "select_company_form.html.twig", "/p3t/phpappfolder/includes/stockquotes/app/templates/select_company_form.html.twig");
    }
}
