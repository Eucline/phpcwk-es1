<?php

/* display_result.html.twig */
class __TwigTemplate_2d603d1d79a7d8a74f9043b0e5d3a5acd4e43c95aef83e0fb93c17e5acea2403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "display_result.html.twig", 1);
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
  <h1>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h1>
    <h2>System messages</h2>
    <p>Retrieval of messages from M2M service: <b>";
        // line 6
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</b></p>
    <p>Storage of messages to Database: <b>";
        // line 7
        echo twig_escape_filter($this->env, ($context["result2"] ?? null), "html", null, true);
        echo "</b></p>
    <table>
      <tr>
        <th>Source</th>
        <th>Time</th>
        <th>Message content</th>
      </tr>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_arr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "      <tr>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_source", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_time", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_message", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>
    <p class=\"curr_page\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Another go</a></p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "display_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  78 => 21,  69 => 18,  65 => 17,  61 => 16,  58 => 15,  54 => 14,  44 => 7,  40 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_result.html.twig", "/home/p15241925/phpappfolder/includes/phpcwk/app/templates/display_result.html.twig");
    }
}
