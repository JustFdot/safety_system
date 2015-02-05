<?php

/* /var/www/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_852335fa7cac2e6da3679e0117c199f68bf3f86a358e034546efc8bee8ed2ddb extends Twig_Template
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
        echo "<div class=\"signin-container\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/svg/clipboard.svg");
        echo "\" alt=\"Welcome\" />
                        </div>

                        <div class=\"signin-form\">
                            <!-- <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Enter your email\"
                                    id=\"signin-email\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-email\"></label>
                            </div>

                            <div class=\"form-group\">
                                <input
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"signin-pass\" />
                                <label class=\"signin-field-icon fui-lock\" for=\"signin-pass\"></label>
                            </div> -->

                            <form
                                data-request=\"onSignin\"
                                data-request-redirect=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["backurl"]) ? $context["backurl"] : null), "html", null, true);
        echo "\">
                                <div class=\"form-group\">

                                    <label class=\"signin-field-icon\" for=\"userSigninEmail\"></label>
                                    <select name=\"email\" id=\"userSigninEmail\" class=\"select select-primary select-block mbl\">
                                    <option></option>
                                    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "                                        <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                    </select>
                                    <!-- <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userSigninEmail\" placeholder=\"Enter your email\"> -->
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"signin-field-icon fui-lock\" for=\"userSigninPassword\"></label>
                                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Войти в систему</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<script type=\"text/javascript\">
    \$(\"#userSigninEmail\").select2({
        placeholder: 'Пожалуйста, представьтесь',
        allowClear: true
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  71 => 42,  67 => 41,  58 => 35,  29 => 9,  19 => 1,);
    }
}
