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

/* civictheme:menu */
class __TwigTemplate_faacad4f166dc02b29ffb823aae5002b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:menu"));
        // line 30
        yield "
";
        // line 31
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 32
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 33
        yield "
";
        // line 34
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 35
        yield "
";
        // line 119
        yield "
";
        // line 131
        yield "
";
        // line 132
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 132, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), 0, ($context["modifier_class"] ?? null), ($context["theme"] ?? null), ($context["is_collapsible"] ?? null), ($context["menu_level_modifier_class"] ?? null)]));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "_self", "items", "is_collapsible", "menu_level_modifier_class", "menu_level", "attributes", "item"]);        yield from [];
    }

    // line 36
    public function macro_menu_links($items = null, $menu_level = null, $modifier_class = null, $theme = null, $is_collapsible = null, $menu_level_modifier_class = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "is_collapsible" => $is_collapsible,
            "menu_level_modifier_class" => $menu_level_modifier_class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 39
                    yield "      <ul class=\"ct-menu ct-menu--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
                    yield "\" data-component-name=\"ct-menu\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), "")) : ("")), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 41
                    yield "      ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 42
                        yield "        ";
                        $context["collapsible_panel"] = "data-collapsible-panel";
                        // line 43
                        yield "        ";
                        $context["aria_hidden"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-hidden=\"false\"") : ("aria-hidden=\"true\""));
                        // line 44
                        yield "      ";
                    }
                    // line 45
                    yield "      <div class=\"ct-menu__sub-menu__wrapper ct-menu__sub-menu__wrapper--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["collapsible_panel"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["aria_hidden"] ?? null), "html", null, true);
                    yield ">
        <ul class=\"ct-menu ct-menu__sub-menu ct-menu--level-";
                    // line 46
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["menu_level_modifier_class"] ?? null), ($context["menu_level"] ?? null), [], "array", true, true, true, 46)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["menu_level_modifier_class"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["menu_level"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["menu_level_modifier_class"] ?? null), ($context["menu_level"] ?? null), [], "array", false, false, true, 46)), "")) : ("")), "html", null, true);
                    yield "\">
    ";
                }
                // line 48
                yield "
    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 50
                    yield "      ";
                    $context["item_classes"] = ["ct-menu__item", ("ct-menu__item--level-" .                     // line 52
($context["menu_level"] ?? null)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 53
$context["item"], "below", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--has-children") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 55
$context["item"], "modifier_class", [], "any", true, true, true, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modifier_class", [], "any", false, false, true, 55), "")) : (""))];
                    // line 57
                    yield "
      ";
                    // line 58
                    $context["item_attributes"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([])));
                    // line 59
                    yield "      ";
                    $context["is_active_expanded"] = "false";
                    // line 60
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60) && ($context["is_collapsible"] ?? null))) {
                        // line 61
                        yield "        ";
                        $context["is_active_expanded"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 61) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 61))) ? ("true") : (($context["is_active_expanded"] ?? null)));
                        // line 62
                        yield "
        ";
                        // line 63
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 63) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 63))) {
                            // line 64
                            yield "        ";
                        } else {
                            // line 65
                            yield "          ";
                            CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["data-collapsible-collapsed", ""], "method", false, false, true, 65);
                            // line 66
                            yield "        ";
                        }
                        // line 67
                        yield "
        ";
                        // line 68
                        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["data-collapsible", ""], "method", false, false, true, 68), "setAttribute", ["data-collapsible-duration", "0"], "method", false, false, true, 68), "setAttribute", ["aria-expanded", ($context["is_active_expanded"] ?? null)], "method", false, false, true, 68);
                        // line 69
                        yield "      ";
                    }
                    // line 70
                    yield "
      ";
                    // line 72
                    yield "      ";
                    $context["has_active_children"] = false;
                    // line 73
                    yield "      ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 74
                        yield "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 75
                            yield "          ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "in_active_trail", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 76
                                yield "            ";
                                $context["has_active_children"] = true;
                                // line 77
                                yield "          ";
                            }
                            // line 78
                            yield "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        yield "      ";
                    }
                    // line 81
                    $context["current_link_attribute"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", true, true, true, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 81)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 81)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([])));
                    // line 82
                    $context["current_link_attribute_value"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 82) &&  !($context["has_active_children"] ?? null))) ? ("page") : (""));
                    // line 83
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["current_link_attribute_value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 84
                        CoreExtension::getAttribute($this->env, $this->source, ($context["current_link_attribute"] ?? null), "setAttribute", ["aria-current", ($context["current_link_attribute_value"] ?? null)], "method", false, false, true, 84);
                    }
                    // line 86
                    yield "
      <li class=\"";
                    // line 87
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["item_classes"] ?? null), " "), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
                    yield ">

        ";
                    // line 89
                    yield from $this->load("civictheme:link", 89)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 90
($context["theme"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["item"], "title", [], "any", false, false, true, 91), "title" => CoreExtension::getAttribute($this->env, $this->source,                     // line 92
$context["item"], "title", [], "any", false, false, true, 92), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 93
$context["item"], "url", [], "any", false, false, true, 93), "modifier_class" => "ct-menu__item__link", "attributes" =>                     // line 95
($context["current_link_attribute"] ?? null), "is_new_window" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["item"], "is_new_window", [], "any", true, true, true, 96)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_new_window", [], "any", false, false, true, 96)) : (false)), "is_external" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 97
$context["item"], "is_external", [], "any", true, true, true, 97)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_external", [], "any", false, false, true, 97)) : (false))]));
                    // line 99
                    yield "
        ";
                    // line 100
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 100) && ($context["is_collapsible"] ?? null))) {
                        // line 101
                        yield "          <a href=\"#\" class=\"ct-menu__item__link-trigger\" data-collapsible-trigger aria-expanded=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["is_active_expanded"] ?? null), "html", null, true);
                        yield "\" title=\"Expand ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 101), "html", null, true);
                        yield " menu\"></a>
        ";
                    }
                    // line 103
                    yield "
        ";
                    // line 104
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 105
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links_below", $context, 105, $this->getSourceContext())->macro_menu_links_below(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 105), (($context["menu_level"] ?? null) + 1), "", ($context["theme"] ?? null), ($context["is_collapsible"] ?? null), ($context["menu_level_modifier_class"] ?? null)]));
                    }
                    // line 107
                    yield "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                yield "
    ";
                // line 111
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 112
                    yield "      </ul>
    ";
                } else {
                    // line 114
                    yield "        </ul>
      </div>
    ";
                }
                // line 117
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 128
    public function macro_menu_links_below($items = null, $menu_level = null, $modifier_class = null, $theme = null, $is_collapsible = null, $menu_level_modifier_class = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "is_collapsible" => $is_collapsible,
            "menu_level_modifier_class" => $menu_level_modifier_class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 129
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 129, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["menu_level"] ?? null), ($context["modifier_class"] ?? null), ($context["theme"] ?? null), ($context["is_collapsible"] ?? null), ($context["menu_level_modifier_class"] ?? null)]));
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:menu";
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
        return array (  315 => 129,  298 => 128,  291 => 117,  286 => 114,  282 => 112,  280 => 111,  277 => 110,  269 => 107,  266 => 105,  264 => 104,  261 => 103,  253 => 101,  251 => 100,  248 => 99,  246 => 97,  245 => 96,  244 => 95,  243 => 93,  242 => 92,  241 => 91,  240 => 90,  239 => 89,  232 => 87,  229 => 86,  226 => 84,  224 => 83,  222 => 82,  220 => 81,  217 => 79,  211 => 78,  208 => 77,  205 => 76,  202 => 75,  197 => 74,  194 => 73,  191 => 72,  188 => 70,  185 => 69,  183 => 68,  180 => 67,  177 => 66,  174 => 65,  171 => 64,  169 => 63,  166 => 62,  163 => 61,  160 => 60,  157 => 59,  155 => 58,  152 => 57,  150 => 55,  149 => 54,  148 => 53,  147 => 52,  145 => 50,  141 => 49,  138 => 48,  131 => 46,  122 => 45,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  100 => 39,  97 => 38,  94 => 37,  77 => 36,  69 => 132,  66 => 131,  63 => 119,  60 => 35,  58 => 34,  55 => 33,  53 => 32,  51 => 31,  48 => 30,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:menu", "themes/contrib/civictheme/components/00-base/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "import" => 34, "macro" => 36, "if" => 37, "for" => 49, "do" => 65, "include" => 89];
        static $filters = ["format" => 31, "default" => 31, "escape" => 39, "join" => 87];
        static $functions = ["create_attribute" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for', 'do', 'include'],
                ['format', 'default', 'escape', 'join'],
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
