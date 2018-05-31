<?php

/* partials/blog/author.html.twig */
class __TwigTemplate_6f54ef9027b6c426737a1e25578dedd03aecef5347ce2438550780c02964d75a extends Twig_Template
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
        echo "<span class=\"blog-author\">
\t";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"blog-author\">
\t{{ site.author.name }}
</span>
", "partials/blog/author.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/blog/author.html.twig");
    }
}
