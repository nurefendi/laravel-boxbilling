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

/* mod_filemanager_ide.phtml */
class __TwigTemplate_1f58daecb0401acab3d04f6e9b0996161b463f2a87575764f78d8585b752f5b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["mod"] = (twig_constant("BB_URL") . "bb-modules/Filemanager");
        // line 2
        echo "<html>
\t<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
\t\t<title>";
        // line 5
        echo gettext("File manager");
        echo "</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/css/bootstrap/bootstrap-1.0.0.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/css/app.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/css/jqueryui/jquery.ui.base.css\" />
\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/js/jquery.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/js/jquery-ui.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/js/disableText.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#main-site\").tabs();
\t\t});
\t\t</script>
\t</head>
    
\t<body>
\t\t<div id=\"main-site\">
\t\t\t<div id=\"acct-nav\">
                Hint: Use Ctrl+S to save file |
                ";
        // line 23
        if (($context["show_full_screen"] ?? null)) {
            // line 24
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("filemanager/ide");
            echo "\" target=\"_blank\">";
            echo gettext("Full screen");
            echo "</a>
                ";
        } else {
            // line 26
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("index");
            echo "\">";
            echo gettext("Dashboard");
            echo "</a>
                ";
        }
        // line 28
        echo "\t\t\t</div>
\t\t\t<ul id=\"main-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-edit\">Edit</a></li>
\t\t\t\t<li><a href=\"#tab-ref\">Reference</a></li>
\t\t\t</ul>
            
\t\t\t<div id=\"tab-edit\">
                <div id=\"edit-files\">
                    <div id=\"edit-dir\">
                        <span class=\"icon icon-dir\"></span>
                        <div data-path=\"/\" id=\"select-dir\">/</div>
                    </div>
                    <ul id=\"path-tree\">
                        <li data-path=\"/\"><span class=\"icon icon-dir\"></span> /</li>
                    </ul>
                    <div id=\"file-tools\">
                        <a href=\"#\" onclick=\"newDir(); return false;\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/img/dir-add.png\" alt=\"new dir\" /></a>
                        <a href=\"#\" onclick=\"newFile(); return false;\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/img/document--plus.png\" alt=\"new dir\" /></a>
                    </div>
                    <ul id=\"file-list\"></ul>
                </div>
                <div id=\"edit-content\">
                    <ul></ul>
                </div>
                <script>
                var absoDir = '";
        // line 53
        echo twig_escape_filter($this->env, ($context["dir"] ?? null), "html", null, true);
        echo "';
                var apiUrl = '";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("BB_URL_API"), "html", null, true);
        echo "';
                var bbUrl = '";
        // line 55
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "';
                var openFile = '";
        // line 56
        echo twig_escape_filter($this->env, ($context["open"] ?? null), "html", null, true);
        echo "';
                </script>
                <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/js/edit.js\" type=\"text/javascript\"></script>
\t\t\t</div>
            
\t\t\t<div id=\"tab-ref\">
                <div id=\"ref-list\">
                    <ul>
                        <li><a target=\"ref-iframe\" href=\"http://docs.boxbilling.com/\">BoxBilling.com Docs</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://php.net\">PHP.net</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://dev.w3.org/html5/spec/Overview.html\">HTML5 Spec</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://reference.sitepoint.com/css\">CSS</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://w3schools.com/\">W3 Schools</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://jqapi.com/\">jQuery</a></li>
                    </ul>
                </div>
                <div id=\"ref-frame-wrap\">
                    <iframe id=\"ref-iframe\"></iframe>
                </div>
                <script>
                \$(function(){
                    resizeFrame();
                    \$(\"#ref-list ul li\").click(function(e){
                        \$(this).siblings().removeClass('ref-sel');
                        \$(this).addClass('ref-sel');
                        var href = \$(this).children('a').attr('href');
                        \$(\"#ref-iframe\")[0].src = href;
                    });
                });
                \$(window).resize(function(){
                    resizeFrame();
                });
                function resizeFrame(){
                    var hh = \$(window).height() - (\$(\"#main-nav\").height() + \$(\"#ref-list\").height());
                    \$(\"#ref-iframe\").css('height',hh+'px');
                }
                </script>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_ide.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  146 => 56,  142 => 55,  138 => 54,  134 => 53,  123 => 45,  119 => 44,  101 => 28,  93 => 26,  85 => 24,  83 => 23,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mod = constant('BB_URL') ~ 'bb-modules/Filemanager' %}
<html>
\t<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
\t\t<title>{% trans 'File manager' %}</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mod }}/src/css/bootstrap/bootstrap-1.0.0.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mod }}/src/css/app.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mod }}/src/css/jqueryui/jquery.ui.base.css\" />
\t\t<script src=\"{{ mod }}/src/js/jquery.js\" type=\"text/javascript\"></script>
\t\t<script src=\"{{ mod }}/src/js/jquery-ui.js\" type=\"text/javascript\"></script>
\t\t<script src=\"{{ mod }}/src/js/disableText.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#main-site\").tabs();
\t\t});
\t\t</script>
\t</head>
    
\t<body>
\t\t<div id=\"main-site\">
\t\t\t<div id=\"acct-nav\">
                Hint: Use Ctrl+S to save file |
                {% if show_full_screen %}
                <a href=\"{{ 'filemanager/ide'|alink }}\" target=\"_blank\">{% trans 'Full screen' %}</a>
                {% else %}
\t\t\t\t<a href=\"{{ 'index'|alink }}\">{% trans 'Dashboard' %}</a>
                {% endif %}
\t\t\t</div>
\t\t\t<ul id=\"main-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-edit\">Edit</a></li>
\t\t\t\t<li><a href=\"#tab-ref\">Reference</a></li>
\t\t\t</ul>
            
\t\t\t<div id=\"tab-edit\">
                <div id=\"edit-files\">
                    <div id=\"edit-dir\">
                        <span class=\"icon icon-dir\"></span>
                        <div data-path=\"/\" id=\"select-dir\">/</div>
                    </div>
                    <ul id=\"path-tree\">
                        <li data-path=\"/\"><span class=\"icon icon-dir\"></span> /</li>
                    </ul>
                    <div id=\"file-tools\">
                        <a href=\"#\" onclick=\"newDir(); return false;\"><img src=\"{{ mod }}/src/img/dir-add.png\" alt=\"new dir\" /></a>
                        <a href=\"#\" onclick=\"newFile(); return false;\"><img src=\"{{ mod }}/src/img/document--plus.png\" alt=\"new dir\" /></a>
                    </div>
                    <ul id=\"file-list\"></ul>
                </div>
                <div id=\"edit-content\">
                    <ul></ul>
                </div>
                <script>
                var absoDir = '{{ dir }}';
                var apiUrl = '{{ constant('BB_URL_API') }}';
                var bbUrl = '{{ \"/\" | alink }}';
                var openFile = '{{open}}';
                </script>
                <script src=\"{{ mod }}/src/js/edit.js\" type=\"text/javascript\"></script>
\t\t\t</div>
            
\t\t\t<div id=\"tab-ref\">
                <div id=\"ref-list\">
                    <ul>
                        <li><a target=\"ref-iframe\" href=\"http://docs.boxbilling.com/\">BoxBilling.com Docs</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://php.net\">PHP.net</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://dev.w3.org/html5/spec/Overview.html\">HTML5 Spec</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://reference.sitepoint.com/css\">CSS</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://w3schools.com/\">W3 Schools</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://jqapi.com/\">jQuery</a></li>
                    </ul>
                </div>
                <div id=\"ref-frame-wrap\">
                    <iframe id=\"ref-iframe\"></iframe>
                </div>
                <script>
                \$(function(){
                    resizeFrame();
                    \$(\"#ref-list ul li\").click(function(e){
                        \$(this).siblings().removeClass('ref-sel');
                        \$(this).addClass('ref-sel');
                        var href = \$(this).children('a').attr('href');
                        \$(\"#ref-iframe\")[0].src = href;
                    });
                });
                \$(window).resize(function(){
                    resizeFrame();
                });
                function resizeFrame(){
                    var hh = \$(window).height() - (\$(\"#main-nav\").height() + \$(\"#ref-list\").height());
                    \$(\"#ref-iframe\").css('height',hh+'px');
                }
                </script>
\t\t\t</div>
\t\t</div>
\t</body>
</html>", "mod_filemanager_ide.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-modules/Filemanager/html_admin/mod_filemanager_ide.phtml");
    }
}
