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

/* civictheme:icon */
class __TwigTemplate_725ae27568e879b0d90016798bb6beed extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:icon"));
        // line 15
        $context["assets_dir"] = ((array_key_exists("assets_dir", $context)) ? (Twig\Extension\CoreExtension::default(($context["assets_dir"] ?? null), "@civictheme/../assets")) : ("@civictheme/../assets"));
        // line 17
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["symbol"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            $context["source"] = Twig\Extension\CoreExtension::source($this->env, (((($context["assets_dir"] ?? null) . "/icons/") . ($context["symbol"] ?? null)) . ".svg"), true);
            // line 19
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["source"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                $context["attr"] = (((array_key_exists("attributes", $context) &&  !(null === ($context["attributes"] ?? null)))) ? (($context["attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([])));
                // line 22
                CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "addClass", ["ct-icon"], "method", false, false, true, 22);
                // line 23
                if ((($tmp = ($context["size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "addClass", [("ct-icon--size-" . ($context["size"] ?? null))], "method", false, false, true, 24);
                }
                // line 26
                $context["class_arr"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["modifier_class"] ?? null), " ");
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["class_arr"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 28
                    CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "addClass", [$context["class"]], "method", false, false, true, 28);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['class'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "setAttribute", ["aria-hidden", "true"], "method", false, false, true, 30);
                // line 31
                CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "setAttribute", ["role", "img"], "method", false, false, true, 31);
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::replace(($context["source"] ?? null), ["<svg " => (("<svg " . ($context["attr"] ?? null)) . " ")]));
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["symbol", "attributes", "size", "modifier_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:icon";
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
        return array (  81 => 33,  79 => 31,  77 => 30,  71 => 28,  67 => 27,  65 => 26,  62 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 19,  52 => 18,  50 => 17,  48 => 15,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:icon", "themes/contrib/civictheme/components/00-base/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 17, "do" => 22, "for" => 27];
        static $filters = ["default" => 15, "split" => 26, "raw" => 33, "replace" => 33];
        static $functions = ["source" => 18, "create_attribute" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'do', 'for'],
                ['default', 'split', 'raw', 'replace'],
                ['source', 'create_attribute'],
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
