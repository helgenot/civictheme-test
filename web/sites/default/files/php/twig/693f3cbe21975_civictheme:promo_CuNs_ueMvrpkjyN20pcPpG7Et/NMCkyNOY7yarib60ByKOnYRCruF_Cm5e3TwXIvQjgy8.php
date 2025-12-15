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

/* civictheme:promo */
class __TwigTemplate_b47ec464c066d52e15b1327e943fab97 extends Template
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
            'content_top_block' => [$this, 'block_content_top_block'],
            'content_block' => [$this, 'block_content_block'],
            'content_left_block' => [$this, 'block_content_left_block'],
            'content_right_block' => [$this, 'block_content_right_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--promo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:promo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:promo"));
        // line 34
        yield "
";
        // line 35
        $context["with_background_class"] = (((($tmp = ($context["with_background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-promo--with-background") : (""));
        // line 36
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 37
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 38
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["with_background_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 39
        yield "
";
        // line 40
        $context["is_contained"] = ((array_key_exists("is_contained", $context)) ? (($context["is_contained"] ?? null)) : (true));
        // line 41
        yield "
";
        // line 42
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null)))) {
            // line 43
            yield "  <div class=\"ct-promo ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            }
            yield ">
    ";
            // line 44
            if ((($tmp = ($context["is_contained"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xxs-12\">
          ";
            }
            // line 49
            yield "          ";
            yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
            // line 56
            yield "
          ";
            // line 57
            yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
            // line 99
            yield "
          ";
            // line 100
            yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
            // line 107
            yield "          ";
            if ((($tmp = ($context["is_contained"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "        </div>
      </div>
    </div>
    ";
            }
            // line 112
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_background", "vertical_spacing", "theme", "title", "content", "attributes", "content_top", "link", "content_bottom"]);        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "              <div class=\"ct-promo__content-top\">
                ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top"] ?? null), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 55
        yield "          ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "            <div class=\"ct-promo__wrapper\">
              ";
        // line 59
        yield from $this->unwrap()->yieldBlock('content_left_block', $context, $blocks);
        // line 79
        yield "
              ";
        // line 80
        yield from $this->unwrap()->yieldBlock('content_right_block', $context, $blocks);
        // line 97
        yield "            </div>
          ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_left_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "                <div class=\"ct-promo__inner\">
                  ";
        // line 61
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                    ";
            yield from $this->load("civictheme:heading", 62)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 63
($context["title"] ?? null), "level" => 4, "theme" =>             // line 65
($context["theme"] ?? null), "modifier_class" => "ct-promo__title"]));
            // line 68
            yield "                  ";
        }
        // line 69
        yield "
                  ";
        // line 70
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                    ";
            yield from $this->load("civictheme:paragraph", 71)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 72
($context["theme"] ?? null), "content" =>             // line 73
($context["content"] ?? null), "modifier_class" => "ct-promo__content"]));
            // line 76
            yield "                  ";
        }
        // line 77
        yield "                </div>
              ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_right_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "                ";
        if ((($tmp = ($context["link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                  <div class=\"ct-promo__links\">
                    ";
            // line 83
            yield from $this->load("civictheme:button", 83)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 84
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "large", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 88
($context["link"] ?? null), "text", [], "any", false, false, true, 88), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 89
($context["link"] ?? null), "url", [], "any", false, false, true, 89), "is_new_window" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["link"] ?? null), "is_new_window", [], "any", true, true, true, 90)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "is_new_window", [], "any", false, false, true, 90)) : (false)), "is_external" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["link"] ?? null), "is_external", [], "any", true, true, true, 91)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "is_external", [], "any", false, false, true, 91)) : (false)), "modifier_class" => "ct-promo__button"]));
            // line 94
            yield "                  </div>
                ";
        }
        // line 96
        yield "              ";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "              <div class=\"ct-promo__content-bottom\">
                ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom"] ?? null), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 106
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:promo";
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
        return array (  255 => 106,  249 => 103,  246 => 102,  243 => 101,  236 => 100,  231 => 96,  227 => 94,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 84,  220 => 83,  217 => 82,  214 => 81,  207 => 80,  201 => 77,  198 => 76,  196 => 73,  195 => 72,  193 => 71,  191 => 70,  188 => 69,  185 => 68,  183 => 65,  182 => 63,  180 => 62,  178 => 61,  175 => 60,  168 => 59,  162 => 97,  160 => 80,  157 => 79,  155 => 59,  152 => 58,  145 => 57,  140 => 55,  134 => 52,  131 => 51,  128 => 50,  121 => 49,  113 => 112,  107 => 108,  104 => 107,  102 => 100,  99 => 99,  97 => 57,  94 => 56,  91 => 49,  85 => 45,  83 => 44,  74 => 43,  72 => 42,  69 => 41,  67 => 40,  64 => 39,  62 => 38,  60 => 37,  58 => 36,  56 => 35,  53 => 34,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:promo", "themes/contrib/civictheme/components/03-organisms/promo/promo.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 35, "if" => 42, "block" => 49, "include" => 62];
        static $filters = ["format" => 36, "default" => 37, "escape" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
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
