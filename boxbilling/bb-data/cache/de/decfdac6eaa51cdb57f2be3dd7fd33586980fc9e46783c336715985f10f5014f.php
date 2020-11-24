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

/* mod_index_dashboard.phtml */
class __TwigTemplate_8490ea8f639bdd99251a5bfe31f1b3da29166deba576f7fc5ead710b803924ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_index_dashboard.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_index_dashboard.phtml", 4)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Client Area");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"dashboard\">

    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-order\"><a href=\"";
        // line 11
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
        echo "\">";
        echo gettext("Order");
        echo "</a></h2>
            <div class=\"block\">
                <p>";
        // line 13
        echo gettext("Order products and services");
        echo "</p>
            </div>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-profile\"><a href=\"";
        // line 20
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login", ["register" => 1]);
        echo "\">";
        echo gettext("Register");
        echo "</a></h2>
            <div class=\"block\">
                <p>";
        // line 22
        echo gettext("Become a member and manage services");
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-email\"><a href=\"";
        // line 28
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
        echo "\">";
        echo gettext("Contact Us");
        echo "</a></h2>
            <div class=\"block\">
                <p>";
        // line 30
        echo gettext("Contact us for more information");
        echo "</p>
            </div>
        </div>
    </div>

    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "news"]], "method", false, false, false, 35)) {
            // line 36
            echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-blog\"><a href=\"";
            // line 38
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "\">";
            echo gettext("Announcements");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 40
            echo gettext("Latest news & announcements");
            echo "</p>
            </div>
        </div>
    </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 46)) {
            // line 47
            echo "    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-kb\"><a href=\"";
            // line 49
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
            echo "\">";
            echo gettext("Knowledge Base");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 51
            echo gettext("Browse our KB for answers and FAQs");
            echo "</p>
            </div>
        </div>
    </div>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "branding"]], "method", false, false, false, 57)) {
            // line 58
            echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-boxbilling\"><a href=\"http://www.boxbilling.com\">";
            // line 60
            echo gettext("Invoicing Software");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 62
            echo gettext("Powered by BoxBilling invoicing software");
            echo "</p>
            </div>
        </div>
    </div>
    ";
        }
        // line 67
        echo "    <div class=\"clear\"></div>

</div>
";
    }

    // line 73
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 74,  189 => 73,  182 => 67,  174 => 62,  169 => 60,  165 => 58,  163 => 57,  160 => 56,  152 => 51,  145 => 49,  141 => 47,  139 => 46,  136 => 45,  128 => 40,  121 => 38,  117 => 36,  115 => 35,  107 => 30,  100 => 28,  91 => 22,  84 => 20,  74 => 13,  67 => 11,  61 => 7,  57 => 6,  50 => 3,  46 => 1,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/boxbilling/html/mod_index_dashboard.phtml");
    }
}
