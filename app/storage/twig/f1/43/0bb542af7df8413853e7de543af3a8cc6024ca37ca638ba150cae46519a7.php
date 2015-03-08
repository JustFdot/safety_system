<?php

/* /var/www/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_f1430bb542af7df8413853e7de543af3a8cc6024ca37ca638ba150cae46519a7 extends Twig_Template
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
        echo "<form
    data-request=\"onRegister\">
    <div class=\"form-group\">
        <label for=\"registerName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"registerName\" placeholder=\"Enter your full name\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"registerEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"registerEmail\" placeholder=\"Enter your email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"registerPassword\">Company</label>
        <input name=\"company\" type=\"company\" class=\"form-control\" id=\"registerCompany\" placeholder=\"Choose a company\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"registerPassword\">Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"registerPassword\" placeholder=\"Choose a password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Register</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
