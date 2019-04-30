<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_dc64803eaa94be7c5ef894d9036fd619342d1f691f1e61ee81dbf7ba7ace5054 extends Twig_Template
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
        echo "<div class=\"container\">
  <div id=\"t\" class=\"flex-center position-ref full-height\">
    <div class=\"content\">
      <div class=\"title m-b-md\">
        Welcome To Rock, Paper Scissors!
      </div>
      <div>
        ";
        // line 8
        if (($context["user"] ?? null)) {
            // line 9
            echo "          <h2>Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", []), "html", null, true);
            echo "</h2>
          <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", []), "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method"), "html", null, true);
            echo "\">
          <a href=\"game\" class=\"btn btn-primary\">New Game</a>
          <a href=\"statistic\" class=\"btn btn-primary\">Statistic</a>
        ";
        } else {
            // line 14
            echo "          <p>Nobody is logged in</p>
          <a href=\"user\" class=\"btn btn-primary\">Login</a>
          <a href=\"user\" class=\"btn btn-primary\">Register</a>
        ";
        }
        // line 18
        echo "       </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  46 => 14,  39 => 10,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <div id=\"t\" class=\"flex-center position-ref full-height\">
    <div class=\"content\">
      <div class=\"title m-b-md\">
        Welcome To Rock, Paper Scissors!
      </div>
      <div>
        {% if user %}
          <h2>Hello {{ user.name }}</h2>
          <img src=\"{{ user.avatar.thumb(80,auto) }}\">
          <a href=\"game\" class=\"btn btn-primary\">New Game</a>
          <a href=\"statistic\" class=\"btn btn-primary\">Statistic</a>
        {% else %}
          <p>Nobody is logged in</p>
          <a href=\"user\" class=\"btn btn-primary\">Login</a>
          <a href=\"user\" class=\"btn btn-primary\">Register</a>
        {% endif %}
       </div>
      </div>
    </div>
  </div>", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
