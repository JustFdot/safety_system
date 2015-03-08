<?php

/* /var/www/themes/responsiv-flat/pages/section.htm */
class __TwigTemplate_5c88354c1f3b32a0055f6f466180b42ccef5b2385b0c36779c80e62181d55c12 extends Twig_Template
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
        echo "<div class=\"signin-container\" style=\"background-color: #2C3E50\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/svg/pencils.svg");
        echo "\" alt=\"Welcome\" />
                        </div>
                        <div class=\"signin-form\">
                        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("url" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "mode", array(), "array"))));
        echo "
                            <div class=\"form-group\">
                                <select name=\"category\" class=\"select select-block\" data-placeholder=\"Выберите категорию вопросов\">
                                    <option></option>
                                    <option value=\"1\">Группа раз</option>
                                    <option value=\"2\">Группа два</option>
                                </select>
                            </div>
                            ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "mode", array(), "array") == "examing")) {
            // line 20
            echo "                            <div class=\"form-group\">
                                <select name=\"advance\" class=\"select select-block\" data-placeholder=\"Выберите группу по электробезопасности\">
                                    <option></option>
                                    <option value=\"3\">Группа 3</option>
                                    <option value=\"4\">Группа 4</option>
                                </select>
                            </div>
                            ";
        }
        // line 28
        echo "                            <button type=\"submit\" class=\"btn btn-inverse btn-lg btn-block\">Продолжить</button>
                        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$('select').select2({
        allowClear: true
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/pages/section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  57 => 28,  47 => 20,  45 => 19,  34 => 11,  28 => 8,  19 => 1,);
    }
}
