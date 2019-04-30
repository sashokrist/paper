<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/user.htm */
class __TwigTemplate_956d8e6bc1dce2871c94f42604f1222d75bdd4c7aa594364ed2ce564e0308819 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account::update"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account::signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account::login"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account::logout"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/user.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  37 => 5,  30 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'account::update' %}

{% partial 'account::signup' %} 

{% partial 'account::login' %} 

{% partial 'account::logout' %}", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/user.htm", "");
    }
}
