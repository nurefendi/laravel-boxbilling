<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_currency_manage.phtml */
class __TwigTemplate_d69180d7122bb1ec90956f0eea77602a35e586683fd61de3ae08e12f0006131e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_currency_manage.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_currency_manage.phtml", 2)->unwrap();
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Currency management");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\">";
        echo gettext("Currency settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"widget\">
    
    <div class=\"head\">
        <h5>";
        // line 20
        echo gettext("Edit currency information");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
    </div>

    <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Currency updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 26
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 33
        echo gettext("Conversion rate");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"conversion_rate\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 35), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 40
        echo gettext("Format");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"format\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "format", [], "any", false, false, false, 42), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\$ ";
        echo ($context["price"] ?? null);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 47
        echo gettext("Price format");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"price_format\" value=\"1\" ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "price_format", [], "any", false, false, false, 49) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"2\" ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "price_format", [], "any", false, false, false, 50) == 2)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1,234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"3\" ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "price_format", [], "any", false, false, false, 51) == 3)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1.234,56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"4\" ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "price_format", [], "any", false, false, false, 52) == 4)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1,234</label>
                    <input type=\"radio\" name=\"price_format\" value=\"5\" ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "price_format", [], "any", false, false, false, 53) == 5)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1234</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            <input type=\"submit\" value=\"";
        // line 57
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"code\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 58), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_currency_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 58,  194 => 57,  185 => 53,  179 => 52,  173 => 51,  167 => 50,  161 => 49,  156 => 47,  146 => 42,  141 => 40,  133 => 35,  128 => 33,  120 => 28,  115 => 26,  109 => 23,  101 => 20,  95 => 16,  91 => 15,  84 => 11,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 4,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% set active_menu = 'system' %}
{% block meta_title %}{% trans 'Currency management' %}{% endblock %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li><a href=\"{{ 'extension/settings/currency'|alink }}\">{% trans 'Currency settings' %}</a></li>
    <li class=\"lastB\">{{currency.code}}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    
    <div class=\"head\">
        <h5>{% trans 'Edit currency information' %} {{currency.code}}</h5>
    </div>

    <form method=\"post\" action=\"{{ 'api/admin/currency/update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Currency updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Title' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"{{currency.title}}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Conversion rate' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"conversion_rate\" value=\"{{currency.conversion_rate}}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Format' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"format\" value=\"{{currency.format}}\" required=\"required\" placeholder=\"\$ {{price|raw}}\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Price format' %}:</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"price_format\" value=\"1\" {% if currency.price_format == 1 %}checked=\"checked\"{% endif %}><label>1234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"2\" {% if currency.price_format == 2 %}checked=\"checked\"{% endif %}><label>1,234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"3\" {% if currency.price_format == 3 %}checked=\"checked\"{% endif %}><label>1.234,56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"4\" {% if currency.price_format == 4 %}checked=\"checked\"{% endif %}><label>1,234</label>
                    <input type=\"radio\" name=\"price_format\" value=\"5\" {% if currency.price_format == 5 %}checked=\"checked\"{% endif %}><label>1234</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"code\" value=\"{{currency.code}}\"/>
        </fieldset>
    </form>
</div>

{% endblock %}", "mod_currency_manage.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-modules/Currency/html_admin/mod_currency_manage.phtml");
    }
}
