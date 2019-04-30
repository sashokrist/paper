<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_83e92acdf71ddd6a1b4d005ecde66c4e639d6441214ae34ae41cfd744f7fa428 extends Twig_Template
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
        echo "<section id=\"navbar\">
\t<nav class=\"navbar navbar-dark bg-primary\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">the GREAT TOKEN</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 9
        if (($context["user"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t<li class=\"nav-item";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "game")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("game");
            echo "\">New Game</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li ><a class=\"nav-item";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<li class=\"nav-item";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "user")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user");
            echo "\">Login or Register</a></li>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  61 => 15,  54 => 13,  49 => 11,  44 => 10,  42 => 9,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\">
\t<nav class=\"navbar navbar-dark bg-primary\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">the GREAT TOKEN</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t{% if user %}
\t\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'game' ? ' active' }}\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'game'|page }}\">New Game</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li ><a class=\"nav-item{% if this.page.id == 'login' %} active {% endif %}\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item{% if this.page.id == 'user' %} active {% endif %}\"><a href=\"{{ 'user'|page }}\">Login or Register</a></li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
