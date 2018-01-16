<?php

/* layout.html.twig */
class __TwigTemplate_009f83f5268b44c5ac0bc5aa57fe0ba6fea47c56d9c9f52eac63ec8bf03f040d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"author\" content=\"p15241925\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\" type=\"text/css\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 10
        $this->displayBlock('banner', $context, $blocks);
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "<footer>
  <p><a href=\"https://validator.w3.org/nu/#textarea\">W3 Validated with 0 errors</a></p>
</footer>
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  57 => 10,  52 => 7,  43 => 12,  41 => 11,  39 => 10,  33 => 7,  29 => 6,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/home/p15241925/phpappfolder/includes/phpcwk/app/templates/layout.html.twig");
    }
}
