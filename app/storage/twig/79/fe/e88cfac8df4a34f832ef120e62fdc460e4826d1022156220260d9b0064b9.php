<?php

/* /var/www/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_79fee88cfac8df4a34f832ef120e62fdc460e4826d1022156220260d9b0064b9 extends Twig_Template
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
        echo "<div class=\"layout-title\">
        <div class=\"container\">Добро пожаловать!</div>
    </div>
    <div class=\"container\">
        <p>Приветствуем вас в системе тестирования сотрудников по направлению: \"Охрана труда и техника безопасности\".</p>
        <p>Мы подготовили для вас два режима работы системы:</p>
        <ol>
            <li>
                <b>Режим тренировки</b><br />
                В этом режиме вы можете ознакомиться со всеми вопросами экзаменационных билетов и проверить свои знания без учета результатов в каких-либо протоколах.
            </li>
            <li>
                <b>Режим экзамена</b><br />
                В этом режиме вас ожидает экзаменационный билет, содержащий 10 вопросов.<br />
                Вы свободно можете перемещаться между вопросами, но у вас есть всего одна попытка дать правильный ответ на кажый из вопросов.<br />
                Также в этом режиме вас ожидает ограничение по времени - 30 минут.<br />
                Не активируйте этот режим, если не уверены, что готовы к сдаче экзамена.
            </li>
        </ol>
    </div>
    <footer id=\"layout-footer\">
        <div class=\"copy text-center\">
            ОАО \"ТелеРадиоМедиаШмедиа\"&nbsp;&copy;&nbsp;<script type=\"text/javascript\">document.write(new Date().getFullYear());</script>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/themes/responsiv-flat/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
