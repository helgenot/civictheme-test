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

/* civictheme:back-to-top */
class __TwigTemplate_ab1cd4ee805e706a6326ddc8434ee911 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--back-to-top"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:back-to-top"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:back-to-top"));
        // line 12
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "<span class=\"ct-visually-hidden\">Return focus to the top of the page</span>";
            // line 14
            yield from $this->load("civictheme:icon", 14)->unwrap()->yield(CoreExtension::toArray(["symbol" => "up-arrow"]));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield "<div
  class=\"ct-back-to-top ";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\"
  data-component-name=\"back-to-top\"
  data-scrollspy
  data-scrollspy-offset=\"400\"
  ";
        // line 22
        if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        }
        // line 23
        yield ">
  ";
        // line 24
        yield from $this->load("civictheme:button", 24)->unwrap()->yield(CoreExtension::toArray(["kind" => "link", "type" => "", "url" => "#top", "text" =>         // line 28
($context["text"] ?? null), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-skip-to-target" => ""]), "modifier_class" => "ct-back-to-top__button"]));
        // line 32
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modifier_class", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:back-to-top";
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
        return array (  76 => 32,  74 => 28,  73 => 24,  70 => 23,  66 => 22,  59 => 18,  56 => 17,  52 => 14,  50 => 13,  48 => 12,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:back-to-top", "themes/contrib/civictheme/components/02-molecules/back-to-top/back-to-top.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 12, "include" => 14, "if" => 22];
        static $filters = ["escape" => 18, "default" => 18];
        static $functions = ["create_attribute" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape', 'default'],
                ['create_attribute'],
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
