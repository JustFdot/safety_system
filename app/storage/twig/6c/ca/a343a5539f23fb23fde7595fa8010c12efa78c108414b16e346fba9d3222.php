<?php

/* /var/www/themes/responsiv-flat/pages/examing.htm */
class __TwigTemplate_6ccaa343a5539f23fb23fde7595fa8010c12efa78c108414b16e346fba9d3222 extends Twig_Template
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
        echo "<div id=\"question\">
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("question"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>
<footer id=\"layout-footer\">
    <div class=\"container\" style=\"padding: 0;\">
        <div class=\"row\">
        <!-- <div class=\"col-xs-3 copy\">
            ОАО \"ТелеРадиоМедиаШмедиа\"&nbsp;&copy;&nbsp;<script type=\"text/javascript\">document.write(new Date().getFullYear());</script>
        </div> -->
        <div id=\"exam-progress\" class=\"col-xs-3\">
            <div class=\"countdown pull-left\"><b class=\"fui-time\"></b><span>30</span> мин.</div>
            <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\"></div>
            </div>
        </div>
        <div class=\"col-xs-6 exam-nav\">
            <div id=\"exam-nav\" class=\"btn-group\">
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                    <a class=\"btn btn-inverse";
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""));
            echo "\" href=\"#\" data-item=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </div>
        </div>
        <div class=\"col-xs-3\">
            <button id=\"question-accept\" class=\"btn btn-success\" disabled=\"disabled\">Подтвердить ответ</button>
        </div>
        </div>
    </div>
</footer>
<script type=\"text/javascript\">
    var question = \$('#question'),
        examnav = \$('#exam-nav'),
        examprogress = \$('#exam-progress'),
        accept = \$('#question-accept');

    examnav.on('click', 'a', function(){
        var curr = question.children('#question-' + \$(this).data('item'));

        \$(this).addClass('active').siblings('.active').removeClass('active');
        curr.addClass('current').siblings().removeClass('current');
        accept.prop(
            'disabled',
            !(curr.find('.checked').length && !curr.find('.checked').hasClass('clicked'))
        );
        return false;
    });

    accept.on('click', function(){
        var answer = question.children('.current').find('.checked');
        \$.request('onCheckAnswer', {
            data: {
                id: answer.data('id')
            },
            success: function(data){
                answer.addClass((data['iscorrect'] ? 'correct' : 'incorrect') + ' clicked').siblings().addClass('clicked');
                examnav.children('.active').removeClass('btn-inverse').addClass(data['iscorrect'] ? 'btn-success' : 'btn-danger')
            }
        });
    });
    question
        .on('click', 'li', function(){
            var that = \$(this);
            if(that.hasClass('clicked')) return;
            that.addClass('checked').siblings().removeClass('checked');
            accept.prop('disabled', false);
        });

        var countdownTarget = examprogress.children('.countdown').children('span');
        var countdown = 30;
        //убивать интервал по айдишнику, когда экзамен завершен
        var interval = setInterval(function(){
            if(countdown){
                countdownTarget.text(--countdown);
                switch(countdown){
                    case 20:
                        examprogress.find('.progress-bar').addClass('progress-bar-warning').removeClass('progress-bar-success');
                        break;
                    case 10:
                        examprogress.find('.progress-bar').addClass('progress-bar-danger').removeClass('progress-bar-warning');
                        break;
                }
                examprogress.find('.progress-bar').width((30 - countdown) * 100 / 30 + '%');
            }else{
                clearInterval(interval);
                alert('time\\'s over');
            }
        }, 10000);
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/pages/examing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  60 => 19,  43 => 18,  26 => 3,  22 => 2,  19 => 1,);
    }
}
