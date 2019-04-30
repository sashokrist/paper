<?php

/* /home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_8d24bd911c71e2dd3323960f8db49fd02368d986a520e7659a63812a4912d5e6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <link href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css"]);
        // line 12
        echo "\" rel=\"stylesheet\">
  ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "  <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
</head>
<body>
<div style=\"padding-bottom: 100px;\">
  ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</div>

<section id=\"page\" class=\"container m-b-3\">
  ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "</section>
";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"]);
        // line 33
        echo "\"></script>
";
        // line 34
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  86 => 35,  71 => 34,  68 => 33,  65 => 25,  61 => 24,  58 => 23,  56 => 22,  51 => 19,  47 => 18,  39 => 14,  36 => 13,  33 => 12,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <link href=\"{{ [
    'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
    'assets/vendor/font-awesome/css/font-awesome.min.css',
    'assets/vendor/animate.css/animate.min.css',
    'assets/vendor/plyr/dist/plyr.css'
  ]|theme }}\" rel=\"stylesheet\">
  {% styles %}
  <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
</head>
<body>
<div style=\"padding-bottom: 100px;\">
  {% partial 'navbar' %}
</div>

<section id=\"page\" class=\"container m-b-3\">
  {% page %}
</section>
{% partial 'footer' %}
<script src=\"{{ [
  'assets/vendor/jquery/dist/jquery.min.js',
  'assets/vendor/tether/dist/js/tether.min.js',
  'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
  'assets/vendor/wow/dist/wow.min.js',
  'assets/vendor/holderjs/holder.min.js',
  'assets/vendor/plyr/dist/plyr.js',
  'assets/js/scripts.js'
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/home/vagrant/Code/paper/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
