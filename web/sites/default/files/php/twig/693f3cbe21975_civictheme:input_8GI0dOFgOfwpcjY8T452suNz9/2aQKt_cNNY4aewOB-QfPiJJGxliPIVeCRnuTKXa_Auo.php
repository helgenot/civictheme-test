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

/* civictheme:input */
class __TwigTemplate_a7fb34d8c9e54d9ddde9fd769e3dc5d9 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:input"));
        // line 20
        yield "
";
        // line 21
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 22
        $context["is_invalid_class"] = (((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-input--is-invalid") : (""));
        // line 23
        $context["modifier_class"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["is_invalid_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : (""))));
        // line 24
        yield "
";
        // line 25
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "  <input
    type=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true);
            yield "\"
    class=\"ct-input ";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    name=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 30
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "value=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 31
            yield "    ";
            if ((($tmp = ($context["id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 32
            yield "    ";
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            // line 33
            yield "    ";
            if ((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 34
            yield "    ";
            if ((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-invalid=\"true\"";
            }
            // line 35
            yield "    ";
            if ((($tmp = ($context["placeholder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "placeholder=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 36
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 37
            yield "  />
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "is_invalid", "name", "type", "value", "id", "is_disabled", "is_required", "placeholder", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:input";
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
        return array (  117 => 37,  112 => 36,  105 => 35,  100 => 34,  95 => 33,  90 => 32,  83 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  62 => 26,  60 => 25,  57 => 24,  55 => 23,  53 => 22,  51 => 21,  48 => 20,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:input", "themes/contrib/civictheme/components/01-atoms/input/input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "if" => 25];
        static $filters = ["format" => 21, "default" => 21, "trim" => 23, "escape" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['format', 'default', 'trim', 'escape'],
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
