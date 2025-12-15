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

/* civictheme:list */
class __TwigTemplate_015064e43348c682ce19117515ca010a extends Template
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
            'title_block' => [$this, 'block_title_block'],
            'link_above_block' => [$this, 'block_link_above_block'],
            'content_block' => [$this, 'block_content_block'],
            'list_block' => [$this, 'block_list_block'],
            'filters_block' => [$this, 'block_filters_block'],
            'rows_block' => [$this, 'block_rows_block'],
            'rows_above_block' => [$this, 'block_rows_above_block'],
            'results_count_block' => [$this, 'block_results_count_block'],
            'rows_below_block' => [$this, 'block_rows_below_block'],
            'empty_block' => [$this, 'block_empty_block'],
            'list_below_block' => [$this, 'block_list_below_block'],
            'pagination_block' => [$this, 'block_pagination_block'],
            'footer_block' => [$this, 'block_footer_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:list"));
        // line 58
        yield "
";
        // line 59
        $context["with_background_class"] = (((($tmp = ($context["with_background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-list--with-background") : (""));
        // line 60
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing-inset--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 61
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 62
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["with_background_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 63
        yield "
<div class=\"ct-list ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" ";
        if ((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        }
        yield ">
  <div class=\"ct-list__inner\">
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        // line 108
        yield "
    ";
        // line 109
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 126
        yield "
    ";
        // line 127
        yield from $this->unwrap()->yieldBlock('list_block', $context, $blocks);
        // line 213
        yield "
    ";
        // line 214
        yield from $this->unwrap()->yieldBlock('list_below_block', $context, $blocks);
        // line 248
        yield "
    ";
        // line 249
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 262
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_background", "vertical_spacing", "theme", "attributes", "title", "link_above", "content", "filters", "rows", "rows_above", "results_count", "rows_below", "empty", "link_below", "pagination", "footer"]);        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "      ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["link_above"] ?? null)))) {
            // line 68
            yield "        <div class=\"ct-list__header\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12 col-m-9\">
                ";
            // line 72
            yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
            // line 82
            yield "              </div>
              <div class=\"col-xxs-12 col-m-3\">
                ";
            // line 84
            yield from $this->unwrap()->yieldBlock('link_above_block', $context, $blocks);
            // line 102
            yield "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 107
        yield "    ";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "                  ";
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield from $this->load("civictheme:heading", 74)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 75
($context["title"] ?? null), "level" => 2, "theme" =>             // line 77
($context["theme"] ?? null), "modifier_class" => "ct-list__title"]));
            // line 80
            yield "                  ";
        }
        // line 81
        yield "                ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_above_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "                  ";
        if ((($tmp = ($context["link_above"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                    <div class=\"ct-list__link-above ct-flex-justify-content-center\">
                      ";
            // line 87
            yield from $this->load("civictheme:button", 87)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 88
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "regular", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 92
($context["link_above"] ?? null), "text", [], "any", false, false, true, 92), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 93
($context["link_above"] ?? null), "url", [], "any", false, false, true, 93), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 94), "is_external" => CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 95), "icon" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-above__link"]));
            // line 99
            yield "                    </div>
                  ";
        }
        // line 101
        yield "                ";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "      ";
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        <div class=\"ct-list__content\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 115
            yield from $this->load("civictheme:paragraph", 115)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 116
($context["content"] ?? null), "theme" =>             // line 117
($context["theme"] ?? null), "modifier_class" => "ct-list__content__inner"]));
            // line 120
            yield "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 125
        yield "    ";
        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 128
        yield "      ";
        yield from $this->unwrap()->yieldBlock('filters_block', $context, $blocks);
        // line 141
        yield "
      ";
        // line 142
        yield from $this->unwrap()->yieldBlock('rows_block', $context, $blocks);
        // line 196
        yield "
      ";
        // line 197
        yield from $this->unwrap()->yieldBlock('empty_block', $context, $blocks);
        // line 212
        yield "    ";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "        ";
        if ((($tmp = ($context["filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "<div class=\"ct-list__filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  ";
            // line 134
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["filters"] ?? null), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 140
        yield "      ";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "        ";
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield from $this->unwrap()->yieldBlock('rows_above_block', $context, $blocks);
            // line 161
            yield "
          ";
            // line 162
            yield from $this->unwrap()->yieldBlock('results_count_block', $context, $blocks);
            // line 173
            yield "
          <div class=\"ct-list__rows\">
            ";
            // line 175
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
          </div>

          ";
            // line 178
            yield from $this->unwrap()->yieldBlock('rows_below_block', $context, $blocks);
            // line 194
            yield "        ";
        }
        // line 195
        yield "      ";
        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_above_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        yield "            ";
        if ((($tmp = ($context["rows_above"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 147
            yield "<div class=\"container ct-list__rows-above\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    ";
            // line 150
            if ((($tmp =  !is_iterable(($context["rows_above"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                      ";
                $context["rows_above"] = [($context["rows_above"] ?? null)];
                // line 152
                yield "                    ";
            }
            // line 153
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_above"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_above_row"]) {
                // line 154
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["rows_above_row"], "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rows_above_row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "                  </div>
                </div>
              </div>
            ";
        }
        // line 160
        yield "          ";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_results_count_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield "            ";
        if ((($tmp = ($context["results_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "<div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    <div class=\"ct-list__results-count\">";
            // line 167
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["results_count"] ?? null), "html", null, true);
            yield "</div>
                  </div>
                </div>
              </div>
            ";
        }
        // line 172
        yield "          ";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_below_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "            ";
        if ((($tmp = ($context["rows_below"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "              <div class=\"container ct-list__rows-below\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    ";
            // line 183
            if ((($tmp =  !is_iterable(($context["rows_below"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 184
                yield "                      ";
                $context["rows_below"] = [($context["rows_below"] ?? null)];
                // line 185
                yield "                    ";
            }
            // line 186
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_below"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_below_row"]) {
                // line 187
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["rows_below_row"], "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rows_below_row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "                  </div>
                </div>
              </div>
            ";
        }
        // line 193
        yield "          ";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        yield "        ";
        if ((array_key_exists("empty", $context) && ( !array_key_exists("rows", $context) || Twig\Extension\CoreExtension::testEmpty(($context["rows"] ?? null))))) {
            // line 199
            yield "<div class=\"container ct-list__empty-results\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 202
            yield from $this->load("civictheme:paragraph", 202)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 203
($context["empty"] ?? null), "theme" =>             // line 204
($context["theme"] ?? null), "modifier_class" => "ct-list__empty-results__inner"]));
            // line 207
            yield "              </div>
            </div>
          </div>
        ";
        }
        // line 211
        yield "      ";
        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_below_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 215
        yield "      ";
        if ((($tmp = ($context["link_below"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 216
            yield "        <div class=\"ct-list__link-below ct-flex-justify-content-center\">
          ";
            // line 217
            yield from $this->load("civictheme:button", 217)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 218
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "large", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 222
($context["link_below"] ?? null), "text", [], "any", false, false, true, 222), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 223
($context["link_below"] ?? null), "url", [], "any", false, false, true, 223), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,             // line 224
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 224), "is_external" => CoreExtension::getAttribute($this->env, $this->source,             // line 225
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 225), "icon" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 226
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-below__link"]));
            // line 229
            yield "        </div>
      ";
        }
        // line 231
        yield "
      ";
        // line 232
        if ((array_key_exists("pagination", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["pagination"] ?? null)))) {
            // line 233
            yield "        <div class=\"ct-list__results-below\">
          ";
            // line 234
            yield from $this->unwrap()->yieldBlock('pagination_block', $context, $blocks);
            // line 245
            yield "        </div>
      ";
        }
        // line 247
        yield "    ";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pagination_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-list__pagination\">
                    ";
        // line 239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination"] ?? null), "html", null, true);
        yield "
                  </div>
                </div>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 250
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["footer"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "<footer class=\"ct-list__footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 255
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </footer>
      ";
        }
        // line 261
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:list";
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
        return array (  568 => 261,  559 => 255,  553 => 251,  550 => 250,  543 => 249,  532 => 239,  526 => 235,  519 => 234,  514 => 247,  510 => 245,  508 => 234,  505 => 233,  503 => 232,  500 => 231,  496 => 229,  494 => 226,  493 => 225,  492 => 224,  491 => 223,  490 => 222,  489 => 218,  488 => 217,  485 => 216,  482 => 215,  475 => 214,  470 => 211,  464 => 207,  462 => 204,  461 => 203,  460 => 202,  455 => 199,  452 => 198,  445 => 197,  440 => 193,  434 => 189,  428 => 187,  423 => 186,  420 => 185,  417 => 184,  415 => 183,  410 => 180,  407 => 179,  400 => 178,  395 => 172,  387 => 167,  382 => 164,  379 => 163,  372 => 162,  367 => 160,  361 => 156,  355 => 154,  350 => 153,  347 => 152,  344 => 151,  342 => 150,  337 => 147,  334 => 146,  327 => 145,  322 => 195,  319 => 194,  317 => 178,  311 => 175,  307 => 173,  305 => 162,  302 => 161,  300 => 145,  297 => 143,  290 => 142,  285 => 140,  276 => 134,  270 => 130,  267 => 129,  260 => 128,  255 => 212,  253 => 197,  250 => 196,  248 => 142,  245 => 141,  242 => 128,  235 => 127,  230 => 125,  223 => 120,  221 => 117,  220 => 116,  219 => 115,  213 => 111,  210 => 110,  203 => 109,  198 => 101,  194 => 99,  192 => 96,  191 => 95,  190 => 94,  189 => 93,  188 => 92,  187 => 88,  186 => 87,  183 => 86,  180 => 85,  173 => 84,  168 => 81,  165 => 80,  163 => 77,  162 => 75,  161 => 74,  158 => 73,  151 => 72,  146 => 107,  139 => 102,  137 => 84,  133 => 82,  131 => 72,  125 => 68,  122 => 67,  115 => 66,  107 => 262,  105 => 249,  102 => 248,  100 => 214,  97 => 213,  95 => 127,  92 => 126,  90 => 109,  87 => 108,  85 => 66,  76 => 64,  73 => 63,  71 => 62,  69 => 61,  67 => 60,  65 => 59,  62 => 58,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:list", "themes/contrib/civictheme/components/03-organisms/list/list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "if" => 64, "block" => 66, "include" => 74, "for" => 153];
        static $filters = ["format" => 60, "default" => 61, "escape" => 64];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include', 'for'],
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
