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

/* civictheme:message */
class __TwigTemplate_792ee5ec7f5645247047d1e70c0b2199 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--message"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:message"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:message"));
        // line 19
        yield "
";
        // line 20
        $context["type"] = ((CoreExtension::inFilter(($context["type"] ?? null), ["information", "error", "warning", "success"])) ? (($context["type"] ?? null)) : ("information"));
        // line 21
        $context["type_class"] = Twig\Extension\CoreExtension::sprintf("ct-message--%s", ($context["type"] ?? null));
        // line 22
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 23
        $context["with_background_class"] = (((($tmp = ($context["with_background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-message--with-background") : (""));
        // line 24
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 25
        $context["has_aria"] = (((($tmp =  !array_key_exists("has_aria", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (($context["has_aria"] ?? null)));
        // line 26
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ($context["with_background_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 27
        yield "
";
        // line 28
        $context["icons"] = ["information" => "information-mark", "warning" => "exclamation-mark-2", "error" => "exclamation-mark-1", "success" => "approve"];
        // line 34
        yield "
";
        // line 35
        if ((($context["title"] ?? null) || ($context["content"] ?? null))) {
            // line 36
            yield "  <div class=\"ct-message ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 37
            if ((($tmp = ($context["has_aria"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "      role=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["type"] ?? null) == "error")) ? ("alert") : ("contentinfo")));
                yield "\"
      aria-label=\"";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true);
                yield "\"
      aria-live=\"assertive\"
    ";
            }
            // line 42
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 43
            yield "  >
    <div class=\"ct-message__inner\">
      ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", true, true, true, 45)) {
                // line 46
                yield "        <div class=\"ct-message__icon\">
          ";
                // line 47
                yield from $this->load("civictheme:icon", 47)->unwrap()->yield(CoreExtension::toArray(["symbol" => (($_v0 =                 // line 48
($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["type"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", false, false, true, 48)), "size" => "regular"]));
                // line 51
                yield "        </div>
      ";
            }
            // line 53
            yield "
      <div class=\"ct-message__inner-wrapper\">
        ";
            // line 55
            if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "          <div class=\"ct-message__title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "</div>
        ";
            }
            // line 58
            yield "
        ";
            // line 59
            if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "          ";
                yield from $this->load("civictheme:paragraph", 60)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 61
($context["theme"] ?? null), "content" =>                 // line 62
($context["content"] ?? null), "modifier_class" => "ct-message__content"]));
                // line 65
                yield "        ";
            }
            // line 66
            yield "      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "with_background", "vertical_spacing", "title", "content", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:message";
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
        return array (  139 => 66,  136 => 65,  134 => 62,  133 => 61,  131 => 60,  129 => 59,  126 => 58,  120 => 56,  118 => 55,  114 => 53,  110 => 51,  108 => 48,  107 => 47,  104 => 46,  102 => 45,  98 => 43,  93 => 42,  87 => 39,  82 => 38,  80 => 37,  75 => 36,  73 => 35,  70 => 34,  68 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  55 => 22,  53 => 21,  51 => 20,  48 => 19,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:message", "themes/contrib/civictheme/components/03-organisms/message/message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "if" => 35, "include" => 47];
        static $filters = ["format" => 21, "default" => 22, "escape" => 36];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
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
