<?php

/* /home/vagrant/Code/paper/plugins/sasho/rps/components/games/default.htm */
class __TwigTemplate_083315e6b3e5fdb1946803883bd22eaecacc3ac31ca16506912fce2985cd19cd extends Twig_Template
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
        echo "
<div class=\"container\">
    <div class=\"flex-center position-ref full-height\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-sm-12\">
                        <div class=\"position-ref full-height\">
                            <a href=\"/profile\">
                                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", []), "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method"), "html", null, true);
        echo "\">
                            <a href=\"statistic\" class=\"btn btn-primary\">Statistic</a>
                            <a href=\"user\" class=\"btn btn-primary\">Profile</a>
                        </div>
                        <div class=\"position-ref full-height\">
                            <h2 class=\"flex-center\">Welcome</h2>
                            <h2 class=\"flex-center\"><strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", []), "html", null, true);
        echo "</strong></h2>
                        </div>
                        <div class=\"alert res\"><h3> ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 18
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 19
            echo "                                    <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
                                ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 20
        echo "</h3></div>
                        <div class=\"flex-center position-ref full-height\">
                            <form
                                    data-request=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onPlay\"
                                  data-request-validate
                                  data-request-flash >
                                <div class=\"input-group full-height\">
                                    <div class=\"input-group-prepend\">
                                        <select class=\"form-control custom-select\" data-handler=\"onPlay\" name=\"sel\" style=\"width: 300px;\">
                                            <option selected=\"selected\">Pick item</option>
                                            <option value=\"rock\">Rock</option>
                                            <option value=\"paper\">Paper</option>
                                            <option value=\"scissors\">Scissors</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"flex-center\" style=\"padding-top: 20px;\">
                                    <button data-attach-loading class=\"btn btn-primary\" style=\"width: 120px;\" id=\"ajaxSubmit\">Play</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/sasho/rps/components/games/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  56 => 20,  50 => 19,  48 => 18,  43 => 16,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"container\">
    <div class=\"flex-center position-ref full-height\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-sm-12\">
                        <div class=\"position-ref full-height\">
                            <a href=\"/profile\">
                                <img src=\"{{ user.avatar.thumb(80,auto) }}\">
                            <a href=\"statistic\" class=\"btn btn-primary\">Statistic</a>
                            <a href=\"user\" class=\"btn btn-primary\">Profile</a>
                        </div>
                        <div class=\"position-ref full-height\">
                            <h2 class=\"flex-center\">Welcome</h2>
                            <h2 class=\"flex-center\"><strong> {{ user.name }}</strong></h2>
                        </div>
                        <div class=\"alert res\"><h3> {% flash success %}
                                    <p>{{ message }}</p>
                                {% endflash %}</h3></div>
                        <div class=\"flex-center position-ref full-height\">
                            <form
                                    data-request=\"{{ __SELF__ }}::onPlay\"
                                  data-request-validate
                                  data-request-flash >
                                <div class=\"input-group full-height\">
                                    <div class=\"input-group-prepend\">
                                        <select class=\"form-control custom-select\" data-handler=\"onPlay\" name=\"sel\" style=\"width: 300px;\">
                                            <option selected=\"selected\">Pick item</option>
                                            <option value=\"rock\">Rock</option>
                                            <option value=\"paper\">Paper</option>
                                            <option value=\"scissors\">Scissors</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"flex-center\" style=\"padding-top: 20px;\">
                                    <button data-attach-loading class=\"btn btn-primary\" style=\"width: 120px;\" id=\"ajaxSubmit\">Play</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "/home/vagrant/Code/paper/plugins/sasho/rps/components/games/default.htm", "");
    }
}
