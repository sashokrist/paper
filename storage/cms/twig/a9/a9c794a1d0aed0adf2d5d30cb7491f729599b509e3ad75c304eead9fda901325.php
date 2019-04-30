<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/account/signup.htm */
class __TwigTemplate_dd7172dae37f4c48ba3bafd114eb59a66952c743af6a310a2b3613cdf95916e3 extends Twig_Template
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
            echo "
<div class=\"message-box\">You cannot register for an account while logged in.</div>

";
        } else {
            // line 6
            echo "<form
        data-request-validate
        data-request-flash
        data-request=\"onRegister\"
\t\tid =\"signupForm\">
    <div class=\"form-group\">
        <label for=\"registerFirstName\">";
            // line 12
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.firstname"]);
            echo "</label>
        <input
                name=\"first_name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerFirstName\"
\t\t\t\trequired=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
            echo "\"
                placeholder='";
            // line 19
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.enterfname"]);
            echo "' />
    </div>
    <span data-validate-for=\"first_name\"></span><br>

    <div class=\"form-group\">
        <label for=\"registerLastName\">";
            // line 24
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.lastname"]);
            echo "</label>
        <input
                name=\"last_name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerLastName\"
\t\t\t\trequired=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
            echo "\"
                placeholder='";
            // line 31
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.enterlname"]);
            echo "' />
    </div>
    <span data-validate-for=\"last_name\"></span><br>

    <div class=\"form-group\">
        <label for=\"register";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", [])), "html", null, true);
            echo "</label>
        <input
                name=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"
                type='";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []) == "email")) {
                echo "email";
            } else {
                echo "text";
            }
            echo "'
                class=\"form-control\"
                id=\"register";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"
\t\t\t\trequired=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
            echo "\"
                placeholder=\"Enter your ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\" />
    </div>
    <span data-validate-for=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"></span><br>

    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []) == "username")) {
                // line 48
                echo "
    <div class=\"form-group\">
        <label for=\"registerEmail\">";
                // line 50
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.email"]);
                echo "</label>
        <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
\t\t\t\trequired=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
                echo "\"
                placeholder='";
                // line 57
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.enteremail"]);
                echo "' />

    </div>
    <span data-validate-for=\"email\"></span><br>

    ";
            }
            // line 63
            echo "
    <div class=\"form-group\">
        <label for=\"registerPassword\">";
            // line 65
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.password"]);
            echo "</label>
        <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
\t\t\t\trequired=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
            echo "\"
                placeholder='";
            // line 72
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.enterpassword"]);
            echo "' />
\t</div>
    <span data-validate-for=\"password\"></span><br>

    <div class=\"form-group\">
        <label for=\"registerConfirmPassword\">";
            // line 77
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.confirmpassword"]);
            echo "</label>
        <input
                name=\"password_confirmation\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerConfirmPassword\"
\t\t\t\trequired=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "options", []), "validation", []), "html", null, true);
            echo "\"
                placeholder='";
            // line 84
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.confirmpassword"]);
            echo "' />
    </div>
    <span data-validate-for=\"password_confirmation\"></span><br>

    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "createSettings", []));
            foreach ($context['_seq'] as $context["setting"] => $context["attributes"]) {
                // line 89
                echo "
    ";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["attributes"], "html", []);
                echo " <br>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['setting'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
    <button data-attach-loading type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">";
            // line 94
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.register"]);
            echo "</button>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
</form>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/signup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 94,  208 => 93,  199 => 90,  196 => 89,  192 => 88,  185 => 84,  181 => 83,  172 => 77,  164 => 72,  160 => 71,  151 => 65,  147 => 63,  138 => 57,  134 => 56,  125 => 50,  121 => 48,  119 => 47,  114 => 45,  109 => 43,  105 => 42,  101 => 41,  92 => 39,  88 => 38,  81 => 36,  73 => 31,  69 => 30,  60 => 24,  52 => 19,  48 => 18,  39 => 12,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}

<div class=\"message-box\">You cannot register for an account while logged in.</div>

{% else %}
<form
        data-request-validate
        data-request-flash
        data-request=\"onRegister\"
\t\tid =\"signupForm\">
    <div class=\"form-group\">
        <label for=\"registerFirstName\">{{ \"clake.userextended::lang.components.account.firstname\"|trans }}</label>
        <input
                name=\"first_name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerFirstName\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder='{{ \"clake.userextended::lang.components.account.enterfname\"|trans }}' />
    </div>
    <span data-validate-for=\"first_name\"></span><br>

    <div class=\"form-group\">
        <label for=\"registerLastName\">{{ \"clake.userextended::lang.components.account.lastname\"|trans }}</label>
        <input
                name=\"last_name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerLastName\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder='{{ \"clake.userextended::lang.components.account.enterlname\"|trans }}' />
    </div>
    <span data-validate-for=\"last_name\"></span><br>

    <div class=\"form-group\">
        <label for=\"register{{account.signUp}}\">{{account.signUp|capitalize}}</label>
        <input
                name=\"{{account.signUp}}\"
                type='{% if account.signUp == \"email\" %}email{% else %}text{% endif %}'
                class=\"form-control\"
                id=\"register{{account.signUp}}\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder=\"Enter your {{account.signUp}}\" />
    </div>
    <span data-validate-for=\"{{account.signUp}}\"></span><br>

    {% if account.signUp == \"username\" %}

    <div class=\"form-group\">
        <label for=\"registerEmail\">{{ \"clake.userextended::lang.components.account.email\"|trans }}</label>
        <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder='{{ \"clake.userextended::lang.components.account.enteremail\"|trans }}' />

    </div>
    <span data-validate-for=\"email\"></span><br>

    {% endif %}

    <div class=\"form-group\">
        <label for=\"registerPassword\">{{ \"clake.userextended::lang.components.account.password\"|trans }}</label>
        <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder='{{ \"clake.userextended::lang.components.account.enterpassword\"|trans }}' />
\t</div>
    <span data-validate-for=\"password\"></span><br>

    <div class=\"form-group\">
        <label for=\"registerConfirmPassword\">{{ \"clake.userextended::lang.components.account.confirmpassword\"|trans }}</label>
        <input
                name=\"password_confirmation\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerConfirmPassword\"
\t\t\t\trequired=\"{{attributes.options.validation}}\"
                placeholder='{{ \"clake.userextended::lang.components.account.confirmpassword\"|trans }}' />
    </div>
    <span data-validate-for=\"password_confirmation\"></span><br>

    {% for setting,attributes in account.createSettings %}

    {{attributes.html|raw}} <br>

    {% endfor %}

    <button data-attach-loading type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">{{ \"clake.userextended::lang.components.account.register\"|trans }}</button>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
</form>

{% endif %}", "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/signup.htm", "");
    }
}
