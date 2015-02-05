<?php

/* /var/www/themes/responsiv-flat/partials/question.htm */
class __TwigTemplate_71e0980da9008586e864e06f12ae759dcd50f2e5bac68790da93c8a63386806f extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 2
            echo "<div id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
    <section class=\"layout-title\">
        <div class=\"container\">
            ";
            // line 5
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "training")) {
                // line 6
                echo "                <button id=\"info\" class=\"btn btn-info pull-right\">Справочный материал по вопросу</button>
                <div class=\"info share pull-right\">Оставлю здесь какое-нибудь справочное пособие.<br />Может две строчки<br />А может даже и три, ктож меня знает..</div>
            ";
            }
            // line 9
            echo "            <div class=\"title\">
                Билет ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "group", array()), "html", null, true);
            echo " <span class=\"fui-arrow-right\"></span> Вопрос ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "item", array()), "html", null, true);
            echo "
            </div>
        </div>
    </section>
    <p class=\"container callout callout-info\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "text", array()), "html", null, true);
            echo "</p>
    <ul class=\"question-list list-unstyled\" data-id=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 17
                echo "        <li data-item=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "item", array()), "html", null, true);
                echo "\">
            <div class=\"container\"><span class=\"fui-radio-unchecked\"></span>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "text", array()), "html", null, true);
                echo "</div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/partials/question.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  66 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  40 => 10,  37 => 9,  32 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }
}
