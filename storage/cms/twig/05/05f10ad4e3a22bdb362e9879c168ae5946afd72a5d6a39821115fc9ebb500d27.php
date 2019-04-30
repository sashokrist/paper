<?php

/* /home/vagrant/Code/paper/plugins/clake/userextended/components/user/social_profile.htm */
class __TwigTemplate_1fdd06186810b1491632d32953e16d608dc359e7cc2f8c52cdf76497963154d0 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", [])) {
            // line 2
            echo "
<div class=\"row container\" style=\"margin-top:10px;\">

    <div class=\"col-sm-12 \">

        <div class=\"row\" style=\"text-align: center;\">

            <div class=\"col-sm-12 col-md-3\"></div>
            <div class=\"col-sm-12 col-md-6\" style=\" padding:7px;\">
                <div class=\"avatar-small center-in-parent\">
                    <div class=\"responsive-circle center-in-parent\" style=\"background-image:url(";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "userAvatar", []), "path", [])) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "userAvatar", []), "path", []), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->extensions['System\Twig\Extension']->appFilter("plugins/clake/userextended/assets/img/default_user.png");
                echo " ";
            }
            echo ")\">
                    </div>
                </div>


                <div style=\"width:100%;text-align:center;margin-bottom: 10px;margin-top:10px;\">
                    <span style=\"font-size:40px;font-style:bold;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "name", []), "html", null, true);
            echo "</span> <br>
                    ";
            // line 19
            if (((twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", []))) &&  !twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "isFriend", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", [])], "method"))) {
                // line 20
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "isRequested", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", [])], "method")) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<p>Friend request pending!</p>
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t<button data-request-data=\"id: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", []), "html", null, true);
                    echo "\" data-request=\"ueuser::onFriendUser\">Add Friend</button>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
            }
            // line 26
            echo "                </div>

                ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "locked", []) || (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", []))))) {
                // line 29
                echo "                    <div style=\"width:100%;text-align:center;\">
                          <span style=\"font-size:15px;font-style:italic;width:100%;text-align:center;\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "email", []), "html", null, true);
                echo "</span>
                    </div>
\t\t\t    ";
            }
            // line 33
            echo "            </div>
        </div>
        <div class=\"row\" style=\"text-align: center;\">
            <div class=\"col-sm-12 col-md-12\" style=\"width: 100%; background-color: lightblue; padding:5px;\">
                <div class =\"row\">
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        Stars: 0
                    </div>
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        ThumbUps: 0
                    </div>
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        Gold: 5
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-12\">

                ";
            // line 51
            if ((( !twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "locked", []) && twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", [])) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", [])))) {
                // line 52
                echo "                    <div>See more of this persons profile by adding them as a friend</div>
                ";
            }
            // line 54
            echo "            </div>
        </div>

        <div class=\"row\" style=\"margin-top:9px;\">
            <div class=\"col-sm-12 col-md-12\">
                <h4>Comments</h4>
                <div id=\"comment_section\">

                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "comments", []));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 63
                echo "                    <div class=\"userblock\">
                        <a style=\"display:inline-block;text-decoration:none;height:50px;width:50px;\" href=\"#\" data-request-data=\"id: ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", []), "html", null, true);
                echo "\" data-request=\"ueuser::onVisitProfile\">
                            <div style=\"display:inline-block;\" class=\"avatar-small center-in-parent\"><div class=\"responsive-circle center-in-parent\" style=\"display:inline-block;background-image:url(";
                // line 65
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "avatar", []), "path", [])) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "avatar", []), "path", []), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo $this->extensions['System\Twig\Extension']->appFilter("plugins/clake/userextended/assets/img/default_user.png");
                    echo " ";
                }
                echo ")\"></div></div> <br>
                        </a>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
                echo " <br>
                        <span><a href=\"#\" data-request-data=\"commentid: ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", []), "html", null, true);
                echo "\" data-request=\"ueuser::onDeleteComment\"><span class=\"glyphicon glyphicon-remove\">X</span></a></span> <i style=\"font-size:11px;\">";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["clake.userextended::lang.components.user.writtenat"]);
                echo " ";
                echo Clake\Userextended\Classes\TimezoneHandler::twigRelativeTimeString(twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", []));
                echo " by <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "name", []), "html", null, true);
                echo "</a></i>
                        <hr>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
                    ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", [])) {
                echo "<h5>Write a comment</h5>";
            }
            // line 73
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "locked", []) || (twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "loggedIn", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ueuser"] ?? null), "user", []), "id", []))))) {
                // line 74
                echo "                    <form data-request=\"ueuser::onComment\">
                        <textarea rows=\"2\" name=\"comment\"></textarea> <br>
                        <input type=\"submit\" value=\"Comment\" />
                    </form>
                    ";
            } else {
                // line 79
                echo "                    Leave a comment by ";
                if ( !($context["user"] ?? null)) {
                    echo " signing in and ";
                }
                echo " friending them.
                    ";
            }
            // line 81
            echo "
                </div>

            </div>
        </div>
    </div>
</div>

";
        } else {
            // line 90
            echo "
<div class=\"row container\" style=\"margin-top:10px;\">
    <div class=\"col-sm-12 \">
        <div class=\"row\" style=\"text-align: center;\">
            <div class=\"col-sm-12 col-md-12\">
                <h3>It appears this user doesn't exist.</h3>
            </div>
        </div>
    </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/plugins/clake/userextended/components/user/social_profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 90,  197 => 81,  189 => 79,  182 => 74,  179 => 73,  175 => 72,  172 => 71,  154 => 67,  150 => 66,  138 => 65,  134 => 64,  131 => 63,  127 => 62,  117 => 54,  113 => 52,  111 => 51,  91 => 33,  85 => 30,  82 => 29,  80 => 28,  76 => 26,  73 => 25,  67 => 23,  63 => 21,  60 => 20,  58 => 19,  54 => 18,  37 => 12,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if ueuser.user %}

<div class=\"row container\" style=\"margin-top:10px;\">

    <div class=\"col-sm-12 \">

        <div class=\"row\" style=\"text-align: center;\">

            <div class=\"col-sm-12 col-md-3\"></div>
            <div class=\"col-sm-12 col-md-6\" style=\" padding:7px;\">
                <div class=\"avatar-small center-in-parent\">
                    <div class=\"responsive-circle center-in-parent\" style=\"background-image:url({% if ueuser.userAvatar.path %} {{ueuser.userAvatar.path}} {% else %} {{'plugins/clake/userextended/assets/img/default_user.png'|app}} {% endif %})\">
                    </div>
                </div>


                <div style=\"width:100%;text-align:center;margin-bottom: 10px;margin-top:10px;\">
                    <span style=\"font-size:40px;font-style:bold;\">{{ueuser.user.name}}</span> <br>
                    {% if ueuser.loggedIn and ueuser.loggedIn.id != ueuser.user.id and not ueuser.isFriend(ueuser.user.id) %}
\t\t\t\t\t\t{% if ueuser.isRequested(ueuser.user.id) %}
\t\t\t\t\t\t\t<p>Friend request pending!</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<button data-request-data=\"id: {{ueuser.user.id}}\" data-request=\"ueuser::onFriendUser\">Add Friend</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
                </div>

                {% if ueuser.locked or ueuser.loggedIn and ueuser.loggedIn.id == ueuser.user.id%}
                    <div style=\"width:100%;text-align:center;\">
                          <span style=\"font-size:15px;font-style:italic;width:100%;text-align:center;\">{{ueuser.user.email}}</span>
                    </div>
\t\t\t    {% endif %}
            </div>
        </div>
        <div class=\"row\" style=\"text-align: center;\">
            <div class=\"col-sm-12 col-md-12\" style=\"width: 100%; background-color: lightblue; padding:5px;\">
                <div class =\"row\">
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        Stars: 0
                    </div>
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        ThumbUps: 0
                    </div>
                    <div class=\"col-sm-4\" style=\"text-align: center;\">
                        Gold: 5
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-12\">

                {% if not ueuser.locked and ueuser.loggedIn and ueuser.loggedIn.id != ueuser.user.id %}
                    <div>See more of this persons profile by adding them as a friend</div>
                {% endif %}
            </div>
        </div>

        <div class=\"row\" style=\"margin-top:9px;\">
            <div class=\"col-sm-12 col-md-12\">
                <h4>Comments</h4>
                <div id=\"comment_section\">

                    {% for comment in ueuser.comments %}
                    <div class=\"userblock\">
                        <a style=\"display:inline-block;text-decoration:none;height:50px;width:50px;\" href=\"#\" data-request-data=\"id: {{user.id}}\" data-request=\"ueuser::onVisitProfile\">
                            <div style=\"display:inline-block;\" class=\"avatar-small center-in-parent\"><div class=\"responsive-circle center-in-parent\" style=\"display:inline-block;background-image:url({% if comment.author.avatar.path %} {{comment.author.avatar.path}} {% else %} {{'plugins/clake/userextended/assets/img/default_user.png'|app}} {% endif %})\"></div></div> <br>
                        </a>{{comment.content}} <br>
                        <span><a href=\"#\" data-request-data=\"commentid: {{comment.id}}\" data-request=\"ueuser::onDeleteComment\"><span class=\"glyphicon glyphicon-remove\">X</span></a></span> <i style=\"font-size:11px;\">{{ \"clake.userextended::lang.components.user.writtenat\"|trans }} {{comment.created_at|relative}} by <a href=\"{{comment.author.id}}\">{{comment.author.name}}</a></i>
                        <hr>
                    </div>
                    {% endfor %}

                    {% if ueuser.loggedIn %}<h5>Write a comment</h5>{% endif %}
                    {% if ueuser.locked or ueuser.loggedIn and ueuser.loggedIn.id == ueuser.user.id%}
                    <form data-request=\"ueuser::onComment\">
                        <textarea rows=\"2\" name=\"comment\"></textarea> <br>
                        <input type=\"submit\" value=\"Comment\" />
                    </form>
                    {% else %}
                    Leave a comment by {% if not user %} signing in and {% endif %} friending them.
                    {% endif %}

                </div>

            </div>
        </div>
    </div>
</div>

{% else %}

<div class=\"row container\" style=\"margin-top:10px;\">
    <div class=\"col-sm-12 \">
        <div class=\"row\" style=\"text-align: center;\">
            <div class=\"col-sm-12 col-md-12\">
                <h3>It appears this user doesn't exist.</h3>
            </div>
        </div>
    </div>
</div>

{% endif %}", "/home/vagrant/Code/paper/plugins/clake/userextended/components/user/social_profile.htm", "");
    }
}
