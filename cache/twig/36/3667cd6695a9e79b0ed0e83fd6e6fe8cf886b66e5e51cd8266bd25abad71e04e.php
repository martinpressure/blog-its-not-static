<?php

/* blog.html.twig */
class __TwigTemplate_972b6f65e273359055481ed60726a3f467aa043ac9f4cdb7fe69f088e64494b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))));
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["show_breadcrumbs"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", "/blog"), true);
        // line 5
        $context["show_sidebar"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 6
        $context["show_pagination"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bricklayer.css"), "method");
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 15
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bricklayer.min.js"), "method");
    }

    // line 19
    public function block_hero($context, array $blocks = array())
    {
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 21)->display(array_merge($context, array("id" => "blog-hero", "content" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "hero_image" => (isset($context["blog_image"]) ? $context["blog_image"] : null))));
        // line 22
        echo "
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container grid-sm\">
        <div class=\"tagcloud\">
            ";
        // line 30
        $this->loadTemplate("partials/taxonomylist.html.twig", "blog.html.twig", 30)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null), "taxonomy" => "tag")));
        // line 31
        echo "        </div>

        ";
        // line 33
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 33, "96359628")->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 51
        echo "            

        </section>
    </section>    
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  94 => 33,  90 => 31,  88 => 30,  83 => 27,  80 => 26,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  63 => 15,  58 => 14,  55 => 13,  48 => 10,  45 => 9,  42 => 8,  38 => 1,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set show_breadcrumbs = header_var('show_sidebar', '/blog')|default(true) %}
{% set show_sidebar = header_var('show_sidebar')|default(true) %}
{% set show_pagination = header_var('show_sidebar')|default(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}


{% block hero %}

        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}

{% endblock %}


{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container grid-sm\">
        <div class=\"tagcloud\">
            {% include 'partials/taxonomylist.html.twig' with {'base_url': base_url, 'taxonomy':'tag'} %}
        </div>

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}
                <div class=\"\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}            

            {% endblock %}

    
        {% endembed %}
            

        </section>
    </section>    
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "blog.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_972b6f65e273359055481ed60726a3f467aa043ac9f4cdb7fe69f088e64494b3_96359628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 33);
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

    // line 34
    public function block_item($context, array $blocks = array())
    {
        // line 35
        echo "                <div class=\"\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 37)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"])));
            // line 38
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>

                ";
        // line 41
        if ((((isset($context["show_pagination"]) ? $context["show_pagination"] : null) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array())) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 42
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 43
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 43)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 44
            echo "                    </div>
                ";
        }
        // line 45
        echo "            

            ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 45,  275 => 44,  273 => 43,  270 => 42,  268 => 41,  264 => 39,  250 => 38,  247 => 37,  230 => 36,  227 => 35,  224 => 34,  207 => 33,  96 => 51,  94 => 33,  90 => 31,  88 => 30,  83 => 27,  80 => 26,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  63 => 15,  58 => 14,  55 => 13,  48 => 10,  45 => 9,  42 => 8,  38 => 1,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set show_breadcrumbs = header_var('show_sidebar', '/blog')|default(true) %}
{% set show_sidebar = header_var('show_sidebar')|default(true) %}
{% set show_pagination = header_var('show_sidebar')|default(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}


{% block hero %}

        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}

{% endblock %}


{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container grid-sm\">
        <div class=\"tagcloud\">
            {% include 'partials/taxonomylist.html.twig' with {'base_url': base_url, 'taxonomy':'tag'} %}
        </div>

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}
                <div class=\"\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}            

            {% endblock %}

    
        {% endembed %}
            

        </section>
    </section>    
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "blog.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/blog.html.twig");
    }
}
