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
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 2
            echo "    <div id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" class=\"current\"") : (""));
            echo ">
        <section class=\"layout-title\">
            <div class=\"container\">
                ";
            // line 5
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "training")) {
                // line 6
                echo "                    <button id=\"info\" class=\"btn btn-info pull-right\">Справочный материал по вопросу</button>
                    <div class=\"info share pull-right\">Оставлю здесь какое-нибудь справочное пособие.<br />Может две строчки<br />А может даже и три, ктож меня знает..</div>
                ";
            }
            // line 9
            echo "                <div class=\"title\">
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
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 18
                echo "            <li data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "id", array()), "html", null, true);
                echo "\" data-item=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "item", array()), "html", null, true);
                echo "\">
                <div class=\"container\"><span class=\"fui-radio-unchecked\"></span>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "text", array()), "html", null, true);
                echo "</div>
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 22
                echo "            <div class=\"container callout callout-danger\">
                <b>Это удивительно!</b><br />
                Мы не смогли найти ни одного варианта ответа на текущий вопрос. Пожалуйста, попробуйте еще раз...
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </ul>
    </div>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "    <p class=\"container callout callout-danger\" style=\"margin: 50px auto;\">
        <b>Это удивительно!</b><br />
        Мы не смогли найти ни одного вопроса при текущих параметрах. Пожалуйста, попробуйте еще раз...
    </p>
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
        return array (  119 => 30,  104 => 27,  94 => 22,  86 => 19,  79 => 18,  73 => 17,  69 => 15,  65 => 14,  56 => 10,  53 => 9,  48 => 6,  46 => 5,  37 => 2,  19 => 1,);
    }
}
