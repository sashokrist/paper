<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/game.htm */
class __TwigTemplate_870000dbccf331c20dc09efd7b712bdb3b69991b69b26ab6609cf6b73add3c87 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("game"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/game.htm";
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
        return new Twig_Source("{% component 'game' %}", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/game.htm", "");
    }
}
