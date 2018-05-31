<?php

/* partials/layout.html.twig */
class __TwigTemplate_50078089749bd89e82a9d036471ebf8b1b221cec7485b245a22b46738aa1325b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $context["item_col"] = "col-12";
        // line 7
        $context["sidebar_col"] = "col-12";
        // line 8
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 10
        echo (isset($context["item_col"]) ? $context["item_col"] : null);
        echo " extra-spacing\">
        ";
        // line 11
        $this->displayBlock('item', $context, $blocks);
        // line 12
        echo "    </div>
    ";
        // line 13
        if ((isset($context["show_sidebar"]) ? $context["show_sidebar"] : null)) {
            // line 14
            echo "    <div id=\"sidebar\" class=\"column ";
            echo (isset($context["sidebar_col"]) ? $context["sidebar_col"] : null);
            echo "\">
        ";
            // line 15
            $this->displayBlock('sidebar', $context, $blocks);
            // line 16
            echo "    </div>
    ";
        }
        // line 18
        echo "</div>

";
    }

    // line 11
    public function block_item($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  60 => 11,  54 => 18,  50 => 16,  48 => 15,  43 => 14,  41 => 13,  38 => 12,  36 => 11,  32 => 10,  28 => 8,  26 => 7,  24 => 6,  21 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# removed 
{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}
#}

{% set item_col = 'col-12' %}
{% set sidebar_col = 'col-12' %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {% if show_sidebar %}
    <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
        {% block sidebar %}{% endblock %}
    </div>
    {% endif %}
</div>

", "partials/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/layout.html.twig");
    }
}
