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
        $context["inc"] = array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10);
        // line 4
        echo "<div id=\"question\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = (isset($context["result"]) ? $context["result"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("question"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</div>
<footer id=\"layout-footer\">
    <div class=\"container\" style=\"padding: 0;\">
        <div class=\"row\">
        <div class=\"col-xs-3 copy\">
            ОАО \"ТелеРадиоМедиаШмедиа\"&nbsp;&copy;&nbsp;<script type=\"text/javascript\">document.write(new Date().getFullYear());</script>
        </div>
        <div class=\"col-xs-6 exam-nav\">
            <!-- <i>Навигация по вопросам экзаминационного билета</i> -->
            <div id=\"exam-nav\" class=\"btn-group\">
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inc"]) ? $context["inc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                    <a class=\"btn btn-inverse";
            if (($context["i"] == 1)) {
                echo " active";
            }
            echo "\" href=\"#\" data-item=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
        <div id=\"exam-progress\" class=\"col-xs-3\">
            <div class=\"countdown pull-left\"><b class=\"fui-time\"></b><span>30</span> мин.</div>
            <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\"></div>
            </div>
        </div>
        </div>
    </div>
</footer>

<script type=\"text/javascript\">
    var question = \$('#question'),
        examnav = \$('#exam-nav'),
        examprogress = \$('#exam-progress');

    examnav.on('click', 'a', function(){
        var that = \$(this);
        that.addClass('active').siblings('.active').removeClass('active');
        question.children('#question-' + \$(this).data('item')).show().siblings().hide();
        return false;
    });

    question
        .on('click', 'li', function(){
            var that = \$(this);
            if(that.hasClass('clicked')) return;
            \$.request('onCheckAnswer', {
                data: {
                    item: that.data('item'),
                    question_id: that.parent().data('id')
                },
                success: function(data){
                    that.addClass((data['iscorrect'] ? 'correct' : 'incorrect') + ' clicked').siblings().addClass('clicked');
                    examnav.children('.active').removeClass('btn-inverse').addClass(data['iscorrect'] ? 'btn-success' : 'btn-danger')
                }
            });
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
        }, 1000);
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
        return array (  60 => 19,  45 => 17,  41 => 16,  29 => 6,  24 => 5,  21 => 4,  19 => 1,);
    }
}
