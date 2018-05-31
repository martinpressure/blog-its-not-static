<?php

/* item.html.twig */
class __TwigTemplate_7488f19439c08e87f94dceb4ab5003ecda13d17b864a56d9bb0144bd915c2afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"), "/blog")), "method");
        // line 3
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", array(0 => (isset($context["page"]) ? $context["page"] : null), 1 => (isset($context["blog"]) ? $context["blog"] : null)));
        // line 4
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hero_image", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_hero($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((isset($context["hero_image_name"]) ? $context["hero_image_name"] : null)) {
            // line 8
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), (isset($context["hero_image_name"]) ? $context["hero_image_name"] : null), array(), "array");
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <h1>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>
            <h2>";
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array());
            echo "</h2>
            ";
            // line 12
            $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 12)->display($context);
            // line 13
            echo "            ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 13)->display($context);
            // line 14
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 15)->display(array_merge($context, array("id" => "blog-hero")));
            // line 16
            echo "
    ";
        }
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 22
        echo (isset($context["grid_size"]) ? $context["grid_size"] : null);
        echo "\">

        ";
        // line 24
        $this->loadTemplate("item.html.twig", "item.html.twig", 24, "1256140811")->display($context);
        // line 29
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  85 => 24,  80 => 22,  77 => 21,  74 => 20,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}

", "item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_7488f19439c08e87f94dceb4ab5003ecda13d17b864a56d9bb0144bd915c2afc_1256140811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 24);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_item($context, array $blocks = array())
    {
        // line 26
        echo "                ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 26)->display($context);
        // line 27
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 27,  184 => 26,  181 => 25,  164 => 24,  87 => 29,  85 => 24,  80 => 22,  77 => 21,  74 => 20,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}

", "item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/item.html.twig");
    }
}
