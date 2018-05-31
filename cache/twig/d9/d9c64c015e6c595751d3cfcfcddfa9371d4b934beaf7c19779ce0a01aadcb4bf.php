<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_04d980e96f54222eb2d988abed4c8767965a0a0c64df9731c3c743b0f73e9c7f extends Twig_Template
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
        $context["taxlist"] = ((array_key_exists("children_only", $context)) ? ($this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "getChildPagesTags", array(), "method")) : ($this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method")));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
            // line 4
            echo "<span class=\"tags\">
    <a class=\"label label-rounded ";
            // line 5
            echo (isset($context["label_class"]) ? $context["label_class"] : null);
            echo "\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\">All</a>
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "        ";
                $context["label_class"] = ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : null)), "method") == $context["tax"])) ? ("label-primary") : ("label-secondary"));
                // line 8
                echo "        <a class=\"label label-rounded ";
                echo (isset($context["label_class"]) ? $context["label_class"] : null);
                echo "\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/";
                echo (isset($context["taxonomy"]) ? $context["taxonomy"] : null);
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  42 => 8,  39 => 7,  35 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = children_only is defined ? taxonomylist.getChildPagesTags() : taxonomylist.get() %}

{% if taxlist %}
<span class=\"tags\">
    <a class=\"label label-rounded {{ label_class }}\" href=\"{{ base_url }}\">All</a>
    {% for tax,value in taxlist[taxonomy] %}
        {% set label_class = uri.param(taxonomy) == tax ? 'label-primary' : 'label-secondary' %}
        <a class=\"label label-rounded {{ label_class }}\" href=\"{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}\">{{ tax }}</a>
    {% endfor %}
</span>
{% endif %}
", "partials/taxonomylist.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/taxonomylist.html.twig");
    }
}
