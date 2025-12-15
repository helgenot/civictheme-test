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

/* civictheme:page */
class __TwigTemplate_bf7d353521afb8178606d8b949690945 extends Template
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
            'header_block' => [$this, 'block_header_block'],
            'banner_block' => [$this, 'block_banner_block'],
            'highlighted_block' => [$this, 'block_highlighted_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'back_to_top_block' => [$this, 'block_back_to_top_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:page"));
        // line 60
        yield "
";
        // line 61
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 62
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 63
        yield "
<div class=\"ct-page ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" ";
        if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        }
        yield ">
  <a id=\"top\" tab-index=\"-1\" aria-hidden=\"true\"></a>

  ";
        // line 67
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        // line 79
        yield "
  ";
        // line 80
        yield from $this->unwrap()->yieldBlock('banner_block', $context, $blocks);
        // line 85
        yield "
  ";
        // line 86
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["highlighted"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "    ";
            yield from $this->unwrap()->yieldBlock('highlighted_block', $context, $blocks);
            // line 96
            yield "  ";
        }
        // line 97
        yield "
  ";
        // line 98
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 119
        yield "
  ";
        // line 120
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 134
        yield "
  ";
        // line 135
        yield from $this->unwrap()->yieldBlock('back_to_top_block', $context, $blocks);
        // line 138
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "highlighted", "header_theme", "header_top_1", "header_top_2", "header_top_3", "header_middle_1", "header_middle_2", "header_middle_3", "header_bottom_1", "banner", "content_top", "hide_sidebar_left", "hide_sidebar_right", "sidebar_top_left", "sidebar_top_left_attributes", "sidebar_top_right", "sidebar_top_right_attributes", "content", "content_attributes", "sidebar_bottom_left", "sidebar", "sidebar_bottom_left_attributes", "sidebar_attributes", "sidebar_bottom_right", "sidebar_bottom_right_attributes", "content_contained", "content_bottom", "vertical_spacing", "footer_theme", "footer_background_image", "footer_top_1", "footer_top_2", "footer_middle_1", "footer_middle_2", "footer_middle_3", "footer_middle_4", "footer_bottom_1", "footer_bottom_2"]);        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        yield from $this->load("civictheme:header", 68)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 69
($context["header_theme"] ?? null), "content_top1" =>         // line 70
($context["header_top_1"] ?? null), "content_top2" =>         // line 71
($context["header_top_2"] ?? null), "content_top3" =>         // line 72
($context["header_top_3"] ?? null), "content_middle1" =>         // line 73
($context["header_middle_1"] ?? null), "content_middle2" =>         // line 74
($context["header_middle_2"] ?? null), "content_middle3" =>         // line 75
($context["header_middle_3"] ?? null), "content_bottom1" =>         // line 76
($context["header_bottom_1"] ?? null)]));
        // line 78
        yield "  ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banner_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["banner"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner"] ?? null), "html", null, true);
            yield "
    ";
        }
        // line 84
        yield "  ";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted"] ?? null), "html", null, true);
        yield "
          </div>
        </div>
      </div>
    ";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "    ";
        yield from $this->load("civictheme:layout", 99)->unwrap()->yield(CoreExtension::toArray(["content_top" =>         // line 100
($context["content_top"] ?? null), "hide_sidebar_left" =>         // line 101
($context["hide_sidebar_left"] ?? null), "hide_sidebar_right" =>         // line 102
($context["hide_sidebar_right"] ?? null), "sidebar_top_left" =>         // line 103
($context["sidebar_top_left"] ?? null), "sidebar_top_left_attributes" =>         // line 104
($context["sidebar_top_left_attributes"] ?? null), "sidebar_top_right" =>         // line 105
($context["sidebar_top_right"] ?? null), "sidebar_top_right_attributes" =>         // line 106
($context["sidebar_top_right_attributes"] ?? null), "content" =>         // line 107
($context["content"] ?? null), "content_attributes" =>         // line 108
($context["content_attributes"] ?? null), "sidebar_bottom_left" => ((        // line 109
array_key_exists("sidebar_bottom_left", $context)) ? (Twig\Extension\CoreExtension::default(($context["sidebar_bottom_left"] ?? null), ($context["sidebar"] ?? null))) : (($context["sidebar"] ?? null))), "sidebar_bottom_left_attributes" => ((        // line 110
array_key_exists("sidebar_bottom_left_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["sidebar_bottom_left_attributes"] ?? null), ($context["sidebar_attributes"] ?? null))) : (($context["sidebar_attributes"] ?? null))), "sidebar_bottom_right" =>         // line 111
($context["sidebar_bottom_right"] ?? null), "sidebar_bottom_right_attributes" =>         // line 112
($context["sidebar_bottom_right_attributes"] ?? null), "is_contained" =>         // line 113
($context["content_contained"] ?? null), "content_bottom" =>         // line 114
($context["content_bottom"] ?? null), "vertical_spacing" =>         // line 115
($context["vertical_spacing"] ?? null), "attributes" => ((Twig\Extension\CoreExtension::testEmpty(        // line 116
($context["banner"] ?? null))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => "main-content", "tabindex" => "-1"])) : (""))]));
        // line 118
        yield "  ";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "    ";
        yield from $this->load("civictheme:footer", 121)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 122
($context["footer_theme"] ?? null), "background_image" =>         // line 123
($context["footer_background_image"] ?? null), "content_top1" =>         // line 124
($context["footer_top_1"] ?? null), "content_top2" =>         // line 125
($context["footer_top_2"] ?? null), "content_middle1" =>         // line 126
($context["footer_middle_1"] ?? null), "content_middle2" =>         // line 127
($context["footer_middle_2"] ?? null), "content_middle3" =>         // line 128
($context["footer_middle_3"] ?? null), "content_middle4" =>         // line 129
($context["footer_middle_4"] ?? null), "content_bottom1" =>         // line 130
($context["footer_bottom_1"] ?? null), "content_bottom2" =>         // line 131
($context["footer_bottom_2"] ?? null)]));
        // line 133
        yield "  ";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_back_to_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "    ";
        yield from $this->load("civictheme:back-to-top", 136)->unwrap()->yield(CoreExtension::toArray([]));
        // line 137
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:page";
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
        return array (  247 => 137,  244 => 136,  237 => 135,  232 => 133,  230 => 131,  229 => 130,  228 => 129,  227 => 128,  226 => 127,  225 => 126,  224 => 125,  223 => 124,  222 => 123,  221 => 122,  219 => 121,  212 => 120,  207 => 118,  205 => 116,  204 => 115,  203 => 114,  202 => 113,  201 => 112,  200 => 111,  199 => 110,  198 => 109,  197 => 108,  196 => 107,  195 => 106,  194 => 105,  193 => 104,  192 => 103,  191 => 102,  190 => 101,  189 => 100,  187 => 99,  180 => 98,  170 => 91,  165 => 88,  158 => 87,  153 => 84,  147 => 82,  144 => 81,  137 => 80,  132 => 78,  130 => 76,  129 => 75,  128 => 74,  127 => 73,  126 => 72,  125 => 71,  124 => 70,  123 => 69,  121 => 68,  114 => 67,  107 => 138,  105 => 135,  102 => 134,  100 => 120,  97 => 119,  95 => 98,  92 => 97,  89 => 96,  86 => 87,  84 => 86,  81 => 85,  79 => 80,  76 => 79,  74 => 67,  64 => 64,  61 => 63,  59 => 62,  57 => 61,  54 => 60,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:page", "themes/contrib/civictheme/components/04-templates/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 61, "if" => 64, "block" => 67, "include" => 68];
        static $filters = ["format" => 61, "default" => 61, "escape" => 64];
        static $functions = ["create_attribute" => 116];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['format', 'default', 'escape'],
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
