<?php

/* partials/pagination.html.twig */
class __TwigTemplate_c058a11dbe8f7be601599d6c46aff47291f63e126498b4371f1e545110dede45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($context["base_url"] ?? null) == "")) {
            // line 2
            echo "    ";
            $context["base_url"] = "/";
        }
        // line 4
        echo "<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 5
        if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
            // line 6
            echo "        ";
            $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
            // line 7
            echo "        <a class=\"older-posts\" href=\"";
            echo ($context["url"] ?? null);
            echo "\">&larr; Older posts</a>
    ";
        }
        // line 9
        echo "    <span class=\"page-number\">Page ";
        echo $this->getAttribute(($context["uri"] ?? null), "currentPage", array());
        echo " of ";
        echo twig_length_filter($this->env, ($context["pagination"] ?? null));
        echo "</span>
    ";
        // line 10
        if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
            // line 11
            echo "            ";
            $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
            // line 12
            echo "        <a class=\"newer-posts\" href=\"";
            echo ($context["url"] ?? null);
            echo "\">Newer posts &rarr;</a>
    ";
        }
        // line 14
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 12,  48 => 11,  46 => 10,  39 => 9,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<nav class=\"pagination\" role=\"navigation\">
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a class=\"older-posts\" href=\"{{ url }}\">&larr; Older posts</a>
    {% endif %}
    <span class=\"page-number\">Page {{ uri.currentPage }} of {{ pagination|length }}</span>
    {% if pagination.hasPrev %}
            {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a class=\"newer-posts\" href=\"{{ url }}\">Newer posts &rarr;</a>
    {% endif %}
</nav>
", "partials/pagination.html.twig", "/home/guilherme/Projetos/evento-tutoriais/user/themes/notepad/templates/partials/pagination.html.twig");
    }
}
