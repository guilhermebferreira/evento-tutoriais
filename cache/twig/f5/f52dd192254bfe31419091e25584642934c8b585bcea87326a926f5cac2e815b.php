<?php

/* categories.html.twig */
class __TwigTemplate_bce9fdd75e821a9cafd192908595cffb54b9f28a78b8167ade28e62ce2df273f extends Twig_Template
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
        $this->loadTemplate("categories.html.twig", "categories.html.twig", 1, "994029497")->display($context);
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
        <div>
          {% set tags = taxonomy.taxonomy['tag'] %}

            <ul class=\"tag-box inline\">
              {% for tag, items in tags %}
                <li><a href=\"#{{ tag }}\">{{ tag }} <span>{{ items|length }}</span></a></li>
              {% endfor %}
            </ul>

            {% for tag, items in tags %}
              <article>
                <h2 id=\"{{ tag }}\">{{ tag }}</h2>
                <ul class=\"post-list\">
                  {% for path, slug in items %}
                    {% set post = grav['pages'].get(path) %}
                      {% if post.title != null %}
                        <li><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}<span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></a></li>
                      {% endif %}
                    {% endfor %}
                  </ul>
                </article><!-- /.hentry -->
              {% endfor %}

            </div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "categories.html.twig", "/home/guilherme/Projetos/evento-tutoriais/user/themes/notepad/templates/categories.html.twig");
    }
}


/* categories.html.twig */
class __TwigTemplate_bce9fdd75e821a9cafd192908595cffb54b9f28a78b8167ade28e62ce2df273f_994029497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "categories.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
                    <img src=\"";
        // line 12
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute(($context["site"] ?? null), "logo", array());
        echo "\" alt=\"Blog Logo\" />
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "categories.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
        <div>
          ";
        // line 25
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "taxonomy", array()), "tag", array(), "array");
        // line 26
        echo "
            <ul class=\"tag-box inline\">
              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 29
            echo "                <li><a href=\"#";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo " <span>";
            echo twig_length_filter($this->env, $context["items"]);
            echo "</span></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 34
            echo "              <article>
                <h2 id=\"";
            // line 35
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</h2>
                <ul class=\"post-list\">
                  ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["path"] => $context["slug"]) {
                // line 38
                echo "                    ";
                $context["post"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", array(), "array"), "get", array(0 => $context["path"]), "method");
                // line 39
                echo "                      ";
                if (($this->getAttribute(($context["post"] ?? null), "title", array()) != null)) {
                    // line 40
                    echo "                        <li><a href=\"";
                    echo $this->getAttribute(($context["post"] ?? null), "url", array());
                    echo "\" title=\"";
                    echo $this->getAttribute(($context["post"] ?? null), "title", array());
                    echo "\">";
                    echo $this->getAttribute(($context["post"] ?? null), "title", array());
                    echo "<span class=\"entry-date\"><time datetime=\"";
                    echo twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), $this->getAttribute(($context["site"] ?? null), "date_long", array()));
                    echo "\">";
                    echo twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "d M Y");
                    echo "</time></a></li>
                      ";
                }
                // line 42
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['slug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                  </ul>
                </article><!-- /.hentry -->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            </div>
          </article>
          <div class=\"cf\"></div>
          ";
        // line 50
        $this->loadTemplate("partials/footer.html.twig", "categories.html.twig", 50)->display($context);
        // line 51
        echo "      </main>
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 53,  263 => 51,  261 => 50,  255 => 46,  247 => 43,  241 => 42,  227 => 40,  224 => 39,  221 => 38,  217 => 37,  210 => 35,  207 => 34,  203 => 33,  199 => 31,  186 => 29,  182 => 28,  178 => 26,  176 => 25,  167 => 19,  162 => 16,  160 => 15,  153 => 12,  149 => 11,  144 => 8,  141 => 7,  136 => 5,  131 => 3,  128 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
        <div>
          {% set tags = taxonomy.taxonomy['tag'] %}

            <ul class=\"tag-box inline\">
              {% for tag, items in tags %}
                <li><a href=\"#{{ tag }}\">{{ tag }} <span>{{ items|length }}</span></a></li>
              {% endfor %}
            </ul>

            {% for tag, items in tags %}
              <article>
                <h2 id=\"{{ tag }}\">{{ tag }}</h2>
                <ul class=\"post-list\">
                  {% for path, slug in items %}
                    {% set post = grav['pages'].get(path) %}
                      {% if post.title != null %}
                        <li><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}<span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></a></li>
                      {% endif %}
                    {% endfor %}
                  </ul>
                </article><!-- /.hentry -->
              {% endfor %}

            </div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "categories.html.twig", "/home/guilherme/Projetos/evento-tutoriais/user/themes/notepad/templates/categories.html.twig");
    }
}
