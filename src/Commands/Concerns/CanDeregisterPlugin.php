<?php

declare(strict_types=1);

namespace FinityLabs\FinMail\Commands\Concerns;

trait CanDeregisterPlugin
{
    protected function deregisterPlugin(string $panelPath): void
    {
        $content = file_get_contents($panelPath);

        if ($content === false) {
            $this->components->error("Could not read file: {$panelPath}");

            return;
        }

        $content = str_replace(["\r\n", "\r"], "\n", $content);

        $pluginCall = 'FinMailPlugin::make()';
        $importLine = "use FinityLabs\\FinMail\\FinMailPlugin;\n";

        if (! str_contains($content, $pluginCall)) {
            $this->components->warn('FinMailPlugin is not registered in this panel provider.');

            return;
        }

        // Remove the plugin call line (with trailing comma and surrounding whitespace)
        $content = preg_replace(
            '/\s*'.preg_quote($pluginCall, '/').',?\s*\n?/',
            "\n",
            $content,
            1,
        );

        // Clean up empty plugins block: ->plugins([\n            \n        ])
        $content = preg_replace(
            '/\s*->plugins\(\[\s*\]\)\n?/',
            "\n",
            $content,
        );

        // Remove the import line
        $content = str_replace($importLine, '', $content);

        file_put_contents($panelPath, $content);

        $this->components->info('FinMailPlugin has been removed from the panel provider.');
    }
}
