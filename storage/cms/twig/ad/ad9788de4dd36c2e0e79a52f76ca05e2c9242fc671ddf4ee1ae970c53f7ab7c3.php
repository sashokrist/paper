<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/account/update.htm */
class __TwigTemplate_c13a73fe723f1cf786e6fefb5291f00db730b355ac172dbdc3802ed418ee383e extends Twig_Template
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
";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate", ["id" => "main_update_form", "model" => ($context["user"] ?? null), "data-request-validate" => "", "data-request-flash" => ""]]);
            echo "

<div id=\"updateForm\">

\t<div class=\"form-group\">
\t\t<label for=\"accountName\">";
            // line 8
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.fullname"]);
            echo "</label>
\t\t<input 
\t\t\tname=\"name\" 
\t\t\ttype=\"text\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountName\"
\t\t\tvalue=\"";
            // line 14
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "name"]);
            echo "\">
\t</div>
\t<span data-validate-for=\"name\"></span><br>

\t<div class=\"form-group\">
\t\t<label for=\"accountEmail\">";
            // line 19
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.email"]);
            echo "</label>
\t\t<input 
\t\t\tname=\"email\" 
\t\t\ttype=\"email\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountEmail\"
\t\t\tvalue=\"";
            // line 25
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "email"]);
            echo "\">
\t</div>
\t<span data-validate-for=\"email\"></span><br>

\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "timezonesEnabled", [])) {
                // line 30
                echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"accountTimezone\">";
                // line 31
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.timezone"]);
                echo "</label>
\t\t\t<select
\t\t\t\t\tname=\"timezone\"
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"accountTimezone\">
\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "timezoneOptions", []));
                foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                    // line 37
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" ";
                    if (($context["id"] == twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "myTimezone", []))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</option>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t</select>
\t\t</div>
\t\t<span data-validate-for=\"timezone\"></span><br>
\t";
            }
            // line 43
            echo "
\t<div class=\"form-group\">
\t\t<label for=\"accountPassword\">";
            // line 45
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.newpassword"]);
            echo "</label>
\t\t<input 
\t\t\tname=\"password\" 
\t\t\ttype=\"password\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountPassword\">
\t</div>
\t<span data-validate-for=\"password\"></span><br>

\t<div class=\"form-group\">
\t\t<label for=\"accountPasswordConfirm\">";
            // line 55
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.confirmnewpassword"]);
            echo "</label>
\t\t<input 
\t\t\tname=\"password_confirmation\" 
\t\t\ttype=\"password\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountPasswordConfirm\">
\t</div>
\t<span data-validate-for=\"password_confirmation\"></span><br>

\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "updateSettings", []));
            foreach ($context['_seq'] as $context["setting"] => $context["attributes"]) {
                // line 65
                echo "
\t\t";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["attributes"], "html", []);
                echo " <br>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['setting'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "</div>

<button data-attach-loading=\"\" type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">";
            // line 71
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.account.save"]);
            echo "</button><br><br>

<button data-request=\"account::onCloseAccount\" class=\"btn btn-default\" id=\"closeAccount\">Close Account</button><br><br>

<div class=\"alert alert-danger\" data-validate-error>
\t<p data-message></p>
</div>
";
            // line 78
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "


";
            // line 81
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["files" => true, "request" => "onChangeAvatar"]]);
            echo "
\t<div class=\"form-group\">
\t\t<label for=\"accountAvatar\">Avatar</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t<div class=\"avatar-small center-in-parent\">
\t\t\t\t\t<div class=\"responsive-circle center-in-parent\" style=\"background-image:url(";
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "userAvatar", []), "path", [])) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "userAvatar", []), "path", []), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->extensions['System\Twig\Extension']->appFilter("plugins/clake/userextended/assets/img/default_user.png");
                echo " ";
            }
            echo ")\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> <br>
\t\t<input
\t\t\t\tname=\"avatar\"
\t\t\t\ttype=\"file\"
\t\t\t\tclass=\"form-control\"
\t\t\t\tid=\"accountAvatar\"
\t\t>
\t</div>

\t<button type=\"submit\" class=\"btn btn-default\" id=\"changeAvatar\">Change Avatar</button><br><br>

";
            // line 101
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

";
        } else {
            // line 104
            echo "
<div class=\"message-box\">You are not logged in.</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 104,  206 => 101,  181 => 87,  172 => 81,  166 => 78,  156 => 71,  152 => 69,  143 => 66,  140 => 65,  136 => 64,  124 => 55,  111 => 45,  107 => 43,  101 => 39,  86 => 37,  82 => 36,  74 => 31,  71 => 30,  69 => 29,  62 => 25,  53 => 19,  45 => 14,  36 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}

{{ form_ajax('onUpdate', { id: 'main_update_form', model: user, 'data-request-validate': '', 'data-request-flash': '' }) }}

<div id=\"updateForm\">

\t<div class=\"form-group\">
\t\t<label for=\"accountName\">{{ \"clake.userextended::lang.components.account.fullname\"|trans }}</label>
\t\t<input 
\t\t\tname=\"name\" 
\t\t\ttype=\"text\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountName\"
\t\t\tvalue=\"{{ form_value('name') }}\">
\t</div>
\t<span data-validate-for=\"name\"></span><br>

\t<div class=\"form-group\">
\t\t<label for=\"accountEmail\">{{ \"clake.userextended::lang.components.account.email\"|trans }}</label>
\t\t<input 
\t\t\tname=\"email\" 
\t\t\ttype=\"email\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountEmail\"
\t\t\tvalue=\"{{ form_value('email') }}\">
\t</div>
\t<span data-validate-for=\"email\"></span><br>

\t{% if account.timezonesEnabled %}
\t\t<div class=\"form-group\">
\t\t\t<label for=\"accountTimezone\">{{ \"clake.userextended::lang.components.account.timezone\"|trans }}</label>
\t\t\t<select
\t\t\t\t\tname=\"timezone\"
\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\tid=\"accountTimezone\">
\t\t\t\t{% for id,name in account.timezoneOptions %}
\t\t\t\t\t<option value=\"{{id}}\" {% if id == account.myTimezone %} selected=\"selected\" {% endif %}>{{name}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<span data-validate-for=\"timezone\"></span><br>
\t{% endif %}

\t<div class=\"form-group\">
\t\t<label for=\"accountPassword\">{{ \"clake.userextended::lang.components.account.newpassword\"|trans }}</label>
\t\t<input 
\t\t\tname=\"password\" 
\t\t\ttype=\"password\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountPassword\">
\t</div>
\t<span data-validate-for=\"password\"></span><br>

\t<div class=\"form-group\">
\t\t<label for=\"accountPasswordConfirm\">{{ \"clake.userextended::lang.components.account.confirmnewpassword\"|trans }}</label>
\t\t<input 
\t\t\tname=\"password_confirmation\" 
\t\t\ttype=\"password\" 
\t\t\tclass=\"form-control\" 
\t\t\tid=\"accountPasswordConfirm\">
\t</div>
\t<span data-validate-for=\"password_confirmation\"></span><br>

\t{% for setting,attributes in account.updateSettings %}

\t\t{{attributes.html|raw}} <br>

\t{% endfor %}
</div>

<button data-attach-loading=\"\" type=\"submit\" class=\"btn btn-default\" id=\"submitButton\">{{ \"clake.userextended::lang.components.account.save\"|trans }}</button><br><br>

<button data-request=\"account::onCloseAccount\" class=\"btn btn-default\" id=\"closeAccount\">Close Account</button><br><br>

<div class=\"alert alert-danger\" data-validate-error>
\t<p data-message></p>
</div>
{{ form_close() }}


{{ form_open({ files: true, request: 'onChangeAvatar' }) }}
\t<div class=\"form-group\">
\t\t<label for=\"accountAvatar\">Avatar</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t<div class=\"avatar-small center-in-parent\">
\t\t\t\t\t<div class=\"responsive-circle center-in-parent\" style=\"background-image:url({% if account.userAvatar.path %} {{account.userAvatar.path}} {% else %} {{'plugins/clake/userextended/assets/img/default_user.png'|app}} {% endif %})\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> <br>
\t\t<input
\t\t\t\tname=\"avatar\"
\t\t\t\ttype=\"file\"
\t\t\t\tclass=\"form-control\"
\t\t\t\tid=\"accountAvatar\"
\t\t>
\t</div>

\t<button type=\"submit\" class=\"btn btn-default\" id=\"changeAvatar\">Change Avatar</button><br><br>

{{ form_close() }}

{% else %}

<div class=\"message-box\">You are not logged in.</div>

{% endif %}
", "/home/vagrant/Code/paper/plugins/clake/userextended/components/account/update.htm", "");
    }
}
