<?php

/* /var/www/themes/responsiv-flat/pages/training.htm */
class __TwigTemplate_bdaca1b7c303d34511e88753d5d192ab48d78d19d3d33a0c214df65a0d81d77a extends Twig_Template
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
        $context['__cms_partial_params']['result'] = (isset($context["result"]) ? $context["result"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("question"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>
<footer id=\"layout-footer\">
    <div class=\"container\">
        <div class=\"col-xs-3 copy\">
            ОАО \"ТелеРадиоМедиаШмедиа\"&nbsp;&copy;&nbsp;<script type=\"text/javascript\">document.write(new Date().getFullYear());</script>
        </div>
        <div class=\"col-xs-6 train-nav\">
            <ul class=\"pager\">
                <li class=\"previous\">
                    <a href=\"/section/training\">
                        <span class=\"fui-arrow-left\"></span>
                        <span>К выбору категории</span>
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\" id=\"get-next\">
                        <span>Следующий вопрос</span>
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script type=\"text/javascript\">
    var ids = ['";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["ids"]) ? $context["ids"] : null), "html", null, true);
        echo "'];

    \$('#get-next').on('click', function(e){
        e.preventDefault();
        var that = \$(this);
        \$.request('onGetNext', {
            data: {id: ids.shift(), category: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "},
            beforeUpdate: function(){
                that.addClass('disabled');
            },
            update: {question: '#question'},
            success: function(data){
                \$('#question').html(data['question']);
                that.removeClass('disabled');
                if(!ids.length){
                    that
                    .text('Вопросы закончились. Cначала?')
                    .off()
                    .on('click', function(e){
                        e.preventDefault();
                        window.location.reload();
                    });
                }
            }
        });
    });

    \$('#question')
        .on('click', 'li', function(){
            var that = \$(this);
            if(that.hasClass('clicked')) return;
            \$.request('onCheckAnswer', {
                data: {
                    item: that.data('item'),
                    question_id: that.parent().data('id')
                },
                success: function(data){
                    that
                    .addClass((data['iscorrect'] ? 'correct' : 'incorrect') + ' clicked');
                }
            });
        })
        .on('click', '#info', function(){
            var that = \$(this);
            if(that.hasClass('active')){
                that.removeClass('active').trigger('blur').nextAll('.info').slideUp('fast');
            }else{
                that.addClass('active').nextAll('.info').slideDown('fast');
            }
        });
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/pages/training.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 34,  54 => 28,  27 => 3,  22 => 2,  19 => 1,);
    }
}
