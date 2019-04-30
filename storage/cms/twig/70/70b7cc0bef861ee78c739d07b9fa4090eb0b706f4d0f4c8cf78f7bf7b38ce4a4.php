<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/profile.htm */
class __TwigTemplate_1ad75a2c809211bb1796d0f9a7868a95fb1baff9569474a5e09416c7ab19f4e7 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ueuser"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'ueuser' %}", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/profile.htm", "");
    }
}
