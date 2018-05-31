<?php

/* partials/blog-list-item.html.twig */
class __TwigTemplate_d77f1b3e3545665288c80c40a0877880097b9fe9e1bcb8ead4f403dc080e7e6b extends Twig_Template
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
        echo "<div class=\"card\">
    
    
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 6
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 6)->display($context);
        echo "            
            ";
        // line 7
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 7)->display($context);
        // line 8
        echo "        </div>
        <div class=\"card-title\">
        ";
        // line 10
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 10)->display(array_merge($context, array("title_level" => "h2")));
        // line 11
        echo "        </div>
    </div>
    ";
        // line 13
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 14
        echo "    ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 15
            echo "    <div class=\"card-image\">
        <a href=\"";
            // line 16
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropZoom", array(0 => 800, 1 => 600), "method"), "html", array());
            echo "</a>
    </div>
    ";
        }
        // line 19
        echo "
    <div class=\"card-body\">
        ";
        // line 21
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
            // line 22
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
        ";
        } else {
            // line 24
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
        }
        // line 26
        echo "    </div>
    <div class=\"card-footer\">
        von
        ";
        // line 29
        $this->loadTemplate("partials/blog/author.html.twig", "partials/blog-list-item.html.twig", 29)->display($context);
        // line 30
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  81 => 29,  76 => 26,  70 => 24,  64 => 22,  62 => 21,  58 => 19,  50 => 16,  47 => 15,  44 => 14,  42 => 13,  38 => 11,  36 => 10,  32 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
    
    
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/blog/date.html.twig' %}            
            {% include 'partials/blog/taxonomy.html.twig' %}
        </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        </div>
    </div>
    {% set image = page.media.images|first %}
    {% if image %}
    <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(800,600).html }}</a>
    </div>
    {% endif %}

    <div class=\"card-body\">
        {% if page.summary != page.content %}
            {{ page.summary }}
        {% else %}
            {{ page.content }}
        {% endif %}
    </div>
    <div class=\"card-footer\">
        von
        {% include 'partials/blog/author.html.twig' %}
    </div>
</div>

", "partials/blog-list-item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/blog-list-item.html.twig");
    }
}
