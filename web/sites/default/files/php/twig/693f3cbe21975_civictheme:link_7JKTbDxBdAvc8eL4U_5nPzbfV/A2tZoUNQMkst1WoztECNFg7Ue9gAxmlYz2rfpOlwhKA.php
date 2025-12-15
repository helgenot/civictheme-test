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

/* civictheme:link */
class __TwigTemplate_2348d2ba6dcdcd2f77eb8f3031374971 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--link"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:link"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:link"));
        // line 24
        $context["text"] = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default(($context["text"] ?? null), "")) : (""));
        // line 25
        $context["only_icon_class"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) ? ("ct-link--only-icon") : (""));
        // line 26
        $context["icon_placement"] = ((CoreExtension::inFilter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 27
        $context["is_external_class"] = (((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-link--external") : (""));
        // line 28
        $context["is_active_class"] = (((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-link--active") : (""));
        // line 29
        $context["is_disabled_class"] = (((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-link--disabled") : (""));
        // line 30
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 31
        $context["modifier_class"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s", ($context["theme_class"] ?? null), ($context["is_external_class"] ?? null), ($context["is_active_class"] ?? null), ($context["is_disabled_class"] ?? null), ($context["only_icon_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : (""))));
        // line 32
        $context["attributes"] = (((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) ? (($context["attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([])));
        // line 33
        if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["disabled", ""], "method", false, false, true, 34);
        }
        // line 37
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null)))) {
            // line 38
            $context["link_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 39
                yield from $this->load("civictheme:text-icon", 39)->unwrap()->yield(CoreExtension::toArray(["text" =>                 // line 40
($context["text"] ?? null), "is_new_window" =>                 // line 41
($context["is_new_window"] ?? null), "is_external" =>                 // line 42
($context["is_external"] ?? null), "icon" =>                 // line 43
($context["icon"] ?? null), "icon_placement" =>                 // line 44
($context["icon_placement"] ?? null), "icon_class" => "ct-link__icon", "icon_group_disabled" => ((                // line 46
array_key_exists("icon_group_disabled", $context)) ? (($context["icon_group_disabled"] ?? null)) : (false)), "icon_single_only" => ((                // line 47
array_key_exists("icon_single_only", $context)) ? (($context["icon_single_only"] ?? null)) : (false))]));
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "<a
    class=\"ct-link ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 53
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 54
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 55
            yield "    ";
            if ((($tmp = ($context["is_new_window"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\"";
            }
            // line 56
            yield "    ";
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            // line 57
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 58
            yield "  >";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_content"] ?? null), "html", null, true);
            // line 60
            yield "</a>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "is_external", "is_active", "is_disabled", "theme", "is_new_window", "icon_group_disabled", "icon_single_only", "url", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:link";
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
        return array (  125 => 60,  123 => 59,  121 => 58,  116 => 57,  111 => 56,  106 => 55,  99 => 54,  93 => 53,  89 => 52,  86 => 51,  82 => 47,  81 => 46,  80 => 44,  79 => 43,  78 => 42,  77 => 41,  76 => 40,  75 => 39,  73 => 38,  71 => 37,  68 => 34,  66 => 33,  64 => 32,  62 => 31,  60 => 30,  58 => 29,  56 => 28,  54 => 27,  52 => 26,  50 => 25,  48 => 24,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:link", "themes/contrib/civictheme/components/01-atoms/link/link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 24, "if" => 33, "do" => 34, "include" => 39];
        static $filters = ["default" => 24, "format" => 30, "trim" => 31, "escape" => 52];
        static $functions = ["create_attribute" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'do', 'include'],
                ['default', 'format', 'trim', 'escape'],
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
