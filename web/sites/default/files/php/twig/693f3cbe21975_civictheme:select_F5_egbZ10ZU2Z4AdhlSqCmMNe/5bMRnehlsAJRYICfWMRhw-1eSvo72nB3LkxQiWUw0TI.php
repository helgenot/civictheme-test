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

/* civictheme:select */
class __TwigTemplate_c8604eb6f77676e76234c29fce7667cc extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--select"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:select"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:select"));
        // line 31
        yield "
";
        // line 32
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 33
        $context["is_invalid_class"] = (((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-select--is-invalid") : (""));
        // line 34
        $context["modifier_class"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["is_invalid_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : (""))));
        // line 35
        yield "
";
        // line 36
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["name"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["options"] ?? null)))) {
            // line 37
            yield "  <select
    class=\"ct-select ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    name=\"";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 40
            if ((($tmp = ($context["id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 41
            yield "    ";
            if ((($tmp = ($context["is_multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "multiple";
            }
            // line 42
            yield "    ";
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            // line 43
            yield "    ";
            if ((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 44
            yield "    ";
            if ((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-invalid=\"true\"";
            }
            // line 45
            yield "    ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            // line 46
            yield "  >
    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 48
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 48) == "optgroup")) {
                    // line 49
                    yield "        <optgroup label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 49), "html", null, true);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_disabled", [], "any", false, false, true, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "disabled";
                    }
                    yield ">
          ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 50));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                        // line 51
                        yield "            ";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 52
                            yield "              <option value=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", true, true, true, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 52), "")) : ("")), "html", null, true);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "is_selected", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "selected=\"selected\"";
                            }
                            yield " ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "is_disabled", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "disabled";
                            }
                            yield ">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 52), "html", null, true);
                            yield "</option>
            ";
                        }
                        // line 54
                        yield "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub_option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    yield "        </optgroup>
      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["option"], "type", [], "any", false, false, true, 56) == "option")) {
                    // line 57
                    yield "        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 58
                        yield "          <option value=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", true, true, true, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 58), "")) : ("")), "html", null, true);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "selected=\"selected\"";
                        }
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_disabled", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "disabled";
                        }
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 58), "html", null, true);
                        yield "</option>
        ";
                    }
                    // line 60
                    yield "      ";
                }
                // line 61
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "  </select>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "is_invalid", "name", "options", "id", "is_multiple", "is_disabled", "is_required", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:select";
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
        return array (  185 => 62,  179 => 61,  176 => 60,  160 => 58,  157 => 57,  155 => 56,  152 => 55,  146 => 54,  130 => 52,  127 => 51,  123 => 50,  114 => 49,  111 => 48,  107 => 47,  104 => 46,  99 => 45,  94 => 44,  89 => 43,  84 => 42,  79 => 41,  73 => 40,  69 => 39,  65 => 38,  62 => 37,  60 => 36,  57 => 35,  55 => 34,  53 => 33,  51 => 32,  48 => 31,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:select", "themes/contrib/civictheme/components/01-atoms/select/select.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 32, "if" => 36, "for" => 47];
        static $filters = ["format" => 32, "default" => 32, "trim" => 34, "escape" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
