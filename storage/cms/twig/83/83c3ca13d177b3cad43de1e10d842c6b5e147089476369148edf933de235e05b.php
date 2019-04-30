<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/user/default.htm */
class __TwigTemplate_32861db99b5f8a7a66d49d56d388471f40b218ed636c02b9fa2e7540974b415b extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "type", []) == "random")) {
            // line 2
            echo "<h4><div style=\"width: 100%; text-align: center\">Here are some random users:</div></h4>
<div class=\"table\">

    <div class=\"table-header\">
        <div class=\"table-cell-20\">Picture</div>
        <div class=\"table-cell-30\">Username</div>
        <div class=\"table-cell-30\">Last Online</div>
        <div class=\"table-cell-20\">Add Friend</div>
    </div>

\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "randomUsers", [])) {
                // line 13
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "randomUsers", []));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 14
                    echo "
    <div class=\"table-row\">
        <a href=\"#\" class=\"table-cell-20\" data-request-data=\"id: ";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                    echo "\" data-request=\"ueuser::onVisitProfile\">
            <div class=\"avatar-small center-in-parent\"><div class=\"responsive-circle center-in-parent\" style=\"background-image:url(";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", []), "path", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", []), "path", []), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo $this->extensions['System\Twig\Extension']->appFilter("plugins/clake/userextended/assets/img/default_user.png");
                        echo " ";
                    }
                    echo ")\"></div></div> <br>
        </a>
        <a href=\"#\" class=\"table-cell-30\" data-request-data=\"id: ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                    echo "\" data-request=\"ueuser::onVisitProfile\">
            ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                    echo "
        </a>
        <a href=\"#\" class=\"table-cell-30\" data-request-data=\"id: ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                    echo "\" data-request=\"ueuser::onVisitProfile\">
\t\t\t";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, $context["user"], "last_seen", [])) {
                        // line 24
                        echo "\t\t\t\t";
                        echo Clake\Userextended\Classes\TimezoneHandler::twigRelativeTimeString(twig_get_attribute($this->env, $this->source, $context["user"], "last_seen", []));
                        echo "
\t\t\t";
                    } else {
                        // line 26
                        echo "\t\t\t\tNever
\t\t\t";
                    }
                    // line 28
                    echo "        </a>
\t\t<div class=\"table-cell-20\">
\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "isFriend", [0 => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])], "method")) {
                        // line 31
                        echo "\t\t\t\t<p>Friends!</p>
\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 32
($context["ueuser"] ?? null), "isRequested", [0 => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])], "method")) {
                        // line 33
                        echo "\t\t\t\t<p>Request pending.</p>
\t\t\t";
                    } else {
                        // line 35
                        echo "\t\t\t\t<button data-request-data=\"id: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                        echo "\" data-request=\"ueuser::onFriendUser\">Add Friend</button>
\t\t\t";
                    }
                    // line 37
                    echo "\t\t</div>
    </div>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "</div>
\t";
            } else {
                // line 43
                echo "\t<p>No registered users.</p>
\t";
            }
            // line 45
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 46
($context["ueuser"] ?? null), "type", []) == "single")) {
            // line 47
            echo "
    <a href=\"#\" style=\"text-decoration: none;\" data-request-data=\"id: ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "singleUser", []), "id", []), "html", null, true);
            echo "\" data-request=\"userlist::onFriendUser\">

        <div class=\"userblock\" style=\"width:100%;min-height:50px;padding:5px;\">
            <span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "singleUser", []), "name", []), "html", null, true);
            echo "</span><br>
            <span style=\"margin-left:7px;\">";
            // line 52
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.friend.lastonline"]);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "singleUser", []), "last_seen", []), "html", null, true);
            echo "</span><br>
        </div>

    </a>

";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 57
($context["ueuser"] ?? null), "type", []) == "search")) {
            // line 58
            echo "
    <div style=\"padding:15px;\">
        <form data-request=\"ueuser::onSearch\">
            Search Phrase: <input type=\"text\"  name=\"phrase\" />
            <input type=\"submit\" value=\"";
            // line 62
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.user.search"]);
            echo "\" />
        </form>
    </div>

    <br>

    <div id=\"userSearchResults\"></div>

";
        } else {
            // line 71
            echo "\t";
            ob_start();
            echo "ueuser::";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "template"], "method"), "html", null, true);
            echo "_profile";
            $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 72
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(($context["name"] ?? null)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 73
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/user/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 73,  183 => 72,  176 => 71,  164 => 62,  158 => 58,  156 => 57,  146 => 52,  142 => 51,  136 => 48,  133 => 47,  131 => 46,  128 => 45,  124 => 43,  120 => 41,  111 => 37,  105 => 35,  101 => 33,  99 => 32,  96 => 31,  94 => 30,  90 => 28,  86 => 26,  80 => 24,  78 => 23,  74 => 22,  69 => 20,  65 => 19,  52 => 17,  48 => 16,  44 => 14,  39 => 13,  37 => 12,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if ueuser.type == 'random' %}
<h4><div style=\"width: 100%; text-align: center\">Here are some random users:</div></h4>
<div class=\"table\">

    <div class=\"table-header\">
        <div class=\"table-cell-20\">Picture</div>
        <div class=\"table-cell-30\">Username</div>
        <div class=\"table-cell-30\">Last Online</div>
        <div class=\"table-cell-20\">Add Friend</div>
    </div>

\t{% if ueuser.randomUsers %}
    {% for user in ueuser.randomUsers %}

    <div class=\"table-row\">
        <a href=\"#\" class=\"table-cell-20\" data-request-data=\"id: {{user.id}}\" data-request=\"ueuser::onVisitProfile\">
            <div class=\"avatar-small center-in-parent\"><div class=\"responsive-circle center-in-parent\" style=\"background-image:url({% if user.avatar.path %} {{user.avatar.path}} {% else %} {{'plugins/clake/userextended/assets/img/default_user.png'|app}} {% endif %})\"></div></div> <br>
        </a>
        <a href=\"#\" class=\"table-cell-30\" data-request-data=\"id: {{user.id}}\" data-request=\"ueuser::onVisitProfile\">
            {{user.name}}
        </a>
        <a href=\"#\" class=\"table-cell-30\" data-request-data=\"id: {{user.id}}\" data-request=\"ueuser::onVisitProfile\">
\t\t\t{% if user.last_seen %}
\t\t\t\t{{user.last_seen|relative}}
\t\t\t{% else %}
\t\t\t\tNever
\t\t\t{% endif %}
        </a>
\t\t<div class=\"table-cell-20\">
\t\t\t{% if ueuser.isFriend(user.id) %}
\t\t\t\t<p>Friends!</p>
\t\t\t{% elseif ueuser.isRequested(user.id) %}
\t\t\t\t<p>Request pending.</p>
\t\t\t{% else %}
\t\t\t\t<button data-request-data=\"id: {{user.id}}\" data-request=\"ueuser::onFriendUser\">Add Friend</button>
\t\t\t{% endif %}
\t\t</div>
    </div>

    {% endfor %}
</div>
\t{% else %}
\t<p>No registered users.</p>
\t{% endif %}

{% elseif ueuser.type == 'single' %}

    <a href=\"#\" style=\"text-decoration: none;\" data-request-data=\"id: {{ueuser.singleUser.id}}\" data-request=\"userlist::onFriendUser\">

        <div class=\"userblock\" style=\"width:100%;min-height:50px;padding:5px;\">
            <span>{{ueuser.singleUser.name}}</span><br>
            <span style=\"margin-left:7px;\">{{ \"clake.userextended::lang.components.friend.lastonline\"|trans }}: {{ueuser.singleUser.last_seen}}</span><br>
        </div>

    </a>

{% elseif ueuser.type == 'search' %}

    <div style=\"padding:15px;\">
        <form data-request=\"ueuser::onSearch\">
            Search Phrase: <input type=\"text\"  name=\"phrase\" />
            <input type=\"submit\" value=\"{{ 'clake.userextended::lang.components.user.search'|trans }}\" />
        </form>
    </div>

    <br>

    <div id=\"userSearchResults\"></div>

{% else %}
\t{% set name %}ueuser::{{__SELF__.property('template')}}_profile{% endset %}
\t{% partial name %}

{% endif %}", "/home/vagrant/Code/paper/plugins/clake/userextended/components/user/default.htm", "");
    }
}
