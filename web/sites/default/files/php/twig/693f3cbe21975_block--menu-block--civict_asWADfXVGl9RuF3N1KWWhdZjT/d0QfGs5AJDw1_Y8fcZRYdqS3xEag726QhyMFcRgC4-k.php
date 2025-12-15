<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig */
class __TwigTemplate_93b562ad927780cb2c6c22820cafea80 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->load("civictheme:navigation", 7)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 8
($context["theme"] ?? null), "items" =>         // line 9
($context["items"] ?? null), "type" => (((        // line 10
($context["dropdown"] ?? null) == "none")) ? ("inline") : (($context["dropdown"] ?? null))), "dropdown_columns" =>         // line 11
($context["dropdown_columns"] ?? null), "dropdown_columns_fill" =>         // line 12
($context["dropdown_columns_fill"] ?? null), "is_animated" =>         // line 13
($context["is_animated"] ?? null), "menu_id" =>         // line 14
($context["menu_id"] ?? null), "variant" =>         // line 15
($context["variant"] ?? null), "modifier_class" => ("ct-primary-navigation " . ((        // line 16
array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")))]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "items", "dropdown", "dropdown_columns", "dropdown_columns_fill", "is_animated", "menu_id", "variant", "modifier_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  53 => 16,  52 => 15,  51 => 14,  50 => 13,  49 => 12,  48 => 11,  47 => 10,  46 => 9,  45 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig", "/var/www/html/web/themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 7];
        static $filters = ["default" => 16];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['default'],
                [],
                $this->source
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
