<?php

/* partials/blog/taxonomy.html.twig */
class __TwigTemplate_94659a09b6a6106a9ea06e28cb23a9a9b0aa4a11bd40ffe165213b2a90f23854 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 2
            echo "<span class=\"tags\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "    <a class=\"label label-rounded ";
                echo (((isset($context["label_style"]) ? $context["label_style"] : null)) ? ((isset($context["label_style"]) ? $context["label_style"] : null)) : ("label-secondary"));
                echo " p-category\" href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "#body-wrapper\">";
                echo $context["tag"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.taxonomy.tag %}
<span class=\"tags\">
    {% for tag in page.taxonomy.tag %}
    <a class=\"label label-rounded {{ label_style ?: 'label-secondary' }} p-category\" href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}#body-wrapper\">{{ tag }}</a>
    {% endfor %}
</span>
{% endif %}
", "partials/blog/taxonomy.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/blog/taxonomy.html.twig");
    }
}
