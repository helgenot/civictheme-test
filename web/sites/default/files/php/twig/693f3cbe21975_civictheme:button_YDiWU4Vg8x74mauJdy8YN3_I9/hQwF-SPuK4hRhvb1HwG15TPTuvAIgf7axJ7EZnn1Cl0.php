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

/* civictheme:button */
class __TwigTemplate_8cb3d5a07622343aece76b2a4f49feaf extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:button"));
        // line 25
        yield "
";
        // line 26
        $context["kind"] = ((CoreExtension::inFilter(($context["kind"] ?? null), ["button", "link", "reset", "submit"])) ? (($context["kind"] ?? null)) : ("button"));
        // line 27
        $context["type"] = ((CoreExtension::inFilter(($context["type"] ?? null), ["primary", "secondary", "tertiary"])) ? (($context["type"] ?? null)) : (null));
        // line 28
        $context["size"] = ((CoreExtension::inFilter(($context["size"] ?? null), ["large", "regular", "small"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 29
        $context["icon_placement"] = ((CoreExtension::inFilter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 30
        $context["type_class"] = (((($tmp = ($context["type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["type"] ?? null))) : (""));
        // line 31
        $context["kind_class"] = (((($tmp = ($context["kind"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["kind"] ?? null))) : (""));
        // line 32
        $context["size_class"] = Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["size"] ?? null));
        // line 33
        $context["dismiss_class"] = (((($tmp = ($context["is_dismissable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-button--dismiss") : (""));
        // line 34
        $context["is_external"] = (((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-button--external") : (""));
        // line 35
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 36
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ($context["kind_class"] ?? null), ($context["size_class"] ?? null), ($context["dismiss_class"] ?? null), ($context["is_external"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 37
        yield "
";
        // line 38
        $context["button_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield from $this->load("civictheme:text-icon", 39)->unwrap()->yield(CoreExtension::toArray(["text" =>             // line 40
($context["text"] ?? null), "is_new_window" =>             // line 41
($context["is_new_window"] ?? null), "is_external" =>             // line 42
($context["is_external"] ?? null), "icon" =>             // line 43
($context["icon"] ?? null), "icon_placement" =>             // line 44
($context["icon_placement"] ?? null), "icon_group_disabled" => ((            // line 45
array_key_exists("icon_group_disabled", $context)) ? (($context["icon_group_disabled"] ?? null)) : (false)), "icon_single_only" => ((            // line 46
array_key_exists("icon_single_only", $context)) ? (($context["icon_single_only"] ?? null)) : (false)), "icon_class" => "ct-button__icon"]));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "
";
        // line 51
        if ((($context["kind"] ?? null) == "button")) {
            // line 52
            yield "  <button
    class=\"ct-button ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    data-component-name=\"button\"
    ";
            // line 55
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 56
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 57
            yield "  >";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            // line 59
            yield "</button>
";
        } elseif ((        // line 60
($context["kind"] ?? null) == "link")) {
            // line 61
            yield "  <a
    class=\"ct-button ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    role=\"button\"
    data-component-name=\"button\"
    ";
            // line 65
            if ((($tmp = ($context["url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 66
            yield "    ";
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 67
            yield "    ";
            if ((($tmp = ($context["is_new_window"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\"";
            }
            // line 68
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 69
            yield "  >";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            // line 71
            yield "</a>
";
        } elseif (CoreExtension::inFilter(        // line 72
($context["kind"] ?? null), ["reset", "submit"])) {
            // line 73
            yield "  <input
    type=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["kind"] ?? null), "html", null, true);
            yield "\"
    class=\"ct-button ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    data-component-name=\"button\"
    value=\"";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 78
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 79
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 80
            yield "  />
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_dismissable", "theme", "text", "is_new_window", "icon", "icon_group_disabled", "icon_single_only", "is_disabled", "attributes", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:button";
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
        return array (  184 => 80,  179 => 79,  175 => 78,  171 => 77,  166 => 75,  162 => 74,  159 => 73,  157 => 72,  154 => 71,  152 => 70,  150 => 69,  145 => 68,  140 => 67,  135 => 66,  129 => 65,  123 => 62,  120 => 61,  118 => 60,  115 => 59,  113 => 58,  111 => 57,  106 => 56,  102 => 55,  97 => 53,  94 => 52,  92 => 51,  89 => 50,  85 => 46,  84 => 45,  83 => 44,  82 => 43,  81 => 42,  80 => 41,  79 => 40,  78 => 39,  76 => 38,  73 => 37,  71 => 36,  69 => 35,  67 => 34,  65 => 33,  63 => 32,  61 => 31,  59 => 30,  57 => 29,  55 => 28,  53 => 27,  51 => 26,  48 => 25,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:button", "themes/contrib/civictheme/components/01-atoms/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "include" => 39, "if" => 51];
        static $filters = ["format" => 30, "default" => 35, "escape" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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
