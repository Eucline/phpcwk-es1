<?php

/* display_result.html.twig */
class __TwigTemplate_7caf91fd53ff3b436ece38c4bed1589bb1484be4226e170c0c5460f44f730575 extends Twig_Template
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
  <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h2>


    <p>Messages: <b>";
        // line 7
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</b></p>
    <table>
      <tr>
        <th>Source</th>
        <th>Time</th>
        <th>Message content</th>
      </tr>
      <tr>
        <td>sourcetest</td>
        <td>timetest</td>
        <td>msgtest</td>
      </tr>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_arr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "      <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_source", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_time", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "msg_message", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </table>
    <p class=\"curr_page\"><a href=\"";
        // line 27
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
        return array (  83 => 27,  80 => 26,  71 => 23,  67 => 22,  63 => 21,  60 => 20,  56 => 19,  41 => 7,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_result.html.twig", "H:\\p3t\\phpappfolder\\includes\\phpcwk\\app\\templates\\display_result.html.twig");
    }
}
