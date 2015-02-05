<?php

/* /var/www/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_467e69a1f9cea05afe8d9e6dae9095cfd89b2222bee67dbfb6fbdb10651a4909 extends Twig_Template
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
        // line 2
        $context["menu"] = array("training" => array("url" => "/section/training", "name" => "Тренинг"), "examing" => array("url" => "/section/examing", "name" => "Экзамен", "needauth" => true));
        // line 15
        echo "<!-- ";
        // line 35
        echo "
";
        // line 36
        $context["nav"] = $this;
        echo " -->

<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Охрана Труда и Техника Безопасности
</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            // line 47
            echo "                    <li";
            echo (((($context["code"] == $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array())) || ($context["code"] == $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "mode", array(), "array")))) ? (" class=\"active\"") : (""));
            echo ">
                        ";
            // line 48
            if (($this->getAttribute($context["item"], "needauth", array()) &&  !(isset($context["user"]) ? $context["user"] : null))) {
                // line 49
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" class=\"needauth\">
                                <span class=\"fui-lock\"></span>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 53
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a>
                        ";
            }
            // line 55
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                <li>
                    ";
        // line 58
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 59
            echo "                        <div class=\"username\">
                            <span class=\"fui-user\"></span>
                            <i>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</i>
                            <a class=\"icon-power-off\"
                                data-request=\"onLogout\"
                                data-request-data=\"redirect: '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "url", array()), "html", null, true);
            echo "'\"
                                data-request-confirm=\"rly want to logout?\"
                            ></a>
                        </div>
                    ";
        } else {
            // line 69
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("url" => "/signin")));
            echo "
                    <input class=\"hidden\" name=\"backurl\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "url", array()), "html", null, true);
            echo "\" />
                        <input type=\"submit\"
                            class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\"
                            value=\"Войти в систему\"
                        />
                    ";
            // line 75
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "
                    ";
        }
        // line 77
        echo "                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    // line 15
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["links"]) ? $context["links"] : null), "menu", array()));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 17
                echo "        <li class=\"";
                echo ((($context["code"] == $this->getAttribute((isset($context["links"]) ? $context["links"] : null), "current", array()))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 19
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 20
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 21
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 23
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 24
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 25
                echo "            </a>
            ";
                // line 26
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 27
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 29
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 32
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 32,  183 => 29,  179 => 27,  177 => 26,  174 => 25,  170 => 24,  166 => 23,  160 => 21,  156 => 20,  152 => 19,  144 => 17,  139 => 16,  128 => 15,  120 => 77,  115 => 75,  107 => 70,  102 => 69,  94 => 64,  88 => 61,  84 => 59,  82 => 58,  79 => 57,  72 => 55,  64 => 53,  58 => 50,  53 => 49,  51 => 48,  46 => 47,  42 => 46,  34 => 41,  26 => 36,  23 => 35,  21 => 15,  19 => 2,);
    }
}
