<?php

use Storage\Storage;
use Widget\Widget;
use Widget\Link;
use Widget\Button;
use Doctrine\Instantiator\Instantiator;
use Printer\Printer;
use Doctrine\Instantiator\Exception\ExceptionInterface;

class App
{
    public function run(string $storageTypeName): void
    {
        $fullStorageTypeName = "\\Storage\\$storageTypeName";

        try {
            $instantiator = new Instantiator();
            $textPrinter = $instantiator->instantiate(Printer::class);
            $textPrinter->printText("Test for: $fullStorageTypeName<br/>");
        } catch (ExceptionInterface $e) {
            exit("Error creating storage: " . $e->getMessage());
        }

        $storage = new $fullStorageTypeName();

        if (!$storage instanceof Storage) {
            exit("Storage type is invalid!");
        }


        $widgets = [
            new Link(1), new Link(2), new Link(3),
            new Button(1), new Button(2), new Button(3)
        ];

        foreach ($widgets as $widget) {
            $storage->store($widget);
        }

        foreach ($storage->loadAll() as $distinguishable) {
            if ($distinguishable instanceof Widget) {
                $this->render($distinguishable);
            }
        }
    }

    private function render(Widget $widget): void
    {
        $widget->draw();
    }
}
