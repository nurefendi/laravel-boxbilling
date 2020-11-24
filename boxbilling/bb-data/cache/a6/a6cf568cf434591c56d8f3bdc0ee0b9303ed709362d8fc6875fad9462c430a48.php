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

/* mod_product_category.phtml */
class __TwigTemplate_13e4f2b28599444bf1084cf47a7266c0b91a5108e182ee954ea8729c06ec7922 extends \Twig\Template
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
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_product_category.phtml", 2)->unwrap();
        // line 3
        $context["active_menu"] = "products";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_product_category.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "#tab-categories\">";
        echo gettext("Categories");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<div class=\"widget\">
    
    <div class=\"head\">
        <h5>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
    </div>
    
    <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/category_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"";
        echo gettext("Category updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 26
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>";
        // line 34
        echo gettext("Icon");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "icon_url", [], "any", false, false, false, 36), "html", null, true);
        echo "\" style=\"width: 80%\"/>
                    <input type=\"button\" value=\"";
        // line 37
        echo gettext("Browse");
        echo "\" class=\"bHtml blueBtn button\" />
                </div>
                <div class=\"fix\"></div>
            </div>

            <textarea name=\"description\" cols=\"5\" rows=\"20\" class=\"bb-textarea\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 42), "html", null, true);
        echo "</textarea>

            <input type=\"submit\" value=\"";
        // line 44
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    // line 52
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 52, $context, $this->getSourceContext());
    }

    // line 54
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('";
        // line 58
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("filemanager/icons");
        echo "', {rel:\"bb-icon\"}), '";
        echo gettext("Select icon and click OK");
        echo "');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_category.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 58,  178 => 55,  174 => 54,  167 => 52,  157 => 45,  153 => 44,  148 => 42,  140 => 37,  136 => 36,  131 => 34,  122 => 28,  117 => 26,  109 => 23,  103 => 20,  98 => 17,  94 => 16,  87 => 12,  81 => 11,  75 => 10,  69 => 9,  66 => 8,  62 => 7,  55 => 4,  50 => 1,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% set active_menu = 'products' %}
{% block meta_title %}{{ category.title}}{% endblock %}


{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'product'|alink }}\">{% trans 'Products' %}</a></li>
    <li><a href=\"{{ 'product'|alink }}#tab-categories\">{% trans 'Categories' %}</a></li>
    <li class=\"lastB\">{{ category.title}}</li>
</ul>
{% endblock %}

{% block content %}
<div class=\"widget\">
    
    <div class=\"head\">
        <h5>{{ category.title}}</h5>
    </div>
    
    <form method=\"post\" action=\"{{ 'api/admin/product/category_update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"{% trans 'Category updated' %}\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Title' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"{{ category.title }}\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>{% trans 'Icon' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"{{ category.icon_url }}\" style=\"width: 80%\"/>
                    <input type=\"button\" value=\"{% trans 'Browse' %}\" class=\"bHtml blueBtn button\" />
                </div>
                <div class=\"fix\"></div>
            </div>

            <textarea name=\"description\" cols=\"5\" rows=\"20\" class=\"bb-textarea\">{{ category.description }}</textarea>

            <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"{{ category.id }}\"/>
        </fieldset>
    </form>
</div>

{% endblock %}

{% block head %}{{ mf.bb_editor('.bb-textarea') }}{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('{{\"filemanager/icons\"|alink }}', {rel:\"bb-icon\"}), '{% trans 'Select icon and click OK' %}');
\t});
});
</script>
{% endblock %}
", "mod_product_category.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/admin_default/html/mod_product_category.phtml");
    }
}
