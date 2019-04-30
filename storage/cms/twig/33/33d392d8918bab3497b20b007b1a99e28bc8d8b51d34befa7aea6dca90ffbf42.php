<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/account/logout.htm */
class __TwigTemplate_67231f121d60d0f37e06deb284cfdc822269a90d9c3018d5163baf0e76d48c50 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["user"] ?? null)) {
            // line 2
            echo "<a style=\"padding-top: 10px;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.logout"]);
            echo "</a>
";
        } else {
            // line 4
            echo "
<div class=\"message-box\">You are not logged in.</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/logout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
<a style=\"padding-top: 10px;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">{{ \"clake.userextended::lang.components.account.logout\"|trans }}</a>
{% else %}

<div class=\"message-box\">You are not logged in.</div>

{% endif %}", "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/logout.htm", "");
    }
}
