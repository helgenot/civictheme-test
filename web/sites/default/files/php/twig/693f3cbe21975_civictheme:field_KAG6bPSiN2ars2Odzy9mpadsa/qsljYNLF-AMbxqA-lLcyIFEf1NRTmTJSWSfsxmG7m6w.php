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

/* civictheme:field */
class __TwigTemplate_970152ccf27d2a9c20a800b93c1c8413 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:field"));
        // line 39
        yield "
";
        // line 40
        $context["type"] = ((array_key_exists("type", $context)) ? (($context["type"] ?? null)) : ("hidden"));
        // line 41
        $context["title_display"] = (((array_key_exists("title_display", $context) && CoreExtension::inFilter(($context["title_display"] ?? null), ["visible", "invisible", "hidden"]))) ? (($context["title_display"] ?? null)) : ("visible"));
        // line 42
        $context["is_invalid"] = ((array_key_exists("is_invalid", $context)) ? (($context["is_invalid"] ?? null)) : (false));
        // line 43
        $context["is_disabled"] = ((array_key_exists("is_disabled", $context)) ? (($context["is_disabled"] ?? null)) : (false));
        // line 44
        $context["is_required"] = ((array_key_exists("is_required", $context)) ? (($context["is_required"] ?? null)) : (false));
        // line 45
        $context["orientation"] = ((CoreExtension::inFilter(($context["orientation"] ?? null), ["vertical", "horizontal"])) ? (($context["orientation"] ?? null)) : ("vertical"));
        // line 46
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 47
        $context["type_class"] = Twig\Extension\CoreExtension::sprintf("ct-field--%s", ($context["type"] ?? null));
        // line 48
        $context["is_required_class"] = (((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--required") : (""));
        // line 49
        $context["is_disabled_class"] = (((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--disabled") : (""));
        // line 50
        $context["is_invalid_class"] = (((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--invalid") : (""));
        // line 51
        $context["orientation_class"] = Twig\Extension\CoreExtension::sprintf("ct-field--%s", ($context["orientation"] ?? null));
        // line 52
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ($context["orientation_class"] ?? null), ($context["is_required_class"] ?? null), ($context["is_disabled_class"] ?? null), ($context["is_invalid_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 53
        yield "
";
        // line 55
        if (( !array_key_exists("control", $context) ||  !is_iterable(($context["control"] ?? null)))) {
            // line 56
            yield "  ";
            $context["control"] = [["name" => ($context["name"] ?? null)]];
        } else {
            // line 58
            yield "  ";
            $context["first_key"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["control"] ?? null)));
            // line 59
            yield "  ";
            $context["control"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["first_key"] ?? null)) && CoreExtension::matches("/^[0-9]+\$/", ($context["first_key"] ?? null)))) ? (($context["control"] ?? null)) : ([($context["control"] ?? null)]));
        }
        // line 61
        yield "
";
        // line 62
        $context["_controls"] = [];
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["control"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 64
            yield "  ";
            $context["default_options"] = [];
            // line 65
            yield "  ";
            if (array_key_exists("options", $context)) {
                // line 66
                yield "    ";
                $context["default_options"] = ($context["options"] ?? null);
                // line 67
                yield "  ";
            }
            // line 68
            yield "
  ";
            // line 69
            $context["default_is_multiple"] = false;
            // line 70
            yield "  ";
            if (array_key_exists("is_multiple", $context)) {
                // line 71
                yield "    ";
                $context["default_is_multiple"] = ($context["is_multiple"] ?? null);
                // line 72
                yield "  ";
            }
            // line 73
            yield "
  ";
            // line 74
            $context["c"] = ["theme" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 75
$context["c"], "theme", [], "any", true, true, true, 75)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "theme", [], "any", false, false, true, 75)) : (($context["theme"] ?? null))), "label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["c"], "label", [], "any", true, true, true, 76)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "label", [], "any", false, false, true, 76)) : (($context["title"] ?? null))), "name" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 77
$context["c"], "name", [], "any", true, true, true, 77)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, true, 77)) : (($context["name"] ?? null))), "value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["c"], "value", [], "any", true, true, true, 78)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "value", [], "any", false, false, true, 78)) : (($context["value"] ?? null))), "id" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["c"], "id", [], "any", true, true, true, 79)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, true, 79)) : (($context["id"] ?? null))), "options" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["c"], "options", [], "any", true, true, true, 80)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "options", [], "any", false, false, true, 80)) : (($context["default_options"] ?? null))), "is_multiple" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 81
$context["c"], "is_multiple", [], "any", true, true, true, 81)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_multiple", [], "any", false, false, true, 81)) : (($context["default_is_multiple"] ?? null))), "placeholder" => ((            // line 82
array_key_exists("placeholder", $context)) ? (($context["placeholder"] ?? null)) : ("")), "is_required" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["c"], "is_required", [], "any", true, true, true, 83)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_required", [], "any", false, false, true, 83)) : (($context["is_required"] ?? null))), "required_text" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["c"], "required_text", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "required_text", [], "any", false, false, true, 84)) : (($context["required_text"] ?? null))), "is_invalid" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["c"], "is_invalid", [], "any", true, true, true, 85)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_invalid", [], "any", false, false, true, 85)) : (($context["is_invalid"] ?? null))), "is_disabled" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["c"], "is_disabled", [], "any", true, true, true, 86)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_disabled", [], "any", false, false, true, 86)) : (($context["is_disabled"] ?? null))), "is_checked" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["c"], "is_checked", [], "any", true, true, true, 87)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_checked", [], "any", false, false, true, 87)) : (false)), "attributes" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 88
$context["c"], "attributes", [], "any", true, true, true, 88) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["c"], "attributes", [], "any", false, false, true, 88)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "attributes", [], "any", false, false, true, 88)) : (null)), "modifier_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 89
$context["c"], "modifier_class", [], "any", true, true, true, 89)) ? (("ct-field__control " . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "modifier_class", [], "any", false, false, true, 89))) : ("ct-field__control"))];
            // line 91
            yield "  ";
            $context["_controls"] = Twig\Extension\CoreExtension::merge(($context["_controls"] ?? null), [$context["c"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        $context["control"] = ($context["_controls"] ?? null);
        // line 94
        $context["field_wrapper"] = ((CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"])) ? ("fieldset") : ("div"));
        // line 95
        yield "
";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, true, true, 96), "name", [], "any", true, true, true, 96)) {
            // line 97
            yield "  <div class=\"ct-field ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            yield ">
    ";
            // line 98
            if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) && (($context["title_display"] ?? null) != "hidden")) && !CoreExtension::inFilter(($context["type"] ?? null), ["hidden", "checkbox", "radio"]))) {
                // line 99
                yield "      ";
                yield from $this->load("civictheme:label", 99)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 100
($context["theme"] ?? null), "content" => (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(                // line 101
($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label"] ?? null)) : (($context["title"] ?? null))), "size" => ((                // line 102
array_key_exists("title_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["title_size"] ?? null), "regular")) : ("regular")), "is_required" =>                 // line 103
($context["is_required"] ?? null), "required_text" =>                 // line 104
($context["required_text"] ?? null), "for" => (((CoreExtension::getAttribute($this->env, $this->source, (($_v0 =                 // line 105
($context["control"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 105)), "id", [], "any", false, false, true, 105) && !CoreExtension::inFilter(($context["type"] ?? null), ["radio", "checkbox"]))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["control"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 105)), "id", [], "any", false, false, true, 105)) : (null)), "modifier_class" => ("ct-field__title" . (((                // line 106
($context["title_display"] ?? null) == "invisible")) ? (" ct-visually-hidden") : ("")))]));
                // line 108
                yield "    ";
            }
            // line 109
            yield "
    <";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_wrapper"] ?? null), "html", null, true);
            yield " class=\"ct-field__wrapper\">
      ";
            // line 111
            if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) && (($context["title_display"] ?? null) != "hidden")) && CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"]))) {
                // line 112
                yield "        ";
                yield from $this->load("civictheme:label", 112)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 113
($context["theme"] ?? null), "tag" => "legend", "content" =>                 // line 115
($context["title"] ?? null), "is_required" =>                 // line 116
($context["is_required"] ?? null), "for" => (((CoreExtension::getAttribute($this->env, $this->source, (($_v2 =                 // line 117
($context["control"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 117)), "id", [], "any", false, false, true, 117) && !CoreExtension::inFilter(($context["type"] ?? null), ["radio", "checkbox"]))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["control"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 117)), "id", [], "any", false, false, true, 117)) : (null)), "modifier_class" => ("ct-field__title" . (((                // line 118
($context["title_display"] ?? null) == "invisible")) ? (" ct-visually-hidden") : ("")))]));
                // line 120
                yield "      ";
            }
            // line 121
            yield "      ";
            if ((($context["description"] ?? null) && (($context["type"] ?? null) != "hidden"))) {
                // line 122
                yield "        ";
                $context["error_message"] = "Field has an error";
                // line 123
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "          ";
                    $context["error_message"] = (("Field <em>" . ($context["label"] ?? null)) . "</em> has an error");
                    // line 125
                    yield "        ";
                }
                // line 126
                yield "
        ";
                // line 127
                $context["description_content"] = ($context["description"] ?? null);
                // line 128
                yield "        ";
                if (( !($context["description"] ?? null) && ($context["is_invalid"] ?? null))) {
                    // line 129
                    yield "          ";
                    $context["description_content"] = ($context["error_message"] ?? null);
                    // line 130
                    yield "        ";
                }
                // line 131
                yield "
        ";
                // line 132
                yield from $this->load("civictheme:field-description", 132)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 133
($context["theme"] ?? null), "content" =>                 // line 134
($context["description_content"] ?? null), "modifier_class" => "ct-field__description"]));
                // line 137
                yield "      ";
            }
            // line 138
            yield "
      ";
            // line 139
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "        <div class=\"ct-field__prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</div>
      ";
            }
            // line 142
            yield "
      ";
            // line 143
            if ((($context["type"] ?? null) == "textfield")) {
                // line 144
                yield "        ";
                yield from $this->load("civictheme:textfield", 144)->unwrap()->yield(CoreExtension::toArray((($_v4 = ($context["control"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 144))));
                // line 145
                yield "
      ";
            } elseif ((            // line 146
($context["type"] ?? null) == "textarea")) {
                // line 147
                yield "        ";
                yield from $this->load("civictheme:textarea", 147)->unwrap()->yield(CoreExtension::toArray((($_v5 = ($context["control"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 147))));
                // line 148
                yield "
      ";
            } elseif ((            // line 149
($context["type"] ?? null) == "select")) {
                // line 150
                yield "        ";
                yield from $this->load("civictheme:select", 150)->unwrap()->yield(CoreExtension::toArray((($_v6 = ($context["control"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 150))));
                // line 151
                yield "
      ";
            } elseif (((            // line 152
($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) {
                // line 153
                yield "
        ";
                // line 154
                $context["list_items"] = [];
                // line 155
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["control"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 156
                    yield "          ";
                    $context["list_item"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 157
                        yield "            ";
                        if ((($context["type"] ?? null) == "checkbox")) {
                            // line 158
                            yield "              ";
                            yield from $this->load("civictheme:checkbox", 158)->unwrap()->yield(CoreExtension::toArray($context["item"]));
                            // line 159
                            yield "            ";
                        } else {
                            // line 160
                            yield "              ";
                            yield from $this->load("civictheme:radio", 160)->unwrap()->yield(CoreExtension::toArray($context["item"]));
                            // line 161
                            yield "            ";
                        }
                        // line 162
                        yield "          ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 163
                    yield "          ";
                    $context["list_items"] = Twig\Extension\CoreExtension::merge(($context["list_items"] ?? null), [($context["list_item"] ?? null)]);
                    // line 164
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                yield "        ";
                yield from $this->load("civictheme:item-list", 165)->unwrap()->yield(CoreExtension::toArray(["direction" => (((($tmp =                 // line 166
($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("horizontal") : ("vertical")), "items" =>                 // line 167
($context["list_items"] ?? null)]));
                // line 169
                yield "
      ";
            } else {
                // line 171
                yield "        ";
                $context["control0"] = (($_v7 = ($context["control"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 171));
                // line 172
                yield "        ";
                $context["control0"] = Twig\Extension\CoreExtension::merge(($context["control0"] ?? null), ["type" => ($context["type"] ?? null)]);
                // line 173
                yield "        ";
                yield from $this->load("civictheme:input", 173)->unwrap()->yield(CoreExtension::toArray(($context["control0"] ?? null)));
                // line 174
                yield "      ";
            }
            // line 175
            yield "
      ";
            // line 176
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "        <div class=\"ct-field__suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</div>
      ";
            }
            // line 179
            yield "
      ";
            // line 180
            if (((($context["message"] ?? null) || ($context["is_invalid"] ?? null)) && (($context["type"] ?? null) != "hidden"))) {
                // line 181
                yield "        ";
                $context["error_message"] = "Field has an error";
                // line 182
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 183
                    yield "          ";
                    $context["error_message"] = (("Field <em>" . ($context["title"] ?? null)) . "</em> has an error");
                    // line 184
                    yield "        ";
                }
                // line 185
                yield "
        ";
                // line 186
                $context["message_content"] = null;
                // line 187
                yield "        ";
                if ((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 188
                    yield "          ";
                    $context["message_content"] = ($context["error_message"] ?? null);
                    // line 189
                    yield "        ";
                }
                // line 190
                yield "
        ";
                // line 191
                if ((array_key_exists("message", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", true, true, true, 191))) {
                    // line 192
                    yield "          ";
                    $context["message_content"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", false, false, true, 192);
                    // line 193
                    yield "        ";
                }
                // line 194
                yield "
        ";
                // line 195
                yield from $this->load("civictheme:field-message", 195)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 196
($context["theme"] ?? null), "type" => (((($tmp =                 // line 197
($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : ("information")), "content" =>                 // line 198
($context["message_content"] ?? null), "modifier_class" => "ct-field__message", "attributes" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 200
($context["message"] ?? null), "attributes", [], "any", true, true, true, 200)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attributes", [], "any", false, false, true, 200), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([]))) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([])))]));
                // line 202
                yield "      ";
            }
            // line 203
            yield "    </";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_wrapper"] ?? null), "html", null, true);
            yield ">
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "control", "name", "options", "is_multiple", "title", "value", "id", "placeholder", "required_text", "attributes", "label", "title_size", "description", "prefix", "is_inline", "suffix", "message"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:field";
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
        return array (  414 => 203,  411 => 202,  409 => 200,  408 => 198,  407 => 197,  406 => 196,  405 => 195,  402 => 194,  399 => 193,  396 => 192,  394 => 191,  391 => 190,  388 => 189,  385 => 188,  382 => 187,  380 => 186,  377 => 185,  374 => 184,  371 => 183,  368 => 182,  365 => 181,  363 => 180,  360 => 179,  354 => 177,  352 => 176,  349 => 175,  346 => 174,  343 => 173,  340 => 172,  337 => 171,  333 => 169,  331 => 167,  330 => 166,  328 => 165,  322 => 164,  319 => 163,  315 => 162,  312 => 161,  309 => 160,  306 => 159,  303 => 158,  300 => 157,  297 => 156,  292 => 155,  290 => 154,  287 => 153,  285 => 152,  282 => 151,  279 => 150,  277 => 149,  274 => 148,  271 => 147,  269 => 146,  266 => 145,  263 => 144,  261 => 143,  258 => 142,  252 => 140,  250 => 139,  247 => 138,  244 => 137,  242 => 134,  241 => 133,  240 => 132,  237 => 131,  234 => 130,  231 => 129,  228 => 128,  226 => 127,  223 => 126,  220 => 125,  217 => 124,  214 => 123,  211 => 122,  208 => 121,  205 => 120,  203 => 118,  202 => 117,  201 => 116,  200 => 115,  199 => 113,  197 => 112,  195 => 111,  191 => 110,  188 => 109,  185 => 108,  183 => 106,  182 => 105,  181 => 104,  180 => 103,  179 => 102,  178 => 101,  177 => 100,  175 => 99,  173 => 98,  164 => 97,  162 => 96,  159 => 95,  157 => 94,  155 => 93,  148 => 91,  146 => 89,  145 => 88,  144 => 87,  143 => 86,  142 => 85,  141 => 84,  140 => 83,  139 => 82,  138 => 81,  137 => 80,  136 => 79,  135 => 78,  134 => 77,  133 => 76,  132 => 75,  131 => 74,  128 => 73,  125 => 72,  122 => 71,  119 => 70,  117 => 69,  114 => 68,  111 => 67,  108 => 66,  105 => 65,  102 => 64,  98 => 63,  96 => 62,  93 => 61,  89 => 59,  86 => 58,  82 => 56,  80 => 55,  77 => 53,  75 => 52,  73 => 51,  71 => 50,  69 => 49,  67 => 48,  65 => 47,  63 => 46,  61 => 45,  59 => 44,  57 => 43,  55 => 42,  53 => 41,  51 => 40,  48 => 39,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:field", "themes/contrib/civictheme/components/02-molecules/field/field.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 40, "if" => 55, "for" => 63, "include" => 99];
        static $filters = ["format" => 46, "default" => 46, "first" => 58, "keys" => 58, "merge" => 91, "escape" => 97];
        static $functions = ["create_attribute" => 200];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['format', 'default', 'first', 'keys', 'merge', 'escape'],
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
