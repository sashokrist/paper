<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_b285b712b49ec774d2b41a4e843c755eb2abb9c6efb07d148f81d12bbeb4fde2 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <h2 class=\"text-center\">the GREAT TOKEN</h2>
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SJ.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <h2 class=\"text-center\">the GREAT TOKEN</h2>
        <p class=\"muted credit\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} SJ.</p>
    </div>
</div>", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
    }
}
