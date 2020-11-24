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

/* mod_redirect_settings.phtml */
class __TwigTemplate_898eeadcb6e07b7e986464ea1f49776dad9de1fb5c7c8e8450c2a3842e6f49cc extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_redirect_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_redirect_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Redirects");
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
    <li class=\"lastB\">";
        // line 10
        echo gettext("Redirects");
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
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 20
        echo gettext("Redirects");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 40%\">";
        // line 30
        echo gettext("From");
        echo "</td>
                        <td>";
        // line 31
        echo gettext("To");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 37
        $context["redirects"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "redirect_get_list", [0 => twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 37)], ($context["request"] ?? null))], "method", false, false, false, 37);
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["redirects"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 39
            echo "                <tr>
                    <td><a href=\"";
            // line 40
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "path", [], "any", false, false, false, 40));
            echo "\" target=\"_blank\">";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "path", [], "any", false, false, false, 40));
            echo "</a></td>
                    <td>";
            // line 41
            if (twig_in_filter("://", twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 41))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 41), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 41), "html", null, true);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 41));
                echo "\" target=\"_blank\">";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 41));
                echo "</a>";
            }
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" href=\"";
            // line 43
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/redirect/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 43)]);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"3\">
                        ";
            // line 50
            echo gettext("The list is empty.");
            // line 51
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>

                <tfoot>
                <tr>
                    <td colspan=\"3\">
                        &nbsp;
                    </td>
                </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h3>";
        // line 66
        echo gettext("Create new redirect");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 69
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/redirect/create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"\">
                            ";
        // line 73
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "<input type=\"text\" name=\"path\" value=\"\" required=\"required\" placeholder=\"old-link\" style=\"width: 200px\">
                            &rarr;
                            <input type=\"text\" name=\"target\" value=\"\" required=\"required\" placeholder=\"http://www.google.com/ or /order\" style=\"width: 200px\">
                            <input type=\"submit\" value=\"";
        // line 76
        echo gettext("Add");
        echo "\" class=\"greyishBtn submitForm\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
            </form>

        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new\">


        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_redirect_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 76,  206 => 73,  199 => 69,  193 => 66,  179 => 54,  171 => 51,  169 => 50,  165 => 48,  155 => 43,  138 => 41,  132 => 40,  129 => 39,  123 => 38,  121 => 37,  112 => 31,  108 => 30,  95 => 20,  89 => 16,  85 => 15,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Redirects' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Redirects' %}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Redirects' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 40%\">{% trans 'From' %}</td>
                        <td>{% trans 'To' %}</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                {% set redirects = admin.redirect_get_list({\"per_page\":100, \"page\":request.page}|merge(request)) %}
                {% for r in redirects %}
                <tr>
                    <td><a href=\"{{ r.path | link }}\" target=\"_blank\">{{ r.path | link }}</a></td>
                    <td>{% if '://' in r.target %}<a href=\"{{ r.target }}\" target=\"_blank\">{{ r.target }}</a>{% else %}<a href=\"{{ r.target | link }}\" target=\"_blank\">{{ r.target | link }}</a>{% endif %}</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" href=\"{{ 'api/admin/redirect/delete'|link({'id' : r.id}) }}\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>

                {% else %}
                <tr>
                    <td colspan=\"3\">
                        {% trans 'The list is empty.' %}
                    </td>
                </tr>
                {% endfor %}
                </tbody>

                <tfoot>
                <tr>
                    <td colspan=\"3\">
                        &nbsp;
                    </td>
                </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h3>{% trans 'Create new redirect' %}</h3>
            </div>

            <form method=\"post\" action=\"{{ 'api/admin/redirect/create'|link }}\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"\">
                            {{ '' | link }}<input type=\"text\" name=\"path\" value=\"\" required=\"required\" placeholder=\"old-link\" style=\"width: 200px\">
                            &rarr;
                            <input type=\"text\" name=\"target\" value=\"\" required=\"required\" placeholder=\"http://www.google.com/ or /order\" style=\"width: 200px\">
                            <input type=\"submit\" value=\"{% trans 'Add' %}\" class=\"greyishBtn submitForm\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
            </form>

        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new\">


        </div>
    </div>
</div>

{% endblock %}", "mod_redirect_settings.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-modules/Redirect/html_admin/mod_redirect_settings.phtml");
    }
}
