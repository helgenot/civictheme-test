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

/* civictheme:label */
class __TwigTemplate_adf4e7120904ad45e59ed80f58529d9f extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--label"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:label"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:label"));
        // line 18
        yield "
";
        // line 19
        $context["tag"] = ((CoreExtension::inFilter(($context["tag"] ?? null), ["label", "legend"])) ? (($context["tag"] ?? null)) : ("label"));
        // line 20
        $context["size"] = ((CoreExtension::inFilter(($context["size"] ?? null), ["extra-large", "large", "regular", "small", "extra-small"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 21
        $context["size_class"] = Twig\Extension\CoreExtension::sprintf("ct-label--%s", ($context["size"] ?? null));
        // line 22
        $context["required_class"] = (((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-label--required") : (""));
        // line 23
        $context["required_text"] = ((array_key_exists("required_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["required_text"] ?? null), "(required)")) : ("(required)"));
        // line 24
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 25
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["size_class"] ?? null), ($context["required_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 26
        yield "
";
        // line 27
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true);
            yield "
  class=\"ct-label ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
  ";
            // line 30
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["for"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " for=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["for"] ?? null), "html", null, true);
                yield "\" ";
            }
            // line 31
            yield "  ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 32
            yield "  >";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            if ((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <span class=\"ct-label__required\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["required_text"] ?? null), "html", null, true);
                yield "</span>";
            }
            // line 34
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true);
            yield ">";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_required", "theme", "content", "for", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:label";
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
        return array (  99 => 34,  92 => 33,  90 => 32,  85 => 31,  79 => 30,  75 => 29,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  61 => 24,  59 => 23,  57 => 22,  55 => 21,  53 => 20,  51 => 19,  48 => 18,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:label", "themes/contrib/civictheme/components/01-atoms/label/label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 19, "if" => 27];
        static $filters = ["format" => 21, "default" => 23, "escape" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['format', 'default', 'escape'],
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
