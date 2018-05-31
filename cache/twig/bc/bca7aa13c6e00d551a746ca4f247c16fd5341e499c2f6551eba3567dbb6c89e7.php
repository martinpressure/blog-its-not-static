<?php

/* partials/blog-item.html.twig */
class __TwigTemplate_d06e12efca81793471e60deef8227f1a3b6e1757e87df9427a61cdd10c6133fa extends Twig_Template
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
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !(isset($context["hero_image_name"]) ? $context["hero_image_name"] : null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(array_merge($context, array("title_level" => "h2")));
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array())) {
                // line 7
                echo "        <h3 >";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array());
                echo "</h3>
        ";
            }
            // line 9
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 9)->display($context);
            // line 10
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
";
        }
        // line 13
        echo "
    <div class=\"e-content\">
        ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>

    <div class=\"author\">
      <div class=\"author-image\" style=\"background-image: url(";
        // line 19
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
        echo ")\"></div>
      <h4>";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</h4>
      <p class=\"bio\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array());
        echo "</p>
      <hr>
      <p class=\"published\">Published <time datetime=\"";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "</time></p> 
    </div>

    ";
        // line 26
        if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array()))) {
            // line 27
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "

</div>

<p class=\"prev-next text-center\">


    ";
        // line 36
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
            // line 37
            echo "            <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
            echo "</a>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
            // line 41
            echo "        <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 43
        echo "</p>

<div>

    ";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 48
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 49
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
        ";
            // line 50
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog-item.html.twig", 50)->display($context);
            // line 51
            echo "    </div>
    ";
        }
        // line 53
        echo "        
    ";
        // line 54
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 55
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 56
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
        ";
            // line 57
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/blog-item.html.twig", 57)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 58
            echo "    </div>
    ";
        }
        // line 60
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 60,  157 => 58,  155 => 57,  151 => 56,  148 => 55,  146 => 54,  143 => 53,  139 => 51,  137 => 50,  133 => 49,  130 => 48,  128 => 47,  122 => 43,  114 => 41,  112 => 40,  109 => 39,  101 => 37,  99 => 36,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  74 => 23,  69 => 21,  65 => 20,  60 => 19,  53 => 15,  49 => 13,  45 => 11,  42 => 10,  39 => 9,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}

    <div class=\"e-content\">
        {{ page.content }}
    </div>

    <div class=\"author\">
      <div class=\"author-image\" style=\"background-image: url({{ base_url }}{{site.author.image}})\"></div>
      <h4>{{ site.author.name }}</h4>
      <p class=\"bio\">{{site.author.bio}}</p>
      <hr>
      <p class=\"published\">Published <time datetime=\"{{ page.date | date(site.date_short) }}\">{{ page.date | date(site.date_short) }}</time></p> 
    </div>

    {% if page.header.continue_link is sameas(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}


</div>

<p class=\"prev-next text-center\">


    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>

<div>

    {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
    {% endif %}
        
    {% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
    {% endif %}

</div>
", "partials/blog-item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/blog-item.html.twig");
    }
}
