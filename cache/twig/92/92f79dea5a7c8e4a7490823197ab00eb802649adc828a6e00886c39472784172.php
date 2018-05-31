<?php

/* partials/base.html.twig */
class __TwigTemplate_4a98ce72d0b3bf935a9a57326200acba3afe9aa02f80f42dea9452ac0827f90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('hero', $context, $blocks);
        // line 73
        echo "
        <section id=\"start\">
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "        </section>

    </div>
";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 99
        $this->loadTemplate("@images/grav-logo.svg", "partials/base.html.twig", 99)->display($context);
        // line 100
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 102
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 102)->display(array_merge($context, array("tree" => true)));
        // line 103
        echo "            </nav>
        </div>
    </div>

";
        // line 107
        $this->displayBlock('bottom', $context, $blocks);
        // line 110
        echo "
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ("theme://css-compiled/spectre" . (isset($context["compress"]) ? $context["compress"] : null))), "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . (isset($context["compress"]) ? $context["compress"] : null))), "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . (isset($context["compress"]) ? $context["compress"] : null))), "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ("theme://css-compiled/theme" . (isset($context["compress"]) ? $context["compress"] : null))), "method");
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 32
        echo "    ";
    }

    // line 37
    public function block_body_classes($context, array $blocks = array())
    {
        echo (isset($context["body_classes"]) ? $context["body_classes"] : null);
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 41
        echo (isset($context["grid_size"]) ? $context["grid_size"] : null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <!--<a href=\"";
        // line 44
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "\" class=\"navbar-brand mr-10\">";
        $this->loadTemplate("@images/grav-logo.svg", "partials/base.html.twig", 44)->display($context);
        echo "</a>-->
                        <a href=\"";
        // line 45
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "\" class=\"navbar-brand mr-10\">INS</a>
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 50
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 53
        echo "                        </nav>

                        ";
        // line 55
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 56
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 56)->display($context);
            echo "</span>
                        ";
        }
        // line 58
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 50
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 51
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "                            ";
    }

    // line 72
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 77
        echo (isset($context["grid_size"]) ? $context["grid_size"] : null);
        echo "\">
                    ";
        // line 78
        $this->displayBlock('messages', $context, $blocks);
        // line 81
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "                </section>
            </section>
        ";
    }

    // line 78
    public function block_messages($context, array $blocks = array())
    {
        // line 79
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 79)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 80
        echo "                    ";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container ";
        // line 90
        echo (isset($context["grid_size"]) ? $context["grid_size"] : null);
        echo "\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
        </section>
    </section>
";
    }

    // line 107
    public function block_bottom($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 108,  330 => 107,  321 => 90,  318 => 89,  315 => 88,  310 => 81,  306 => 80,  298 => 79,  295 => 78,  289 => 82,  286 => 81,  284 => 78,  280 => 77,  277 => 76,  274 => 75,  269 => 72,  265 => 52,  262 => 51,  259 => 50,  243 => 58,  237 => 56,  235 => 55,  231 => 53,  229 => 50,  221 => 45,  215 => 44,  209 => 41,  206 => 40,  203 => 39,  197 => 37,  193 => 32,  190 => 31,  187 => 30,  184 => 29,  181 => 28,  177 => 25,  174 => 24,  171 => 23,  168 => 22,  163 => 21,  158 => 20,  155 => 19,  152 => 18,  144 => 33,  142 => 28,  136 => 26,  134 => 18,  129 => 16,  125 => 15,  122 => 14,  120 => 13,  109 => 9,  106 => 8,  103 => 7,  97 => 110,  95 => 107,  89 => 103,  87 => 102,  83 => 100,  81 => 99,  75 => 95,  73 => 88,  68 => 85,  66 => 75,  62 => 73,  60 => 72,  57 => 71,  55 => 39,  50 => 37,  47 => 36,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <!--<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">{% include('@images/grav-logo.svg') %}</a>-->
                        <a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">INS</a>
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>
{% block footer %}
    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container {{ grid_size }}\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
        </section>
    </section>
{% endblock %}

    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include('@images/grav-logo.svg') %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/web/blog/user/themes/quark/templates/partials/base.html.twig");
    }
}
