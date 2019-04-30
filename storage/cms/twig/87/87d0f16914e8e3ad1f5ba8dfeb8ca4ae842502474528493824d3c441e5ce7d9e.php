<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/account/login.htm */
class __TwigTemplate_c47a44fa2b3941dcc8ef9bdff9cc07ca54c2aace9b35deb482b49faec3e5064c extends Twig_Template
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
<div class=\"message-box\">You are already logged in.</div>

";
        } else {
            // line 6
            echo "<div class=\"container\">
\t<form
\t\t\tdata-request-validate
\t\t\tdata-request-flash
\t\t\tdata-request=\"onLogin\"
\t\t\tid=\"signupForm\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"register";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", [])), "html", null, true);
            echo "</label>
\t\t\t<input
\t\t\t\t\tname=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"
\t\t\t\t\ttype='";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []) == "email")) {
                echo "email";
            } else {
                echo "text";
            }
            echo "'
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"register";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"
\t\t\t\t\tvalue = \"\"
\t\t\t\t\tplaceholder=\"Enter your ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\" />
\t\t<!--<p class=\"error-box\" id=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "_error\"> You need to enter a ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo ".</p>-->
\t\t</div>
\t\t<span data-validate-for=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "signUp", []), "html", null, true);
            echo "\"></span><br>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"userSigninPassword\">";
            // line 26
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.password"]);
            echo "</label>
\t\t\t<input
\t\t\t\t\tname=\"password\"
\t\t\t\t\ttype=\"password\"
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"userSigninPassword\"
\t\t\t\t\tvalue = \"\";
\t\t\t\t\tplaceholder=\"Enter your password\" />
\t\t\t<!--<p class=\"error-box\" id=\"password_error\"> You need to enter a password.</p>-->
\t\t</div>
\t\t\t<span data-validate-for=\"password\"></span><br><br>

\t\t<button data-attach-loading type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">";
            // line 38
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.signin"]);
            echo "</button><br><br>
\t\t<div class=\"alert alert-danger\" data-validate-error>
\t\t\t<p data-message></p>
\t\t</div>
\t</form>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  82 => 26,  76 => 23,  69 => 21,  65 => 20,  60 => 18,  51 => 16,  47 => 15,  40 => 13,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}

<div class=\"message-box\">You are already logged in.</div>

{% else %}
<div class=\"container\">
\t<form
\t\t\tdata-request-validate
\t\t\tdata-request-flash
\t\t\tdata-request=\"onLogin\"
\t\t\tid=\"signupForm\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"register{{account.signUp}}\">{{account.signUp|capitalize}}</label>
\t\t\t<input
\t\t\t\t\tname=\"{{account.signUp}}\"
\t\t\t\t\ttype='{% if account.signUp == \"email\" %}email{% else %}text{% endif %}'
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"register{{account.signUp}}\"
\t\t\t\t\tvalue = \"\"
\t\t\t\t\tplaceholder=\"Enter your {{account.signUp}}\" />
\t\t<!--<p class=\"error-box\" id=\"{{account.signUp}}_error\"> You need to enter a {{account.signUp}}.</p>-->
\t\t</div>
\t\t<span data-validate-for=\"{{account.signUp}}\"></span><br>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"userSigninPassword\">{{ \"clake.userextended::lang.components.account.password\"|trans }}</label>
\t\t\t<input
\t\t\t\t\tname=\"password\"
\t\t\t\t\ttype=\"password\"
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"userSigninPassword\"
\t\t\t\t\tvalue = \"\";
\t\t\t\t\tplaceholder=\"Enter your password\" />
\t\t\t<!--<p class=\"error-box\" id=\"password_error\"> You need to enter a password.</p>-->
\t\t</div>
\t\t\t<span data-validate-for=\"password\"></span><br><br>

\t\t<button data-attach-loading type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">{{ \"clake.userextended::lang.components.account.signin\"|trans }}</button><br><br>
\t\t<div class=\"alert alert-danger\" data-validate-error>
\t\t\t<p data-message></p>
\t\t</div>
\t</form>
</div>

{% endif %}
", "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/login.htm", "");
    }
}
