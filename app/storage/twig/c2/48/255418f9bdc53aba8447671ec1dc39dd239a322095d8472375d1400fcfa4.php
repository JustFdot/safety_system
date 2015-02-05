<?php

/* /var/www/themes/responsiv-flat/layouts/default.htm */
class __TwigTemplate_c248255418f9bdc53aba8447671ec1dc39dd239a322095d8472375d1400fcfa4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>ОТ и ТБ - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" />
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/select2/select2.css", 1 => "assets/css/theme.css"));
        // line 12
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "        <!-- Scripts -->
        <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/vendor/flat-ui/js/bootstrap-select.js", 14 => "assets/vendor/flat-ui/js/bootstrap-switch.js", 15 => "assets/vendor/flat-ui/js/flatui-checkbox.js", 16 => "assets/vendor/flat-ui/js/flatui-radio.js", 17 => "assets/vendor/flat-ui/js/jquery.tagsinput.js", 18 => "assets/vendor/flat-ui/js/jquery.placeholder.js", 19 => "assets/vendor/select2/select2.min.js", 20 => "assets/javascript/app.js"));
        // line 39
        echo "\"></script>
        ";
        // line 40
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 41
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 42
        echo "        <!-- Header -->
        <header id=\"layout-header\" class=\"header-navbar\">
            <!-- Nav -->
            ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "        </header>

        <!-- Content -->
        <div id=\"layout-content\">
            ";
        // line 50
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 51
        echo "        </div>

        <!-- Flash messages -->
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 54
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 55
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 57
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 57,  97 => 55,  95 => 54,  90 => 51,  88 => 50,  82 => 46,  78 => 45,  73 => 42,  69 => 41,  62 => 40,  59 => 39,  57 => 17,  54 => 16,  50 => 15,  44 => 14,  40 => 12,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
