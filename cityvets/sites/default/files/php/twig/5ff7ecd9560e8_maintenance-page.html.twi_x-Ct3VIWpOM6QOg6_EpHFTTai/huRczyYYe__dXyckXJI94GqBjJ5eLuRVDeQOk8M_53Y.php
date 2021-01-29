<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/pets_zymphonies_theme/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_a54de5ed68e9c8188f4bee337fabe4433a0ab1562d40aa9cc2c41bd6fe0f414f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"layout-container\">

  <main role=\"main\" class=\"maintenance-msg\">
    <header role=\"banner\">
      ";
        // line 16
        if (($context["logo"] ?? null)) {
            // line 17
            echo "        <div class=\"brand logo\">
          <a href=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 18, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
            <img src=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 19, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
          </a>
        </div>
      ";
        }
        // line 23
        echo "
      ";
        // line 24
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 25
            echo "        <div class=\"name-and-slogan\">
          ";
            // line 26
            if (($context["site_name"] ?? null)) {
                // line 27
                echo "           <div class=\"site-name\">
             <a href=\"";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 28, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 28, $this->source), "html", null, true);
                echo "</a>
           </div>
          ";
            }
            // line 31
            echo "
          ";
            // line 32
            if (($context["site_slogan"] ?? null)) {
                // line 33
                echo "            <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 33, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 35
            echo "        </div>";
            // line 36
            echo "      ";
        }
        // line 37
        echo "
    </header>
    <div class=\"clearfix\">
      ";
        // line 40
        if (($context["title"] ?? null)) {
            // line 41
            echo "        <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source), "html", null, true);
            echo "</h1>
      ";
        }
        // line 43
        echo "    <div>
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "

    ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "

  </main>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/pets_zymphonies_theme/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  120 => 44,  117 => 43,  111 => 41,  109 => 40,  104 => 37,  101 => 36,  99 => 35,  93 => 33,  91 => 32,  88 => 31,  78 => 28,  75 => 27,  73 => 26,  70 => 25,  68 => 24,  65 => 23,  56 => 19,  50 => 18,  47 => 17,  45 => 16,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pets_zymphonies_theme/templates/layout/maintenance-page.html.twig", "C:\\xampp\\htdocs\\cityvets\\themes\\pets_zymphonies_theme\\templates\\layout\\maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 18, "t" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
